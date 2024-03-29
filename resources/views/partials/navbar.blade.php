<div class="col-md-3" style="position:static;">
    <div class="profile-card">
        <img src="{{asset('images/users/user-1.jpg')}}" alt="user" class="profile-photo" />
        <h5><a href="{{url('admin/user-timeline',\Illuminate\Support\Facades\Auth::id())}}" class="text-white">{{\Illuminate\Support\Facades\Auth::user()->name}}</a></h5>
        <a href="#" class="text-white"><i class="ion ion-android-person-add"></i> 1,299 followers</a>
    </div><!--profile card ends-->
    <ul class="nav-news-feed">
        <li><i class="icon ion-ios-paper"></i><div><a href="{{url('admin')}}">My Newsfeed</a></div></li>
        <li><i class="icon ion-ios-people"></i><div><a href="newsfeed-people-nearby.html">People Nearby</a></div></li>
        <li><i class="icon ion-ios-people-outline"></i><div><a href="{{url('admin/friends')}}">Friends</a></div></li>
        <li><i class="icon ion-chatboxes"></i><div><a href="{{url('admin/message')}}">Messages</a></div></li>
        <li><i class="icon ion-images"></i><div><a href="newsfeed-images.html">Images</a></div></li>
        <li><i class="icon ion-ios-videocam"></i><div><a href="newsfeed-videos.html">Videos</a></div></li>
    </ul><!--news-feed links ends-->
    <div id="chat-block">
        <div class="title">Chat Online</div>
        <ul class="online-users list-inline">
            <li><a href="newsfeed-messages.html" title="Linda Lohan"><img src="{{asset('images/users/user-2.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="Sophia Lee"><img src="{{asset('images/users/user-3.jpg')}}" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="John Doe"><img src="images/users/user-4.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="Alexis Clark"><img src="images/users/user-5.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="James Carter"><img src="images/users/user-6.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="Robert Cook"><img src="images/users/user-7.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="Richard Bell"><img src="images/users/user-8.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="Anna Young"><img src="images/users/user-9.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="Julia Cox"><img src="images/users/user-10.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
        </ul>
    </div><!--chat block ends-->
</div>

