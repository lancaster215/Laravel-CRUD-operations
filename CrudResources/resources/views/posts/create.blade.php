@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="col-sm-12">
				<div class="form-group" style="float:right;">
					<a href="{{route('posts.index')}}" class="btn btn-primary btn-sm">Done</a>
				</div>
			{{ Form::open(['route'=>'posts.store', 'method'=>'POST']) }}
				<div class="form-group pt-5">
					<label>Input Region:</label>
					<input class="form-control" type="text" id="name" name="name" placeholder="Input Region Name">
				</div>
				<div class="form-group" style="float:right;">
					<input type="submit" name="button" value="Add" class="btn btn-success">
				</div>
			{{ Form::close() }}

			{{ Form::open(['route'=>'posts.store', 'method'=>'POST']) }}
				<div class="form-group pt-5">
					<label>Input Province of
						<select class="form-control" name="region_id" id="region">
							<option>--Select Region--</option>
							@foreach($region as $key => $value)
								<option value="{{ $value->id }}">{{ $value->name }}</option>
							@endforeach
						</select>
					</label>
					<input class="form-control" type="text" id="name" name="name" placeholder="Input Province Name">
				</div>
				<div class="form-group" style="float:right;">
					<input type="submit" name="button1" value="Add" class="btn btn-success">
				</div>
			{{ Form::close() }}

			{{ Form::open(['route'=>'posts.store', 'method'=>'POST']) }}
				<div class="form-group pt-5">
					<label>Input City of
						<select class="form-control" name="province_id" id="province">
							<option value="0" disable="true" selected="true">--Select Province--</option>
						</select>
					</label>
					<select id="region-dependent" name="region_id" style="visibility: hidden;">
					</select>
					<input class="form-control" type="text" id="name" name="name" placeholder="Input City Name">
				</div>
				<div class="form-group" style="float:right;">
					<input type="submit" name="button2" value="Add" class="btn btn-success">
				</div>
			{{ Form::close() }}

			{{ Form::open(['route'=>'posts.store', 'method'=>'POST']) }}
				<div class="form-group pt-5">
					<label>Input Barangay of
						<select class="form-control" name="cities_id" id="city">
							<option value="0" disable="true" selected="true">--Select City--</option>
						</select>
					</label>
					<select id="region-dependent1" name="region_id" style="visibility: hidden;">
					</select>
					<select id="province-dependent" name="province_id" style="visibility: hidden;">
					</select>
					<input class="form-control" type="text" id="name" name="name" placeholder="Input Barangay Name">
				</div>
				<div class="form-group" style="float:right;">
					<input type="submit" name="button3" value="Add" class="btn btn-success">
				</div>
			{{ Form::close() }}

			</div>
			{{ csrf_field() }}
		</div>
	</div>
@endsection
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#region').change(function(){
			var r_id = $(this).val();
			$.get('/ajax-prov?rid='+r_id,function(data){
				console.log(data);
				$('#province').empty();
				$('#province').append('<option value="0" disable="true" selected="true">--Select Province--</option>');
				$.each(data, function(index, provinceObj){
					$('#province').append('<option value="'+ provinceObj.id +'">'+ provinceObj.name +'</option>');
					$('#region-dependent').append('<option value="'+ provinceObj.region_id +'">'+ provinceObj.region_id +'</option>');
					$('#region-dependent1').append('<option value="'+ provinceObj.id +'">'+ provinceObj.id +'</option>');
				});
			});
		});
		$('#province').change(function(){
			var p_id = $(this).val();
			$.get('/ajax-city?pid='+p_id,function(data){
				console.log(data);
				$('#city').empty();
				$('#city').append('<option value="0" disable="true" selected="true">--Select City--</option>');
				$.each(data, function(index, cityObj){
					$('#city').append('<option value="'+ cityObj.id +'">'+ cityObj.name +'</option>');
					$('#province-dependent').append('<option value="'+ cityObj.province_id +'">'+ cityObj.province_id +'</option>');
				});
			});
		});
		$('#city').change(function(){
			var c_id = $(this).val();
			$.get('/ajax-bara?cid='+c_id,function(data){
				console.log(data);
				$('#barangay').empty();
				$('#barangay').append('<option value="0" disable="true" selected="true">--Select Barangay--</option>');
				$.each(data, function(index, barangayObj){
					$('#barangay').append('<option value="'+ barangayObj.id +'">'+ barangayObj.name +'</option>');
				});
			});
		});
	});
</script>