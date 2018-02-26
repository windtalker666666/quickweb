<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class FavoritesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function test_guest_can_not_favorite_anything()
    {
        $this->withExceptionHandling()
            ->post('replies/1/favorites')
            ->assertRedirect('/login');
    }
    
    /**@test */
    function test_an_authanticated_user_can_favorite_any_reply()
    {
        $this->signIn();

        $reply = create('App\Reply');
        //if i post to a 'favorite' endpoint
        $this->post('replies/' . $reply->id . '/favorites');

        //it should be recorded in the database
        $this->assertCount(1 , $reply->favorites);
    }

    /**@test */
    function test_an_authanticated_user_can_unfavorite_any_reply()
    {
        $this->signIn();

        $reply = create('App\Reply');

        $reply->favorite();
        //if i post to a 'favorite' endpoint
        

        $this->delete('replies/' . $reply->id . '/favorites');

        //it should be recorded in the database
        $this->assertCount(0 , $reply->fresh()->favorites);
    }

    /** @test */
    function test_an_authenticated_user_may_only_favorite_a_reply_once()
    {
        $this->signIn();

        $reply = create('App\Reply');
        //if i post to a 'favorite' endpoint

        try{
            $this->post('replies/' . $reply->id . '/favorites');
            $this->post('replies/' . $reply->id . '/favorites');
        }catch(\Exception $e){
            $this->fail('did not expect the same record set twice');
        }

        
        //it should be recorded in the database
        $this->assertCount(1 , $reply->favorites);
    }
}