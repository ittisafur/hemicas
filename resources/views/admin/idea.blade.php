@extends('layouts.master-admin')

@section('title','ideas')

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
                <h1>Ideas
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
                <span class="active">Ideas</span>
            </li>
        </ul>

        <div class="portlet light bordered">
            <div class="portlet-body form">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="idea">
                    <thead>
                        <tr>
                            <th>
                                <i class="fa fa-list"></i>Name
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Email
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Location
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Age
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Profession
                            </th>
                            <th>
                                <i class="fa fa-list"></i>File
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Message
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ideas as $idea)
                        <tr id="{{$idea->id}}">
                            <td>
                                {{$idea->name}}
                            </td>

                            <td>
                                {{$idea->email}}
                            </td>
                            <td>
                                {{$idea->location}}
                            </td>
                            <td>
                                {{$idea->age}}
                            </td>
                            <td>
                                {{$idea->profession}}
                            </td>
                            <td>
                                <a href="{{ url(Path::ideas() . $idea->ideaFile)}}" target="_blank">{{$idea->ideaFile}}</a>
                            </td>
                            <td>
                                {{$idea->message}}
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
    $('#idea').DataTable({
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