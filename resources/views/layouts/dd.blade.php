<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>{{ config('app.name', 'Laravel') }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="/mamahdande/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="/mamahdande/css/style.css" rel='stylesheet' type='text/css' />
<link href="/mamahdande/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="/mamahdande/css/font.css" type="text/css"/>
<link href="/mamahdande/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="/mamahdande/css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="/mamahdande/js/jquery2.0.3.min.js"></script>
<script src="/mamahdande/js/raphael-min.js"></script>
<script src="/mamahdande/js/morris.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="{{ url('/home')}}" class="logo">
        <h3>Book.Store</h3>
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
       
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="/mamahdande/images/2.png">
                <span class="username">Admin</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                
              
              

                <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-key"></i>
                                            Logout
                                        </a> 


                                       

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">

                <li>
                    <a class="active" href="{{  url('/home') }}">
                        <i class="fa fa-home"></i>
                        <span>DASHBOARD</span>
                    </a>
                </li>
                
                @role('admin')
                <li>
                    <a class="active" href="{{ route('karyawan.index') }}">
                        <i class="fa fa-user"></i>
                        <span>KARYAWAN</span>
                    </a>
                </li>
                @endrole

            
                 
                <li>
                    <a class="active" href="{{ route('kategori.index') }}">
                        <i class="fa fa-list-ul"></i>
                        <span>KATEGORI</span>
                    </a>
                </li>

                 <li>
                    <a class="active" href="{{ route('buku.index') }}">
                        <i class="fa fa-book"></i>
                        <span>BUKU</span>
                    </a>
                </li>

                <li>
                    <a class="active" href="{{ route('supplier.index') }}">
                        <i class="fa fa-user"></i>
                        <span>SUPPLIER</span>
                    </a>
                </li>

                <li>
                    <a class="active" href="{{ route('penjualan.index') }}">
                        <i class="fa fa-shopping-cart"></i>
                        <span>PENJUALAN</span>
                    </a>
                </li>

                <li>
                    <a class="active" href="{{ route('pembelian.index') }}">
                        <i class="fa fa-shopping-cart"></i>
                        <span>PEMBELIAN</span>
                    </a>
                </li>

                

               
               
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- //market-->
         @yield('content')

<!--main content end-->
</section>
<script src="/mamahdande/js/bootstrap.js"></script>
<script src="/mamahdande/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="/mamahdande/js/scripts.js"></script>
<script src="/mamahdande/js/jquery.slimscroll.js"></script>
<script src="/mamahdande/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="/mamahdande/js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->  

<!-- calendar -->
    
    <!-- //calendar -->
</body>
</html>
    