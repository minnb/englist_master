<?php
    function getRootCSS($name)
    {
        $route_name = \Str::upper(\Request::route()->getName());
        if(\Str::contains($route_name, \Str::upper($name))){
            echo "active open";
        }
        else
        {
            echo "";
        }
    }

    function getActiveCSS($name)
    {
        $route_name = \Str::upper(\Request::route()->getName());
        if(\Str::upper($name) == $route_name || \Str::contains($route_name, \Str::upper($name))){
            echo "active";
        }
        else
        {
            echo "";
        }
    }

    function getActiveRoot($name)
    {
        $route_name = \Str::upper(\Request::route()->getName());
        if(\Str::upper($name) == $route_name){
            echo "active";
        }
        else
        {
            echo "";
        }
    }
?>
<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
    <script type="text/javascript">
        try { ace.settings.loadState('sidebar'); } catch (e) { console.log(e); }
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="ace-icon fa fa-signal"></i>
            </button>

            <button class="btn btn-info">
                <i class="ace-icon fa fa-pencil"></i>
            </button>

            <button class="btn btn-warning">
                <i class="ace-icon fa fa-users"></i>
            </button>

            <button class="btn btn-danger">
                <i class="ace-icon fa fa-cogs"></i>
            </button>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li class="{{ getActiveRoot('dashboard') }}">
            <a href="{{ url('dashboard') }}">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="{{ getRootCSS('dashboard.page') }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Page </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{ getActiveCSS('get.dashboard.page') }}">
                    <a href="{{ route('get.dashboard.page.about') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        About
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ getActiveCSS('get.dashboard.page') }}">
                    <a href="{{ route('get.dashboard.page.choose') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Why Choose Us
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
        <li class="{{ getRootCSS('dashboard.product') }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-book"></i>
                <span class="menu-text"> Course </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{ getActiveCSS('get.dashboard.product') }}">
                    <a href="{{ route('get.dashboard.product.list') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        List
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
        <li class="{{ getRootCSS('dashboard.feedback') }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-book"></i>
                <span class="menu-text"> Feedback </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{ getActiveCSS('get.dashboard.feedback') }}">
                    <a href="{{ route('get.dashboard.feedback.list') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        List
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>


    </ul><!-- /.nav-list -->
    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>