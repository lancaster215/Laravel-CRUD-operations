@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-sm-12">
			<div class="full-right">
				<h2>CRUD Resources</h2>
			</div>
		</div>
	</div>
	<table class="table table-bordered">
		<tr>
			<th>Region</th>
			<th>Province</th>
			<th>City</th>
			<th>Barangay</th>
			<th with="140px" class="text-center">
				<a href="{{route('posts.create')}}" class="btn btn-success btn-sm">Add</a>
			</th>
		</tr>
	@foreach ($posts as $key => $value)
	@foreach ($posts1 as $key => $value1)
	@foreach ($posts2 as $key => $value2)
	@foreach ($posts3 as $key => $value3)
		<tr>
			<td>{{ $value->r_name }}</td>
			<td>{{ $value1->p_name }}</td>
			<td>{{ $value2->c_name }}</td>
			<td>{{ $value3->b_name }}</td>
			<td>
				<a href="{{ route('posts.show', $value->r_id, $value1->p_id, $value2->c_id, $value3->b_id)}}" class="btn btn-primary btn-sm">
					View
				</a>
				<a href="{{ route('posts.edit', $value->r_id, $value1->p_id, $value2->c_id, $value3->b_id)}}" class="btn btn-primary btn-sm">
					Update
				</a>
				{!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $value->r_id]])!!}
				<button type="submit" class="btn btn-danger btn-sm">
					Delete
				</button>
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
	@endforeach
	@endforeach
	@endforeach
	</table>
@endsection