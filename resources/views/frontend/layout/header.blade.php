@php
use Illuminate\Support\Facades\Auth;
@endphp
<div class="header_section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <a class="logo" href="{{url('/')}}"><img src="{{asset('frontend/assets/images/logo.png')}}"></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="{{url('/fmovie')}}">Movies</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="{{url('/tv')}}">New</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="{{url('/celeb')}}">Celebs</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="{{url('/soon')}}">Soon</a>
            </li>
          </ul>
          <div class="search_icon"><a href="#"><img src="{{asset('frontend/assets/images/notification-icon.png')}}"><span class="padding_left_15">Notifications</span></a></div>
          <div class="search_icon"><a href="#"><img src="{{asset('frontend/assets/images/eye-icon.png')}}"><span class="padding_left_15">About us</span></a></div>
          
          @auth
          <!-- Logged-in version (with logout) -->
          <div class="search_icon" onclick="confirmLogout()" style="cursor: pointer;">
            <img src="{{ asset('frontend/assets/images/user-icon.png') }}">
            <span class="padding_left_15">{{ Auth::user()->name }}</span>
          </div>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
          @else
          <!-- Not logged-in version (login link) -->
          <div class="search_icon">
            <a href="{{ route('login') }}">
              <img src="{{ asset('frontend/assets/images/user-icon.png') }}">
              <span class="padding_left_15">Login</span>
            </a>
          </div>
          @endauth
          
          <div class="search_icon"><a href="#"><img src="{{asset('frontend/assets/images/search-icon.png')}}"><span class="padding_left_15"></span></a></div>
       </div>
    </nav>
 </div>

@auth
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function confirmLogout() {
    Swal.fire({
        title: 'Logout?',
        text: "You'll be signed out of your account",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, logout!'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('logout-form').submit();
        }
    });
}
</script>
@endauth