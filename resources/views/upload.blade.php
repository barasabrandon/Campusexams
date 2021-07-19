@extends('layouts.app')

@section('content')


@if (!Auth::guest())
<h3>Upload Examination Paper</h3>
<form action="upload" method="POST" enctype="multipart/form-data">
    @csrf <!-- It actually ensures that the user making the request is the aunthenticated user -->
    <input type="file" name="file"> <br> <br>
    <button type="submit"> Upload File</button>

</form>
    
@else
<p>Whoops! You are not <b><a href="/">logged</a></b> in!</p> 
    
@endif

@endsection