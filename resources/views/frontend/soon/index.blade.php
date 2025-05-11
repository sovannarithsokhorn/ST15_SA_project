@extends('frontend.layout.master')
@section('title', 'Soon')
@section('content')

<style>
   .image_17 {
   width: 80%; /* Adjust the percentage as needed */
   height: auto;
}
</style>
  <!-- cooming  section start -->
  <div class="cooming_section layout_padding">
      @foreach ($soons as $key => $val)
      <div class="container">
         <div class="row">
            <div class="col-md-6">
            
               <div class="image_17">
                  <div class="image_17"><img src="images/{{$val->picture}}"></div>
               </div>
            </div>
            <div class="col-md-6">
               <h1 class="number_text">{{++$key}}</h1>
               <h1 class="Cooming_soon_taital">{{$val->title}}</h1>  
               <h1 class="Cooming_soon_taital">Cooming soon</h1>
               <p class="long_text_1">{{$val->description}}</p>
            
            </div>
         </div>
      </div>
      @endforeach   
 </div>
 <!-- cooming  section end -->
@endsection