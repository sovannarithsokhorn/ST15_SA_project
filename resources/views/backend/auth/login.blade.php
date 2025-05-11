<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TMT Login</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
      @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@200;300;400;500;600;700&display=swap");

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Open Sans", sans-serif;
      }

      body {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        width: 100%;
        padding: 0 10px;
      }

      body::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                    url("{{ asset('frontend/assets/images/ban.jpg') }}");
        background-position: center;
        background-size: cover;
        z-index: -1;
      }


      .wrapper {
        width: 400px;
        border-radius: 8px;
        padding: 30px;
        text-align: center;
        border: 1px solid rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(9px);
        -webkit-backdrop-filter: blur(9px);
      }

      form {
        display: flex;
        flex-direction: column;
      }

      h2 {
        font-size: 2rem;
        margin-bottom: 20px;
        color: #fff;
      }

      .input-field {
        position: relative;
        border-bottom: 2px solid #ccc;
        margin: 15px 0;
      }

      .input-field label {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        color: #fff;
        font-size: 16px;
        pointer-events: none;
        transition: 0.15s ease;
      }

      .input-field input {
        width: 100%;
        height: 40px;
        background: transparent;
        border: none;
        outline: none;
        font-size: 16px;
        color: #fff;
      }

      .input-field input:focus~label,
      .input-field input:valid~label {
        font-size: 0.8rem;
        top: 10px;
        transform: translateY(-120%);
      }

      .forget {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 25px 0 35px 0;
        color: #fff;
      }

      #remember {
        accent-color: #fff;
      }

      .forget label {
        display: flex;
        align-items: center;
      }

      .forget label p {
        margin-left: 8px;
      }

      .wrapper a {
        color: #efefef;
        text-decoration: none;
      }

      .wrapper a:hover {
        text-decoration: underline;
      }

      button {
        background: #fff;
        color: #000;
        font-weight: 600;
        border: none;
        padding: 12px 20px;
        cursor: pointer;
        border-radius: 3px;
        font-size: 16px;
        border: 2px solid transparent;
        transition: 0.3s ease;
      }

      button:hover {
        color: #fff;
        border-color: #fff;
        background: rgba(255, 255, 255, 0.15);
      }

      .register {
        text-align: center;
        margin-top: 30px;
        color: #fff;
      }

    </style>
</head>
<body>
  <div class="wrapper">
    <form action="{{route('login.action')}}" method="POST">

      @csrf
      <h2>Login</h2>
        <div class="input-field">
        <input type="text" name="email" required>
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" name="password" required>
        <label>Enter your password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" name="remember" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div>
      <button type="submit">Log In</button>
      @if (Session::has('success'))
        <script>
            $(document).ready(function() {
                Swal.fire({
                    title: 'Success!',
                    text: '{{ Session::get("success") }}',
                    icon: 'success',
                    confirmButtonText: 'OK',
                    timer: 3000
                });
            });
        </script>
        @endif
      <div class="register">
        <p>Don't have an account? <a href={{url('/register')}}>Register</a></p>
      </div>
      
    </form>
    
  </div>
  
</body>
</html>

@section('type_message')
  <script>
    $(function() {
      var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
  
      @if(session('flash_message'))
        Toast.fire({
            icon: 'success',
            title: '{{session('flash_message')}}'
            })
      @endif

      @if(session('info'))
        Toast.fire({
            icon: 'info',
            title: '{{session('info')}}'
            })
      @endif

      @if(session('error'))
        Toast.fire({
            icon: 'error',
            title: '{{session('error')}}'
            })
      @endif


      $('.swalDefaultSuccess').click(function() {
        Toast.fire({
          icon: 'success',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultInfo').click(function() {
        Toast.fire({
          icon: 'info',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultError').click(function() {
        Toast.fire({
          icon: 'error',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultWarning').click(function() {
        Toast.fire({
          icon: 'warning',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
     
  
      
      
    });
  </script>

@endsection