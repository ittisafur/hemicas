@extends('layouts.master-admin')

@section('title', 'Create Manual Donate')
@section('onpagecss')
@endsection

@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Create Manual Donate
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
                <a href="{{ url('admin/donate')}}">Donate</a>
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
                <form action="{{ url('admin/donate/store')}}" method="POST" class="form-horizontal" enctype='multipart/form-data'>
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Type</label>

                            <div class="col-md-4">
                                <select class="form-control" id="sec" name="type">
                                    <option value="check">Check</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Amount</label>
                            <div class="col-md-4">
                                <input type="number" class="form-control" name="amount" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Currency</label>
                            <div class="col-md-4">
                                <input type="input" class="form-control" name="currency" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Donor Email</label>
                            <div class="col-md-4">
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Donor Name</label>
                            <div class="col-md-4">
                                <input type="input" class="form-control" name="name" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Donation Date</label>
                            <div class="col-md-4">
                                <input type="date" class="form-control" name="date" required="">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">Create Manual Donate</button>
                                <a href="{{ url('admin/donate') }}" class="btn btn-default">Cancel</a>
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

@endsection