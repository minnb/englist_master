<!--================= Scroll to Top Start =================-->
<div id="backscrollUp" class="home">
    <span aria-hidden="true" class="arrow_carrot-up"></span>
</div>
<!--================= Scroll to Top End =================-->

<!--================= Jquery latest version =================-->
<script src="build/js/jquery.min.js"></script>
<!--================= Modernizr js =================-->
<script src="build/js/modernizr-2.8.3.min.js"></script>
<!--================= Bootstrap js =================-->
<script src="build/js/bootstrap.min.js"></script>
<!--================= Owl Carousel js =================-->
<script src="build/js/owl.carousel.min.js"></script>
<!--================= Swiper Slider js =================-->
<script src="build/js/swiper-bundle.min.js"></script>
<!--================= Isotope filter js =================-->
<script src="build/js/isotope.pkgd.min.js"></script>
<!--================= Magnific Popup =================-->
<script src="build/js/jquery.magnific-popup.min.js"></script>
<!--================= Counter up js =================-->
<script src="build/js/jquery.counterup.min.js"></script>
<script src="build/js/waypoints.min.js"></script>
<!--================= Wow js =================-->
<script src="build/js/wow.min.js"></script>
<!--================= menus js =================-->
<script src="build/js/menus.js"></script>
<!--================= Plugins js =================-->
<script src="build/js/plugins.js"></script>
<!--================= Main js =================-->
<script src="build/js/main.js"></script>

<script>
    // dropdown show & hide
    $(".campus-dropdown-item > .showed").on("click", function () {
        var element = $(this).parent(".campus-dropdown-item");
        if (element.hasClass("active")) {
            element.removeClass("active");
        } else {
            element.siblings(".campus-dropdown-item").removeClass('active');
            element.addClass("active");
        }
    });
</script>