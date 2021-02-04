@php
 $parentCategories = \App\Http\Controllers\HomeController::categorylist()

@endphp
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

<header id="header"><!--header-->

    <div class="header_top"><!--header_top-->

        <div class="container">
            <div class="row">
                <header id="header"><!--header-->
                    <div class="header_top">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +534 968 2607</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@huseyinyildiz.com</a></li>
                        </ul>
                    </div>
            </div>
            <div class="col-sm-6">
                <div class="social-icons pull-right">
                    <ul class="nav navbar-nav">
                      @if($setting->facebook != null)<li><a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>@endif
                          @if($setting->twitter != null) <li><a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li>@endif
                          @if($setting->youtube != null)<li><a href="{{$setting->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a></li>@endif
                          @if($setting->instagram != null)<li><a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a></li>@endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->

        <div class="container">
            <div class="row">
                <div class="col-md-4 clearfix">
                    <div class="logo pull-left">
                        <a href="{{route('home')}}"><img src="{{asset('assets')}}/images/home/logo.png" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right clearfix">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                USA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="">Canada</a></li>
                                <li><a href="">UK</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                DOLLAR
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="">Canadian Dollar</a></li>
                                <li><a href="">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 clearfix">
                    <div class="-shopmenu clearfix pull-right">
                        <ul class="nav navbar-nav">
                            @auth()
                            <li><a href="{{route('myprofile')}}"><i class="fa fa-user"></i> {{Auth::user()->name}}</a></li>
                            @endauth
                            @guest
                                <li><a href="/login"><i class="fa fa-user"></i>Login</a></li>
                            @endguest
                            @auth
                            <li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
                            <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                @endauth
                               @guest
                            <li><a href="/register"><i class="fa fa-sign-in"></i> Register</a></li>
                                @endguest
                             @auth
                            <li><a href="{{route('admin_logout')}}"><i class="fa fa-lock"></i> Logout</a></li>
                                @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->

        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{route('home')}}" class="active">Home</a></li>
                            <li class="dropdown"><a href="#">Category<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    @foreach($parentCategories as $rs)
                                        <li><a href="{{route('categorynews',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            <li><a href="{{route('faq')}}"> FAQ</a></li>
                            <li><a href="{{route('references')}}">References</a></li>
                            <li><a href="{{route('home')}}">Campains</a></li>
                            <li><a href="{{route('home')}}">XXX</a></li>
                            <li><a href="{{route('home')}}">New News</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search"/>
                    </div>
                </div>
            </div>
        </div>

    </div><!--/header-bottom-->

</header><!--/header-->



