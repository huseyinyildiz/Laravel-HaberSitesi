@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

<footer id="footer"><!--Footer-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="companyinfo">
                        <h2><span>e</span>-news</h2>
                        <strong>Company :</strong> {{$setting->company}} <br>
                        <strong>Address :</strong> {{$setting->address}} <br>
                        <strong>Phone :</strong> {{$setting->phone}} <br>
                        <strong>Fax :</strong> {{$setting->fax}} <br>
                        <strong>Email :</strong> {{$setting->email}} <br>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="">
                                <div class="iframe-img">
                                    <img src="{{asset('assets')}}/images/home/iframe1.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{asset('assets')}}/images/home/iframe2.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{asset('assets')}}/images/home/iframe3.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{asset('assets')}}/images/home/iframe4.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="address">
                        <img src="{{asset('assets')}}/images/home/map.png" alt="" />
                        <p>Turkey</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © {{$setting->company}} All rights reserved.</p>
                <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
            </div>
        </div>
    </div>


</footer><!--/Footer-->


<!--<script src="{{asset('assets')}}/js/jquery.js"></script>-->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{asset('assets')}}/js/jquery.prettyPhoto.js"></script>

<script src="{{asset('assets')}}/js/jquery.scrollUp.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>

<script src="{{asset('assets')}}/js/price-range.js"></script>

<script src="{{asset('assets')}}/js/main.js"></script>
