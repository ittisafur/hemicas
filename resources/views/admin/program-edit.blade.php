@extends('layouts.master-admin')

@section('title', 'Edit Program')

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
                <h1>Edit Program
                    <small></small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="{{ url('admin')}}">Admin</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="{{ url('admin/program')}}">Programs</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Edit</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->

        @include ('layouts.alert')

        <div class="portlet light bordered">
            <div class="portlet-body form">
                <form action={{ url("admin/program/$program->id/update") }} method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <input type="hidden" value="{{$program->id}}" name="id">
                    <div class="form-body">

                        <div class="form-group">
                            <label class="col-md-3 control-label">Title</label>
                            <div class="col-md-4">
                                <input type="input" class="form-control" name="title" value="{{$program->title}}" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Description</label>
                            <div class="col-md-4">
                                <textarea class="form-control" name="description" rows="7" id="description">{{$program->description}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Status</label>

                            <div class="col-md-4">
                                <select class="form-control" id="status" name="status">
                                    <option value="active" {{$program->status === "active" ? "selected" : ""}}>Active</option>
                                    <option value="inactive" {{$program->status === "inactive" ? "selected" : ""}}>Inactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Program Image</label>
                            <div class="col-md-4">
                                <div class="slim" data-size="900,900">
                                    <input type="file" name="causeImage[]">
                                    <?php echo Functions::showImage(Path::programs() . $program->image) ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-3 col-md-6">
                                <button type="submit" class="btn green">Submit</button>
                                <a href={{ url('admin/program') }} class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>
@endsection

@section('onpagejs')
<script src="{{ asset('admin_panel/js/slim.js') }}" type="text/javascript"></script>
@endsection