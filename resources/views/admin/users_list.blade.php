@extends('layouts.app')
@section('subtitle', 'Users List')
@section('description', 'List all users with a substantiated account.')


@section('header')

@endsection
@section('content')
<div class="container content">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <h1 class="center">All Users:</h1>
            <br>
            @foreach($users as $user)
                <a href="/admin/users/{{$user->id}}">{{$user->id}} - {{$user->first_name}} {{$user->last_name}} - {{$user->dd_code}} - # of Orders: {{count($user->Incoming_Packages)}}</a>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('footer')

@endsection