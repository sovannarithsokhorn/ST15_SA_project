@extends('frontend.layout.master')
@section('title', 'home')
@section('content')

<script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</script>

      <!-- banner section end -->
      <div class="banner_section layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-md-6">
                 <div class="banner_taital">Enjoy <br>The movies Shows And Songs</div>
                 <p class="banner_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                 <div class="see_bt"><a href="#">See More</a></div>
              </div>
              <div class="col-md-6">
                 <div class="play_icon"><a href="#"><img src="{{asset('frontend/assets/images/play-icon.png')}}"></a></div>
              </div>
           </div>
        </div>
     </div>
     @if (session('login_success'))
         <script>
            $(document).ready(function() {
               Swal.fire({
                     title: 'Login Successful!',
                     text: 'Welcome {{ session("login_user_name") }}!',
                     icon: 'success',
                     confirmButtonText: 'OK',
                     allowOutsideClick: false,
                     allowEscapeKey: false
               }).then((result) => {
                     if (result.isConfirmed) {
                        // Clear the notification after user clicks OK
                        $.ajax({
                           url: "{{ route('clear.login.alert') }}",
                           method: 'POST',
                           headers: {
                                 'X-CSRF-TOKEN': '{{ csrf_token() }}'
                           }
                        });
                     }
               });
            });
         </script>
      @endif
     <!-- banner section end -->
     <!-- arrival section start -->
     <div class="arrival_section layout_padding">
        <div class="container">
           <div class="row">
            @foreach ($coomings as $va)
            <style>
               .image_{{$va->id}} {
                background-image: url(../images/{{$va->picture}});
               
            }
            </style>
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
     <!-- movies section start -->
     <div class="movies_section layout_padding">
        <div class="container">
           <div class="movies_menu">
              <ul>
                 <li class="active"><a href="#">Overview</a></li>
                 <li><a href="{{url('/tv')}}">TV</a></li>
                 <li><a href="{{url('/fmovie')}}">Movies</a></li>
                 <li><a href="#">Show</a></li>
                 <li><a href="{{url('/celeb')}}">Celeb</a></li>
                 <li><a href="#">Sports</a></li>
                 <li><a href="#">News</a></li>
                 <li><a href="#">Cartoon</a></li>
              </ul>
           </div>
           <div class="movies_section_2 layout_padding">
              <h2 class="letest_text">Letest Movies</h2>
              <div class="seemore_bt"><a href="#">See More</a></div>
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
           <div class="movies_section_2 layout_padding">
              <h2 class="letest_text">TV Shows</h2>
              <div class="seemore_bt"><a href="#">See More</a></div>
              <div class="movies_main">
                 <div class="iamge_movies_main">
                    <div class="iamge_movies">
                       <div class="image_3">
                          <img src="{{asset('frontend/assets/images/img-8.png')}}" class="image" style="width:100%">
                          <div class="middle">
                             <div class="playnow_bt">Play Now</div>
                          </div>
                       </div>
                       <h1 class="code_text">CADE Prlor</h1>
                       <p class="there_text">There are many variations </p>
                       <div class="star_icon">
                          <ul>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                          </ul>
                       </div>
                    </div>
                    <div class="iamge_movies">
                       <div class="image_3">
                          <img src="{{asset('frontend/assets/images/img-9.png')}}" class="image" style="width:100%">
                          <div class="middle">
                             <div class="playnow_bt">Play Now</div>
                          </div>
                       </div>
                       <h1 class="code_text">Bradon</h1>
                       <p class="there_text">There are many variations </p>
                       <div class="star_icon">
                          <ul>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                          </ul>
                       </div>
                    </div>
                    <div class="iamge_movies">
                       <div class="image_3">
                          <img src="{{asset('frontend/assets/images/img-10.png')}}" class="image" style="width:100%">
                          <div class="middle">
                             <div class="playnow_bt">Play Now</div>
                          </div>
                       </div>
                       <h1 class="code_text">Anton Levin</h1>
                       <p class="there_text">There are many variations </p>
                       <div class="star_icon">
                          <ul>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                          </ul>
                       </div>
                    </div>
                    <div class="iamge_movies">
                       <div class="image_3">
                          <img src="{{asset('frontend/assets/images/img-11.png')}}" class="image" style="width:100%">
                          <div class="middle">
                             <div class="playnow_bt">Play Now</div>
                          </div>
                       </div>
                       <h1 class="code_text">Sacha Styles</h1>
                       <p class="there_text">There are many variations </p>
                       <div class="star_icon">
                          <ul>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                          </ul>
                       </div>
                    </div>
                    <div class="iamge_movies">
                       <div class="image_3">
                          <img src="{{asset('frontend/assets/images/img-12.png')}}" class="image" style="width:100%">
                          <div class="middle">
                             <div class="playnow_bt">Play Now</div>
                          </div>
                       </div>
                       <h1 class="code_text">Katledrazdu</h1>
                       <p class="there_text">There are many variations </p>
                       <div class="star_icon">
                          <ul>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
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
                          <img src="{{asset('frontend/assets/images/img-13.png')}}" class="image" style="width:100%">
                          <div class="middle">
                             <div class="playnow_bt">Play Now</div>
                          </div>
                       </div>
                       <h1 class="code_text">CADE Prlor</h1>
                       <p class="there_text">There are many variations </p>
                       <div class="star_icon">
                          <ul>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                          </ul>
                       </div>
                    </div>
                    <div class="iamge_movies">
                       <div class="image_3">
                          <img src="{{asset('frontend/assets/images/img-14.png')}}" class="image" style="width:100%">
                          <div class="middle">
                             <div class="playnow_bt">Play Now</div>
                          </div>
                       </div>
                       <h1 class="code_text">Bradon</h1>
                       <p class="there_text">There are many variations </p>
                       <div class="star_icon">
                          <ul>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                          </ul>
                       </div>
                    </div>
                    <div class="iamge_movies">
                       <div class="image_3">
                          <img src="{{asset('frontend/assets/images/img-15.png')}}" class="image" style="width:100%">
                          <div class="middle">
                             <div class="playnow_bt">Play Now</div>
                          </div>
                       </div>
                       <h1 class="code_text">Anton Levin</h1>
                       <p class="there_text">There are many variations </p>
                       <div class="star_icon">
                          <ul>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                          </ul>
                       </div>
                    </div>
                    <div class="iamge_movies">
                       <div class="image_3">
                          <img src="{{asset('frontend/assets/images/img-16.png')}}" class="image" style="width:100%">
                          <div class="middle">
                             <div class="playnow_bt">Play Now</div>
                          </div>
                       </div>
                       <h1 class="code_text">Sacha Styles</h1>
                       <p class="there_text">There are many variations </p>
                       <div class="star_icon">
                          <ul>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                          </ul>
                       </div>
                    </div>
                    <div class="iamge_movies">
                       <div class="image_3">
                          <img src="{{asset('frontend/assets/images/img-7.png')}}" class="image" style="width:100%">
                          <div class="middle">
                             <div class="playnow_bt">Play Now</div>
                          </div>
                       </div>
                       <h1 class="code_text">Katledrazdu</h1>
                       <p class="there_text">There are many variations </p>
                       <div class="star_icon">
                          <ul>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
                             <li><a href="#"><img src="{{asset('frontend/assets/images/star-icon.png')}}"></a></li>
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
     <!-- newsletter section start -->
       
         <div class="gm-main-header">
            <h1 class="gm-title">GROUP MEMBERS</h1>
            <p class="gm-subtitle">Meet our talented team</p>
         </div>
      <div class="gm-members-container">
            <!-- Row 1 -->
            <div class="gm-member-card">
               <div class="gm-avatar-frame">
                  <img src="{{asset('frontend/assets/images/snay.jpg')}}" alt="Profile" class="gm-avatar-img">
               </div>
               <h3 class="gm-member-name">Sokhorn Sovannarith</h3>
               <p class="gm-member-role">Project Manager</p>
            </div>
            
            <div class="gm-member-card">
               <div class="gm-avatar-frame">
                  <img src="{{asset('frontend/assets/images/ihong.jpg')}}" alt="Profile" class="gm-avatar-img">
               </div>
               <h3 class="gm-member-name">Hem Ihong</h3>
               <p class="gm-member-role">Developer</p>
            </div>
            
            <div class="gm-member-card">
               <div class="gm-avatar-frame">
                  <img src="{{asset('frontend/assets/images/khemara.jpg')}}" alt="Profile" class="gm-avatar-img">
               </div>
               <h3 class="gm-member-name">Phan Khemara</h3>
               <p class="gm-member-role">Analyst</p>
            </div>
            
            <!-- Row 2 -->
            <div class="gm-member-card">
               <div class="gm-avatar-frame">
                  <img src="{{asset('frontend/assets/images/rithy.jpg')}}" alt="Profile" class="gm-avatar-img">
               </div>
               <h3 class="gm-member-name">Somon Rithy</h3>
               <p class="gm-member-role">Designer</p>
            </div>
            
            <div class="gm-member-card">
               <div class="gm-avatar-frame">
                  <img src="{{asset('frontend/assets/images/virak.jpg')}}" alt="Profile" class="gm-avatar-img">
               </div>
               <h3 class="gm-member-name">Sim Virak</h3>
               <p class="gm-member-role">Content Writer</p>
            </div>
            
            <div class="gm-member-card">
               <div class="gm-avatar-frame">
                  <img src="{{asset('frontend/assets/images/khemren.jpg')}}" alt="Profile" class="gm-avatar-img">
               </div>
               <h3 class="gm-member-name">Yuheng Khemren</h3>
               <p class="gm-member-role">Content Writer</p>
            </div>
      </div>
     <!-- newsletter section end -->
     <!-- cooming  section start -->
     <div class="cooming_section layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-md-6">
                 <div class="image_17">
                    <div class="image_17"><img src="{{asset('frontend/assets/images/img-17.png')}}"></div>
                 </div>
              </div>
              <div class="col-md-6">
                 <h1 class="number_text">01</h1>
                 <h1 class="Cooming_soon_taital">Cooming soon</h1>
                 <p class="long_text_1">It is a long established fact that a reader will be distracted by the readable content of a page when looking</p>
                 <div class="paly_bt"><a href="#">Play Now</a></div>
              </div>
           </div>
        </div>
     </div>
     <!-- cooming  section end -->
@endsection