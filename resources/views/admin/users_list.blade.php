@extends('layouts.app')
@section('subtitle', 'Users List')
@section('description', 'List all users with a substantiated account.')


@section('header')

@endsection
@section('content')
<div class="container content">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h2 class="center">All Users:</h2>
            @foreach($users as $user)
                <a href="/admin/users/{{$user->id}}">{{$user->id}} - {{$user->first_name}} {{$user->last_name}} - {{$user->dd_code}}</a>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('footer')

@endsection