@extends('layouts.master-admin')

@section('title','contacts')

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
                <h1>Contacts
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
                <span class="active">Contacts</span>
            </li>
        </ul>

        @include ('layouts.alert')

        <div class="portlet light bordered">
            <div class="portlet-body form">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="contact">
                    <thead>
                        <tr>
                            <th>
                                <i class="fa fa-list"></i>Name
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Email
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Phone Number
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Message
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                        <tr id="del-{{$contact->id}}">
                            <td>
                                <div class="success"></div>
                                {{$contact->name}}
                            </td>

                            <td>
                                <div class="success"></div>
                                {{$contact->email}}
                            </td>
                            <td>
                                <div class="success"></div>
                                {{$contact->phoneNumber}}
                            </td>
                            <td>
                                <div class="success"></div>
                                {{$contact->message}}
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
    $('#contact').DataTable({
        dom: 'lBfrtip',
        responsive: true,
        buttons: [
            'pdf'
        ]
    });
</script>
@endsection