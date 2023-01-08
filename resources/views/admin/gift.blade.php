@extends('layouts.master-admin')

@section('title','gifts')

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
                <h1>Gifts
                    <small></small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
            <a href="{{ url('admin/gift/create')}}" class="btn btn-primary pull-right">Create new gift</a>
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="{{ url('admin')}}">Admin</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Gifts</span>
            </li>
        </ul>

        @include ('layouts.alert')

        <div class="portlet light bordered">
            <div class="portlet-body form">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="gift">
                    <thead>
                        <tr>
                            <th>
                                <i class="fa fa-list"></i>Title
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Image
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Description
                            </th>
                            <th>
                                <i class="fa fa-list"></i>Price
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
                        @foreach($gifts as $gift)
                        <tr id="del-{{$gift->id}}">

                            <td>
                                <div class="success"></div>
                                {{$gift->title}}
                            </td>
                            <td>
                                <div class="success"></div>
                                <a class="view btn btn-circle btn-sm btn-primary" id="1" data-toggle="modal" data-target="#myModal" src="{{url(Path::gifts() . $gift->image)}}">
                                    <i class="fa fa-edit"></i> View
                                </a>
                            </td>
                            <td>
                                <div class="success"></div>
                                {{$gift->description}}
                            </td>
                            <td>
                                <div class="success"></div>
                                {{$gift->price}}
                            </td>

                            <td>
                                <div class="success"></div>
                                {{$gift->status}}
                            </td>
                            <td>
                                <a href={{ url("admin/gift/$gift->id/edit")}} class="btn btn-outline btn-circle btn-sm purple">
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <img class="img-responsive" src="" download />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary down">Download</button>
            </div>
        </div>
    </div>
</div>

@endsection


@section('onpagejs')

<script src="{{ asset('admin_panel/js/datatables.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin_panel/js/delete.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#gift').DataTable({
            dom: 'lBfrtip',
            responsive: true,
            buttons: [
                'pdf'
            ]
        });
        $('a.view').on('click', function() {
            var image = $(this).attr('src');
            $('#myModal').on('show.bs.modal', function() {
                $(".img-responsive").attr("src", image).attr("download");
                $(".download").attr("href", image);
            });
            $('.down').on('click', function() {
                var link = document.createElement('a');
                link.href = image;
                //console.log(link.download);return false;
                link.download = '';
                document.body.appendChild(link);
                link.click();
            });
        });

    });
</script>
@endsection