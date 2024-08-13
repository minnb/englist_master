<!--================= Footer Section Start Here =================-->
<footer id="react-footer" class="react-footer react-footer-two">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 md-mb-30">
                    <div class="footer-widget footer-widget-1">
                        <div class="footer-logo white">
                            <a href="{{ url('/') }}" class="logo-text"> <img src="{{ URL::asset('build/images/footer-logo2.png') }}" alt="logo"></a>
                        </div>
                        <h5 class="footer-subtitle">Best Online English Courses To Improve Your Communication<br></h5>
                        <ul class="footer-address">
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg><a href="tel:+(402)76244183"> +(91) 762 441 83 </a></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><a href="mailto:info@yourdmain.com"> english.master@gmail.com </a></li>
                        </ul>                               
                    </div>
                </div>
                <div class="col-lg-3 md-mb-30">
                    <div class="footer-widget footer-widget-2">
                        <h3 class="footer-title">About Us</h3>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="{{ url('about') }}">About</a></li>
                                <li><a href="{{ url('coureses') }}">Courses</a></li>
                                <li><a href="javascript:void(0);">Events</a></li>
                                <li><a href="{{ url('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 md-mb-30">
                    <div class="footer-widget footer-widget-3">
                        <h3 class="footer-title">Useful Links</h3>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="javascript:void(0);">Browse Library</a></li>
                                <li><a href="javascript:void(0);">Library</a></li>
                                <li><a href="{{ url('blog') }}">News & Blog</a></li>
                                <li><a href="javascript:void(0);">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget footer-widget-4">
                        <h3 class="footer-title">Newsletter</h3> 
                        <div class="footer3__form">
                            <p>Get the latest English Master Academy news <br>delivered to you inbox</p>
                            <form action="javascript:void(0);">
                                <input type="email" placeholder="Enter your email">
                                <button class="footer3__form-1">
                                    <i class="arrow_right"></i>
                                </button>
                            </form>
                        </div>                                                           
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="copyright">  
        <div class="container">                  
            <div class="react-copy-left">© {{ date('Y') }} <a href="javascript:void(0);">English Master.</a> All Rights Reserved</div>
            <div class="react-copy-right">
                <ul class="social-links">
                    <li class="follow">Follow us</li>
                    <li><a href="javascript:void(0);"><span aria-hidden="true" class="social_facebook"></span></a></li>
                    <li><a href="javascript:void(0);"><span aria-hidden="true" class="social_twitter"></span></a></li>
                    <li><a href="javascript:void(0);"><span aria-hidden="true" class="social_linkedin"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--================= Footer Section End Here =================-->