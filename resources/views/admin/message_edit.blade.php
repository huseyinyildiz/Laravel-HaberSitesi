<link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/css/font-awesome.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/css/prettyPhoto.css" rel="stylesheet">
<link href="{{asset('assets')}}/css/price-range.css" rel="stylesheet">
<link href="{{asset('assets')}}/css/animate.css" rel="stylesheet">
<link href="{{asset('assets')}}/css/main.css" rel="stylesheet">
<link href="{{asset('assets')}}/css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]>
    <script src="{{asset('assets')}}/js/html5shiv.js"></script>
    <script src="{{asset('assets')}}/js/respond.min.js"></script>
    <![endif]-->
<link rel="shortcut icon" href="{{asset('asset')}}/images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets')}}/images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets')}}/images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets')}}/images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="{{asset('assets')}}/images/ico/apple-touch-icon-57-precomposed.png">

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Message Details</h1>
                @include('home.message')

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">


                    <div class="panel-body">
                        <form role="form" action="{{route('admin_message_update', ['id'=>$data->id])}})}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <table class="table table-striped table-bordered table-hover">

                                <tr>
                                    <th>Id</th><td>{{ $data->id }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th><td>{{ $data->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th><td>{{ $data->email }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th> <td>{{ $data->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Subject</th><td>{{ $data->subject }}</td>
                                </tr>
                                <tr>
                                    <th>Message</th><td>{{ $data->message }}</td>
                                </tr>
                                <tr>
                                    <th>Admin Note</th>
                                    <td>
                                        <textarea id="note" name="note">{{$data->note}}</textarea>
                                    </td>

                                </tr>
                                <tr>
                                    <td></td> <td>
                                        <button type="submit" class="btn btn-info">Update Message </button>
                                    </td>



                                </tr>
                            </table>



                        </form>
                    </div>
                </div>



                </div>
            </div>
        </div>

    </div>
    <!-- /. PAGE INNER  -->
</div>

