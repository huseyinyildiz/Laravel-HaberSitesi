@extends('layouts.admin')

@section('title', 'FAQS Edit')
@section('javascript')
    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
@endsection



@section('content')






<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Edit FAQS</h1>
                <h1 class="page-subhead-line">Edit FAQS </h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">

                    <div class="panel-heading">
                        Edit FAQS Form
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{route('admin_faq_update', ['id'=>$data->id])}})}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Position</label>
                                <input class="form-control" type="number" name="position" value="{{$data->position}}">

                            </div>
                            <div class="form-group">
                                <label>Question</label>
                                <input class="form-control" value="{{$data->question}}" type="text" name="question">

                            </div>
                            <div class="form-group">
                                <label>Answer</label>
                                <textarea name="answer">{{$data->answer}}</textarea>
                                <script>
                                    CKEDITOR.replace( 'answer' );
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected="selected">False</option>
                                    <option>True</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-info">Update FAQS </button>

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
