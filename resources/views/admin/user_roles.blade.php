<html>
<head>
    <title>User Roles</title>
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
                    <h1 class="page-head-line">News</h1>
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
                                            <th>Id</th><td>{{$data->id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Name</th><td>{{$data->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th><td>{{$data->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Roles</th>
                                            <td>
                                                <table>
                                                    @foreach($data->roles as $row)
                                                        <tr>
                                                            <td>{{$row->name}}</td>
                                                            <td>
                                                                <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}" onclick="return confirm('Delete!Are You Sure?')">Delete</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </td>
                                        </tr>


                                        <tr>
                                            <th>Add Role</th>
                                            <td>
                                                <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <select name="roleid">
                                                        @foreach($datalist as $rs)
                                                            <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                        @endforeach

                                                    </select>
                                                    <button type="submit" class="btn btn-primary">Add Role</button>
                                                </form>
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
