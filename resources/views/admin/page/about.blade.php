@extends('admin.layouts.app')
@section('title') About @endsection
@section('content')
<div class="row">
	<div class="col-xs-12">
		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Welcome to </label>
				<div class="col-sm-9">
					<input type="text" placeholder="English Master Academy" class="col-xs-10 col-sm-5" name= "name1" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description 1 </label>
				<div class="col-sm-9">
					<textarea rows="3" class="form-control" placeholder="" class="col-xs-10 col-sm-5" name= "name2"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description 2 </label>
				<div class="col-sm-9">
					<textarea rows="6" class="form-control" placeholder="" class="col-xs-10 col-sm-5" name= "name3"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Address </label>
				<div class="col-sm-9">
					<input type="text" placeholder="" class="col-xs-10 col-sm-5" name= "name4" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>
				<div class="col-sm-9">
					<input type="text" placeholder="" class="col-xs-10 col-sm-5" name= "name5" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> PhoneNumber </label>
				<div class="col-sm-9">
					<input type="text" placeholder="" class="col-xs-10 col-sm-5" name= "name6" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Link Facebook </label>
				<div class="col-sm-9">
					<input type="text" placeholder="" class="col-xs-10 col-sm-5" name= "name7" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Link Youtube </label>
				<div class="col-sm-9">
					<input type="text" placeholder="" class="col-xs-10 col-sm-5" name= "name8" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tiktok </label>
				<div class="col-sm-9">
					<input type="text" placeholder="" class="col-xs-10 col-sm-5" name= "name9" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Image </label>
				<div class="col-sm-9">
					<input type="file" id="id-input-file-2" />
				</div>
				<div class="col-sm-9">
					<img class="react__shape__ab" src="{{ URL::asset('build\images\about\ab.png') }}">
				</div>
			</div>

			<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button class="btn btn-info" type="button">
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