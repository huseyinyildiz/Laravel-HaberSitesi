<html>
<head>
    <title>Image Gallery</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets')}}/admin/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets')}}/admin/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="{{asset('assets')}}/admin/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="{{asset('assets')}}/admin/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Add Image</h1>
                <h1 class="page-subhead-line">News : {{$data->title}}</h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">

                    <div class="panel-heading">
                        Add Image Form
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{route('user_image_store', ['news_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" name="title">

                            </div>


                            <div class="form-group">
                                <label>Image</label>
                                <input class="form-control" type="file" name="image">

                            </div>

                            <button type="submit" class="btn btn-info">Add Image </button>

                        </form>


                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title(s)</th>
                                <th>Image</th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ( $images as  $rs )
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>{{ $rs->title }}</td>
                                    <td>
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" height="60" alt="">
                                        @endif
                                    </td>
                                    <td><a href="{{route('user_image_delete', ['id'=>$rs->id, 'news_id'=>$data->id])}}" onclick="return confirm('Delete ! Are you sure?')">Delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>



            </div>
        </div>
    </div>

</div>




</body>


</html>
