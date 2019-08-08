<div class="col-sm-12">
	<div class="row">
		<div class="col-sm-2">
			{{ form::label('region', 'Region') }}
		</div>
		<div class="col-sm-10">
			<div class="form-group {{$errors->has('region') ? 'has-eror': "" }}">
				{{ Form::text('region', NULL, ['class'=>'form-control', 'id'=>'region', 'placeholder'=>'Input Region']) }}
				{{ $errors->first('region', '<p class="help-block">:message</p>') }}
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
			{{ form::label('city', 'City') }}
		</div>
		<div class="col-sm-10">
			<div class="form-group {{ $errors->has('city') ? 'has-error' : "" }}">
				{{ Form::text('city', NULL, ['class'=>'form-control','id'=>'city', 'placeholder'=>'Input City']) }}
				{{ $errors->first('city','<p class="help-block">:message</p>') }}
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
			{{ form::label('province', 'Province') }}
		</div>
		<div class="col-sm-10">
			<div class="form-group {{ $errors->has('province') ? 'has-error' : "" }}">
				{{ Form::text('province', NULL, ['class'=>'form-control','id'=>'province', 'placeholder'=>'Input Province']) }}
				{{ $errors->first('province','<p class="help-block">:message</p>') }}
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
			{{ form::label('barangay', 'Barangay') }}
		</div>
		<div class="col-sm-10">
			<div class="form-group {{ $errors->has('barangay') ? 'has-error' : "" }}">
				{{ Form::text('barangay', NULL, ['class'=>'form-control','id'=>'barangay', 'placeholder'=>'Input Barangay']) }}
				{{ $errors->first('barangay','<p class="help-block">:message</p>') }}
			</div>
		</div>
	</div>

	<div class="form-group">
		{{ Form::button(isset($model) ? 'Update' : 'Save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
	</div>
</div>