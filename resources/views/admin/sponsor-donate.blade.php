@extends('layouts.master-admin')

@section('title','sponsor donates')

@section('onpagecss')
<link href="{{ asset('admin_panel/css/datatables.css') }}" rel="stylesheet" type="text/css" />
<style type="text/css">
    .dt-buttons {
        margin-top: 0px !important;
        padding-left: 10px;
    }
</style>

@endsection

@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Sponsor Donates
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
                <span class="active">Sponsor Donates</span>
            </li>
        </ul>

        <div class="portlet light bordered">
            <div class="portlet-body form">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="donate">
                    <thead>
                        <tr>
                            <th>
                                <i class="fa fa-list"></i>Donation Id
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Email
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Currency
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Amount
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Type
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Donation Date
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Details
                            </th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sponsorDonates as $sponsorDonate)
                        <?php
                        $newTZ = new DateTimeZone("America/New_York");
                        $date = new DateTime($sponsorDonate->created_at);
                        $date->setTimezone($newTZ);

                        ?>
                        <tr id="del-{{$sponsorDonate->id}}">
                            <td style='max-width: 45%;'>
                                {{$sponsorDonate->paymentId}}
                            </td>

                            <td>
                                <div class="success"></div>
                                {{$sponsorDonate->user_details->email}}
                            </td>
                            <td>
                                <div class="success"></div>
                                {{$sponsorDonate->currency}}
                            </td>
                            <td>
                                <div class="success"></div>
                                {{$sponsorDonate->amount}}
                            </td>
                            <td>
                                <div class="success"></div>
                                {{$sponsorDonate->type}}
                            </td>
                            <td>
                                <div class="success"></div>
                                {{$date->format('Y-m-d H:i:s')}}
                            </td>
                            <td>
                                <a href={{ url("admin/sponsor-donate/$sponsorDonate->id/details")}} class="btn btn-outline btn-circle btn-sm purple">
                                    <i class="fa fa-edit"></i> Details
                                </a>
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
<script type="text/javascript">
    $(document).ready(function() {
        $('#donate').DataTable({
            dom: 'lBfrtip',
            "sScrollY": "300px",
            "sScrollX": "100%",
            "sScrollXInner": "150%",
            "bScrollCollapse": true,
            buttons: [
                'pdf'
            ]
        });

    });
</script>
@endsection