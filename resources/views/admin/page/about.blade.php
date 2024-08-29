@extends('admin.layouts.app')
@section('title') About @endsection
@section('content')
@include('admin.layouts.alert')
<div class="row">
	<div class="col-xs-12">
		<form class="form-horizontal" role="form" action="{{ route('post.dashboard.page.about')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Welcome to </label>
				<div class="col-sm-9">
					<input type="text" placeholder="English Master Academy" class="col-xs-10 col-sm-5" name= "c1" value="{{ old('c1', isset($data) ? $data['c1'] : '' ) }}" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description 1 </label>
				<div class="col-sm-9">
					<textarea rows="3" class="form-control" placeholder="" class="col-xs-10 col-sm-5" name= "c2">{{ old('c2', isset($data) ? $data['c2'] : '' ) }}</textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description 2 </label>
				<div class="col-sm-9">
					<textarea rows="6" class="form-control" placeholder="" class="col-xs-10 col-sm-5" name= "c3">{{  old('c3', isset($data) ? $data['c3'] : "")}}</textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Address </label>
				<div class="col-sm-9">
					<input type="text" placeholder="" class="col-xs-10 col-sm-5" name= "c4" value="{{ old('c4', isset($data) ? $data['c4'] : '' ) }}"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>
				<div class="col-sm-9">
					<input type="text" placeholder="" class="col-xs-10 col-sm-5" name= "c5" value="{{ old('c5', isset($data) ? $data['c5'] : '' ) }}"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> PhoneNumber </label>
				<div class="col-sm-9">
					<input type="text" placeholder="" class="col-xs-10 col-sm-5" name= "c6" value="{{ old('c6', isset($data) ? $data['c6'] : '' ) }}"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Link Facebook </label>
				<div class="col-sm-9">
					<input type="text" placeholder="" class="col-xs-10 col-sm-5" name= "c7" value="{{ old('c7', isset($data) ? $data['c7'] : '' ) }}"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Link Youtube </label>
				<div class="col-sm-9">
					<input type="text" placeholder="" class="col-xs-10 col-sm-5" name= "c8" value="{{ old('c8', isset($data) ? $data['c8'] : '' ) }}"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tiktok </label>
				<div class="col-sm-9">
					<input type="text" placeholder="" class="col-xs-10 col-sm-5" name= "c9" value="{{ old('c9', isset($data) ? $data['c9'] : '' ) }}"/>
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
						<img class="react__shape__ab" src="{{ URL::asset('admin\images\size\ab.png') }}">
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