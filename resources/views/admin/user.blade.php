@extends('layouts.admin')

@section('title', 'User List')



@section('content')


    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Users</h1>
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
                                            <th></th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Adress</th>
                                            <th>Roles</th>
                                            <th style="..." colspan="2">Actions</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ( $datalist as  $rs )
                                            <tr>
                                                <td>{{ $rs->id }}</td>
                                                <td>
                                                    @if($rs->profile_photo_path)
                                                        <img src="{{Storage::url($rs->profile_photo_path)}}" height="50" style="border-radius: 10px" alt="">
                                                    @endif
                                                </td>
                                                <td>{{ $rs->name }}</td>
                                                <td>{{ $rs->email}}</td>
                                                <td>{{ $rs->phone }}</td>
                                                <td>{{ $rs->address }}</td>
                                                <td>@foreach($rs->roles as $row)
                                                        {{$row->name}}
                                                    @endforeach
                                                    <a href="{{route('admin_user_roles',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800 height=600')">
                                                        <i class="nav-icon fa fa-plus-circle"></i>
                                                    </a>

                                                </td>
                                                <td><a href="{{route('admin_user_edit', ['id'=>$rs->id])}}" ><i class="fa fa-edit"></i></a></td>
                                                <td><a href="{{route('admin_news_delete', ['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><i class="fa fa-warning"></i></a></td>
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
