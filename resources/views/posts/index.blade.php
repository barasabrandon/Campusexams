@extends('layouts.app')

@section('content')
    
    @if (!Auth::guest())
    <h4><a href="/posts/create" class="btn btn-success bg-lg">Create Post</a></h4>
        
    @endif

    @if (count($posts) > 0)
      @foreach ($posts as $post)
          <div class="well">
              <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
              <div>
                  {{$post->body}}
              </div>
              <small> <b>Date:</b> {{$post->created_at}}  </small>  

          </div>
      @endforeach
        
    @else
        <p>No posts found</p>
    @endif

    
@endsection
