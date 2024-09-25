@extends('layouts.master')
@section('title') English Master Academy @endsection
@section('content')
    <!--================= Wrapper Start Here =================-->
    <div class="react-wrapper">
        <div class="react-wrapper-inner">
            @include('layouts.slider')
            <?php $about = App\Models\Pages::where('name','about')->get(); ?>
            <!--=================  About Section Start Here ================= -->
                <div class="about__area about__area_one p-relative pt---10 pb---120">
                    <div class="container">                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about__image">
                                    <img src="{{asset($about[0]->image)}}" alt="About">
                                    <img class="react__shape__ab" src="build/images/preload.png" alt="Shape Image">
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
               <!--=================  Campus Section Start Here ================= -->
               <?php $choose = App\Models\Pages::where('name','choose')->get(); ?>
                <div class="campus_sec pt---100 pb---110">
                    <div class="container">
                        <div class="react__title__section text-center">
                            <h2 class="react__tittle">Why Choose Us?</h2>
                            <img src="build/images/line.png" alt="image">
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="about__content">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <img src="build/images/campus/1.svg" alt="image">
                                            </div>
                                            <div class="text">
                                                <h4>Personalized Learning</h4>
                                                <p>{{$choose[0]->c1}}</p>
                                            </div>
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="build/images/campus/2.svg" alt="image">
                                            </div>
                                            <div class="text">
                                                <h4>Interactive Classes</h4>
                                                <p>{{$choose[0]->c2}}</p>
                                            </div>
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="build/images/campus/3.svg" alt="image">
                                            </div>
                                            <div class="text">
                                                <h4>Supportive Environment</h4>
                                                <p>{{$choose[0]->c3}}</p>
                                            </div>
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                        </li>
                                    </ul>  
                                </div>                              
                            </div>
                            <div class="col-lg-5">                                
                                <div class="about__image">
                                    <img src="{{asset($choose[0]->image)}}" alt="image">
                                    <img class="shape-1" src="build/images/campus/shape.png" alt="image">
                                </div>                                
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#" class="more-about"> Connect with Our Expert <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                        </div>
                    </div>
                </div>
                <!--================= Campus Section End Here ================= -->
                <!--=================  Featured Section Start Here ================= -->
                <div class="react_featured_online pt---100 pb---110">
                    <div class="container"> 
                        <div class="react__title__section-all">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h6>Education for Everyone</h6>
                                    <h2 class="react__tittle">Featured Online Courses</h2>
                                </div>                                
                            </div>                            
                        </div>                       
                        <div class="row pt---30">
                            @foreach($coureses as $key=>$item)
                            <div class="col-md-6">
                                <div class="item__inner">                                    
                                    <div class="icon">
                                        <img src="build/images/featured/1.png" alt="Icon image">
                                    </div>
                                    <div class="react-content">
                                        <h5 class="price">{{ number_format($item->unit_price, 0)}} vnd/month</h5>
                                        <h3><a href="#">{{$item->name}}</a></h3>
                                        <p>{!!$item->desc!!}</p><br>
                                        <ul class="react-lessones">
                                            <li class="react-book"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> 66 Lessones</li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> {{$item->sales}} Students </li>
                                        </ul>
                                    </div>                                    
                                </div>
                            </div>    
                            @endforeach     
                        </div>
                    </div>
                </div>
                <!--=================  Featured Section End Here ================= -->
                <!--=================  Satisfaction Section Start Here ================= -->
                <?php $reviews = App\Models\Feedback::where('blocked', 0)->get(); ?>
                <div class="student_satisfaction-section pt---100 pb---120">
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
                                            <img src="build/images/counter/1.png" alt="image">
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
                                            <img src="build/images/counter/2.png" alt="image">
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
                                            <img src="build/images/counter/3.png" alt="image">
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
                                            <img src="build/images/counter/4.png" alt="image">
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
@endsection