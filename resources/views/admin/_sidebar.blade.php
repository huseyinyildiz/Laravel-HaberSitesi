<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="{{asset('assets')}}/admin/img/user.png" class="img-thumbnail" />

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
                <a href="{{route('admin_category')}}"><i class="fa fa-bicycle "></i>Category</a>
            </li>
            <li>
                <a href="{{route('admin_news')}}"><i class="fa fa-anchor "></i>News</a>
            </li>
            <li>
                <a href="{{route('admin_setting')}}"><i class="fa fa-building "></i>Settings</a>
            </li>
            <li>
                <a href="{{route('admin_message')}}"><i class="fa fa-circle-o-notch "></i>Contact Messages</a>
            </li>
            <li>
                <a href="{{route('admin_review')}}"><i class="fa fa-comment "></i>Reviews</a>
            </li>
            <li>
                <a href="{{route('admin_faq')}}"><i class="fa fa-question "></i>FAQS</a>
            </li>





</nav>
<!-- /. NAV SIDE  -->
