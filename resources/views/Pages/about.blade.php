@extends('layouts.app')

@section('content')

<div class="about">
  <div class="introduction-paragraph">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU9uetyfGx8DGgOiQ2GCjoJkX9xatwkSKw4w&usqp=CAU"  height="150vh" >
    <p>This website deals with past examination papers that can be accessed. <br>
        At mupapstpapers you can access the past examinations that have been done at Moi university. <br> You can donwload the 
        the examination papers, view or share  to your friends.
    </p>
  </div>
  
  <div class="about-pastpapers">
  <h3>Pastpapers</h3>
      <img src="data:image/jpeg;base64,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"  height="150vh" >
    
    <p>This section contains all the Moi university papers that have been done by the university from the 
        year 2010/2011 to date. <br> It also contains a link enables you to send any other examination paper that you would like
        us to upload to the website.

    </p>

 </div>

 <div class="about-tutorial">
     <h3>Tutorial</h3>
     <p>This are majorly course pdf and other questions related to thee university.</p>
 </div>

 <div class="about-lets-chat">
     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxELJ8G1SBXUp9Cjouv5BkvO52OpG9Fx_bZg&usqp=CAU" height="150vh" >
     <h3>Let's Chat</h3>
     <P>Talk to everyone by commenting through this platform. You can also give feedback.</P>
 </div>


</div>



 
@endsection

