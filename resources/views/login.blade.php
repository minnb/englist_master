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
                                <form>
                                    <div class="login-top">
                                        <h3>Login</h3>
                                        <p>Don't have an account yet? <a href="{{ url('signup') }}">Sign up for free</a></p>
                                    </div>
                                    <p>
                                        <label>Email</label>
                                        <input placeholder="Email" type="email" id="email" name="email">
                                    </p>
                                    <p>
                                        <label>Password</label>
                                        <input placeholder="Password" type="password" id="pass" name="pass">
                                    </p>
                                    <div class="back-check-box">
                                        <input type="checkbox" id="box-1"> Remember me
                                        <p>Forget password?</p>
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
