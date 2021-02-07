@extends('layouts.home')
@php
    $setting = \App\Models\Setting::first();
@endphp


@section('title',$data->title . 'News List')
@section('description'){{$data->description}}@endsection
@section('keywords',$data->keywords)


@section('content')
    <div class="container">
        <div class="row">

            <div class="col-sm-12 padding-right">
                @foreach($datalist as $rs)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ Storage::url($rs->image) }}" alt="" />
                                    <h2>{{$rs->title}} </h2>
                                    <p>{{$rs->description}}</p>
                                    <a href="{{route('new',['id'=>$rs->id, 'slug'=>$rs->slug])}}" class="btn btn-default add-to-cart"><i class="fa fa-smile-o"></i>Habere git</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
