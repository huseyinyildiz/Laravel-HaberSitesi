@extends('layouts.admin')

@section('title', 'Faqs')



@section('content')


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Faqs</h1>
                <h1 class="page-subhead-line"><a href="{{route('admin_faq_add')}}" class="btn btn-success">Add FAQS</a> </h1>
                @include('home.message')

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">

                    <div class="col-md-12">
                        <!--   Kitchen Sink -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Faqs
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Position</th>
                                            <th>Question</th>
                                            <th>Answer</th>
                                            <th>Status</th>
                                            <th style="..." colspan="2">Actions</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ( $datalist as  $rs )
                                        <tr>
                                            <td>{{ $rs->id }}</td>
                                            <td>{{ $rs->position }}</td>
                                            <td>{{ $rs->question }}</td>
                                            <td>{!! $rs->answer !!}</td>
                                            <td>{{ $rs->status }}</td>
                                            <td><a href="{{route('admin_faq_edit', ['id'=>$rs->id])}}" ><i class="fa fa-edit"></i></a></td>
                                            <td><a href="{{route('admin_faq_delete', ['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><i class="fa fa-warning"></i></a></td>
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
