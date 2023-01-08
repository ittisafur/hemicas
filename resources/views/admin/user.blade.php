@extends('layouts.master-admin')

@section('title','users')

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
                <h1>Users
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
                <span class="active">Users</span>
            </li>
        </ul>


        <div class="portlet light bordered">
            <div class="portlet-body form">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="user">
                    <thead>
                        <tr>
                            <th>
                                <i class="fa fa-list"></i>Name
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Email
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Id
                            </th>

                            <th>
                                <i class="fa fa-list"></i>Type
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Joined Date
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr id="del-{{$user->id}}">
                            <td>
                                <div class="success"></div>
                                {{$user->name}}
                            </td>

                            <td>
                                <div class="success"></div>
                                {{$user->email}}
                            </td>
                            <td>
                                <div class="success"></div>
                                {{$user->provider_id}}
                            </td>
                            <td>
                                <div class="success"></div>
                                {{$user->provider}}
                            </td>
                            <td>
                                <div class="success"></div>
                                {{$user->created_at->format('Y-m-d')}}
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
    $('#user').DataTable({
        dom: 'lBfrtip',
        responsive: true,
        buttons: [
            'pdf'
        ]
    });
</script>
@endsection