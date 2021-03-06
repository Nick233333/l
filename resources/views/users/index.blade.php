@extends('layouts.default')
@section('title', '所有用户')

@section('content')
    <div class="col-md-offset-2 col-md-8">
        <h3 class="text-center">所有用户</h3>
        <ul class="users">
            @foreach ($users as $user)
                @include('users._user')
            @endforeach
        </ul>
        <div class="pull-right">{!! $users->render() !!}</div>
    </div>
@stop