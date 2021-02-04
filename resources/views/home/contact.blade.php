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
                <div class="col-md-7 padding-left">
                    {!! $setting->contact !!}
                </div>
                <div class="col-md-5 padding-right">
                    <div class="contact-form">
                        <h2 class="title text-center">Contact with us</h2>
                        @include('home.message')
                        <form id="main-contact-form" class="contact-form row" name="contact-form" action="{{route('sendmessage')}}" method="post">
                            @csrf
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name & Surname">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="phone" class="form-control" required="required" placeholder="Phone">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="email" class="form-control" required="required" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Send Message">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
