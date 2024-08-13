@extends('layouts.app')
@section('title')
    About Us
@endsection
@section('content')
    <!--================= Wrapper Start Here =================-->
    <div class="react-wrapper">
        <div class="react-wrapper-inner">
            <!--================= Breadcrumbs Section Start Here =================-->
            <div class="react-breadcrumbs">
                <div class="breadcrumbs-wrap">
                    <img class="desktop" src="{{ URL::asset('build/images/breadcrumbs/1.jpg') }}" alt="Breadcrumbs">
                    <img class="mobile" src="{{ URL::asset('build/images/breadcrumbs/1.jpg') }}" alt="Breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="container">
                            <div class="breadcrumbs-text">
                                <h1 class="breadcrumbs-title">About Us</h1>
                                <div class="back-nav">
                                    <ul>
                                        <li><a href="{{ url('index') }}">Home</a></li>
                                        <li>About Us</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Breadcrumbs Section End Here =================-->

            <!--=================  About Section Start Here ================= -->
            <div class="about__area about__area_one p-relative pt---100 pb---120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about__image">
                                <img src="{{ URL::asset('build/images/about/ab.png') }}" alt="About">
                                <img class="react__shape__ab" src="{{ URL::asset('build/images/about/badge.png') }}" alt="Shape Image">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about__content">
                                <h2 class="about__title">Welcome to <br> <em>Echooling LMS Platform</em></h2>
                                <p class="about__paragraph">Education is both the act of teaching knowledge to others
                                    and<br> the act of receiving knowledge from someone else.</p>
                                <p class="about__paragraph2"> Have questions? <a href="javascript:void(0);"> Get Free Guide </a></p>
                                <p>Education also refers to the knowledge received through schooling instruction <br>and to
                                    the institution of teaching as a whole. The main purpose of education <br>is the
                                    integral development of a person.</p>
                                <ul>
                                    <li><a href="{{ url('about') }}" class="more-about"> Read More <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-arrow-right">
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                                <polyline points="12 5 19 12 12 19"></polyline>
                                            </svg></a></li>
                                    <li class="last-li">
                                        <em>Get Support</em>
                                        <a href="mailto:support@react.com">support@react.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= About Section End Here ================= -->

            <!--=================  Popular Topics Section Start Here ================= -->
            <div class="react_populars_topics react_populars_topics2 react_populars_topics_about pb---80">
                <div class="react__title__section react__title__section-all">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h6>Echooling available courses</h6>
                            <h2 class="react__tittle"> Online Coaching Lessons For <br>Remote Learning </h2>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row pt---30">
                        <div class="col-md-4">
                            <div class="item__inner">
                                <div class="icon">
                                    <img src="{{ URL::asset('build/images/topics/icon.png') }}" alt="Icon image">
                                </div>
                                <div class="react-content">
                                    <h3 class="react-title"><a href="{{ url('coureses-grid') }}">Accredited Campus</a></h3>
                                    <p>Nulla porttitor accumsan tincidunt. vamus <br>magna justo, lacinia eget consectetur
                                        sed, <br>convallis at tellus.</p>
                                    <a href="javascript:void(0);"> Learn More <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item__inner">
                                <div class="icon">
                                    <img src="{{ URL::asset('build/images/topics/icon2.png') }}" alt="Icon image">
                                </div>
                                <div class="react-content">
                                    <h3 class="react-title"><a href="{{ url('coureses-grid') }}">Best Quality Graduate</a></h3>
                                    <p>Nulla porttitor accumsan tincidunt. vamus <br>magna justo, lacinia eget consectetur
                                        sed, <br>convallis at tellus.</p>
                                    <a href="javascript:void(0);"> Learn More <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item__inner">
                                <div class="icon">
                                    <img src="{{ URL::asset('build/images/topics/icon3.png') }}" alt="Icon image">
                                </div>
                                <div class="react-content">
                                    <h3 class="react-title"><a href="{{ url('coureses-grid') }}">Inspiring Student Life</a></h3>
                                    <p>Nulla porttitor accumsan tincidunt. vamus <br>magna justo, lacinia eget consectetur
                                        sed, <br>convallis at tellus.</p>
                                    <a href="javascript:void(0);"> Learn More <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=================  Popular Topics Section End Here ================= -->

            <!--================= Instructor Section Start Here =================-->
            <div class="instructor__area pt---0 pb---110 text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-sm-6">
                            <div class="instructor__content instructor__content-one">
                                <div class="instructors_lefts">
                                    <h6>Course Instructors</h6>
                                    <h2>Meet our <br> Class Instructors</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="instructor__content">
                                <div class="instructor__content-1">
                                    <img src="{{ URL::asset('build/images/instructor/03.jpg') }}" alt="course instructor picture">
                                </div>
                                <div class="instructor__content-2">
                                    <h4>
                                        <a href="{{ url('profile') }}">Jason Response</a>
                                    </h4>
                                    <p>Education Assistant</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="instructor__content">
                                <div class="instructor__content-1">
                                    <img src="{{ URL::asset('build/images/instructor/04.jpg') }}" alt="course instructor picture">
                                </div>
                                <div class="instructor__content-2">
                                    <h4>
                                        <a href="{{ url('profile') }}">Jonquil Von</a>
                                    </h4>
                                    <p>Teaching Assistant</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="instructor__content">
                                <div class="instructor__content-1">
                                    <img src="{{ URL::asset('build/images/instructor/05.jpg') }}" alt="course instructor picture">
                                </div>
                                <div class="instructor__content-2">
                                    <h4>
                                        <a href="{{ url('profile') }}">Piff Jenkins</a>
                                    </h4>
                                    <p>Teacher</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="instructor__content">
                                <div class="instructor__content-1">
                                    <img src="{{ URL::asset('build/images/instructor/06.jpg') }}" alt="course instructor picture">
                                </div>
                                <div class="instructor__content-2">
                                    <h4>
                                        <a href="{{ url('profile') }}">Brian Cumin</a>
                                    </h4>
                                    <p>Lead Teacher</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="instructor__content">
                                <div class="instructor__content-1">
                                    <img src="{{ URL::asset('build/images/instructor/07.jpg') }}" alt="course instructor picture">
                                </div>
                                <div class="instructor__content-2">
                                    <h4>
                                        <a href="{{ url('profile') }}">Hanson Deck</a>
                                    </h4>
                                    <p>Teacher</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="instructor__content">
                                <div class="instructor__content-1">
                                    <img src="{{ URL::asset('build/images/instructor/08.jpg') }}" alt="course instructor picture">
                                </div>
                                <div class="instructor__content-2">
                                    <h4>
                                        <a href="{{ url('profile') }}">Alan Fresco</a>
                                    </h4>
                                    <p>Teacher</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Instructor Section End Here =================-->

            <!--=================  Satisfaction Section Start Here ================= -->
            <div class="student_satisfaction-section pt---110 pb---120">
                <div class="container">
                    <div class="react__title__section-all pb---30">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h6>Student Satisfaction</h6>
                                <h2 class="react__tittle">Student Community <br>Feedback</h2>
                            </div>
                        </div>
                    </div>
                    <div class="feedreact-slider owl-carousel">
                        <div class="event__card">
                            <div class="event__card--content">
                                <div class="event__card--content-area">
                                    <div class="testimonial__ratings">
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star_alt"></em>
                                        <span> (14 Reviews) </span>
                                    </div>
                                    <div class="parag">We are a Portsmouth based web design and e-marketing agency. We
                                        understand how important a website is to any business, big or small. Your online
                                        presence is now more important than ever before.</div>
                                </div>
                                <img class="poly" src="{{ URL::asset('build/images/testimonial/poly.png') }}" alt="image">
                            </div>
                            <div class="author-sec">
                                <div class="icon">
                                    <img src="{{ URL::asset('build/images/testimonial/1.png') }}" alt="image">
                                </div>
                                <div class="text">
                                    <h4>Pelican Steve</h4>
                                    <p>Student</p>
                                </div>
                            </div>
                        </div>
                        <div class="event__card">
                            <div class="event__card--content">
                                <div class="event__card--content-area">
                                    <div class="testimonial__ratings">
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star_alt"></em>
                                        <span> (18 Reviews) </span>
                                    </div>
                                    <div class="parag">We are a Portsmouth based web design and e-marketing agency. We
                                        understand how important a website is to any business, big or small. Your online
                                        presence is now more important than ever before.</div>
                                </div>
                                <img class="poly" src="{{ URL::asset('build/images/testimonial/poly.png') }}" alt="image">
                            </div>
                            <div class="author-sec">
                                <div class="icon">
                                    <img src="{{ URL::asset('build/images/testimonial/2.png') }}" alt="image">
                                </div>
                                <div class="text">
                                    <h4>Chase Kroll</h4>
                                    <p>IT Specialist</p>
                                </div>
                            </div>
                        </div>
                        <div class="event__card">
                            <div class="event__card--content">
                                <div class="event__card--content-area">
                                    <div class="testimonial__ratings">
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star_alt"></em>
                                        <span> (26 Reviews) </span>
                                    </div>
                                    <div class="parag">We are a Portsmouth based web design and e-marketing agency. We
                                        understand how important a website is to any business, big or small. Your online
                                        presence is now more important than ever before.</div>
                                </div>
                                <img class="poly" src="{{ URL::asset('build/images/testimonial/poly.png') }}" alt="image">
                            </div>
                            <div class="author-sec">
                                <div class="icon">
                                    <img src="{{ URL::asset('build/images/testimonial/3.png') }}" alt="image">
                                </div>
                                <div class="text">
                                    <h4>Jackson Pot</h4>
                                    <p>Teacher</p>
                                </div>
                            </div>
                        </div>
                        <div class="event__card">
                            <div class="event__card--content">
                                <div class="event__card--content-area">
                                    <div class="testimonial__ratings">
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star_alt"></em>
                                        <span> (14 Reviews) </span>
                                    </div>
                                    <div class="parag">We are a Portsmouth based web design and e-marketing agency. We
                                        understand how important a website is to any business, big or small. Your online
                                        presence is now more important than ever before.</div>
                                </div>
                                <img class="poly" src="{{ URL::asset('build/images/testimonial/poly.png') }}" alt="image">
                            </div>
                            <div class="author-sec">
                                <div class="icon">
                                    <img src="{{ URL::asset('build/images/testimonial/1.png') }}" alt="image">
                                </div>
                                <div class="text">
                                    <h4>Pelican Steve</h4>
                                    <p>Student</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="count__area2 pb---100">
                    <div class="container">
                        <ul class="row">
                            <li class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                <div class="count__content">
                                    <div class="icon">
                                        <img src="{{ URL::asset('build/images/counter/1.png') }}" alt="image">
                                    </div>
                                    <div class="text">
                                        <span class="count__content-title counter">28</span><em>k</em>
                                        <p class="count__content">Foreign followers</p>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                <div class="count__content">
                                    <div class="icon">
                                        <img src="{{ URL::asset('build/images/counter/2.png') }}" alt="image">
                                    </div>
                                    <div class="text">
                                        <span class="count__content-title counter">10</span><em>k</em>
                                        <p class="count__content">Classes complete</p>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                <div class="count__content">
                                    <div class="icon">
                                        <img src="{{ URL::asset('build/images/counter/3.png') }}" alt="image">
                                    </div>
                                    <div class="text">
                                        <span class="count__content-title counter">208</span><em>k</em>
                                        <p class="count__content"> Students enrolled</p>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                <div class="count__content">
                                    <div class="icon">
                                        <img src="{{ URL::asset('build/images/counter/4.png') }}" alt="image">
                                    </div>
                                    <div class="text">
                                        <span class="count__content-title counter">54</span><em>k</em>
                                        <p class="count__content">Certified teachers</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--=================  Satisfaction Section End Here ================= -->

        </div>
    </div>
    <!--================= Wrapper End Here =================-->
@endsection
