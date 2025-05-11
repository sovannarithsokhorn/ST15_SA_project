@extends('frontend.layout.master')
@section('title', 'MovieDetail')
@section('content')

<style>
   .image_17 img {
       width: 80%; /* Adjust the width to fit the container */
       height: auto; /* Maintain the aspect ratio */
       max-width: 500px; /* Limit the max width if you want to control it */
   }
   .video-section {
    text-align: center;
    margin: 50px 0;
}

.video-label {
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 10px;
    color: #000;
}

</style>
  <!-- cooming  section start -->
  <form action="{{url('moviedetail/'.$movies->id)}}" method="POST">
   <div class="cooming_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="image_17"> 
                  <div class="image_17">
                     <!-- Use asset() to correctly reference the image -->
                     <img src="{{ asset('images/'.$movies->picture) }}" alt="{{ $movies->title }}">
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <h1 class="number_text">{{ $movies->id }}</h1>
               <h1 class="Cooming_soon_taital">{{ $movies->title }}</h1>  
               <h1 class="Cooming_soon_taital">{{ $movies->duration }}</h1>
               <p class="long_text_1">{{ $movies   ->description }}</p>
            </div>
         </div>
      </div>
   </div>
   <div class="video-section">
      <div class="video-label">FULL MOVIE</div>
      <video width="58%" controls>
          <source src="{{ asset('videos/' . $movies->video) }}" type="video/mp4">
          Your browser does not support the video tag.
      </video>
  </div>
  
  
  
</form>

 <!-- cooming  section end -->
@endsection