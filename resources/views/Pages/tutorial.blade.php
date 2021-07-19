@extends('layouts.app')

@section('content')
<p>Have any tutorial? <b><a href="/upload"> Send</a></b> to us.</p>


  <table class="table table-striped">
    <thead>
        <tr>
            <th>Course Title</th> 
            <th>Course Code </th> 
            <th>Download</th>          
        </tr>
    </thead>
    <tbody>
        <tr>
           <td>Probability & Statics</td>
           <td>TEC 106</td>
           <td> <a href="/downloadProbability">Download</a></td>
        </tr>
        
    </tbody>
</table>


@endsection


    
    


    

    
