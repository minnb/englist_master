@extends('layouts.app')
@section('title')
    Login
@endsection
@section('content')
    <!--================= Wrapper Start Here =================-->
    <div class="react-wrapper">
        <div class="react-wrapper-inner">
            <div class="react-login-page react-signup-page pt---120 pb---120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-right-form">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="login-top">
                                        <h3>Login</h3>
                                        <p>Don't have an account yet? <a href="{{ route('register') }}">Sign up for free</a>
                                        </p>
                                    </div>
                                    @if (Session::has('success'))
                                        <span class="alert alert-success">{{ Session::get('success') }}</span>
                                    @endif
                                    <p>
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input type="email" id="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus
                                            placeholder="Enter your email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </p>
                                    <p>
                                        <label>Password</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password" placeholder="Enter your password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </p>
                                    <div class="back-check-box">
                                        <input type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}> Remember me
                                        @if (Route::has('password.request'))
                                            <p> <a class="text-muted" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a></p>
                                        @endif
                                    </div>
                                    <button type="submit" id="button" name="submit">LogIn <svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></button>
                                    <span class="back-or"> ........ or Login with ........ </span>
                                    <ul class="social-links">
                                        <li><a href="javascript:void(0);"><span aria-hidden="true" class="social_facebook"></span></a>
                                        </li>
                                        <li><a href="javascript:void(0);"><span aria-hidden="true" class="social_twitter"></span></a>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Wrapper End Here =================-->
@endsection
