@extends('layouts.app')

@section('content')

    <h1>{{ $task->id }}'s New Task </h1>

    <p>Status: {{ $task->status }}</p>
    <p>{{ $task->content }}</p>

    {!! link_to_route('tasks.edit', 'Edit this task', ['id' => $task->id]) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('delete') !!}
    {!! Form::close() !!}

@endsection