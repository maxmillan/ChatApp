<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mythemestore.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Oct 2019 17:29:49 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is social network html5 template available in themeforest......" />
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
    <meta name="robots" content="index, follow" />
    <title>Friend Finder | A Complete Social Network Template</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{asset('images/fav.png')}}"/>
</head>
<body>

<!-- Header
================================================= -->
<header id="header-inverse">
    <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index-register.html"><img src="{{asset('images/logo.png')}}" alt="logo" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <form class="navbar-form navbar-right hidden-sm">
                    <div class="form-group">
                        <i class="icon ion-android-search"></i>
                        <input type="text" class="form-control" placeholder="Search friends, photos, videos">
                    </div>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</header>
<!--Header End-->

<!-- Landing Page Contents
================================================= -->
<div id="lp-register">
    <div class="container wrapper">
        <div class="row">
            <div class="col-sm-5">
                <div class="intro-texts">
                    <h1 class="text-white">Make Cool Friends !!!</h1>
                    <p>Friend Finder is a social network template that can be used to connect people. The template offers Landing pages, News Feed, Image/Video Feed, Chat Box, Timeline and lot more. <br /> <br />Why are you waiting for? Buy it now.</p>
                    <button class="btn btn-primary">Learn More</button>
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-1">
                <div class="reg-form-container">

                    <!-- Register/Login Tabs-->
                    <div class="reg-options">
                        <ul class="nav nav-tabs">
                            <li><a href="#" data-toggle="tab">Register</a></li>
                            <li class="active"><a href="{{url('admin/login')}}" data-toggle="tab">Login</a></li>
                        </ul><!--Tabs End-->
                    </div>

                    <div class="tab-pane" id="login">
                        <h3>Login</h3>
                        <p class="text-muted">Log into your account</p>

                        <!--Login Form-->
                        <form name="Login_form" action="{{route('voyager.login')}}" method="post" id='Login_form'>
                            @csrf
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label for="my-email" class="sr-only">Email</label>
                                    <input id="my-email" class="form-control input-group-lg" type="text" name="email" title="Enter Email" placeholder="Your Email"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label for="my-password" class="sr-only">Password</label>
                                    <input id="my-password" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Password"/>
                                </div>
                            </div>
                            <br>

                            <button type="submit" class="btn btn-primary">Login Now</button>
                        </form>
                        <br>
                        <a href="{{url('admin/register')}}"> <button class="btn btn-primary">Sign Up Now</button></a>

                        <br>
                        <br><!--Login Form Ends-->
                        <p><a href="#">Forgot Password?</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-6">

                <!--Social Icons-->
                <ul class="list-inline social-icons">
                    <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--preloader-->
<div id="spinner-wrapper">
    <div class="spinner"></div>
</div>

<!--Buy button-->
<a href="https://themeforest.net/cart/add_items?item_ids=18711273&amp;ref=thunder-team" target="_blank" class="btn btn-buy"><span class="italy">Buy with:</span><img src="images/envato_logo.png" alt="" /><span class="price">Only $20!</span></a>

<!-- Scripts
================================================= -->
<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.appear.min.js')}}"></script>
<script src="{{assert('js/jquery.incremental-counter.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>

</body>

<!-- Mirrored from mythemestore.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Oct 2019 17:29:53 GMT -->
</html>
