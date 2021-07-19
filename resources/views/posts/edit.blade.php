@extends('layouts.app')

@section('content')

<h4>Edit Post</h4>
{!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST']) !!}
    <div class="form-group">
       
        {{Form::text('title', $post->title , ['class' => 'form-control', 'placeholder' => 'Your title comment'])}}
    </div>

    <div class="form-group">
       
        {{Form::textarea('body', $post->body , ['class' => 'form-control', 'placeholder' => 'Write a comment'])}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::Submit('Submit', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}
    
@endsection