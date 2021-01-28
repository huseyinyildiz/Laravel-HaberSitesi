@extends('layouts.admin')

@section('title', 'News')



@section('content')


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">News</h1>
                <h1 class="page-subhead-line"><a href="{{route('admin_news_add')}}" class="btn btn-success">Add News</a> </h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">

                    <div class="col-md-10">
                        <!--   Kitchen Sink -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                News
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Category</th>
                                            <th>Title(s)</th>
                                            <th>Image</th>
                                            <th>Image Gallery</th>
                                            <th>Status</th>
                                            <th style="..." colspan="2">Actions</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ( $datalist as  $rs )
                                        <tr>
                                            <td>{{ $rs->id }}</td>
                                            <td>{{ $rs->category->title}}</td>
                                            <td>{{ $rs->title }}</td>

                                            <td>
                                                @if($rs->image)
                                                    <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                                                    @endif
                                            </td>
                                            <td><a href="{{route('admin_image_add',['news_id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><img src="{{asset('assets/admin/images')}}/gallery.png" height="25"> </a></td>
                                            <td>{{ $rs->status }}</td>
                                            <td><a href="{{route('admin_news_edit', ['id'=>$rs->id])}}" >Edit</a></td>
                                            <td><a href="{{route('admin_news_delete', ['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')">Delete</a></td>
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
    <!-- /. PAGE INNER  -->
</div>
@endsection
