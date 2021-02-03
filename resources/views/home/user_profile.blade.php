@extends('layouts.home')
@php
    $setting = \App\Models\Setting::first();
@endphp

@section('title','User Profile')


@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="left-sidebar">

@include('home.user_menu')
            </div>
        </div>
        <div class="col-md-10">
            @include('profile.show')
        </div>
    </div>
    </div>








@endsection
