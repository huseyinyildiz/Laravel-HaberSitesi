<section id="slider"><!--slider-->
    <div class="container">

        <div class="row">

            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                        <li data-target="#slider-carousel" data-slide-to="3"></li>

                    </ol>


                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>Hüseyin</span>-YILDIZ</h1>
                                <h2>Laravel E-Haber Sitesi</h2>
                                <p>Turkiye'nin en guvenilir haber sitesi. </p>
                            </div>
                            <div class="col-sm-6">
                                <br><br><br><br><br>
                                <img src="{{asset('assets')}}/images/home/ben.jpg" class="girl img-responsive" alt="" />
                            </div>
                        </div>
                        @foreach($slider as $rs)
                        <div class="item">

                            <div class="col-sm-6">

                                <h1>{{$rs->title}}</h1>
                                <p>{{$rs->description}}</p>

                                <a href="{{route('new',['id'=>$rs->id, 'slug'=>$rs->slug])}}" type="button" class="btn btn-default get">Habere Git</a>
                            </div>

                            <div class="col-sm-6">
                                <br><br><br><br><br>
                                <img src="{{Storage::url($rs->image)}}"  alt="" />
                            </div>

                        </div>
                        @endforeach


                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>


            </div>
        </div>
    </div>
</section><!--/slider-->

