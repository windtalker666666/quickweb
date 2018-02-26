<?php

namespace Tests\Feature;

use Carbon\Carbon;
use App\Activity;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ActivityTest extends TestCase
{
    use DatabaseMigrations;
    
    /**@test */
    function test_records_activity_when_a_thread_is_created()
    {
        $this->signIn();

        $thread = create('App\Thread');

        $this->assertDatabaseHas('activities',[
            'type' => 'created_thread',
            'user_id' => auth()->id(),
            'subject_id' => $thread->id,
            'subject_type' => 'App\Thread'
        ]);

        $activity = Activity::first();
    
        $this->assertEquals($activity->subject->id,$thread->id);
    }

    /** @test */
    function test_it_records_activity_when_a_reply_is_created()
    {
        $this->signIn();

        $reply = create('App\Reply');

        $this->assertEquals(2,Activity::count());
    }

    /** @test */
    function test_it_fecthes_a_feed_for_any_user()
    {
        //given we have a thread
        $this->signIn();

        create('App\Thread',['user_id' => auth()->id()],2);

        auth()->user()->activity()->first()->update(['created_at' => Carbon::now()->subWeek()]);
        //and another thread from a week ago

        //when we fecth their feed
        $feed = Activity::feed(auth()->user());
        //then,it should be return in the proper format
        $this->assertTrue($feed->keys()->contains(
            Carbon::now()->format('Y-m-d')
        ));

        $this->assertTrue($feed->keys()->contains(
            Carbon::now()->subWeek()->format('Y-m-d')
        ));
        
    }

    
}