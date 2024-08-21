<!DOCTYPE html>
<html lang="en">
<head>
    <!--================= Meta tag =================-->
    <meta charset="utf-8">
    <title>@yield('title') | English Master</title>
    <meta name="description" content="">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{ URL::asset('build/images/fav.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('build/images/fav.png') }}">
    @include('admin.layouts.head-css')
</head>
<body class="no-skin">
    @include('admin.layouts.navbar')
    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try { ace.settings.loadState('main-container'); } catch (e) { console.log(e); }
    </script>
    @include('admin.layouts.sidebar')

    <div class="main-content">
            <div class="main-content-inner">
                <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="{{ URL('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="active">@yield('title')</li>
                    </ul><!-- /.breadcrumb -->

                    <div class="nav-search" id="nav-search">
                        <form class="form-search">
                            <span class="input-icon">
                                <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                <i class="ace-icon fa fa-search nav-search-icon"></i>
                            </span>
                        </form>
                    </div><!-- /.nav-search -->
                </div>
                <div class="page-content">
                    <div class="page-header">
                        <h1>
                            @yield('title')
                            <small>
                                <i class="ace-icon fa fa-angle-right"></i>
                                @yield('page-header')
                            </small>
                        </h1>
                    </div><!-- /.page-header -->

                    <div class="row">
                        <div class="col-xs-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @include('admin.layouts.footer')
</body>
</html>
