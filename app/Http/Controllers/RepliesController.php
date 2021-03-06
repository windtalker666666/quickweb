<?php

namespace App\Http\Controllers;

use App\Reply;
use App\Thread;
use Illuminate\Http\Request;

class RepliesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store($channelId, Thread $thread)
    {
        $this->validate(request(),['body'=>'required']);

        $thread->addReply([
            'body'=>request('body'),
            'user_id'=>auth()->id()
        ]);

        return back()->with('flash','你已成功评论！');    
    }

    public function update(Reply $reply)
    {
        $this->authorize('update',$reply);

        $reply->update(request(['body']));
    }

    public function destroy(Reply $reply)
    {
        $this->authorize('update',$reply);

        $reply->delete();

        if(request()->expectsJson()){
            return response(['status'=>'Reply deleted']);
        }

        return back();
    }

    
}
