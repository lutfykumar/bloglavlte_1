<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar Laravel 5.3- {{ trans('adminlte_lang::message.landingdescription') }} ">
    <meta name="author" content="Bangchan">

    <!--<meta property="og:title" content="Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }}" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />-->

    <title>Bangchan - free Blog</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('vendors/bootstrap-3/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/font-awesome-4.6.3/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/adminlte_v2.3/css/AdminLTE.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/adminlte_v2.3/css/skins/_all-skins.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">


    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body>
    <div id="masthead" class="site-header" role="banner">
        <div class="info-top">
            <div class="container-fluid">
                <div class="col-xs-12 col-sm-6 col-md-8 ">
                    <div class="contact-area">
                        <span class="contact"><i class="fa fa-phone" aria-hidden="true"> +6285655131310</i></span>
                        <span class="contact"><a href="#" target="_blank"><i class="fa fa-envelope" aria-hidden="true">  Mail Admin</i></a></span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="asocial-area">
                        <span class="asocial-icon facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></span>
                        <span class="asocial-icon twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></span>
                        <span class="asocial-icon googleplus"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></span>
                        <span class="asocial-icon linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></span>
                        <span class="asocial-icon youtube"><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></span>
                        <span class="asocial-icon rss"><a href="#" target="_blank"><i class="fa fa-rss"></i></a></span>
                        <span class="asocial-icon instagram"><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></span>
                        <span class="asocial-icon flickr"><a href="#" target="_blank"><i class="fa fa-flickr"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="header-main">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header brand">
                    <div id="navigation-1" class="left">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <ul id="navi">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="vendors/adminlte_v2.3/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span id="nama-user">Alexander Pierce</span>
                            </a>
                            <ul class="dropdown-menu dropdown-user">

                                <li class="user-header">
                                    <img src="vendors/adminlte_v2.3/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                    <p>
                                        Alexander Pierce - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>

                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <a class="navbar-brand" href="#">Kumar</a>
                </div>
                <div class="collapse navbar-collapse collapses" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                        <div id="aaaa" class="pull-left">
                            <form class="navbar-form" action="" role="search">
                                <div class="form-group has-feedback">
                                    <label for="search" class="sr-only">Search</label>
                                    <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                </div>
                            </form>
                        </div>
                        <li><a href="#">Aplikasi</a></li>
                        <li class="active"><a href="#">Games</a></li>
                        <li><a href="#">Tips and Triks</a></li>
                        <li><a href="#">Tutorial</a></li>
                        <li><a href="#">Humor</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                        <ul class="nav navbar-nav navbar-right">

                            @if (Auth::guest())
                                <li id="usr"><a href="{{ url('/login') }}"><img src="{{ asset('vendors/adminlte_v2.3/img/user2-160x160.jpg') }}" class="user-image" alt="User Image"></a></li>
                            @else
                                <li id="usr"><a href="/home">{{ Auth::user()->name }}</a></li>
                            @endif
                            <!--<li id="usr" class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="vendors/adminlte_v2.3/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs">Alexander Pierce</span>
                            </a>
                            <ul class="dropdown-menu dropdown-user">

                                <li class="user-header">
                                    <img src="vendors/adminlte_v2.3/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                    <p>
                                        Alexander Pierce - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>

                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>-->

                        <form id="form-search" class="navbar-form" action="" role="search">
                            <div class="form-group has-feedback">
                                <label for="search" class="sr-only">Search</label>
                                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div id="main-home" class="container">
        <div class="row">
            <div  class="col-md-8">
                <div class="thumbnail news">
                    @yield('content')
                </div>
                <div class="thumbnail aps">
                </div>
                <div class="thumbnail aps">
                </div>
                <div class="thumbnail aps">
                </div>
                <div class="thumbnail aps">
                </div>
                <div class="thumbnail aps">
                </div>
            </div>
            <div id="arc-aps" class="col-md-4">
                <div class="thumbnail">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="thumbnail"></div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail"></div>
            </div>
        </div>
    </div>
    <div id="mastfoot" class="footer">
        <div id="main-footer" class="container">
            <div class="row">
                <div class="col-lg-2  col-md-2 fot-kiri">
                    <ul>
                        <li> <a href="#"> Shop </a> </li>
                        <li> <a href="#"> Aplikasi </a> </li>
                        <li> <a href="#"> Games </a> </li>
                        <li> <a href="#"> Tips and Tricks </a> </li>
                        <li> <a href="#"> Tutorial </a> </li>
                        <li> <a href="#"> Humor </a> </li>
                        <li> <a href="#"> News </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-3 col-xs-6">
                    <h3> Aplikasi </h3>
                    <ul>
                        <li>
                            <a href="#"> Aplikasi Windows </a>
                        </li>
                        <li> <a href="#"> Aplikasi Linux </a> </li>
                        <li> <a href="#"> Aplikasi Android </a> </li>
                        <li> <a href="#"> Terbaru </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-3 col-xs-6">
                    <h3> Games </h3>
                    <ul>
                        <li>
                            <a href="#"> Games PC </a>
                        </li>
                        <li> <a href="#"> Games Android </a> </li>
                        <li> <a href="#"> Game Populer </a> </li>
                        <li> <a href="#"> Terbaru </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-3 col-xs-6">
                    <h3> Tips and Tricks </h3>
                    <ul>
                        <li> <a href="#"> Tips Windows </a> </li>
                        <li> <a href="#"> Tips Linux </a> </li>
                        <li> <a href="#"> Tips Android </a> </li>
                        <li> <a href="#"> Terbaru </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-3 col-xs-6">
                    <h3> Tutorial </h3>
                    <ul>
                        <li> <a href="#"> Website </a> </li>
                        <li> <a href="#"> Design gambar </a> </li>
                        <li> <a href="#"> Aplikasi </a> </li>
                        <li> <a href="#"> Terbaru </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 fot-kanan">
                    <h3>Newsletter</h3>
                    <p>Gabung bersama kami sekarang!..</p>
                    <p>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Email kamu..">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                            </span>
                    </div>
                    <!-- /input-group -->
                    </p>
                </div>
            </div>
        </div>
        <div id="second-footer" class="container-fluid">
            <div class="row">
                <div class="col-md-6 pull-left">
                    <p class="navbar-text pull-left">Site Build By Lutfhie chan</p>
                </div>
                <div class="col-md-6 pull-right">
                    <a href="#" class="navbar-btn btn btn-danger pull-right">Subscribe on YouTube</a>
                </div>
            </div>
        </div>
    </div>

    <!--<div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><b>adminlte-laravel</b></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#home" class="smoothScroll">{{ trans('blog') }}</a></li>
                    <li><a href="#desc" class="smoothScroll">{{ trans('adminlte_lang::message.description') }}</a></li>
                    <li><a href="#showcase" class="smoothScroll">{{ trans('adminlte_lang::message.showcase') }}</a></li>
                    <li><a href="#contact" class="smoothScroll">{{ trans('adminlte_lang::message.contact') }}</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                        <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse
        </div>
    </div>-->



    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="{{ asset('vendors/bootstrap-3/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/custom.js') }}"></script>
</body>
</html>
