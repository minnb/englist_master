@extends('layouts.master')
@section('title') Home @endsection
@section('content')
    <!--================= Wrapper Start Here =================-->
    <div class="react-wrapper">
        <div class="react-wrapper-inner">
             @include('layouts.slider')
            <!--=================  About Section Start Here ================= -->
                <div class="about__area about__area_one p-relative pt---10 pb---120">
                    <div class="container">                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about__image">
                                    <img src="build/images/about/ab.png" alt="About">
                                    <img class="react__shape__ab" src="build/images/preload.png" alt="Shape Image">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about__content">
                                    <h2 class="about__title">Welcome to <br> <em>English Master Academy</em></h2>
                                    <p class="about__paragraph">Education is both the act of teaching knowledge to others and<br> the act of receiving knowledge from someone else.</p>
                                    <p class="about__paragraph2"> At English Master Academy, we believe that mastering the English language opens doors to new opportunities, enhances communication skills, and empowers individuals to achieve their personal and professional goals. Whether you are a beginner looking to build a strong foundation or an advanced learner aiming to refine your fluency, our dedicated team is here to guide you on your journey</p>
                                    <ul>
                                        <li><a href="about.html" class="more-about"> Connect with Our Expert <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a></li>
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
               <!--=================  Campus Section Start Here ================= -->
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
                                                <p>We believe in tailored instruction that meets your specific goals and learning style</p>
                                            </div>
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="build/images/campus/2.svg" alt="image">
                                            </div>
                                            <div class="text">
                                                <h4>Interactive Classes</h4>
                                                <p>Engage in dynamic, interactive lessons that make learning enjoyable and effective</p>
                                            </div>
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="build/images/campus/3.svg" alt="image">
                                            </div>
                                            <div class="text">
                                                <h4>Supportive Environment</h4>
                                                <p>Join a community of learners where you can practice your skills confidently.</p>
                                            </div>
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                        </li>
                                    </ul>  
                                </div>                              
                            </div>
                            <div class="col-lg-5">                                
                                <div class="about__image">
                                    <img src="build/images/campus/4.png" alt="image">
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
                            <div class="col-md-6">
                                <div class="item__inner">                                    
                                    <div class="icon">
                                        <img src="build/images/featured/1.png" alt="Icon image">
                                    </div>
                                    <div class="react-content">
                                        <h5 class="price">1.200.000vnd/month</h5>
                                        <h3><a href="#">English Communication Class</a></h3>
                                        <p>The English Communication class consists of 12 classes per month and is designed to improve your speaking, listening, grammar, and vocabulary skills.</p><br>
                                        <ul class="react-lessones">
                                            <li class="react-book"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> 66 Lessones</li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> 49 Students </li>
                                        </ul>
                                    </div>                                    
                                </div>
                            </div>    
                            <div class="col-md-6">
                                <div class="item__inner">                                    
                                    <div class="icon">
                                        <img src="build/images/featured/2.png" alt="Icon image">
                                    </div>
                                    <div class="react-content">
                                        <h5 class="price">3.000.000vnd/month</h5>
                                        <h3><a href="#">English Communication Class </a></h3>
                                        <p>The one-on-one English Communication class includes 12 classes per month, focusing on grammar, vocabulary, pronunciation, communication, and listening</p>
                                        <ul class="react-lessones">
                                            <li class="react-book"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> 46 Lessones</li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> 32 Students </li>
                                        </ul>
                                    </div>                                    
                                </div>
                            </div> 
             
                        </div>
                    </div>
                </div>
                <!--=================  Featured Section End Here ================= -->

                <!--=================  Satisfaction Section Start Here ================= -->
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
                                        <div class="parag">We are a Portsmouth based web design and e-marketing agency. We understand how important a website is to any business, big or small. Your online presence is now more important than ever before.</div>
                                    </div>
                                    <img class="poly" src="build/images/testimonial/poly.png" alt="image">
                                </div>
                                <div class="author-sec">
                                    <div class="icon">
                                        <img src="build/images/testimonial/1.png" alt="image">
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
                                        <div class="parag">We are a Portsmouth based web design and e-marketing agency. We understand how important a website is to any business, big or small. Your online presence is now more important than ever before.</div>
                                    </div>
                                    <img class="poly" src="build/images/testimonial/poly.png" alt="image">
                                </div>
                                <div class="author-sec">
                                    <div class="icon">
                                        <img src="build/images/testimonial/2.png" alt="image">
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
                                        <div class="parag">We are a Portsmouth based web design and e-marketing agency. We understand how important a website is to any business, big or small. Your online presence is now more important than ever before.</div>
                                    </div>
                                    <img class="poly" src="build/images/testimonial/poly.png" alt="image">
                                </div>
                                <div class="author-sec">
                                    <div class="icon">
                                        <img src="build/images/testimonial/3.png" alt="image">
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
                                        <div class="parag">We are a Portsmouth based web design and e-marketing agency. We understand how important a website is to any business, big or small. Your online presence is now more important than ever before.</div>
                                    </div>
                                    <img class="poly" src="build/images/testimonial/poly.png" alt="image">
                                </div>
                                <div class="author-sec">
                                    <div class="icon">
                                        <img src="build/images/testimonial/1.png" alt="image">
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