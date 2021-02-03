@extends('layouts.admin')

@section('title', 'News Add')
@section('javascript')
    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
@endsection



@section('content')

    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Add News</h1>
                    <h1 class="page-subhead-line">Add News </h1>

                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info">

                        <div class="panel-heading">
                            Add News Form
                        </div>
                        <div class="panel-body">
                            <form role="form" action="{{route('admin_news_store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control" name="category_id">

                                        @foreach ( $datalist as  $rs )
                                            <option value="{{ $rs->id }}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                        @endforeach
                                    </select>


                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input class="form-control" type="text" name="title">

                                </div>

                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input class="form-control" type="text" name="keywords">

                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input class="form-control" type="text" name="description">

                                </div>

                                <div class="form-group">
                                    <label>Detail</label>
                                    <textarea name="detail"></textarea>
                                    <script>
                                        CKEDITOR.replace( 'detail' );
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label>Slug</label>
                                    <input class="form-control" type="text" name="slug">

                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input class="form-control" type="file" name="image">

                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option>False</option>
                                        <option>True</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-info">Add News </button>

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
