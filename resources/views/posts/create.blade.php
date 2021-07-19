@extends('layouts.app')

@section('content')

<h4>Create Post</h4>
{!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
       
        {{Form::text('title', '' , ['class' => 'form-control', 'placeholder' => 'Your title comment'])}}
    </div>

    <div class="form-group">
       
        {{Form::textarea('body', '' , ['class' => 'form-control', 'placeholder' => 'Write a comment'])}}
    </div>

    {{Form::Submit('Submit', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}
    
@endsection

<form action="">
    <div>
        <input type="text" name="title">
    </div>
</form>