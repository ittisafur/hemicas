@extends('layouts.master-admin')

@section('title','sponsors')

@section('onpagecss')
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<style>
    #sortable {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .img-fluid {
        padding: 10px;
        width: 4%;
    }

    .name {
        padding-right: 5px;
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
                <h1>Sponsors List
                    <small></small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
            <a href="{{ url('admin/sponsor')}}" class="btn btn-primary pull-right">Sponsors List</a>
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="{{ url('admin')}}">Admin</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Sponsors List Order</span>
            </li>
        </ul>
        <div class="alert-holder-sponsor"></div>
        <div class="portlet light bordered">
            <div class="portlet-body form">

                <ul id="sortable">
                    @foreach ($sponsors as $sponsor)
                    <li id="data-{{$sponsor->id}}" class="ui-state-default ui-sortable-handle">
                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                        <span class="name">{{$sponsor->name}}</span> <img src="{{url(Path::sponsors() . $sponsor->image)}}" class="img-fluid" />
                    </li>
                    @endforeach
                </ul>
                <div id='ajax_loader' style="display: none;">
                    <img src="{{ asset('assets/images/ajax-loader.gif') }}"></img>
                </div>
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>



@endsection


@section('onpagejs')

<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
    jQuery(function($) {
        $(document).ajaxStop(function() {
            $("#ajax_loader").hide();

        });
        $(document).ajaxStart(function() {
            $("#ajax_loader").show();

        });
    });
</script>
<script>
    function sponsorMessageBox(data = '', type = "success") {
        var alertHolder = $(".alert-holder-sponsor"),
            close = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

        alertHolder.html('');
        alertHolder.html('<div class="alert alert-' + type + '">' + close + data + '</div>');
    }

    $(function() {
        $("#sortable").sortable({
            update: function(e, ui) {
                var order = $('#sortable').sortable('serialize');
                $(".alert-holder-sponsor").html('');
                //Ajax the data to the server
                $.get('/admin/sponsor/list/sort', order, function(data, textStatus, xhr) {

                    if (textStatus == "success") {
                        sponsorMessageBox("Sponsor list reordered", "success");
                    } else {
                        sponsorMessageBox("Sponsor list reordered failed!", "warning");
                    }
                });
            }
        });
        $("#sortable").disableSelection();
    });
</script>

@endsection