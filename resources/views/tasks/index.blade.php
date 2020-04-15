@extends('layouts.app')

@section('title')
{{ auth()->user()->name."'s tasks" }}
@endsection

@section('content')
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <a class="btn btn-primary my-2" href="{{ route('tasks.create') }}">Create new Task</a>
        </div>
    </div>
    @foreach($tasks as $task)
        <div class="row">
            <div class="col-12">
                <div class="card mb-2">
                    <div class="card-body">
                        <h5 class="card-title">{{ $task->title }}</h5>
                        <p class="card-text">{{ substr($task->content, 0, 200).'...' }}</p>
                        <div class="d-flex justify-cintent-start">
                            <a class="btn btn-sm btn-primary mr-1" href="{{ route('tasks.show', $task) }}" class="card-link">Show</a>
                            <a class="btn btn-sm btn-warning mr-1" href="{{ route('tasks.edit', $task) }}" class="card-link">Edit</a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete task?');" value="Delete">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @include('includes.pagination', ['data'=>$tasks])
@endsection