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




</nav>
<!-- /. NAV SIDE  -->
