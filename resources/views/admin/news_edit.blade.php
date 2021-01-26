@extends('layouts.admin')

@section('title', 'News Edit')
@section('javascript')
    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
@endsection



@section('content')






<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Edit News</h1>
                <h1 class="page-subhead-line">Edit News </h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">

                    <div class="panel-heading">
                        Edit News Form
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{route('admin_news_update', ['id'=>$data->id])}})}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Parent</label>
                                <select class="form-control" name="category_id">

                                    @foreach ( $datalist as  $rs )
                                        <option value="{{ $rs->id }}" @if ($rs->id==$data->category_id) selected="selected" @endif >{{ $rs->title }}</option>
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
                                <label>Status</label>
                                <select class="form-control" name="status" >
                                    <option selected="selected">{{$data->status}}</option>
                                    <option>False</option>
                                    <option>True</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-info">Update News </button>

                        </form>
                    </div>
                </div>



                </div>
            </div>
        </div>

    </div>
    <!-- /. PAGE INNER  -->
</div>
@endsection
