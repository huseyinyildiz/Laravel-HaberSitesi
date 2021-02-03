@extends('layouts.admin')

@section('title', 'Category List')



@section('content')






<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Categories</h1>
                <h1 class="page-subhead-line"><a href="{{route('admin_category_add')}}" class="btn btn-success">Kategori Ekle</a> </h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">

                    <div class="col-md-12">
                        <!--   Kitchen Sink -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Categories
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Parent</th>
                                            <th>Title</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ( $datalist as  $rs )
                                        <tr>
                                            <td>{{ $rs->id }}</td>
                                            <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</td>
                                            <td>{{ $rs->title }}</td>
                                            <td>{{ $rs->status }}</td>
                                            <td><a href="{{route('admin_category_edit', ['id'=>$rs->id])}}" >Edit</a></td>
                                            <td><a href="{{route('admin_category_delete', ['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')">Delete</a></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                        <!-- End  Kitchen Sink -->
                    </div>

                    <br />

                   </a>
                </div>
            </div>
        </div>

    </div>
    <!-- /. PAGE INNER  -->
</div>
@endsection
