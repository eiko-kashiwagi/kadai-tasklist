@extends('layouts.app')

@section('content')

@if (Auth::user())
    <h1>{{ $task->id }}'s New Task </h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>staus</th>
            <td>{{ $task->staus }}</td>
        </tr>
        <tr>
            <th>message</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>


    {!! link_to_route('tasks.edit', 'Edit', ['id' => $task->id] ,['class' => 'btn btn-default']) !!}
  <br><br>

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}


@else
 <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Tasks</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>

@endif

@endsection
