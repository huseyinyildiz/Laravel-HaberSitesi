@extends('layouts.admin')

@section('title', 'Setting Edit')
@section('javascript')
    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
@endsection



@section('content')

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Edit Setting</h1>
                <h1 class="page-subhead-line">Edit Setting </h1>

            </div>

        </div>

        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">

                    <div class="panel-body">
                        <form role="form" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Settings
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills">
                                <li class=""><a href="#general-pills" data-toggle="tab">General</a>
                                </li>
                                <li class=""><a href="#smtp-pills" data-toggle="tab">Smtp Email</a>
                                </li>
                                <li class=""><a href="#social-pills" data-toggle="tab">Social Media</a>
                                </li>
                                <li class="active"><a href="#about-pills" data-toggle="tab">About Us</a>
                                </li>
                                <li class=""><a href="#contactt-pills" data-toggle="tab">Contact Page</a>
                                </li>
                                <li class=""><a href="#referencee-pills" data-toggle="tab"> References </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade" id="general-pills">
                                    <input class="form-control" id="id" type="hidden" name="id" value="{{$data->id}}">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" id="title" type="text" name="title" value="{{$data->title}}">

                                    </div>

                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input class="form-control" type="text" name="keywords" value="{{$data->keywords}}">

                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input class="form-control" type="text" name="description" value="{{$data->description}}">

                                    </div>
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input class="form-control" type="text" name="company" value="{{$data->company}}">

                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input class="form-control" type="text" name="address" value="{{$data->address}}">

                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input class="form-control" type="text" name="phone" value="{{$data->phone}}">

                                    </div>
                                    <div class="form-group">
                                        <label>Fax</label>
                                        <input class="form-control" type="text" name="fax" value="{{$data->fax}}">

                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="text" name="email" value="{{$data->email}}">

                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status" >
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>False</option>
                                            <option>True</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="smtp-pills">
                                    <div class="form-group">
                                        <label>Smtpserver</label>
                                        <input class="form-control" type="text" name="smtpserver" value="{{$data->smtpserver}}">

                                    </div>
                                    <div class="form-group">
                                        <label>Smtpemail</label>
                                        <input class="form-control" type="text" name="smtpemail" value="{{$data->smtpemail}}">

                                    </div>
                                    <div class="form-group">
                                        <label>Smtppassword</label>
                                        <input class="form-control" type="password" name="smtppassword" value="{{$data->smtppassword}}">

                                    </div>
                                    <div class="form-group">
                                        <label>Smtpport</label>
                                        <input class="form-control" type="number" name="smtpport" value="{{$data->smtpport}}">

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="social-pills">


                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input class="form-control" type="text" name="facebook" value="{{$data->facebook}}">

                                    </div>
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input class="form-control" type="text" name="twitter" value="{{$data->twitter}}">

                                    </div>
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input class="form-control" type="text" name="instagram" value="{{$data->instagram}}">

                                    </div>
                                    <div class="form-group">
                                        <label>Youtube</label>
                                        <input class="form-control" type="text" name="youtube" value="{{$data->youtube}}">

                                    </div>
                                </div>
                                <div class="tab-pane fade active in" id="about-pills">
                                    <div class="form-group">
                                        <label>Aboutus</label>
                                        <textarea name="aboutus">{{$data->aboutus}}</textarea>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contactt-pills">
                                    <div class="form-group">
                                        <label>Contact</label>
                                        <textarea name="contact">{{$data->contact}}</textarea>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="referencee-pills">

                                    <div class="form-group">
                                        <label>References</label>
                                        <textarea name="references">{{$data->references}}</textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info">Update Setting </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




                            <script>
                                CKEDITOR.replace( 'aboutus' );
                                CKEDITOR.replace( 'references' );
                                CKEDITOR.replace( 'contact' );
                            </script>





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
