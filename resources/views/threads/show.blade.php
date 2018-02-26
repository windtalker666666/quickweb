@extends('layouts.app')

@section('content')
<thread-view inline-template>
    
<div class="container">
    <div class="row">



        <div class="col-md-8">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <div class="level">
                        <span class="flex">
                        <a href="/profiles/{{$thread->creator->name}}"> {{ $thread->creator->name }}</a> posted:
                        {{ $thread->title }}
                        </span>

                        @can('update',$thread)
                            <form action="{{$thread->path()}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-link">删除文章</button>
                            </form>
                        @endcan

                    </div>      
                </div>

                <div class="panel-body">
                    <div class="body">
                        {{$thread->body}}
                    </div>
                </div>

            </div>

            <replies :data="{{$thread->replies}}">
                
            </replies>

            


            @if(auth()->check())
           
            <form method="POST" action="{{ $thread->path() .'/replies' }}">
                {{ csrf_field() }}

            <div class="form-group">
                <textarea name="body" id="body" class="form-control" placeholder="留下您的评论" rows="5"></textarea>
            </div> 

            <button type="submit" class="btn btn-default">提交</button>
         
             </form>


            @else 
                <p class="text-center">请 <a href="{{ route('login') }}">登陆</a> 以参加讨论!</p>  
            @endif

        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>This thread is published {{ $thread->created_at->diffForHumans() }} by 
                       <a href="#"> {{ $thread->creator->name}} </a> and currantly has {{$thread->replies_count }} {{str_plural('comment',$thread->replies_count) }}.
                    </p>

                </div>
            </div>
        </div>


    </div>
</div>

</thread-view>
@endsection
