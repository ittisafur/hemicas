@extends('layouts.master-admin')



@section('title', 'Create Success Story')

@section('onpagecss')

    <link href="{{ asset('admin_panel/css/slim.css') }}" rel="stylesheet" type="text/css" />

@endsection



@section('content')

    <div class="page-content-wrapper">

        <!-- BEGIN CONTENT BODY -->

        <div class="page-content">

            <!-- BEGIN PAGE HEAD-->

            <div class="page-head">

                <!-- BEGIN PAGE TITLE -->

                <div class="page-title">

                    <h1>Create Success Story

                        <small></small>

                    </h1>

                </div>

                <!-- END PAGE TITLE -->

            </div>

            <!-- END PAGE HEAD-->

            <!-- BEGIN PAGE BREADCRUMB -->

            <ul class="page-breadcrumb breadcrumb">

                <li>

                    <a href="{{ url('admin') }}">Admin</a>

                    <i class="fa fa-circle"></i>

                </li>

                <li>

                    <a href="{{ url('admin/success') }}">Success Story</a>

                    <i class="fa fa-circle"></i>

                </li>

                <li>

                    <span class="active">Create</span>

                </li>

            </ul>



            @include ('layouts.alert')



            <div class="portlet light bordered">

                <div class="portlet-body form">

                    <!-- BEGIN FORM-->

                    <form action="{{ url('admin/success/store') }}" method="POST" class="form-horizontal"
                        enctype='multipart/form-data'>

                        {{ csrf_field() }}

                        <div class="form-body">



                            <div class="form-group">

                                <label class="col-md-3 control-label">Title</label>

                                <div class="col-md-4">

                                    <input type="input" class="form-control" name="title" required="">

                                </div>

                            </div>



                            <div class="form-group">

                                <label class="col-md-3 control-label">Description</label>

                                <div class="col-md-4">

                                    <textarea class="form-control" name="description" rows="7"
                                        id="description"></textarea>

                                </div>

                            </div>



                            <div class="form-group">

                                <label class="col-md-3 control-label">Video Url</label>

                                <div class="col-md-4">

                                    <input type="input" class="form-control" name="video">

                                </div>

                            </div>



                            <div class="form-group">

                                <label class="col-md-3 control-label">Image</label>

                                <div class="col-md-4">

                                    <div class="slim">

                                        <input type="file" name="successImage[]">

                                    </div>

                                </div>

                            </div>



                            <div class="form-group">

                                <label class="col-md-3 control-label">Story Date</label>

                                <div class="col-md-4">

                                    <input type="date" name="storyDate" class="form-control" required="">

                                </div>

                            </div>





                            <div class="form-group">

                                <div class="col-md-4 col-md-offset-3">

                                    <button type="submit" class="btn btn-primary">Creates Success Story</button>

                                </div>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

            <!-- END PAGE BASE CONTENT -->

        </div>

        <!-- END CONTENT BODY -->

    </div>

@endsection



@section('onpagejs')

    <script src="{{ asset('admin_panel/js/slim.js') }}" type="text/javascript"></script>

    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('description');
    </script>

@endsection
