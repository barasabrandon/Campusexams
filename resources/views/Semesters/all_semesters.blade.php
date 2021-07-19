@extends('layouts.app')

@section('content')

@if(!Auth::guest())
    <p>
        <a class="btn btn-primary btn-lg" href="/exampapers">Semester One</a>
        <a class="btn btn-success btn-lg" href="exampapers">Semester Two</a>
    </p>

@elseif(Auth::guest())
  <p>Your are not <a href="/">Loggin</a> in!</p>
@endif
 
    
@endsection