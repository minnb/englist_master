<!DOCTYPE html>
<html lang="en">

<head>
    <!--================= Meta tag =================-->
    <meta charset="utf-8">
    <title>Home | English Master Academy</title>
    <meta name="description" content="">
    <!--================= Responsive Tag =================-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--================= Favicon =================-->
    <link rel="apple-touch-icon" href="{{ URL::asset('build/images/fav.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('build/images/fav.png') }}">
    @include('layouts.head-css')
</head>

<body>
    @include('layouts.preloader')

    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')

    <!--================= Scroll to Top Start =================-->
    <div id="backscrollUp">
        <span aria-hidden="true" class="arrow_carrot-up"></span>
    </div>
    <!--================= Scroll to Top End =================-->

    @include('layouts.footer-scripts')
</body>

</html>
