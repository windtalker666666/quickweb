<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ReadThreadsTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
        $this->thread = factory('App\Thread')->create();
    }

    /**
     @test
     */
    public function test_a_user_can_view_all_threads()
    {
        $response = $this->get('/threads');

        $response->assertSee($this->thread->title);

        
    }

    /**
     @test
     */
    public function test_a_user_can_read_a_single_thread()
    {
        
        $this->get($this->thread->path())

             -> assertSee($this->thread->title);
    }

    /**
     @test
     */
    public function test_a_user_can_read_replies_that_are_associate_with_a_thread()
    {
        //given we have a thread
        //and that thread include reply
        //when we visit a thread page
        //then we should see the reply
        $reply = factory('App\Reply')->create(['thread_id'=>$this->thread->id]);

        $this->get($this->thread->path())
            ->assertSee($reply->body);


    }

    /** @test */
    function test_a_user_can_filter_threads_according_to_a_channel()
    {
        $channel = create('App\Channel');
        $threadInChannel = create('App\Thread',['channel_id'=>$channel->id]);
        $threadNotInChannel = create('App\Thread');

        $this->get('/threads/' . $channel->slug)
            ->assertSee($threadInChannel->title)
            ->assertDontSee($threadNotInChannel->title);
    }

    /** @test */
    function test_a_user_can_filter_threads_by_any_username()
    {
        $this->signIn(create('App\User',['name' => 'JohnDoe']));
        
        $threadByJohn = create('App\Thread', ['user_id' => auth()->id()] );
        $threadNotByJohn = create('App\Thread');

        $this->get('threads?by=JohnDoe')
            ->assertSee($threadByJohn->title)
            ->assertDontSee($threadNotByJohn->title);
    }

    /** @test */
    function test_a_user_can_filter_threads_by_popularity()
    {
        //given we have three threads
        //with 2 replies, 3 replies, 0 replies.
        //when i filter all threads by popularity
        //then they should be returned from most replies to latest..
        $threadWithTwoReplies = create('App\Thread');
        create('App\Reply',['thread_id'=>$threadWithTwoReplies->id],2);

        $threadWithThreeReplies = create('App\Thread');
        create('App\Reply',['thread_id'=>$threadWithThreeReplies->id],3);

        $threadWithNoReplies = $this->thread;

        $response = $this->getJson('threads?popular=1')->json();

        $this->assertEquals([3,2,0],array_column($response,'replies_count'));


    }





}
