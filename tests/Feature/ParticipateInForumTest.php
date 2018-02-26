<?php

namespace Tests\Feature;


use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ParticipateInForumTest extends TestCase
{
    use DatabaseMigrations;
    
    function test_unauthenticated_user_may_not_add_replies()
    {

        $this->withExceptionHandling()
            ->post('/threads/some-channel/1/replies',[])
            ->assertRedirect('/login');

       // $thread = factory('App\Thread')->create();
       // $reply = factory('App\Reply')->create();
       // $this->post($thread->path().'/replies',$reply->toArray());
    }


    public function test_an_authenticated_user_may_participate_in_forum_threads()
    {
        $this->signIn();

        $thread = create('App\Thread');
        $reply = make('App\Reply');
       // $user = factory('App\User')->create();
        //given we have a authenticated user
       // $this->be($user = factory('App\User')->create());

        //and an existing thread
       // $thread = factory('App\Thread')->create();

        //when the user adds a reply to the thread
        $reply = factory('App\Reply')->make();
        $this->post($thread->path().'/replies',$reply->toArray());

        //then their reply should be visible on the page
        $this->get($thread->path())
           ->assertSee($reply->body);
    }

    /** @test */
    function test_a_reply_require_a_body()
    {
        $this->withExceptionHandling()->signIn();

        $thread = create('App\Thread');
        $reply = make('App\Reply', ['body'=>null]);


        $this->post($thread->path() . '/replies', $reply->toArray())
            ->assertSessionHasErrors('body');
    }

    /** @test */
    function test_unauthorized_user_can_not_delete_replies()
    {
        $this->withExceptionHandling();

        $reply = create('App\Reply');

        $this->delete("/replies/{$reply->id}")
            ->assertRedirect('/login');

        $this->signIn()
            ->delete("/replies/{$reply->id}")
            ->assertStatus(403);
    }

    /** @test */
    function test_authorized_user_can_delete_replies()
    {
        $this->signIn();

        $reply = create('App\Reply',['user_id' => auth()->id()]);

        $this->delete("/replies/{$reply->id}")->assertStatus(302);

        $this->assertDatabaseMissing('replies',['id' => $reply->id]);
    }

    /** @test */
    function test_authorized_user_can_update_replies()
    {
        $this->signIn();

        $reply = create('App\Reply',['user_id' => auth()->id()]);

        $updatedReply = '您已改变留言';

        $this->patch("/replies/{$reply->id}",['body'=>$updatedReply]);

        $this->assertDatabaseHas('replies',['id'=>$reply->id, 'body'=>$updatedReply]);
    }

    /** @test */
    function test_unauthorized_user_can_not_update_replies()
    {
        $this->withExceptionHandling();

        $reply = create('App\Reply');

        $this->patch("/replies/{$reply->id}")
            ->assertRedirect('/login');

        $this->signIn()
            ->patch("/replies/{$reply->id}")
            ->assertStatus(403);
    }
}
