@extends('layouts.home')
@php
    $setting = \App\Models\Setting::first();
@endphp
@section('headerjs')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
    </script>
@endsection

@section('title','Frequently Asked Questions')


@section('content')
        <div class="container">
            <div class="row">
                    <div id="accordion">
                    @foreach($datalist as $rs)
                        <h3>{{$rs->question}}</h3>
                        <div>
                            <p>{!! $rs->answer !!}</p>
                        </div>

                        @endforeach
                    </div>
            </div>
        </div>
@endsection
