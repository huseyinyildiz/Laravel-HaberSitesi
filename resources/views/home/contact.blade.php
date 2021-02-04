@extends('layouts.home')
@php
    $setting = \App\Models\Setting::first();
@endphp

@section('title','Contact Us-' . $setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords',$setting->keywords)


@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-6 padding-right">
                    {!! $setting->contact !!}
                </div>
                <div class="col-md-6 padding-right">
                    {!! $setting->contact !!}
                </div>
            </div>
        </div>
@endsection
