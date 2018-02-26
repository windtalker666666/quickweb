<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ReplyTest extends TestCase
{
    use DatabaseMigrations;
    
    /**@test */
    function test_it_has_an_owner()
    {
       $reply =  factory('App\Reply')->create();
       $this->assertInstanceOf('App\User',$reply->owner);
    }
}
