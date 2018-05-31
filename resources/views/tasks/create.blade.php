@extends('layouts.app')

@section('content')

    <h1>Add New Tasks</h1>


    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title') !!}
        
        {!! Form::label('content', 'Tasks:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('Add') !!}

    {!! Form::close() !!}


@endsection