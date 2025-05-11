<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Glassmorphism Register Form</title>
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
      background: #000;
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

    .input-field input:focus ~ label,
    .input-field input:valid ~ label {
      font-size: 0.8rem;
      top: 10px;
      transform: translateY(-120%);
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
    <form action="{{ route('register.save') }}" method="POST">
        @csrf
        <h2>Register</h2>
        <div class="input-field">
            <input type="text" name="name" required>
            <label>Enter your name</label>
        </div>
        <div class="input-field">
            <input type="email" name="email" required>
            <label>Enter your email</label>
        </div>
        <div class="input-field">
            <input type="password" name="password" required>
            <label>Create password</label>
        </div>
        <div class="input-field">
            <input type="password" name="password_confirmation" required>
            <label>Confirm password</label>
        </div>
        <button type="submit">Register</button>
        
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
            <p>Already have an account? <a href="{{ url('/login') }}">Login</a></p>
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
