@extends('layouts.master-admin')

@section('title', 'Create Faq')
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
                <h1>Create Faq
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
                <a href="{{ url('admin/faq')}}">Faq</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Create</span>
            </li>
        </ul>

        @include ('layouts.alert')

        <div class="portlet light bordered">
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="{{ url('admin/faq/store')}}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-body">

                        <div class="form-group">
                            <label class="col-md-3 control-label">Section</label>

                            <div class="col-md-4">
                                <select class="form-control" id="sec" name="section">
                                    @foreach($faqs_sections as $faqs_section)
                                    <option value="{{$faqs_section->id}}">{{$faqs_section->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Question</label>
                            <div class="col-md-4">
                                <textarea class="form-control" name="question" rows="7" id="question"></textarea>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Answer</label>
                            <div class="col-md-4">
                                <textarea class="form-control" name="answer" rows="7" id="answer"></textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">Create Faq</button>
                                <a href="{{ url('admin/faq') }}" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>
@endsection

@section('onpagejs')
<!-- <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: '#question'
    });
</script>
<script>
    tinymce.init({
        selector: '#answer'
    });
</script> -->

<!-- <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">
    bkLib.onDomLoaded(nicEditors.allTextAreas);
</script> -->

<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('question');
    CKEDITOR.replace('answer');
</script>
@endsection