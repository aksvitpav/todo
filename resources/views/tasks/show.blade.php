@extends('layouts.app')

@section('title')
{{ $task->title }}
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $task->title }}</h5>
            <p class="card-text">{{ $task->content }}</p>
            <div class="d-flex justify-cintent-start">
                @include('includes.back')
            </div>
        </div>
    </div>
@endsection
