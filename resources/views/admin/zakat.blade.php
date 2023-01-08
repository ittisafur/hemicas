@extends('layouts.master-admin')

@section('title','zakats')

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
                <h1>Zakats
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
                <span class="active">Zakats</span>
            </li>
        </ul>

        <div class="portlet light bordered">
            <div class="portlet-body form">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="zakat">
                    <thead>
                        <tr>
                            <th>
                                <i class="fa fa-list"></i>Id
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
                                <i class="fa fa-list"></i>Zakat Date
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($zakats as $zakat)
                        <?php
                        $newTZ = new DateTimeZone("America/New_York");
                        $date = new DateTime($zakat->created_at);
                        $date->setTimezone($newTZ);

                        ?>
                        <tr id="del-{{$zakat->id}}">
                            <!-- <td style='width: 35%;'> -->
                            <td style='max-width: 45%;'>
                                {{$zakat->paymentId}}
                            </td>

                            <td>
                                <div class="success"></div>
                                {{$zakat->user_details->email}}
                            </td>
                            <td>
                                <div class="success"></div>
                                {{$zakat->currency}}
                            </td>
                            <td>
                                <div class="success"></div>
                                {{$zakat->amount}}
                            </td>
                            <td>
                                <div class="success"></div>
                                {{$zakat->type}}
                            </td>
                            <td>
                                <div class="success"></div>
                                {{$date->format('Y-m-d H:i:s')}}
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
        $('#zakat').DataTable({
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