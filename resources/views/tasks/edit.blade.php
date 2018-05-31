@extends('layouts.app')

@section('content')

    <h1>Edit {{ $task->id }}'s task </h1>

    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('status', 'status:') !!}
        {!! Form::text('status') !!}
       
        {!! Form::label('content', 'task:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('edit') !!}

    {!! Form::close() !!}

@endsection