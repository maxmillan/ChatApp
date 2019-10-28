
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mythemestore.com/friend-finder/newsfeed-messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Oct 2019 10:00:13 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is social network html5 template available in themeforest......" />
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
    <meta name="robots" content="index, follow" />
    <title>Chatroom | end and Receive Messages</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/jquery.scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
    <link href="{{asset('css/emoji.css')}}" rel="stylesheet">


    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
</head>
<body>

<!-- Header
================================================= -->
<!--Header End-->
@include('partials.nav')

<div id="page-contents">
    <div class="container">
        <div class="row">

            <!-- Newsfeed Common Side Bar Left
      ================================================= -->
@include('partials.navbar')
            <div class="col-md-7">

                <!-- Post Create Box
                ================================================= -->
                <div class="create-post">
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="form-group">
                                <img src="{{asset('images/users/user-1.jpg')}}" alt="" class="profile-photo-md" />
                                <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <div class="tools">
                                     <ul class="publishing-tools list-inline">
                                    <li><a href="#"><i class="ion-compose"></i></a></li>
                                    <li><a href="#"><i class="ion-images"></i></a></li>
                                    <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
                                    <li><a href="#"><i class="ion-map"></i></a></li>
                                </ul>
                                <button class="btn btn-primary pull-right">Publish</button>
                            </div>
                        </div>
                    </div>
                </div><!-- Post Create Box End -->

                <!-- Chat Room
                ================================================= -->
                <div class="chat-room">
                    <div  class="row">
                        <div class="col-md-5">

                            <!-- Contact List in Left-->
                            <ul class="nav nav-tabs contact-list scrollbar-wrapper scrollbar-outer">
                               @if(count($messages))
                                   @foreach($messages as $message)
                                        <li class="active">
                                            <a href="#contact-1" data-toggle="tab" sender_id="{{ $message->sender_id }}" class="sender-chat-message">
                                                <div class="contact">
                                                    <img src="{{asset('images/users/user-2.jpg')}}" alt="" class="profile-photo-sm pull-left"/>
                                                    <div class="msg-preview">
                                                        <h6>{{ $message->sender->name }}</h6>
                                                        <p class="text-muted">{{ substr($message->message,0) }}...</p>
                                                        <small class="text-muted">{{ \Carbon\Carbon::parse($message->created_at)->diffForHumans() }}</small>
                                                        <div class="chat-alert">1</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                   @endif
                                <button id="test">hello</button>

                            </ul><!--Contact List in Left End-->

                        </div>
                        <div class="col-md-7">

                            <!--Chat Messages in Right-->
                            <div class="tab-content scrollbar-wrapper wrapper scrollbar-outer">
                                <div class="tab-pane active" id="contact-1">
                                    <div class="chat-body">
                                        <ul class="chat-message">

                                        </ul>
                                    </div>
                                </div>

                            </div><!--Chat Messages in Right End-->
                            <form>
                                <div class="send-message">
                                    <div class="input-group">
                                        <input type="text" name="receiver_id" value="" id="receiver_id">
                                        <input type="text" name="message" class="form-control" placeholder="Type your message">
                                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Send</button>
                      </span>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>



            <!-- Newsfeed Common Side Bar Right
      ================================================= -->
            <div class="col-md-2 static">
                <div class="suggestions" id="sticky-sidebar">
                    <h4 class="grey">Who to Follow</h4>
                    <div class="follow-user">
                        <img src="{{asset('images/users/user-11.jpg')}}" alt="" class="profile-photo-sm pull-left" />
                        <div>
                            <h5><a href="timeline.html">Diana Amber</a></h5>
                            <a href="#" class="text-green">Add friend</a>
                        </div>
                    </div>
                    <div class="follow-user">
                        <img src="{{asset('images/users/user-12.jpg')}}" alt="" class="profile-photo-sm pull-left" />
                        <div>
                            <h5><a href="timeline.html">Cris Haris</a></h5>
                            <a href="#" class="text-green">Add friend</a>
                        </div>
                    </div>
                    <div class="follow-user">
                        <img src="images/users/user-13.jpg" alt="" class="profile-photo-sm pull-left" />
                        <div>
                            <h5><a href="timeline.html">Brian Walton</a></h5>
                            <a href="#" class="text-green">Add friend</a>
                        </div>
                    </div>
                    <div class="follow-user">
                        <img src="images/users/user-14.jpg" alt="" class="profile-photo-sm pull-left" />
                        <div>
                            <h5><a href="timeline.html">Olivia Steward</a></h5>
                            <a href="#" class="text-green">Add friend</a>
                        </div>
                    </div>
                    <div class="follow-user">
                        <img src="images/users/user-15.jpg" alt="" class="profile-photo-sm pull-left" />
                        <div>
                            <h5><a href="timeline.html">Sophia Page</a></h5>
                            <a href="#" class="text-green">Add friend</a>
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


<!-- Scripts
================================================= -->
<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.sticky-kit.min.js')}}"></script>
<script src="{{asset('js/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script>
    $('a.sender-chat-message').on('click',function(){
        let sender_id = $(this).attr('sender_id');
   $('#receiver_id').val(sender_id);
        $.ajax({
            url: 'senderMessages'+'/'+sender_id,
            type: 'GET',
            beforeSend: function(){
                $('ul.chat-message').html('');
            },
            dataType: 'json',
            success: function (data) {
                let html = '';
                if(data.length){

                    for(let i=0;i < data.length;i++){
                        let c = 'right';
                        {{--alert('{{ \Illuminate\Support\Facades\Auth::id() }}');--}}
                        if(data[i].sender_id == '{{ \Illuminate\Support\Facades\Auth::id() }}'){
                            c= 'left';
                        }
                        html +='<li class="'+ c +'">\n' +
'                                                     <div class="chat-item">\n' +
'                                                    <div class="chat-item-header">\n' +
'                                                        <h5>'+ data[i].sender.name+'</h5>\n' +
'                                                        <small class="text-muted">3 days ago</small>\n' +
'                                                    </div>\n' +
'                                                    <p>'+data[i].message+'</p>\n' +
'                                                </div>\n' +
'                                            </li>'
                    }
                }
                $('ul.chat-message').html(html);
            }
        })
    })
    $("#test").click(function () {
        alert('ok')
    })
</script>
</body>
</html>
