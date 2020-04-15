@extends('layouts.app')

@section('title', 'Create task')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="title">Title</span>
                </div>
                <input type="text" class="form-control" placeholder="Task title" name="title">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Content</span>
                </div>
                <textarea class="form-control" rows="5" placeholder="Task content" name="content"></textarea>
            </div>
            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
            <div class="d-flex justify-content-start">
                <button type="submit" class="btn btn-sm btn-primary mt-2 mr-1">ОК</button>
                @include('includes.back')
            </div>
        </form>
    </div>
</div>
@endsection
