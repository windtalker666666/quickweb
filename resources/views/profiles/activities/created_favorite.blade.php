@component('profiles.activities.activity')
    @slot('heading')
    <a href="{{$activity->subject->favorited->path()}}">
        {{$profileUser->name}} 赞了此评论 
    </a>  
    @endslot

    @slot('body')
       {{$activity->subject->favorited->body}}
    @endslot
@endcomponent
