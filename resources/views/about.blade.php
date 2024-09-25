@extends('layouts.master')
@section('title') About English Master @endsection
@section('content')
    <!--================= Wrapper Start Here =================-->
    <?php $about = App\Models\Pages::where('name','about')->get(); ?>
    <div class="react-wrapper">
        <div class="react-wrapper-inner">
            <!--================= Breadcrumbs Section Start Here =================-->
            <div class="react-breadcrumbs">
                <div class="breadcrumbs-wrap">
                    <img class="desktop" src="{{ URL::asset('build/images/about/1.png') }}" alt="Breadcrumbs">
                    <img class="mobile" src="{{ URL::asset('build/images/about/1.png') }}" alt="Breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="container">
                            <div class="breadcrumbs-text">
                                <h1 class="breadcrumbs-title">About Us</h1>
                                <div class="back-nav">
                                    <ul>
                                        <li><a href="{{ url('/') }}">Home</a></li>
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
                                <img src="{{asset($about[0]->image)}}" alt="About">
                                <img class="react__shape__ab" src="{{ URL::asset('build/images/preload.png') }}" alt="Shape Image">
                            </div>
                        </div>
                        <div class="col-lg-6">
                                <div class="about__content">
                                    <h2 class="about__title">Welcome to <br> <em>{{$about[0]->c1}}</em></h2>
                                    <p class="about__paragraph">{{$about[0]->c2}}</p>
                                    <p class="about__paragraph2"> {{$about[0]->c3}}</p>
                                    <ul>
                                        <li><a href="about.html" class="more-about"> Connect with Our Expert <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a></li>
                                        <li class="last-li">
                                            <em>Get Support</em>
                                            <a href="mailto:{{$about[0]->c5}}">{{$about[0]->c5}}</a>
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
                            <h6>English Master available courses</h6>
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
            <!--=================  Satisfaction Section Start Here ================= -->
            <?php $reviews = App\Models\Feedback::where('blocked', 0)->get(); ?>
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
                        @foreach($reviews as $key=>$item)
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
                                    <div class="parag">{!! $item->content !!}</div>
                                </div>
                                <img class="poly" src="build/images/testimonial/poly.png" alt="image">
                            </div>
                            <div class="author-sec">
                                <div class="icon">
                                    <img src="{{asset($item->thumbnail)}}" alt="image">
                                </div>
                                <div class="text">
                                    <h4>{{$item->name}}</h4>
                                    <p>{{$item->position}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
