@extends('layouts.master-admin')

@section('title','faqs')

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
                <h1>Faqs
                    <small></small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
            <a href="{{ url('admin/faq/create')}}" class="btn btn-primary pull-right">Create new faq</a>
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="{{ url('admin')}}">Admin</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Faqs</span>
            </li>
        </ul>

        @include ('layouts.alert')

        <div class="portlet light bordered">
            <div class="portlet-body form">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="faq">
                    <thead>
                        <tr>
                            <th>
                                <i class="fa fa-list"></i>id
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Question
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Answer
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Status
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Action
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($faqs as $faq)
                        <tr id="del-{{$faq->id}}">
                            <td>
                                <div class="success"></div>
                                {{$faq->id}}
                            </td>

                            <td>
                                <div class="success"></div>
                                {{strip_tags($faq->question)}}
                            </td>
                            <td>
                                <div class="success"></div>
                                {{strip_tags($faq->answer)}}
                            </td>

                            <td>
                                <div class="success"></div>
                                {{$faq->status}}
                            </td>
                            <td>
                                <a href={{ url("admin/faq/$faq->id/edit")}} class="btn btn-outline btn-circle btn-sm purple">
                                    <i class="fa fa-edit"></i> Edit
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
<script type="text/javascript">
    $('#faq').DataTable({
        dom: 'lBfrtip',
        responsive: true,
        buttons: [
            'pdf'
        ]
    });
</script>
@endsection