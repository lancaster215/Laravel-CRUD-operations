@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>Post Show</h2>
			</div>
			<div style="float: right;">
				<a class="btn btn-primary" href="{{route('posts.index')}}">Done</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Region : </strong>
				{{ $post->name }}
				{!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $post->id]])!!}
				<input type="submit" name="button" class="btn btn-danger btn-sm" value="Delete {{ $post->name }}">
				{!! Form::close() !!}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Province : </strong>
				{{ $post1->name }}
				{!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $post1->id]])!!}
				<input type="submit" name="button1" class="btn btn-danger btn-sm" value="Delete {{ $post1->name }}">
				{!! Form::close() !!}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>City : </strong>
				{{ $post2->name }}
				{!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $post2->id]])!!}
				<input type="submit" name="button2" class="btn btn-danger btn-sm" value="Delete {{ $post2->name }}">
				{!! Form::close() !!}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Barangay : </strong>
				{{ $post3->name }}
				{!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $post3->id]])!!}
				<input type="submit" name="button3" class="btn btn-danger btn-sm" value="Delete {{ $post3->name }}">
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection