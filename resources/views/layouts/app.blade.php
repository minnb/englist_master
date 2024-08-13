<!DOCTYPE html>
<html lang="en">

<head>
    <!--================= Meta tag =================-->
    <meta charset="utf-8">
    <title>@yield('title') | Echooling - Online Education Laravel 10 Template</title>
    <meta name="description" content="">
    <!--================= Responsive Tag =================-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--================= Favicon =================-->
    <link rel="apple-touch-icon" href="{{ URL::asset('build/images/fav.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('build/images/fav.png') }}">
    @include('layouts.head-css')
</head>

<body class="{{ isset($bodyClass) ? $bodyClass : '' }}">
    @include('layouts.preloader')

    @include('layouts.common-navbar')

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
