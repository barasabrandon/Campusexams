@extends('layouts.app')

@section('content')



   <table class="table table-striped">
       <thead>
           <tr>
               <th>ID</th>
               <th>Name</th>
               <th>Email</th>
               <th>Phone</th>
               <th>Salary</th>
               <th>Department</th>
           </tr>
       </thead>

       <tbody>
        @foreach ($employees as $emp)
        <tr>
            <td>{{$emp->id}}</td>
            <td>{{$emp->name}}</td>
            <td>{{$emp->email}}</td>
            <td>{{$emp->phone}}</td>
            <td>{{$emp->salary}}</td>
            <td>{{$emp->department}}</td>
        </tr>
     
        @endforeach
       </tbody>
   </table>
@endsection


    
    


    

    
