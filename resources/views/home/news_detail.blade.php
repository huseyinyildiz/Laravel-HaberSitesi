@extends('layouts.home')
@php
    $setting = \App\Models\Setting::first();
@endphp

@section('title',$data->title)
@section('description'){{$data->description}}@endsection
@section('keywords',$data->keywords)


@section('content')
        <div class="container">
            <div class="row">
                <div class="col-sm-12 padding-right">
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-5">

                            <div class="view-product">
                                <img src="{{ Storage::url($data->image) }}"  alt="" />

                            </div>

                            <div id="similar-product" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    @foreach($datalist as $rs)
                                    <div class="item active">
                                        <img src="{{ Storage::url($rs->image) }}" style="height: 70px;" alt="" />
                                    </div>
                                    @endforeach
                                </div>

                                <!--
                                <a class="left item-control" href="#similar-product" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right item-control" href="#similar-product" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                            Controls -->
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                                <h2>{{$data->title}}</h2>
                                <h5>{{$data->description}}</h5>
                            </div><!--/product-information-->
                            @php
                            $avgrev =\App\Http\Controllers\HomeController::avrgreview($data->id);
                            $countreview = \App\Http\Controllers\HomeController::countreview($data->id);

                            @endphp
                        </div>
                    </div><!--/product-details-->

                    <div class="category-tab shop-details-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#details" data-toggle="tab">Details</a></li>
                                <li ><a href="#reviews" data-toggle="tab">Reviews {{$countreview}}</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="details">
                                <div class="col-sm-12">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                {!!$data->detail!!}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="tab-pane fade  in" id="reviews" >
                                <div class="col-sm-12">
                                    @foreach($reviews as $rs)
                                    <ul>
                                        <li><a href=""><i class="fa fa-user"></i>{{$rs->user->name}}</a></li>
                                        <li><a href=""><i class="fa fa-calendar-o"></i>{{$rs->created_at}}</a></li>
                                    </ul>
                                    <div class="rate-this pull-right">
                                        <i class="fa fa-star @if ($rs->rate<1) -o empty @endif"></i>
                                        <i class="fa fa-star @if ($rs->rate<2) -o empty @endif"></i>
                                        <i class="fa fa-star @if ($rs->rate<3) -o empty @endif"></i>
                                        <i class="fa fa-star @if ($rs->rate<4) -o empty @endif"></i>
                                        <i class="fa fa-star @if ($rs->rate<5) -o empty @endif"></i>

                                    </div>
                                    <div class="review-body">
                                        <strong>{{$rs->subject}}</strong>
                                        <p>{{$rs->review}}</p>

                                    </div>
                                    @endforeach



                                     <p><b>Write Your Review</b></p>
                                    @livewire('review',['id'=>$data->id])
                                </div>
                            </div>

                        </div>
                    </div><!--/category-tab-->

                </div>

            </div>

        </div>
@endsection
