@extends('layouts.app')

 
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
<link rel="icon" type="image/png" href="{{asset('/loginAssets/images/icons/favicon.ico')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/loginAssets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{asset('/loginAssets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/loginAssets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/loginAssets/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/loginAssets/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/loginAssets/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/loginAssets/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/loginAssets/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/loginAssets/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/loginAssets/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('/loginAssets/images/bg-01.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">

            <span class="login100-form-title p-b-41">
                    Account Login
                </span>


                    <form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="wrap-input100 validate-input" data-validate = "Enter username">
                            <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="User Email">
                            <span class="focus-input100" data-placeholder="&#xe82a;" role="alert"></span>
					    </div>

                            
                            <div class="wrap-input100 validate-input" data-validate="Enter password">
                                    <input id="password" placeholder="User Password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <span class="focus-input100" data-placeholder="&#xe80f;" role="alert">  
                                    </span>
                            </div>
                        

                        <div class="container-login100-form-btn m-t-32">
                                <button class="login100-form-btn" type="submit" >
                                    Login
                                </button>
                        
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            
                         </div>

                    </form>
                </div>
            </div>
        </div>

        <div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{asset('/loginAssets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('/loginAssets/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('/loginAssets/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('/loginAssets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('/loginAssets/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('/loginAssets/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('/loginAssets/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('/loginAssets/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('/loginAssets/js/main.js')}}"></script>
</body>
</html>
@endsection
