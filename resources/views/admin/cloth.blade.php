@extends('layouts.master-admin')

@section('title','cloths')

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
                <h1>Cloths
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
                <span class="active">Cloths</span>
            </li>
        </ul>

        <div class="portlet light bordered">
            <div class="portlet-body form">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="cloth">
                    <thead>
                        <tr>
                            <th>
                                <i class="fa fa-list"></i>Name
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Email
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Phone
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Address
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Location
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Pickup Date
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Items
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Comment
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cloths as $cloth)
                        <tr id="{{$cloth->id}}">
                            <td>
                                {{$cloth->name}}
                            </td>

                            <td>
                                {{$cloth->email}}
                            </td>
                            <td>
                                {{$cloth->phone}}
                            </td>
                            <td>
                                {{$cloth->address}}
                            </td>
                            <td>
                                {{$cloth->location}}
                            </td>
                            <td>
                                {{$cloth->pickupDate}}
                            </td>
                            <td>
                                {{$cloth->items}}
                            </td>
                            
                            <td>
                                {{$cloth->comment}}
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
<script type="text/javascript">
    $('#cloth').DataTable({
        dom: 'lBfrtip',
        "sScrollY": "300px",
        "sScrollX": "100%",
        "sScrollXInner": "150%",
        "bScrollCollapse": true,
        responsive: true,
        buttons: [
            'pdf'
        ]
    });
</script>
@endsection