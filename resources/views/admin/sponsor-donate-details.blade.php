@extends('layouts.master-admin')

@section('title', 'Sponsor Donate Details')
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
                <h1>Sponsor Donate Details
                    <small></small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
            <a href="{{ url('admin/sponsor-donate')}}" class="btn btn-primary pull-right">Sponsor Donate List</a>
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="{{ url('admin')}}">Admin</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Details</span>
            </li>
        </ul>

        @include ('layouts.alert')

        <div class="portlet light bordered">
            <div class="portlet-body form">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sponsorDetails">
                    <thead>
                        <tr>
                            <th>
                                <i class="fa fa-list"></i>Name
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Month
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Net Amount
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Total Amount
                            </th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach($details as $detail)
                        <tr id="del-{{$detail->id}}">
                            <td style='width: 35%;'>
                                {{$detail->name}}
                            </td>
                            <td>
                                <div class="success"></div>
                                {{$detail->type}}
                            </td>
                            <td>
                                <div class="success"></div>
                                {{$detail->netAmount}}
                            </td>
                            <td>
                                <div class="success"></div>
                                {{$detail->total}}
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>
@endsection

@section('onpagejs')

<script src="{{ asset('admin_panel/js/datatables.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin_panel/js/delete.js')}}" type="text/javascript"></script>

@endsection