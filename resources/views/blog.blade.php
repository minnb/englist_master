@extends('layouts.master',['bodyClass' => 'blog-post-page'])
@section('title') Blog @endsection
@section('content')
    <!--================= Wrapper Start Here =================-->
    <div class="react-wrapper">
        <div class="react-wrapper-inner">
            <!--================= Breadcrumbs Section Start Here =================-->
            <div class="react-breadcrumbs">
                <div class="breadcrumbs-wrap">
                    <img class="desktop" src="{{ URL::asset('build/images/breadcrumbs/333.jpg') }}" alt="Breadcrumbs">
                    <img class="mobile" src="{{ URL::asset('build/images/breadcrumbs/333.jpg') }}" alt="Breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="container">
                            <div class="breadcrumbs-text">
                                <h1 class="breadcrumbs-title">Blog</h1>
                                <div class="back-nav">
                                    <ul>
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li>Blog</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Breadcrumbs Section End Here =================-->

            <!--================= Course Filter Section Start Here =================-->
            <div class="react-blog-page pb---40 pt---110">
                <div class="container pb---70">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="blog-grid">
                                <div class="single-blog">
                                    <div class="inner-blog">
                                        <div class="blog-img">
                                            <a href="javascript:void(0);" class="cate">Web Design</a>
                                            <img src="{{ URL::asset('build/images/blog-grid/0.jpg') }}" alt="Blog Image">
                                        </div>
                                        <div class="blog-content">
                                            <ul class="top-part">
                                                <li>
                                                    <img src="{{ URL::asset('build/images/user/1.jpg') }}" alt="user"> Hustin
                                                    Case
                                                </li>
                                                <li class="date-part">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-clock">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <polyline points="12 6 12 12 16 14"></polyline>
                                                    </svg> Jun 16, 2022
                                                </li>
                                                <li>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg> 225 views
                                                </li>
                                            </ul>

                                            <h3 class="blog-title"><a href="{{ url('blog-details') }}">7 Learning management system
                                                    design tips <br>For better eLearning</a></h3>
                                            <p class="blog-desc">Why I say old chap that is spiffing in my flat such a
                                                fibber mufty mush, porkies barney<br>pukka only a quid a what a load of
                                                rubbish good time.</p>
                                            <div class="button__sec">
                                                <a href="{{ url('blog-details') }}" class="blog-btn">Read More <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-arrow-right">
                                                        <line x1="5" y1="12" x2="19" y2="12">
                                                        </line>
                                                        <polyline points="12 5 19 12 12 19"></polyline>
                                                    </svg></a>
                                                <div class="share-course">
                                                    Post Share <em><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-share-2">
                                                            <circle cx="18" cy="5" r="3"></circle>
                                                            <circle cx="6" cy="12" r="3"></circle>
                                                            <circle cx="18" cy="19" r="3"></circle>
                                                            <line x1="8.59" y1="13.51" x2="15.42"
                                                                y2="17.49"></line>
                                                            <line x1="15.41" y1="6.51" x2="8.59"
                                                                y2="10.49"></line>
                                                        </svg></em>
                                                    <span>
                                                        <a href="javascript:void(0);"><i aria-hidden="true"
                                                                class="social_facebook"></i></a>
                                                        <a href="javascript:void(0);"><i aria-hidden="true"
                                                                class="social_twitter"></i></a>
                                                        <a href="javascript:void(0);"><i aria-hidden="true"
                                                                class="social_linkedin"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-blog">
                                    <div class="inner-blog">
                                        <div class="blog-img">
                                            <a href="javascript:void(0);" class="cate">Web Design</a>
                                            <img src="{{ URL::asset('build/images/blog-grid/0.jpg') }}" alt="Blog Image">
                                        </div>
                                        <div class="blog-content">
                                            <ul class="top-part">
                                                <li>
                                                    <img src="{{ URL::asset('build/images/user/1.jpg') }}" alt="user">
                                                    Nerte Gronw
                                                </li>
                                                <li class="date-part">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-clock">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <polyline points="12 6 12 12 16 14"></polyline>
                                                    </svg> Jun 16, 2022
                                                </li>
                                                <li>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg> 225 views
                                                </li>
                                            </ul>

                                            <h3 class="blog-title"><a href="{{ url('blog-details') }}">Why public schools should
                                                    continue to use <br> Remote learning</a></h3>
                                            <p class="blog-desc">Why I say old chap that is spiffing in my flat such a
                                                fibber mufty mush, porkies barney<br>pukka only a quid a what a load of
                                                rubbish good time.</p>
                                            <div class="button__sec">
                                                <a href="{{ url('blog-details') }}" class="blog-btn">Read More <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-arrow-right">
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                        <polyline points="12 5 19 12 12 19"></polyline>
                                                    </svg></a>
                                                <div class="share-course">
                                                    Post Share <em><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-share-2">
                                                            <circle cx="18" cy="5" r="3"></circle>
                                                            <circle cx="6" cy="12" r="3"></circle>
                                                            <circle cx="18" cy="19" r="3"></circle>
                                                            <line x1="8.59" y1="13.51" x2="15.42"
                                                                y2="17.49"></line>
                                                            <line x1="15.41" y1="6.51" x2="8.59"
                                                                y2="10.49"></line>
                                                        </svg></em>
                                                    <span>
                                                        <a href="javascript:void(0);"><i aria-hidden="true"
                                                                class="social_facebook"></i></a>
                                                        <a href="javascript:void(0);"><i aria-hidden="true"
                                                                class="social_twitter"></i></a>
                                                        <a href="javascript:void(0);"><i aria-hidden="true"
                                                                class="social_linkedin"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-blog no-thum-img">
                                    <div class="inner-blog">
                                        <div class="blog-content">
                                            <ul class="top-part">
                                                <li>
                                                    <img src="{{ URL::asset('build/images/user/1.jpg') }}" alt="user"> Owen
                                                    Christ
                                                </li>
                                                <li class="date-part">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-clock">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <polyline points="12 6 12 12 16 14"></polyline>
                                                    </svg> Jun 16, 2022
                                                </li>
                                                <li>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg> 225 views
                                                </li>
                                            </ul>

                                            <h3 class="blog-title"><a href="{{ url('blog-details') }}">Why public schools should
                                                    continue to use <br> Remote learning</a></h3>
                                            <p class="blog-desc">Why I say old chap that is spiffing in my flat such a
                                                fibber mufty mush, porkies barney<br>pukka only a quid a what a load of
                                                rubbish good time.</p>
                                            <div class="button__sec">
                                                <a href="{{ url('blog-details') }}" class="blog-btn">Read More <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-arrow-right">
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                        <polyline points="12 5 19 12 12 19"></polyline>
                                                    </svg></a>
                                                <div class="share-course">
                                                    Post Share <em><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-share-2">
                                                            <circle cx="18" cy="5" r="3"></circle>
                                                            <circle cx="6" cy="12" r="3"></circle>
                                                            <circle cx="18" cy="19" r="3"></circle>
                                                            <line x1="8.59" y1="13.51" x2="15.42"
                                                                y2="17.49"></line>
                                                            <line x1="15.41" y1="6.51" x2="8.59"
                                                                y2="10.49"></line>
                                                        </svg></em>
                                                    <span>
                                                        <a href="javascript:void(0);"><i aria-hidden="true"
                                                                class="social_facebook"></i></a>
                                                        <a href="javascript:void(0);"><i aria-hidden="true"
                                                                class="social_twitter"></i></a>
                                                        <a href="javascript:void(0);"><i aria-hidden="true"
                                                                class="social_linkedin"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <blockquote>I’m thinking I’m back you want a war or youwant to just give me gun everything’s
                                    got aprice rusty <em> Judith Cooper</em></blockquote>
                                <div class="single-blog">
                                    <div class="inner-blog">
                                        <div class="blog-img">
                                            <a href="javascript:void(0);" class="cate">Web Design</a>
                                            <img src="{{ URL::asset('build/images/blog-grid/0.jpg') }}" alt="Blog Image">
                                        </div>
                                        <div class="blog-content">
                                            <ul class="top-part">
                                                <li>
                                                    <img src="{{ URL::asset('build/images/user/1.jpg') }}" alt="user">
                                                    Nerte Gronw
                                                </li>
                                                <li class="date-part">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-clock">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <polyline points="12 6 12 12 16 14"></polyline>
                                                    </svg> Jun 16, 2022
                                                </li>
                                                <li>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg> 225 views
                                                </li>
                                            </ul>

                                            <h3 class="blog-title"><a href="{{ url('blog-details') }}">The Role of conflict in a
                                                    political account of <br>Common Goods</a></h3>
                                            <p class="blog-desc">Why I say old chap that is spiffing in my flat such a
                                                fibber mufty mush, porkies barney<br>pukka only a quid a what a load of
                                                rubbish good time.</p>
                                            <div class="button__sec">
                                                <a href="{{ url('blog-details') }}" class="blog-btn">Read More <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-arrow-right">
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                        <polyline points="12 5 19 12 12 19"></polyline>
                                                    </svg></a>
                                                <div class="share-course">
                                                    Post Share <em><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-share-2">
                                                            <circle cx="18" cy="5" r="3"></circle>
                                                            <circle cx="6" cy="12" r="3"></circle>
                                                            <circle cx="18" cy="19" r="3"></circle>
                                                            <line x1="8.59" y1="13.51" x2="15.42"
                                                                y2="17.49"></line>
                                                            <line x1="15.41" y1="6.51" x2="8.59"
                                                                y2="10.49"></line>
                                                        </svg></em>
                                                    <span>
                                                        <a href="javascript:void(0);"><i aria-hidden="true"
                                                                class="social_facebook"></i></a>
                                                        <a href="javascript:void(0);"><i aria-hidden="true"
                                                                class="social_twitter"></i></a>
                                                        <a href="javascript:void(0);"><i aria-hidden="true"
                                                                class="social_linkedin"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <blockquote class="block__link_q">They are providers and they are leaders and this period
                                    in history is going to shine a light.</blockquote>
                                <div class="single-blog">
                                    <div class="inner-blog">
                                        <div class="blog-img">
                                            <a href="javascript:void(0);" class="cate">Web Design</a>
                                            <img src="{{ URL::asset('build/images/blog-grid/0.jpg') }}" alt="Blog Image">
                                        </div>
                                        <div class="blog-content">
                                            <ul class="top-part">
                                                <li>
                                                    <img src="{{ URL::asset('build/images/user/1.jpg') }}" alt="user">
                                                    Hustin Case
                                                </li>
                                                <li class="date-part">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-clock">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <polyline points="12 6 12 12 16 14"></polyline>
                                                    </svg> Jun 16, 2022
                                                </li>
                                                <li>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg> 225 views
                                                </li>
                                            </ul>

                                            <h3 class="blog-title"><a href="{{ url('blog-details') }}">7 Learning management
                                                    system design tips <br>For better eLearning</a></h3>
                                            <p class="blog-desc">Why I say old chap that is spiffing in my flat such a
                                                fibber mufty mush, porkies barney<br>pukka only a quid a what a load of
                                                rubbish good time.</p>
                                            <div class="button__sec">
                                                <a href="{{ url('blog-details') }}" class="blog-btn">Read More <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-arrow-right">
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                        <polyline points="12 5 19 12 12 19"></polyline>
                                                    </svg></a>
                                                <div class="share-course">
                                                    Post Share <em><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-share-2">
                                                            <circle cx="18" cy="5" r="3"></circle>
                                                            <circle cx="6" cy="12" r="3"></circle>
                                                            <circle cx="18" cy="19" r="3"></circle>
                                                            <line x1="8.59" y1="13.51" x2="15.42"
                                                                y2="17.49"></line>
                                                            <line x1="15.41" y1="6.51" x2="8.59"
                                                                y2="10.49"></line>
                                                        </svg></em>
                                                    <span>
                                                        <a href="javascript:void(0);"><i aria-hidden="true"
                                                                class="social_facebook"></i></a>
                                                        <a href="javascript:void(0);"><i aria-hidden="true"
                                                                class="social_twitter"></i></a>
                                                        <a href="javascript:void(0);"><i aria-hidden="true"
                                                                class="social_linkedin"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--================= Pagination Section Start Here =================-->
                            <ul class="back-pagination">
                                <li><a href="javascript:void(0);">1</a></li>
                                <li><a href="javascript:void(0);">2</a></li>
                                <li class="back-next"><a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></a></li>
                            </ul>
                            <!--================= Pagination Section End Here =================-->
                        </div>
                        <div class="col-lg-4">
                            <div class="react-sidebar ml----30">
                                <div class="widget back-search">
                                    <h3 class="widget-title">Search</h3>
                                    <form>
                                        <input type="text" name="input" placeholder="Search...">
                                        <button> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65">
                                                </line>
                                            </svg> </button>
                                    </form>
                                </div>
                                <div class="widget back-post">
                                    <h3 class="widget-title">Popular Posts</h3>
                                    <ul class="related-courses">
                                        <li>
                                            <a href="{{ url('coureses-single') }}"><span class="post-images"><img
                                                        src="{{ URL::asset('build/images/blog/4.png') }}" alt="post"></span></a>
                                            <div class="titles">
                                                <h4><a href="{{ url('coureses-single') }}">A Better alternative <br>to grading
                                                        student writing</a></h4>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-clock">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <polyline points="12 6 12 12 16 14"></polyline>
                                                    </svg> Dec 28, 2022</span>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="{{ url('coureses-single') }}"><span class="post-images"><img
                                                        src="{{ URL::asset('build/images/blog/5.png') }}" alt="post"></span></a>
                                            <div class="titles">
                                                <h4><a href="{{ url('coureses-single') }}">Strategic Social <br>Media & evolution
                                                        of visual</a></h4>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-clock">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <polyline points="12 6 12 12 16 14"></polyline>
                                                    </svg> April 14, 2022</span>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="{{ url('coureses-single') }}"><span class="post-images"><img
                                                        src="{{ URL::asset('build/images/blog/6.png') }}" alt="post"></span></a>
                                            <div class="titles">
                                                <h4><a href="{{ url('coureses-single') }}">Adobe lightroom <br>for beginners
                                                        complete</a></h4>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-clock">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <polyline points="12 6 12 12 16 14"></polyline>
                                                    </svg> Jun 27, 2022</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget react-categories-course">
                                    <h3 class="widget-title">Course categories</h3>
                                    <ul class="recent-category">
                                        <li> <a href="javascript:void(0);">Art & Design <em>(6)</em></a></li>
                                        <li> <a href="javascript:void(0);">Exercise <em>(4)</em></a></li>
                                        <li> <a href="javascript:void(0);">Photography <em>(8)</a></em></li>
                                        <li> <a href="javascript:void(0);">Environmental Sciences <em>(3)</em></a></li>
                                        <li> <a href="javascript:void(0);">Software Training <em>(5)</em></a></li>
                                        <li> <a href="javascript:void(0);">Software Development <em>(2)</em></a></li>
                                        <li> <a href="javascript:void(0);">Music <em>(10)</em></a></li>
                                        <li> <a href="javascript:void(0);">Material Design <em>(2)</em></a></li>
                                        <li> <a href="javascript:void(0);">Technology <em>(7)</em></a></li>
                                    </ul>
                                </div>
                                <div class="widget widget-tags">
                                    <h3 class="widget-title">Tags</h3>
                                    <ul class="tags">
                                        <li><a href="javascript:void(0);">Education</a></li>
                                        <li><a href="javascript:void(0);">SEO Marketing</a></li>
                                        <li><a href="javascript:void(0);">Business</a></li>
                                        <li><a href="javascript:void(0);">Solutions</a></li>
                                        <li><a href="javascript:void(0);">UX</a></li>
                                        <li><a href="javascript:void(0);">Case Study</a></li>
                                        <li><a href="javascript:void(0);">Creative</a></li>
                                        <li><a href="javascript:void(0);">Insights</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Course Filter Section End Here =================-->

        </div>
    </div>
    <!--================= Wrapper End Here =================-->
@endsection
