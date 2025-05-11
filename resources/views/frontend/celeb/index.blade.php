@extends('frontend.layout.master')
@section('title', 'Celebs')
@section('content')

      <!-- movies section start -->
      <div class="movies_section layout_padding">
        <div class="container">
         <div class="movies_menu">
            <ul>
                <li class="active">
                    <a href="{{ url('/celeb') }}" style="font-size: 24px; font-weight: bold; padding: 15px 20px; display: inline-block;">
                        Celeb
                    </a>
                </li> 
            </ul>
        </div>
           <div class="movies_section_2 layout_padding">
              <h2 class="letest_text">Most Celeb on Trend</h2>
              <div class="seemore_bt"><a href="#">See More</a></div>
              <div class="movies_main">
               <div class="iamge_movies_main">
                  @foreach ($celebs as $val)
                    <div class="iamge_movies">
                       <div class="image_3">
                          <img src="images/{{$val->picture}}" class="image" style="width:100%">
                          <div class="middle">
                             <div class="playnow_bt">Play Now</div>
                          </div>
                       </div>
                       <h1 class="code_text">{{$val->title}}</h1>
                       
                       <div class="star_icon">
                        <ul>
                           @for ($i = 0; $i < $val->stars; $i++)
                               <li><a href="#"><img src="images/star-icon.png" alt="star"></a></li>
                           @endfor
                       </ul>
                       </div>
                    </div>
                  @endforeach
                 </div>
              </div>
           </div>
           <div class="movies_section_2 layout_padding">
              <h2 class="letest_text">TV Shows</h2>
              <div class="seemore_bt"><a href="#">See More</a></div>
              <div class="movies_main">
                 <div class="iamge_movies_main">
                    <div class="iamge_movies">
                       <div class="image_3">
                          <img src="images/img-8.png" class="image" style="width:100%">
                          <div class="middle">
                             <div class="playnow_bt">Play Now</div>
                          </div>
                       </div>
                       <h1 class="code_text">CADE Prlor</h1>
                       <p class="there_text">There are many variations </p>
                       <div class="star_icon">
                          <ul>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                          </ul>
                       </div>
                    </div>
                    <div class="iamge_movies">
                       <div class="image_3">
                          <img src="images/img-9.png" class="image" style="width:100%">
                          <div class="middle">
                             <div class="playnow_bt">Play Now</div>
                          </div>
                       </div>
                       <h1 class="code_text">Bradon</h1>
                       <p class="there_text">There are many variations </p>
                       <div class="star_icon">
                          <ul>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                          </ul>
                       </div>
                    </div>
                    <div class="iamge_movies">
                       <div class="image_3">
                          <img src="images/img-10.png" class="image" style="width:100%">
                          <div class="middle">
                             <div class="playnow_bt">Play Now</div>
                          </div>
                       </div>
                       <h1 class="code_text">Anton Levin</h1>
                       <p class="there_text">There are many variations </p>
                       <div class="star_icon">
                          <ul>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                          </ul>
                       </div>
                    </div>
                    <div class="iamge_movies">
                       <div class="image_3">
                          <img src="images/img-11.png" class="image" style="width:100%">
                          <div class="middle">
                             <div class="playnow_bt">Play Now</div>
                          </div>
                       </div>
                       <h1 class="code_text">Sacha Styles</h1>
                       <p class="there_text">There are many variations </p>
                       <div class="star_icon">
                          <ul>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                          </ul>
                       </div>
                    </div>
                    <div class="iamge_movies">
                       <div class="image_3">
                          <img src="images/img-12.png" class="image" style="width:100%">
                          <div class="middle">
                             <div class="playnow_bt">Play Now</div>
                          </div>
                       </div>
                       <h1 class="code_text">Katledrazdu</h1>
                       <p class="there_text">There are many variations </p>
                       <div class="star_icon">
                          <ul>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                          </ul>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="movies_section_2 layout_padding">
              <h2 class="letest_text">Sports</h2>
              <div class="seemore_bt"><a href="#">See More</a></div>
              <div class="movies_main">
                 <div class="iamge_movies_main">
                    <div class="iamge_movies">
                       <div class="image_3">
                          <img src="images/img-13.png" class="image" style="width:100%">
                          <div class="middle">
                             <div class="playnow_bt">Play Now</div>
                          </div>
                       </div>
                       <h1 class="code_text">CADE Prlor</h1>
                       <p class="there_text">There are many variations </p>
                       <div class="star_icon">
                          <ul>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                          </ul>
                       </div>
                    </div>
                    <div class="iamge_movies">
                       <div class="image_3">
                          <img src="images/img-14.png" class="image" style="width:100%">
                          <div class="middle">
                             <div class="playnow_bt">Play Now</div>
                          </div>
                       </div>
                       <h1 class="code_text">Bradon</h1>
                       <p class="there_text">There are many variations </p>
                       <div class="star_icon">
                          <ul>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                          </ul>
                       </div>
                    </div>
                    <div class="iamge_movies">
                       <div class="image_3">
                          <img src="images/img-15.png" class="image" style="width:100%">
                          <div class="middle">
                             <div class="playnow_bt">Play Now</div>
                          </div>
                       </div>
                       <h1 class="code_text">Anton Levin</h1>
                       <p class="there_text">There are many variations </p>
                       <div class="star_icon">
                          <ul>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                          </ul>
                       </div>
                    </div>
                    <div class="iamge_movies">
                       <div class="image_3">
                          <img src="images/img-16.png" class="image" style="width:100%">
                          <div class="middle">
                             <div class="playnow_bt">Play Now</div>
                          </div>
                       </div>
                       <h1 class="code_text">Sacha Styles</h1>
                       <p class="there_text">There are many variations </p>
                       <div class="star_icon">
                          <ul>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                          </ul>
                       </div>
                    </div>
                    <div class="iamge_movies">
                       <div class="image_3">
                          <img src="images/img-7.png" class="image" style="width:100%">
                          <div class="middle">
                             <div class="playnow_bt">Play Now</div>
                          </div>
                       </div>
                       <h1 class="code_text">Katledrazdu</h1>
                       <p class="there_text">There are many variations </p>
                       <div class="star_icon">
                          <ul>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                             <li><a href="#"><img src="images/star-icon.png"></a></li>
                          </ul>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="seebt_1"><a href="#">See More</a></div>
        </div>
     </div>
     <!-- movies section end -->

@endsection