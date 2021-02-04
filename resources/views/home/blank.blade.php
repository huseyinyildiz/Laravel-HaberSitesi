@extends('layouts.home')
@php
    $setting = \App\Models\Setting::first();
@endphp

@section('title',$setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords',$setting->keywords)


@section('content')
        <div class="container">
            <div class="row">
                <div class="col-sm-12 padding-right">
                    içerik
                </div>
            </div>
        </div>
@endsection
