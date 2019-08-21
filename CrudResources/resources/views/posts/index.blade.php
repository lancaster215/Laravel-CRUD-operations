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
	@foreach($posts as $key)
	@foreach($posts1 as $key1)
	@foreach($posts2 as $key2)
	@foreach($posts3 as $key3)
		<tr>
			<td><?php echo $key->name ?></td>
			<td><?php echo $key1->name ?></td>
			<td><?php echo $key2->name ?></td>
			<td><?php echo $key3->name ?></td>
			<td>
				<a href="{{ route('posts.show', $key->id, $key1->id, $key2->id, $key3->id)}}" class="btn btn-primary btn-sm">
					View
				</a>
				<a href="{{ route('posts.edit', $key->id, $key1->id, $key2->id, $key3->id)}}" class="btn btn-primary btn-sm">
					Update
				</a>
			</td>
		</tr>
	@endforeach
	@endforeach
	@endforeach
	@endforeach
	</table>
@endsection