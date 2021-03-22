<?php
$admin_common = session()->get('admin_common');
?>
<?php
$admin_common = session()->get('admin_common');
?>
        <!doctype html>
<html class="no-js" lang="">
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl" xml:lang="ar" lang="ar">
<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, application admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <!-- /meta -->

    <title>Admin Panel</title>

    <!-- page level plugin styles -->
    <!-- /page level plugin styles -->

    <!-- build:css({.tmp,app}) styles/app.min.css -->
    <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
    <link rel="stylesheet" href="{{ asset('theme/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/styles/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/styles/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/styles/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/styles/sublime.css') }}">
    <link rel="stylesheet" href="{{ asset('cssjs/myapp.css') }}">
    <link rel="stylesheet" href="{{ asset('cssjs/jquery.timeentry.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
@yield('css')
@yield('extra_css')
<!-- endbuild -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- load modernizer -->
    <script src="{{ asset('theme/vendor/modernizr.js') }}"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>


</head>

<!-- body -->

<body>
<div class="app">
    <!-- top header -->
    <header class="header header-fixed navbar">

        <div class="brand">
            <!-- toggle offscreen menu -->
            <a href="javascript:;" class="ti-menu off-left visible-xs" data-toggle="offscreen" data-move="ltr"></a>
            <!-- /toggle offscreen menu -->

            <!-- logo -->
            <a href="{{asset('index.php/home')}}" class="navbar-brand">
            
            <div class="row">
               
             <div class="myimg mmyimg" >
                <img src="{{ asset('images/logo2.png') }}" alt="">
             </div>
            </div>
            
                <!-- <span class="heading-font">HRS Academy</span> -->
            </a>
            <!-- /logo -->
        </div>

        <ul class="nav navbar-nav">
            <li class="hidden-xs">
                <!-- toggle small menu -->
                <a href="javascript:;" class="toggle-sidebar">
                    <i class="ti-menu"></i>
                </a>
                <!-- /toggle small menu -->
            </li>
            <li class="header-search">
            </li>
        </ul>


       

        <ul class="nav navbar-nav navbar-right">

          <li class="mysrch row justify-content-center">
           <div class="col-sm-11">  
<div class="mybstsrch">
               <input type="search" id="mybox" class="form-control" placeholder="Search for........" />
        </div>
</div>
              <div class="col-sm-1 justify-content-center">
           <i class="fa fa-search mysrchbox fa-3x"></i>
           </div>

       
    </li>
        

            <li class="off-right hidden-xs">
                <a href="javascript:;" data-toggle="dropdown" class="no-hover">
                    <img src="{{ asset('theme/images/avatar.jpg') }} " class="header-avatar img-circle" alt="user" title="user">
                    <!-- <i class="ti-angle-down ti-caret hidden-xs"></i> -->
                </a>
            </li>

           
       

            <!-- <li class="off-right">
                <form action="{{asset('index.php/admin/logout')}}">
                    <input type="submit" class="btn btn-danger btn-rounded margin-top"
                           value="LogOut">
                </form>
                          <button type="button" class="btn btn-danger btn-rounded margin-top">LogOut</button>
            </li> -->

        </ul>
    </header>
    <!-- /top header -->

    <section class="layout">
        <!-- sidebar menu -->
        <aside class="sidebar offscreen-left">
            <!-- main navigation -->
            <nav style="overflow: hidden;" class="main-navigation" data-height="auto" data-size="6px" data-distance="0" data-rail-visible="true" data-wheel-step="10">
                <p class="nav-title">MENU</p>
                <ul class="nav">
                    <!-- dashboard -->
                    <li>
                        <a href="{{asset('admin/dashboard')}}">
                        <img src="{{ asset('images/icon-13.png') }}" alt="">
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- /dashboard -->


                    <!-- Modules -->
                    <!-- <li>
                        <a href="javascript:;">
                            <i class="toggle-accordion"></i>
                            <i class="ti-settings"></i>
                            <i class="fa fa-table" aria-hidden="true"></i>
                            <span>Modules</span>
                        </a>
                        <ul class="sub-menu">

                            @foreach($admin_common->modules as $key => $module)
                                <li>
                                    <a href="{!! asset('index.php/'.$module['url']) !!}">
                                        <span>{!! $module['title'] !!}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li> -->

                    <li>
                        <a href="{{asset('admin/courses')}}">
                        <img src="{{ asset('images/icon-14.png') }}" alt="">
                            <span>All Courses</span>
                        </a>
                    </li>
                 
                    <li>
                        <a href="{{asset('admin/promocode')}}">
                        <img src="{{ asset('images/icon-16.png') }}" alt="">
                            <span>Promo Code</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('admin/listoforder')}}">
                        <img src="{{ asset('images/icon-17.png') }}" alt="">
                            <span>Orders</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('admin/group')}}">
                        <img src="{{ asset('images/icon-17.png') }}" alt="">
                            <span>Groups</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('admin/addblog')}}">
                        <img src="{{ asset('images/icon-18.png') }}" alt="">      
                        <span>Add Blog</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{asset('admin/ticket')}}">
                        <img src="{{ asset('images/icon-19.png') }}" alt="">
                            <span>  Ticket</span>
                        </a>
                    </li>
                    <!-- /Modules -->


                    <!-- Reports -->
                    {{-- <li>
                        <a href="javascript:;">
                            <i class="toggle-accordion"></i>
                            <!-- <i class="ti-support"></i> -->
                            <i class="fa fa-line-chart"></i>
                            <span>Reports</span>
                        </a>
                        <ul class="sub-menu">

                            @foreach($admin_common->reports as $key => $report)  <li>
                            <li>
                                <a href="{{asset('index.php/'.$report['url'])}}">
                                    <span>{!! $report['title'] !!}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li> --}}
                    <!-- /Reports -->


                </ul>
            </nav>
        </aside>
        <!-- /sidebar menu -->

        <!-- main content -->
        <section class="main-content">
            <!-- content wrapper -->
            <div class="content-wrap">
                <!-- inner content wrapper -->
                <div class="wrapper no-p">



                    <div class="app">
                        <section class="layout">
                            <!-- main content -->
                            <section class="main-content">
                                <!-- content wrapper -->
                                <div class="content-wrap">
                                    <!-- inner content wrapper -->
                                    <div class="wrapper">
                                        @yield('content')
                                    </div>
                                    <!-- /inner content wrapper -->
                                </div>
                                <!-- /footer -->
                            @yield('footer')
                            <!-- /content wrapper -->
                                <a class="exit-offscreen"></a>
                            </section>
                            <!-- /main content -->
                        </section>

                    </div>


                </div>
                <!-- /inner content wrapper -->
            </div>
            <!-- /content wrapper -->
            <a class="exit-offscreen"></a>
        </section>
        <!-- /main content -->
    </section>

</div>

<div class="modal fade generalimgmodal in" id="" tabindex="-1" role="dialog" aria-hidden="false">
<div class="modal-dialog modal-mg ">
<div class="modal-content" id="confirm">
<div class="modal-header">
<h4 class="modal-title">Image</h4>
</div>
<div class="modal-body">
<div class="row">
<div id="my_msg_div" class="col-xs-12">
<img class="generalimgmodalsrc" src="">
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>


<!-- build:js({.tmp,app}) scripts/app.min.js -->
<!--   this file will be loaded individually for all files to avoide conficts  -->
<!--   <script src="{{ asset('theme/vendor/jquery/dist/jquery.js') }}"></script> -->
<script src="{{ asset('cssjs/jQuery-2.1.4.min.js')  }}"></script>
<script src="{{ asset('cssjs/jquery.plugin.js')}}"></script>
<script src="{{ asset('cssjs/jquery.timeentry.js')}}"></script>
<script src="{{ asset('theme/vendor/bootstrap/dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('theme/vendor/slimScroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('theme/vendor/jquery.easing/jquery.easing.js') }}"></script>
<script src="{{ asset('theme/vendor/jquery_appear/jquery.appear.js') }}"></script>
<script src="{{ asset('theme/vendor/jquery.placeholder.js') }}"></script>
<script src="{{ asset('theme/vendor/fastclick/lib/fastclick.js') }}"></script>
<!-- endbuild -->

<!-- page level scripts -->
<!-- /page level scripts -->



<!-- /template scripts -->
<script src="{{ asset('cssjs/map.js') }}"></script>
{
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>

<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@yield('app_jquery')

<!-- page script -->
<!-- /page script -->

<!-- template scripts -->
<script src="{{ asset('theme/scripts/main.js') }}"></script>
<script src="{{ asset('theme/scripts/offscreen.js') }}"></script>
@include('layouts.myapp_js')

<!-- /template scripts -->

</body>
<!-- /body -->

</html>
