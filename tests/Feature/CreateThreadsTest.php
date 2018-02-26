<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CreateThreadsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function test_guest_may_not_create_threads()
    {
        $this->withExceptionHandling();
            
        $this->get('/threads/create')
            ->assertRedirect('/login');

        $this->post('/threads')
            ->assertRedirect('/login');

       // $this->expectException('Illuminate\Auth\AuthenticationException');

       // $thread = make('App\Thread'); 

       // $this->post('/threads',$thread->toArray());
    }

   
    /** @test */
    function test_authenticated_user_can_create_new_forum_threads()
    {
        //given we have a signed in user
        //when we hit the endpoint to create a new thread
        //then when we visit the thread page 
        //we should see the new thread
        //$this->actingAs(create('App\User'));
        $this->signIn();

        $thread = make('App\Thread');

       $response = $this->post('/threads',$thread->toArray());
    

        $this->get($response->headers->get('Location'))
            ->assertSee($thread->title)
            ->assertSee($thread->body);
    }



        /** @test */
        function test_a_thread_requires_a_title()
        {
            $this->publishThread(['title' => null])
                ->assertSessionHasErrors('title');


            //$this->withExceptionHandling()->signIn();

            //$thread = make('App\Thread', ['title' => null]);

            //$this->post('/threads',$thread->toArray())
            //->assertSessionHasErrors('title');
        }

         /** @test */
         function test_a_thread_requires_a_body()
         {
             $this->publishThread(['body' => null])
                 ->assertSessionHasErrors('body');
         }

         /** @test */
         function test_a_thread_requires_a_valid_channel()
         {
             factory('App\Channel',2)->create();

             $this->publishThread(['channel_id' => null])
                 ->assertSessionHasErrors('channel_id');

            $this->publishThread(['channel_id' => 999])
                 ->assertSessionHasErrors('channel_id');
         }


         /** @test */
         function test_unauthorized_users_may_not_delete_threads()
         {
            $this->withExceptionHandling();
            
            $thread = create('App\Thread');

            $this->delete($thread->path()) -> assertRedirect('/login');

            $this->signIn();
            $this->delete($thread->path()) -> assertStatus(403);
            

         }

         /** @test */
         function test_authorized_users_can_delete_threads()
         {
             $this->signIn();

             $thread = create('App\Thread',['user_id' => auth()->id()]);
             $reply = create('App\Reply',['thread_id' => $thread->id]);

             $response = $this->json('DELETE',$thread->path());

             $response->assertStatus(204);

             $this->assertDatabaseMissing('threads',['id' => $thread->id ]);
             $this->assertDatabaseMissing('replies',['id' => $reply->id ]);

             $this->assertDatabaseMissing('activities',[
                 'subject_id'=>$thread->id,
                 'subject_type' => get_class($thread)
              ]);

              $this->assertDatabaseMissing('activities',[
                'subject_id'=>$reply->id,
                'subject_type' => get_class($reply)
             ]);
         }


        public function publishThread( $overrides = [])
        {
            $this->withExceptionHandling()->signIn();

            $thread = make('App\Thread', $overrides);

           return $this->post('/threads',$thread->toArray());
            
        }
    
}
