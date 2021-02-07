@extends('layouts.admin')

@section('title', 'User Edit')
@section('javascript')
    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
@endsection



@section('content')






    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Edit User</h1>

                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info">

                        <div class="panel-heading">
                            Edit User Form
                        </div>
                        <div class="panel-body">
                            @include('home.message')
                            <form role="form" action="{{route('admin_user_update', ['id'=>$data->id])}})}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" name="name" value="{{$data->name}}">

                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="text" name="email" value="{{$data->email}}">

                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input class="form-control" type="text" name="phone" value="{{$data->phone}}">

                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" type="text" name="address" value="{{$data->address}}">

                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input class="form-control" type="file" name="image">

                                    @if($data->profile_photo_path)
                                        <img src="{{Storage::url($data->profile_photo_path)}}" height="200" style="border-radius: 10px" alt="">
                                    @endif

                                </div>

                                <button type="submit" class="btn btn-info">Update</button>

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
