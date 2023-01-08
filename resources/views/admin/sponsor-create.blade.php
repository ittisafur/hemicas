@extends('layouts.master-admin')

@section('title', 'Create Sponsor')
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
                <h1>Create Sponsor
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
                <a href="{{ url('admin/sponsor')}}">Sponsor</a>
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
                <form action="{{ url('admin/sponsor/store')}}" method="POST" class="form-horizontal" enctype='multipart/form-data'>
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Type</label>
                                <div class="col-md-4">
                                    <select class="form-control" id="type" name="type">
                                        <option value="child">child</option>
                                        <option value="mother">mother</option>
                                        <option value="family">family</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Name</label>
                                <div class="col-md-4">
                                    <input type="input" class="form-control" name="name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Age</label>
                                <div class="col-md-4">
                                    <input type="input" class="form-control" name="age" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Amount</label>
                                <div class="col-md-4">
                                    <input type="input" class="form-control" name="amount" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Gender</label>
                                <div class="col-md-4">
                                    <select class="form-control" id="gen" name="gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">DOB</label>
                                <div class="col-md-4">
                                    <input type="date" id="dob" name="dob" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Project Area</label>
                                <div class="col-md-4">
                                    <input type="input" class="form-control" name="projectArea">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Number of Siblings</label>
                                <div class="col-md-4">
                                    <input type="input" class="form-control" name="noOfSiblings">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Goes to School</label>
                                <div class="col-md-4">
                                    <input type="input" class="form-control" name="goesToSchool">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Prime Source of energy and nutrients</label>
                                <div class="col-md-4">
                                    <input type="input" class="form-control" name="sourceOfEnergy">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Guardian's Employment</label>
                                <div class="col-md-4">
                                    <input type="input" class="form-control" name="guardianEmployment">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Age Range</label>
                                <div class="col-md-4">
                                    <select class="form-control" id="ageRange" name="ageRange" required>
                                        <option value="2">Age less than 2 years</option>
                                        <option value="3">Age betwen 2 and 4 years</option>
                                        <option value="4">Age greater than 4 years</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Dreams</label>
                                <div class="col-md-4">
                                    <input type="input" class="form-control" name="dreams">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Hobbies</label>
                                <div class="col-md-4">
                                    <input type="input" class="form-control" name="hobbies">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Aim in Life</label>
                                <div class="col-md-4">
                                    <input type="input" class="form-control" name="aimInLife">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Favourite Subject</label>
                                <div class="col-md-4">
                                    <input type="input" class="form-control" name="favouriteSubject">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Grade</label>
                                <div class="col-md-4">
                                    <input type="input" class="form-control" name="grade">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Favourite Sports</label>
                                <div class="col-md-4">
                                    <input type="input" class="form-control" name="favouriteSports">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Monthly Protein Consumption</label>
                                <div class="col-md-4">
                                    <input type="input" class="form-control" name="monhtlyProtein">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Household Income</label>
                                <div class="col-md-4">
                                    <input type="input" class="form-control" name="householdIncome">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Is Sidebar</label>
                                <div class="col-md-4">
                                    <select class="form-control" id="isSidebar" name="isSidebar">
                                        <option value="1">True</option>
                                        <option value="0">False</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Image</label>
                                <div class="col-md-4">
                                    <div class="slim" data-force-size="300,255">
                                        <input type="file" name="childImage[]" required>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">Create Sponsor</button>
                                <a href="{{ url('admin/sponsor') }}" class="btn btn-default">Cancel</a>
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
@endsection