@extends('layouts.app')

@section('content')
   <a href="/posts" class="btn btn-primary bg-lg">Go Back</a>
    <h4>{{$post->title}}</h4>
    <div>
        <p>{{$post->body}}</p>
    </div>
    <small>Date: {{$post->created_at}} </small>
    <br>
    <br>
   
     @if (!Auth::guest()) 
        @if (Auth::user()->id == $post->user_id)          
         <table class="">
            <tr>
                <td> <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                <td>
                        
                        {!!Form::open(['action'=> ['App\Http\Controllers\PostsController@destroy', $post->id],'method' => 'POST', 'class' => 'pull-right']) !!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close() !!}
                </td>
            </tr>
         </table>

        @endif 
     @endif  
   
@endsection