@extends('layouts.app')
@section('title')
    Register
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
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="login-top">
                                        <h3>Sign Up</h3>
                                        <p>Already have an account? <a href="{{ route('login') }}">Log in</a></p>
                                    </div>
                                    <p>
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input id="name" class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Enter your name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </p>
                                    <p>
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </p>
                                    <p>
                                        <label>Password <span class="text-danger">*</span></label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password" placeholder="Create new password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </p>
                                    <p>
                                        <label>Confirm Password <span class="text-danger">*</span></label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter confirm password">
                                    </p>
                                    <div class="back-check-box">
                                        <input type="checkbox" id="box-1"> I agree to the <em>Terms & Conditions</em>
                                        <p></p>
                                    </div>
                                    <button type="submit" id="button" name="submit">Register <svg
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
