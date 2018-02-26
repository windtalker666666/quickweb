@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">主人，欢迎回归！</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/" class="button button-3d button-action button-pill">定制产生无限可能！</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
