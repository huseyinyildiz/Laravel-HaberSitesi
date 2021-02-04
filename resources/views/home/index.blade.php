@extends('layouts.home')
@php
    $setting = \App\Models\Setting::first();

@endphp

@section('title', $setting->title)
@section('description')
    {{$setting->description}}
@endsection
@section('keywords',$setting->keywords)


@section('content')

@include('home._slider')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                            @include('home._category')
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 padding-right">
                    içerik
                </div>
            </div>
        </div>
    </section>


@endsection



