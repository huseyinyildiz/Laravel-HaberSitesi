@extends('layouts.admin')

@section('title', 'Review List')



@section('content')


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
               <h1>@include('home.message')</h1>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">

                    <div class="col-md-12">
                        <!--   Kitchen Sink -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Review List
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>News</th>
                                            <th>Subject</th>
                                            <th>Review</th>
                                            <th>Rate</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th style="..." colspan="3">Actions</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ( $datalist as  $rs )
                                        <tr>
                                            <td>{{ $rs->id }}</td>

                                            <td>
                                                <a href="{{route('admin_user_show',['id'=>$rs->user->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600')">
                                                {{ $rs->user->name }}</a>
                                            </td>
                                            <td>{{$rs->news_id}}</td>
                                            <td>{{ $rs->subject }}</td>
                                            <td>{{ $rs->review }}</td>
                                            <td>{{ $rs->rate }}</td>
                                            <td>{{ $rs->status }}</td>
                                            <td>{{ $rs->created_at }}</td>
                                            <td><a href="{{route('admin_review_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600')"> <i class="fa fa-edit"></i></a></td>
                                            <td><a href="{{route('admin_review_delete', ['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><i class="fa fa-warning"></i></a></td>
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
