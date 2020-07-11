@extends('layouts.app')

@push('scripts-head')
  <link href="{{asset('single-post-2/css/styles.css')}}" rel="stylesheet">
  <link href="{{asset('single-post-2/css/responsive.css')}}" rel="stylesheet">
@endpush

@section('content')
<div class="container">
  <div class="row justify-content-center">

    <div class="col-sm-4">
      <div class="comment-form">
        <h3 class="mb-3 text-center">{{ __('Sign Up') }}</h3>
        <form method="POST" action="{{ route('register') }}">
          @csrf
            <div class="row">                  
                <div class="col-sm-12">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name"
                    required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">                  
                <div class="col-sm-12">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                    placeholder="E-Mail Address" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">                  
                <div class="col-sm-12">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" 
                    placeholder="Password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">                  
                <div class="col-sm-12">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required 
                    autocomplete="new-password">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                  <button type="submit" class="submit-btn">
                    {{ __('Register') }}
                </button>
                </div><!-- col-sm-12 -->
            </div>
          </div><!-- row -->
        </form>
      </div><!-- comment-form -->

    </div><!-- col-lg-8 col-md-12 -->

  </div><!-- row -->

</div><!-- container -->
@endsection
