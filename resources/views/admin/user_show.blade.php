<html>
<head>
    <title>{{$data->name}}</title>
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
                    <h1 class="page-head-line">User Details</h1>
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
                                Users
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">

                                        <tr>
                                            <th rowspan="8" align="center" valign="center">

                                                @if($data->profile_photo_path)
                                                    <img src="{{Storage::url($data->profile_photo_path)}}" height="50" style="border-radius: 10px" alt="">
                                                @endif


                                            </th>
                                        </tr>

                                        <tr>
                                            <th>Name</th><td>{{$data->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th><td>{{$data->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Phone</th><td>{{$data->phone}}</td>
                                        </tr>
                                        <tr>
                                            <th>Adress</th><td>{{$data->address}}</td>
                                        </tr>
                                        <tr>
                                            <th>Date</th><td>{{$data->created_at}}</td>
                                        </tr>
                                        <tr>
                                            <th>Roles</th>
                                            <td>
                                                <table>
                                                    @foreach($data->roles as $row)
                                                        <tr>
                                                            <td>{{$row->name}}</td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </td>
                                        </tr>



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
@</body>
</html>
