<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    
    <!-- site metas -->
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Responsive-->
    
    <!-- fevicon -->
    <link rel="icon" href="/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS
    <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">
    < Tweaks for older IEs
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   

</head>
<!-- body -->

<body class="main-layout">

    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class=" header-top">
            <div class="header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <a href="index.html"><img src="images/logo.jpg" alt="#" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                            <div class="menu-area">
                                <div class="limit-box">
                                    <nav class="main-menu">
                                        <ul class="menu-area-main">
                                            <li class="active"> <a href="/hom">HOME</a> </li> 
                                            <li> <a href="/donate">DONATE</a> </li>
                                            <li> <a href="/request">REQUEST</a> </li>
                                            @if (Session::get('user'))
                                            <li>
                                            </li>
                                            @else
                                            <li> <a href="/ngol">NGO</a> </li>
                                            @endif
                                            <li><a href="/buysell">BUY & SELL</a></li>
                                            <li> <a href="/createevents">EVENTS</a> </li> 
                                            @if (Session::get('user'))
                                           <li> <div class="dropdown-bar">
                                           <a href=""><b><h3 style="color:black">{{session('user')}}</h3></b></a>
                                           <div class="dropdown-link">
                                           <a href="/profile">My Profile</a>
                                           <a href="/md">My Donation</a>
                                           <a href="/rm">Received</a>
                                           <a href="/logout">Logout</a>
                                           </div>
                                           </div> </li>  
                                           @else
                                           <li> <a href="/login">LOGIN</a> </li>  
                                           @endif                
                                        </ul>
                                    </nav>               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->

            <!-- end header -->
            <section class="slider_section">
                <div class="banner_main">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                                <div class="text-bg">
                                    <h1 style="color:aqua">Medicine <br> <strong class="b_bold">Donation</strong></h1>
                                    <span style="color:#2980B9"> Help People,Save Life!</span>
                                    @if (Session::get('user'))
                                    <a href="/contact">CONTACT US</a>
                                    @else
                                    <a href="/contact">CONTACT US</a> <a href="/admin">ADMINISTRATION</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        
          <div class="bottom-right">
                   <a href="about"><b>About Us</b> </a>&nbsp;&nbsp; <a  href="/feedback"><b>Feedback</b> </a>
          </div>
            <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    @yield('content') 
 
    </body>
 
  </html>