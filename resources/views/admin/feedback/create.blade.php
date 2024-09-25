@extends('admin.layouts.app')
@section('title') Add Feedback @endsection
@section('content')
@section('stylesheet')  
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/select2.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/jquery.filer/css/jquery.filer.css') }}"/>
@endsection
@include('admin.layouts.alert')
<form class="form-horizontal" role="form" action="{{ route('get.dashboard.feedback.create')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>
        <div class="col-sm-9">
            <input type="text" placeholder="Full Name" class="col-xs-10 col-sm-5" name= "name" value="{{ old('name', isset($data) ? $data['name'] : '' ) }}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Job </label>
        <div class="col-sm-9">
            <input type="text" placeholder="Current job" class="col-xs-10 col-sm-5" name= "position" value="{{ old('position', isset($data) ? $data['position'] : '' ) }}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Star </label>
        <div class="col-xs-9">
            <input type="number" name="star" class="col-xs-10 col-sm-5" required value="5" required />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label no-padding-right">Blocked</label>
        <div class="col-xs-9">
            <input name="blocked" class="ace ace-switch ace-switch-4 btn-rotate" type="checkbox" checked="true" />
            <span class="lbl"></span>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label no-padding-right" for="form-field-1"> Content </label>
        <div class="col-xs-9">
            <textarea name="content" id="content" rows="6" class="col-xs-9 col-sm-5">{{ old('content', isset($data) ? $data['content '] : '' ) }}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label no-padding-right">Avata</span></label>
        <div class="col-xs-4">
            <label class="ace-file-input">
                <input type="file" id="id-input-file-2" name="fileImage" value="{{ old('fileImage')}}">
            </label>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label no-padding-right"></span></label>
        <div class="col-sm-9">
            <img class="react__shape__ab" src="{{ URL::asset('admin\images\size\feedback.png') }}">
        </div>  
    </div>
    <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <button class="btn btn-info" type="Submit">
                    <i class="ace-icon fa fa-check bigger-110"></i>
                    Submit
                </button>
                &nbsp; &nbsp; &nbsp;
                <a class="btn" href="#">
                    <i class="ace-icon fa fa-undo bigger-110"></i>
                    Reset
                </a>
                &nbsp; &nbsp; &nbsp;
                <a class="btn btn-success" href="{{ route('get.dashboard.feedback.list') }}">
                    <i class="ace-icon fa fa-list bigger-110"></i>
                    Lists
                </a>
            </div>
        </div>
    <div class="clearfix"></div>
</form>
@endsection
@section("javascript")  
<script src="<?php echo asset('admin/plugins/func_ckfinder.js'); ?>"></script>
<script src="<?php echo asset('admin/plugins/ckeditor/ckeditor.js'); ?>"></script>
<script src="<?php echo asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
<script src="{{asset('admin/js/select2.min.js') }}"></script>
<script src="{{asset('admin/js/jquery-ui.custom.min.js') }}"></script>
<script src="{{asset('admin/js/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{asset('admin/js/bootbox.js') }}"></script>
<script src="{{asset('admin/js/bootstrap-multiselect.min.js') }}"></script>
<script src="{{asset('admin/plugins/jquery.filer/js/jquery.filer.min.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        $('#id-input-file-1 , #id-input-file-2').ace_file_input({
            no_file:'No File ...',
            btn_choose:'Choose',
            btn_change:'Change',
            droppable:false,
            onchange:null,
            thumbnail:false //| true | large
            //whitelist:'gif|png|jpg|jpeg'
            //blacklist:'exe|php'
            //onchange:''
            //
        });
    });

    $(document).ready(function(){
        ckeditor('description')
        $('.textarea').wysihtml5();
    });
    
    $(document).ready(function(){
        ckeditor('content')
        $('.textarea').wysihtml5();
    });
    
    $(document).ready(function(){
        ckeditor('curriculum')
        $('.textarea').wysihtml5();
    });

    $('.select2').css('width','500px').select2({allowClear:true})
        $('#select2-multiple-style .btn').on('click', function(e){
            var target = $(this).find('input[type=radio]');
            var which = parseInt(target.val());
            if(which == 2) $('.select2').addClass('tag-input-style');
             else $('.select2').removeClass('tag-input-style');
    });

    $(document).one('ajaxloadstart.page', function(e) {
        $('[class*=select2]').remove();
        $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox('destroy');
        $('.rating').raty('destroy');
        $('.multiselect').multiselect('destroy');
    });
</script>
@endsection