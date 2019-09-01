<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Final Project of codeweekend</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
    <!-- adminpro icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/adminpro-custon-icon.css')}}">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css')}}">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css')}}">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <!-- summernote CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/summernote.css')}}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{ asset('css/data-table/bootstrap-editable.css')}}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/dropzone.css')}}">
    <!-- charts CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/c3.min.css')}}">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{ asset('js/templete/modernizr-2.8.3.min.js') }}" defer></script>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="img/message/1.jpg" alt="" />
                    </a>
                    <h3>Khalida Moslih</h3>
                    <p>Web Developer</p>
                    <strong>K/M</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a  href="{{ route('home') }}" class="dropdown-item">Home</a>
                               
                            </div>
                        </li>
                       
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Pages</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                  <a class="nav-link" href="{{ route('profile') }}">{{ __('Profile') }}</a>
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </a>
                               
                                
                               
                            </div>
                        </li>  
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Header top area start-->
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="img/logo/log.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12"><br>
                               <h3>Final Project of Codeweekend</h3>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item dropdown">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span class="adminpro-icon adminpro-chat-pro"></span><span class="indicator-ms"></span></a>
                                            
                                        </li>
                                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                           
                                        </li>
                                       
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Inbox</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 des-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
      <div class="container-fluid">
            @yield('content')
      </div>
        </div>
       
    <!-- Footer Start-->
    
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">

                        <div id="contact" class="contact">

                             <div id="social" style="color:white">
                                <ul >
                                 <li><a href="feacebook.com" title="facebook"><span class="fa fa-facebook-square"></span></a></li>
                                <li><a href="#" title="cell_phone"><span class="fa fa-phone-square"></span></a></li>
                                 <li><a href="github.com" title="github"><span class="fa fa-github-square"></span></a></li>
                                 <li><a href="linkedin.com" title="Linkedin"><span class="fa fa-linkedin-square"></span></a></li>
                                 <li><a href="twitter.com" title="twitter"><span class="fa fa-twitter-square"></span></a></li>
                                </ul>
                                <p> Made By <span style="color:red;"class="fa fa-heart"></span> Khalida Moslih</p>
                             </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
    
    <!-- jquery
        ============================================ -->
    <script src="{{ asset('js/templete/vendor/jquery-1.11.3.min.js')}}"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{ asset('js/templete/bootstrap.min.js')}}"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{ asset('js/templete/jquery.meanmenu.js')}}" deffer></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{ asset('js/templete/jquery.mCustomScrollbar.concat.min.js')}}" deffer></script>
    <!-- sticky JS
        ============================================ -->
    <script src="{{ asset('js/templete/jquery.sticky.js')}}" deffer></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{ asset('js/templete/jquery.scrollUp.min.js')}}" deffer></script>
    <!-- counterup JS
        ============================================ -->
    <script src="{{ asset('js/templete/counterup/jquery.counterup.min.js')}}" deffer></script>
    <script src="{{ asset('js/templete/counterup/waypoints.min.js')}}" deffer></script>
    <!-- map JS
        ============================================ -->
    <script src="{{ asset('js/templete/data-table/bootstrap-table.js')}}" deffer></script>
    <script src="{{ asset('js/templete/data-table/tableExport.js')}}" deffer></script>
    <script src="{{ asset('js/templete/data-table/data-table-active.js')}}" deffer></script>
    <script src="{{ asset('js/templete/data-table/bootstrap-table-editable.js')}}" deffer></script>
    <script src="{{ asset('js/templete/data-table/bootstrap-editable.js')}}" deffer></script>
    <script src="{{ asset('js/templete/data-table/bootstrap-table-resizable.js')}}" deffer></script>
    <script src="{{ asset('js/templete/data-table/colResizable-1.5.source.js')}}" deffer></script>
    <script src="{{ asset('js/templete/data-table/bootstrap-table-export.js')}}" deffer></script>
    <!--  dropzone JS
        ============================================ -->
    <script src="{{ asset('js/templete/dropzone.js')}}" deffer></script>
    <!-- multiple email JS
        ============================================ -->
    <script src="{{ asset('js/templete/multiple-email/multiple-email-active.js')}}" deffer></script>
    <!-- summernote JS
        ============================================ -->
    <script src="{{ asset('js/templete/summernote.min.js')}}" deffer></script>
    <script src="{{ asset('js/templete/summernote-active.js')}}" deffer></script>
    <!-- main JS
        ============================================ -->
    <script src="{{ asset('js/templete/main.js')}}"></script>
</body>

</html>