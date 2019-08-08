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
			<th>City</th>
			<th>Province</th>
			<th>Barangay</th>
			<th with="140px" class="text-center">
				<a href="{{route('posts.create')}}" class="btn btn-success btn-sm">Add</a>
			</th>
		</tr>
	@foreach ($posts as $key => $value)
		<tr>
			<td>{{ $value->region }}</td>
			<td>{{ $value->city }}</td>
			<td>{{ $value->province }}</td>
			<td>{{ $value->barangay }}</td>
			<td>
				<a href="{{ route('posts.show', $value->id)}}" class="btn btn-primary btn-sm">
					View
				</a>
				<a href="{{route('posts.edit', $value->id)}}" class="btn btn-primary btn-sm">
					Update
				</a>
				{!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $value->id]])!!}
				<button type="submit" style="display:inline;" class="btn btn-danger btn-sm">
					Delete
				</button>
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
	</table>
@endsection