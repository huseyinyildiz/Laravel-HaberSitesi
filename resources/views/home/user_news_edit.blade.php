@extends('layouts.home')
@php
    $setting = \App\Models\Setting::first();
@endphp
@section('headerjs')
    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
@endsection

@section('title','News Edit')


@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    @include('home.user_menu')
                </div>
                <div class="col-md-10">
                    <h1 class="page-subhead-line">Edit News </h1>
                    <form role="form" action="{{route('user_news_update', ['id'=>$data->id])}})}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="category_id">

                                @foreach ( $datalist as  $rs )
                                    <option value="{{ $rs->id }}" @if ($rs->id==$data->category_id) selected="selected" @endif >{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}</option>
                                @endforeach
                            </select>


                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" type="text" name="title" value="{{$data->title}}">

                        </div>

                        <div class="form-group">
                            <label>Keywords</label>
                            <input class="form-control" type="text" name="keywords" value="{{$data->keywords}}">

                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input class="form-control" type="text" name="description" value="{{$data->description}}">

                        </div>

                        <div class="form-group">
                            <label>Detail</label>
                            <textarea name="detail">{{$data->detail}}</textarea>
                            <script>
                                CKEDITOR.replace( 'detail' );
                            </script>
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input class="form-control" type="text" name="slug" value="{{$data->slug}}">

                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input class="form-control" type="file" name="image" ">

                            @if($data->image)
                                <img src="{{Storage::url($data->image)}}" height="60" alt="">
                            @endif

                        </div>

                        <button type="submit" class="btn btn-info">Update News </button>

                    </form>
            </div>
        </div>
@endsection
