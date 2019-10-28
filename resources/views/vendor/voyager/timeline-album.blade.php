<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mythemestore.com/friend-finder/timeline-album.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Oct 2019 10:38:54 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is social network html5 template available in themeforest......" />
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
    <meta name="robots" content="index, follow" />
    <title>Photo Album | My Photo Gallery</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" /

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
</head>
<body>

<!-- Header
================================================= -->
@include('partials.nav')
<!--Header End-->

<div class="container">

    <!-- Timeline
    ================================================= -->
    <div class="timeline">
        <div class="timeline-cover">

            <!--Timeline Menu for Large Screens-->
            <div class="timeline-nav-bar hidden-sm hidden-xs">
                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-info">
                            <img src="{{asset('images/users/user-1.jpg')}}" alt="" class="img-responsive profile-photo" />
                            <h3>{{$album->name}}</h3>
                            <p class="text-muted">Creative Director</p>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <ul class="list-inline profile-menu">
                            <li><a href="{{url('admin/user-timeline',$album->id)}}">Timeline</a></li>
                            <li><a href="{{url('admin/user-about',$album->id)}}">About</a></li>
                            <li><a href="{{url('admin/user-album',$album->id)}}" class="active">Album</a></li>
                            <li><a href="{{url('admin/friends',$album->id)}}">Friends</a></li>
                        </ul>
                        <ul class="follow-me list-inline">
                            <li>1,299 people following her</li>
                            <li><button class="btn-primary">Add Friend</button></li>
                        </ul>
                    </div>
                </div>
            </div><!--Timeline Menu for Large Screens End-->

            <!--Timeline Menu for Small Screens-->
            <div class="navbar-mobile hidden-lg hidden-md">
                <div class="profile-info">
                    <img src="{{asset('images/users/user-1.jpg')}}" alt="" class="img-responsive profile-photo" />
                    <h4>m,fnvdf</h4>
                    <p class="text-muted">Creative Director</p>
                </div>
                <div class="mobile-menu">
                    <ul class="list-inline">
                        <li><a href="timline.html">Timeline</a></li>
                        <li><a href="timeline-about.html">About</a></li>
                        <li><a href="timeline-album.html" class="active">Album</a></li>
                        <li><a href="timeline-friends.html">Friends</a></li>
                    </ul>
                    <button class="btn-primary">Add Friend</button>
                </div>
            </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-7">

                    <!-- Photo Album
                    ================================================= -->
                    <ul class="album-photos">
                        <li>
                            <div class="img-wrapper" data-toggle="modal" data-target=".photo-1">
                                <img src="{{asset('images/album/1.jpg')}}" alt="photo" />
                            </div>
                            <div class="modal fade photo-1" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <img src="{{asset('images/album/1.jpg')}}" alt="photo" />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-wrapper" data-toggle="modal" data-target=".photo-1">
                                <img src="{{asset('images/album/1.jpg')}}" alt="photo" />
                            </div>
                            <div class="modal fade photo-1" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <img src="{{asset('images/album/1.jpg')}}" alt="photo" />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-wrapper" data-toggle="modal" data-target=".photo-1">
                                <img src="{{asset('images/album/1.jpg')}}" alt="photo" />
                            </div>
                            <div class="modal fade photo-1" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <img src="{{asset('images/album/1.jpg')}}" alt="photo" />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-wrapper" data-toggle="modal" data-target=".photo-1">
                                <img src="{{asset('images/album/1.jpg')}}" alt="photo" />
                            </div>
                            <div class="modal fade photo-1" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <img src="{{asset('images/album/1.jpg')}}" alt="photo" />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-wrapper" data-toggle="modal" data-target=".photo-1">
                                <img src="{{asset('images/album/1.jpg')}}" alt="photo" />
                            </div>
                            <div class="modal fade photo-1" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <img src="{{asset('images/album/1.jpg')}}" alt="photo" />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-wrapper" data-toggle="modal" data-target=".photo-1">
                                <img src="{{asset('images/album/1.jpg')}}" alt="photo" />
                            </div>
                            <div class="modal fade photo-1" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <img src="{{asset('images/album/1.jpg')}}" alt="photo" />
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="col-md-2 static">
                    <div id="sticky-sidebar">
                        <h4 class="grey">Sarah's activity</h4>
                        <div class="feed-item">
                            <div class="live-activity">
                                <p><a href="#" class="profile-link">Sarah</a> Commended on a Photo</p>
                                <p class="text-muted">5 mins ago</p>
                            </div>
                        </div>
                        <div class="feed-item">
                            <div class="live-activity">
                                <p><a href="#" class="profile-link">Sarah</a> Has posted a photo</p>
                                <p class="text-muted">an hour ago</p>
                            </div>
                        </div>
                        <div class="feed-item">
                            <div class="live-activity">
                                <p><a href="#" class="profile-link">Sarah</a> Liked her friend's post</p>
                                <p class="text-muted">4 hours ago</p>
                            </div>
                        </div>
                        <div class="feed-item">
                            <div class="live-activity">
                                <p><a href="#" class="profile-link">Sarah</a> has shared an album</p>
                                <p class="text-muted">a day ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Footer
================================================= -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="footer-wrapper">
                <div class="col-md-3 col-sm-3">
                    <a href="#"><img src="images/logo-black.png" alt="" class="footer-logo" /></a>
                    <ul class="list-inline social-icons">
                        <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2">
                    <h5>For individuals</h5>
                    <ul class="footer-links">
                        <li><a href="#">Signup</a></li>
                        <li><a href="#">login</a></li>
                        <li><a href="#">Explore</a></li>
                        <li><a href="#">Finder app</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Language settings</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2">
                    <h5>For businesses</h5>
                    <ul class="footer-links">
                        <li><a href="#">Business signup</a></li>
                        <li><a href="#">Business login</a></li>
                        <li><a href="#">Benefits</a></li>
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Setup</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2">
                    <h5>About</h5>
                    <ul class="footer-links">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h5>Contact Us</h5>
                    <ul class="contact">
                        <li><i class="icon ion-ios-telephone-outline"></i>+1 (234) 222 0754</li>
                        <li><i class="icon ion-ios-email-outline"></i>info@thunder-team.com</li>
                        <li><i class="icon ion-ios-location-outline"></i>228 Park Ave S NY, USA</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>Thunder Team © 2016. All rights reserved</p>
    </div>
</footer>

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
<script src="{{asset('js/jquery.sticky-kit.min.js')}}"></script>
<script src="{{asset('js/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>

</body>

<!-- Mirrored from mythemestore.com/friend-finder/timeline-album.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Oct 2019 10:47:53 GMT -->
</html>
