<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>DBI - @yield('title')</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('frontend/assets/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('frontend/assets/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
      <style>
         body {
             font-family: 'Montserrat', 'Arial', sans-serif;
             margin: 0;
             background-color: #f8f9fa;
         }
         
         .gm-main-header {
             text-align: center;
             margin-bottom: 50px;
             position: relative;
         }
         
         /* Decorative lines above the heading */
         .gm-main-header::before {
             content: '';
             display: block;
             width: 80px;
             height: 2px;
             background: linear-gradient(90deg, #3498db, #9b59b6);
             margin: 0 auto 15px;
         }
         
         .gm-main-header::after {
             content: '';
             display: block;
             width: 40px;
             height: 2px;
             background: linear-gradient(90deg, #9b59b6, #3498db);
             margin: 15px auto 0;
         }
         
         .gm-title {
             font-size: 2.8rem;
             font-weight: 700;
             color: #2c3e50;
             margin: 20px 20px;
             letter-spacing: 1px;
             text-transform: uppercase;
             position: relative;
         }
         
         .gm-subtitle {
             color: #7f8c8d;
             font-size: 1.1rem;
             margin-top: 15px;
             font-weight: 300;
         }
         
         .gm-members-container {
             display: flex;
             flex-wrap: wrap;
             justify-content: center;
             gap: 30px;
             max-width: 1000px;
             margin: 0 auto;
         }
         
         .gm-member-card {
             width: calc(33.33% - 30px);
             max-width: 250px;
             display: flex;
             flex-direction: column;
             align-items: center;
             margin-bottom: 40px;
             transition: all 0.3s ease;
         }
         
         .gm-member-card:hover {
             transform: translateY(-10px);
         }
         
         .gm-avatar-frame {
             width: 160px;
             height: 160px;
             border-radius: 50%;
             border: 4px solid white;
             box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
             margin-bottom: 20px;
             overflow: hidden;
             position: relative;
         }
         
         .gm-avatar-img {
             width: 100%;
             height: 100%;
             object-fit: cover;
             transition: transform 0.5s ease;
         }
         
         .gm-member-card:hover .gm-avatar-img {
             transform: scale(1.05);
         }
         
         .gm-member-name {
             font-size: 1.2rem;
             font-weight: 600;
             color: #2c3e50;
             text-align: center;
             margin-top: 5px;
         }
         
         .gm-member-role {
             font-size: 0.9rem;
             color: #7f8c8d;
             font-weight: 400;
             text-align: center;
             font-style: italic;
         }
      </style>
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
   </head>
   <body>
      <!-- header section start -->
      @include('frontend.layout.header')
      <!-- header section end -->
        @yield('content')
      <!-- footer  section start -->
      @include('frontend.layout.footer')
      <!-- footer  section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="copyright_text">Copyright TMT All Right Reserved By <a href="https://www.facebook.com/profile.php?id=61569866300159">Traumatized Team</a></div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
      <script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
      <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('frontend/assets/js/jquery-3.0.0.min.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('frontend/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('frontend/assets/js/custom.js')}}"></script>
      <!-- javascript --> 
      <script src="{{asset('frontend/assets/js/owl.carousel.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script>
         $('#datepicker').datepicker({
             uiLibrary: 'bootstrap4'
         });
      </script>
   </body>
</html>