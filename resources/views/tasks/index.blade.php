@extends('layouts.app')

@section('content')

    <h1>To Do List</h1>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('tasks.create', 'Add New Tasks') !!}

@endsection