@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="form-group" style="float:right;">
				<a href="{{route('posts.index')}}" class="btn btn-primary btn-sm">Done</a>
			</div>
			{{ Form::model($post,['route'=>['posts.update', $post->id], 'method'=>'PATCH']) }}
			<div class="col-sm-10">
				{{ Form::label('title','Region :') }}
			</div>
			<div class="col-sm-10">
				<div class="form-group">
					<input type="text" name="region" id="region" value="{{$post->name}}" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<input type="submit" name="button" value="Update" class="btn btn-success">
			</div>
			{{ Form::close() }}

			{{ Form::model($post1,['route'=>['posts.update', $post1->id], 'method'=>'PATCH']) }}
			<div class="col-sm-10">
				{{ Form::label('title','Province :') }}
			</div>
			<div class="col-sm-10">
				<div class="form-group">
					<input type="text" name="region" id="region" value="{{$post1->name}}" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<input type="submit" name="button1" value="Update" class="btn btn-success">
			</div>
			{{ Form::close() }}

			{{ Form::model($post2,['route'=>['posts.update', $post2->id], 'method'=>'PATCH']) }}
			<div class="col-sm-10">
				{{ Form::label('title','City :') }}
			</div>
			<div class="col-sm-10">
				<div class="form-group">
					<input type="text" name="region" id="region" value="{{$post2->name}}" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<input type="submit" name="button2" value="Update" class="btn btn-success">
			</div>
			{{ Form::close() }}

			{{ Form::model($post3,['route'=>['posts.update', $post3->id], 'method'=>'PATCH']) }}
			<div class="col-sm-10">
				{{ Form::label('title','Barangay :') }}
			</div>
			<div class="col-sm-10">
				<div class="form-group">
					<input type="text" name="region" id="region" value="{{$post3->name}}" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<input type="submit" name="button3" value="Update" class="btn btn-success">
			</div>
			{{ Form::close() }}
		</div>
	</div>
@endsection