<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    @if(Auth::user()->profile_photo_path)
                        <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" height="50" style="border-radius: 10px" class="img-thumbnail" alt="">
                    @endif
                    <div class="inner-text">
                        @auth
                            <a href="#" class="btn btn-success">{{Auth::user()->name}}</a>
                            <a href="{{route('admin_logout')}}" class="btn btn-danger">Logout</a>
                        @endauth
                        <br/>

                    </div>
                </div>

            </li>



            <li>
                <a href="{{route('admin_category')}}"><i class="fa fa-chevron-circle-down "></i>Category</a>
            </li>
            <li>
                <a href="{{route('admin_news')}}"><i class="fa fa-newspaper-o "></i>News</a>
            </li>
            <li>
                <a href="{{route('admin_setting')}}"><i class="fa fa-wrench "></i>Settings</a>
            </li>
            <li>
                <a href="{{route('admin_message')}}"><i class="fa fa-share-alt-square "></i>Contact Messages</a>
            </li>
            <li>
                <a href="{{route('admin_review')}}"><i class="fa fa-comment "></i>Reviews</a>
            </li>
            <li>
                <a href="{{route('admin_faq')}}"><i class="fa fa-question "></i>FAQS</a>
            </li>
            <li>
                <a href="{{route('admin_users')}}"><i class="fa fa-user "></i>Users</a>
            </li>





</nav>
<!-- /. NAV SIDE  -->
