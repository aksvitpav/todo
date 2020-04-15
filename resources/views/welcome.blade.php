@extends('layouts.app')

@section('title', 'Welcome')
    
@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Welcome to ToDo Application!</h1>
        @guest
            <p class="lead">To view your tasks please log in or register</p>
        @endguest
        @auth
            <p class="lead">To view your tasks please go to Tasks</p>
        @endauth
        <hr class="my-4">
        @guest
            <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">{{__('Login')}}</a>
            <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">{{__('Register')}}</a>
        @endguest
        @auth
            <a class="btn btn-primary btn-lg" href="{{ route('tasks.index') }}" role="button">{{__('Go to Tasks')}}</a>
        @endauth
    </div>
@endsection
