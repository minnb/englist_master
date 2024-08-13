@extends('layouts.master')
@section('title') Coureses @endsection
@section('content')
<!--================= Wrapper Start Here =================-->
<div class="react-wrapper">
    <div class="react-wrapper-inner">
        <!--================= Breadcrumbs Section Start Here =================-->
        <div class="react-breadcrumbs">
            <div class="breadcrumbs-wrap">
                <img class="desktop" src="build/images/breadcrumbs/2.jpg" alt="Breadcrumbs">
                <img class="mobile"  src="build/images/breadcrumbs/22.jpg" alt="Breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="container">
                        <div class="breadcrumbs-text">
                            <a href="#" class="cate">Marketing</a>
                            <h1 class="breadcrumbs-title">Everything You Need to Know <br>About Business.</h1>
                        </div>
                    </div>
                </div>
            </div>                
        </div>
    </div>
</div>
<!--================= Breadcrumbs Section End Here =================-->
<div class="back__course__page_grid react-courses__single-page pb---16 pt---110">
                    <div class="container pb---70">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="course-single-tab">
                                    <ul class="nav nav-tabs" id="back-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="discriptions" data-bs-toggle="tab" href="#discription" role="tab" aria-controls="discription" aria-selected="true">Discription</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="curriculums" data-bs-toggle="tab" href="#curriculum" role="tab" aria-controls="curriculum" aria-selected="false">Curriculum</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="reviewss" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="members" data-bs-toggle="tab" href="#member" role="tab" aria-controls="member" aria-selected="false">FAQ</a>
                                        </li>                                                                                
                                    </ul>
                                    <div class="tab-content" id="back-tab-content">
                                        <div class="tab-pane fade show active" id="discription" role="tabpanel" aria-labelledby="discription">
                                            <h3>About This Course</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat nis Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occae cat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                                            <p>Sed ut perspiciatis unde om nis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo in ve ntore veritatis et qua architecto beatae vitae dicta sunt explicabo.Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt neu e porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur ad ipisci velit, sed quia non numquame senius modi tempora incidunt ut labore et dolore magnam.</p>

                                            <div class="image-banner"><img src="build/images/course-single/1.jpg" alt="user"></div>
                                        </div>
                                        <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum">
                                            <h3>Course Curriculum</h3>
                                            <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
                                            <div class="single-week">
                                                <ul class="week__top">
                                                    <li>Week 1</li>
                                                    <li>0/4</li>
                                                </ul>
                                                <h3>Beginners level</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur dolorili adipiscing elit. Felis donec massa aliquam id.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                                                <h3>2 Videos,1 Audio,1 Reading</h3>
                                                <ul class="course__title">
                                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg> <b>Video:</b> Greetings and Introductions <em class="questions">2 questions</em> <em><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 12 minutes</em></li>
                                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg> <b>Video:</b> Introducing Elizabeth Gerber <em> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 26 minutes</em></li>
                                                </ul>
                                            </div>                                            
                                        </div>
                                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews">
                                            <h3>Reviews</h3>                                            
                                            <div class="row mt---40 mb----40">
                                                <div class="col-lg-4">
                                                    <div class="five__number">
                                                        <em>4.5</em>
                                                        <div class="back-ratings"> 
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                        </div>
                                                        <h6>(4 Ratings)</h6>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="back-progress-bar">
                                                        <div class="skillbar-style2">
                                                            <div class="skill_inners">
                                                                <span class="skillbar-title">5 stars</span>
                                                                <div class="skillbars green-dark-bg" data-percent="100">               
                                                                    <p class="skillbar-bar"></p> 
                                                                </div>
                                                                <span>2</span>                                                                
                                                            </div>
                                                            <div class="skill_inners">
                                                                <span class="skillbar-title">4 stars</span>
                                                                <div class="skillbars green-dark-bg" data-percent="50">               
                                                                    <p class="skillbar-bar"></p> 
                                                                </div>
                                                                <span>1</span>                                                                
                                                            </div>
                                                            <div class="skill_inners">
                                                                <span class="skillbar-title">3 stars</span>
                                                                <div class="skillbars green-dark-bg" data-percent="30">               
                                                                    <p class="skillbar-bar"></p> 
                                                                </div>
                                                                <span>1</span>                                                                
                                                            </div>
                                                            <div class="skill_inners">
                                                                <span class="skillbar-title">2 stars</span>
                                                                <div class="skillbars green-dark-bg" data-percent="10">               
                                                                    <p class="skillbar-bar"></p> 
                                                                </div>
                                                                <span>0</span>                                                                
                                                            </div>
                                                            <div class="skill_inners">
                                                                <span class="skillbar-title">1 stars</span>
                                                                <div class="skillbars green-dark-bg" data-percent="0">               
                                                                    <p class="skillbar-bar"></p> 
                                                                </div>
                                                                <span>0</span>                                                                
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="post-author">
                                                <div class="avatar">
                                                    <img src="build/images/course-single/user4.jpg" alt="user"> 
                                                </div>
                                                <div class="info">
                                                    <div class="back-ratings"> 
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                    </div>
                                                    <h4 class="name">Bodrum Says <span class="designation">July 8, 2022 at 7:38 am</span></h4>
                                                    <p>Mi eget mauris pharetra et. Bibendum arcu vitae elementum curabitur vitae. Viverra mauris in aliquam sem fringilla ut morbi tincidunt aliquam purus.</p>          
                                                </div>
                                            </a>

                                            <a href="#" class="post-author">
                                                <div class="avatar">
                                                    <img src="build/images/course-single/user5.jpg" alt="user"> 
                                                </div>
                                                <div class="info"> 
                                                    <div class="back-ratings"> 
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                    </div>                                                                                 
                                                    <h4 class="name">Hanson Deck <span class="designation">July 9, 2022 at 6:20 am</span></h4>
                                                    <p>Lobortis elementum nibh tellus molestie praesent semper feugiat nibh sed pulvinar proin.</p>
                                                </div>
                                            </a>
                                            <div class="blog-form pt---30">
                                                <h3>Write a Review</h3>
                                                <p class="pb---15">Your email address will not be published. Required fields are marked *</p>
                                                <form id="contact-form">                                                    
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="back-input">
                                                                <input id="name" type="text" name="name" placeholder="Name">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 pdl-5">
                                                            <div class="back-input">
                                                                <input id="email" type="email" name="email" placeholder="Email">                                  
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-12">
                                                            <div class="back-input">
                                                                <input id="subject" type="text" name="subject" placeholder="Subject">                                  
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="back-ratings"> <b>Ratings:</b> 
                                                                <i class="icon_star"></i>
                                                                <i class="icon_star"></i>
                                                                <i class="icon_star"></i>
                                                                <i class="icon_star"></i>
                                                                <i class="icon_star"></i>
                                                            </div>
                                                            <div class="back-textarea">
                                                                <textarea id="message" name="message" placeholder="Message"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">                                                
                                                            <button type="submit" class="back-btn">Submit Review <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button>
                                                        </div>
                                                    </div>                                                    
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="member" role="tabpanel" aria-labelledby="member">
                                            <h3>FAQ</h3>
                                            <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitaes erat consequat auctor eu in elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="react-course-filter related__course">                                  
                                    <h3>Related Courses</h3>                                             
                                    <div class="row react-grid">                            
                                        <div class="single-studies col-lg-6 grid-item">
                                            <div class="inner-course">
                                                <div class="case-img">
                                                    <a href="#" class="cate-w">Web Design</a>
                                                    <img src="build/images/course-filter/1.jpg" alt="Course Image">
                                                </div>
                                                <div class="case-content">
                                                    <ul class="meta-course">
                                                        <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> 4.5 review </li>
                                                        <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> 44 Students </li>
                                                    </ul>
                                                    <h4 class="case-title"> <a href="coureses-single.html">The Most Complete Design <br>Thinking Course On The Market.</a></h4>
                                                    <div class="react__user">
                                                        <img src="build/images/course-single/user_small.png" alt="user"> Justin Case
                                                    </div>
                                                    <ul class="react-ratings">
                                                        <li class="react-book"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> Lessones</li>
                                                        <li class="price">$34.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-studies col-lg-6 grid-item">
                                            <div class="inner-course">
                                                <div class="case-img">
                                                    <a href="#" class="cate-w">Marketing</a>
                                                    <img src="build/images/course-filter/2.jpg" alt="Course Image">
                                                </div>
                                                <div class="case-content">
                                                    <ul class="meta-course">
                                                        <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> 3.5 review </li>
                                                        <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> 55 Students </li>
                                                    </ul>
                                                    <h4 class="case-title"> <a href="coureses-single.html">Everything You Need to Know <br> About Business.</a></h4>
                                                    <div class="react__user">
                                                        <img src="build/images/course-single/user_small.png" alt="user"> Natasha Pawel
                                                    </div>
                                                    <ul class="react-ratings">
                                                        <li class="react-book"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> 9 Lessones </li>
                                                        <li class="price">$89.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 md-mt-60">
                                <div class="react-sidebar react-back-course2 ml----30">                                                                        
                                    <div class="widget get-back-course">                                       
                                        <ul class="price">
                                            <li>$ 72 USD</li>
                                            <li>$ 95 USD</li>
                                            <li>25% OFF</li>
                                        </ul>                                        
                                        <ul class="price__course">
                                            <li> <i class="icon_profile"></i> Instructor <b>Penny Tool</b></li>
                                            <li><i class="icon_tag_alt"></i> Subject <b>IT & Software</b></li>
                                            <li> <i class="icon_group"></i> Enrolled <b>146 students</b></li>
                                            <li><i class="icon_clock_alt"></i> Duration <b>2 weeks</b></li>
                                            <li><i class="icon_book_alt"></i> Lectures <b>4 lectures</b></li>
                                            <li><i class="icon_map_alt"></i> Language <b> English</b></li>
                                        </ul>
                                        <a href="#" class="start-btn">Start Now <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                        <div class="share-course">Share this course <em><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg></em>
                                            <span>
                                                <a href="#"><i aria-hidden="true" class="social_facebook"></i></a>
                                                <a href="#"><i aria-hidden="true" class="social_twitter"></i></a>
                                                <a href="#"><i aria-hidden="true" class="social_linkedin"></i></a>
                                            </span>
                                        </div>
                                    </div> 
                                    <div class="widget react-categories-course">
                                        <h3 class="widget-title">Course categories</h3>
                                        <ul class="recent-category">
                                            <li> <a href="#">Art & Design (6)</a></li>
                                            <li> <a href="#">Exercise (4)</a></li>
                                            <li> <a href="#">Photography (8)</a></li>
                                            <li> <a href="#">Environmental Sciences (3)</a></li>
                                            <li> <a href="#">Software Training (5)</a></li>
                                            <li> <a href="#">Software Development (2)</a></li>
                                            <li> <a href="#">Music (10)</a></li>
                                            <li> <a href="#">Material Design (2)</a></li>
                                            <li> <a href="#">Technology (7)</a></li>
                                        </ul>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
                <!--================= Course Filter Section End Here =================--> 

@endsection