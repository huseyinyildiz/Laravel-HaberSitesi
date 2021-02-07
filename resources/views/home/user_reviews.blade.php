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
                <div class="col-md-2">
                    @include('home.user_menu')
                </div>
                <div class="col-md-10">
                    <table id="example1" class="table table-bordered table-striped" >
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>News</th>
                            <th>Subject</th>
                            <th>Review</th>
                            <th>Status</th>
                            <th>Rate</th>
                            <th>Date</th>
                            <th style="..." colspan="3">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @include('home.message')
                        @foreach($datalist as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->news_id}}</td>
                                <td>{{$rs->subject}}</td>
                                <td>{{$rs->review}}</td>
                                <td>{{$rs->status}}</td>
                                <td>{{$rs->rate}}</td>
                                <td>{{$rs->created_at}}</td>
                                <td>
                                    <a href="{{route('user_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete! Are you sure?')"><i class="fa fa-warning"></i></a>
                                </td>
                            </tr>
                            @endforeach
                    </table>

                </div>
            </div>
        </div>
@endsection
