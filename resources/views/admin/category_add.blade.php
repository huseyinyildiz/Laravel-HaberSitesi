@extends('layouts.admin')

@section('title', 'Category Add')



@section('content')






<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Add Category</h1>
                <h1 class="page-subhead-line">Add Category </h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">

                    <div class="panel-heading">
                        Add Category Form
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{route('admin_category_create')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Parent</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0" selected>Main Category</option>
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
                                <label>Slug</label>
                                <input class="form-control" type="text" name="slug">

                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option>False</option>
                                    <option>True</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-info">Add Category </button>

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
