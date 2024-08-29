@extends('admin.layouts.app')
@section('title') Why Choose Us @endsection
@section('content')
@include('admin.layouts.alert')
<div class="row">
	<div class="col-xs-12">
		<form class="form-horizontal" role="form" action="{{ route('post.dashboard.page.choose')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Personalized Learning </label>
				<div class="col-sm-9">
					<textarea rows="3" class="form-control" placeholder="" class="col-xs-10 col-sm-5" name= "c1">{{ old('c1', isset($data) ? $data['c1'] : '' ) }}</textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Interactive Classes </label>
				<div class="col-sm-9">
					<textarea rows="3" class="form-control" placeholder="" class="col-xs-10 col-sm-5" name= "c2">{{  old('c2', isset($data) ? $data['c2'] : "")}}</textarea>
				</div>
			</div>
						<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Supportive Environment </label>
				<div class="col-sm-9">
					<textarea rows="3" class="form-control" placeholder="" class="col-xs-10 col-sm-5" name= "c3">{{  old('c3', isset($data) ? $data['c3'] : "")}}</textarea>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Image </label>
				<div class="col-sm-9">
					<input type="file" id="id-input-file-2" name="fileImage" />
				</div>
				<div class="col-sm-9">
					@if($data['image'] != '')
						<img class="react__shape__ab" src="{{asset($data['image'])}}">
					@else
						<img class="react__shape__ab" src="{{ URL::asset('admin\images\size\choose.png') }}">
					@endif
					
				</div>
			</div>

			<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button class="btn btn-info" type="submit">
						<i class="ace-icon fa fa-check bigger-110"></i>
						Submit
					</button>

					&nbsp; &nbsp; &nbsp;
					<button class="btn" type="reset">
						<i class="ace-icon fa fa-undo bigger-110"></i>
						Reset
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection