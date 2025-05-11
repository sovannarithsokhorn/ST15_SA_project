@extends('frontend.layout.master')
@section('title', 'TV')
@section('content')

<!-- arrival section start -->
<div class="arrival_section layout_padding">
    <div class="container">
      <div class="row">
         @foreach ($coomings as $va)
         
         <div class="col-sm-6 col-lg-4">
            <div class="image_{{$va->id}}">
               <h2 class="jesusroch_text">{{$va->title}}</h2>
               <p class="movie_text">{{$va->description}}</p>
            </div>
         </div>
         @endforeach
           
           <div class="col-sm-8 col-lg-4">
              <h1 class="arrival_text">A r r i v a l</h1>
              <div class="movie_main">
                 <div class="mins_text_1">150 mins</div>
                 <div class="mins_text">Actions Movie</div>
                 <div class="mins_text"><img src="{{asset('frontend/assets/images/icon-1.png')}}"><span class="icon_1">Watchlist</span></div>
              </div>
              <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
              <div class="rating_main">
                 <div class="row">
                    <div class="col-sm-6 col-lg-6">
                       <div class="icon_2"><img src="{{asset('frontend/assets/images/icon-2.png')}}"><span class="padding_10">4.6 Revieweed</span></div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                       <div class="icon_2"><img src="{{asset('frontend/assets/images/icon-2.png')}}"><span class="padding_10">Your Rateing</span></div>
                    </div>
                 </div>
              </div>
              <div class="paly_bt"><a href="#">Play Now</a></div>
           </div>
        </div>
    </div>
 </div>
 <!-- arrival section end -->

@endsection