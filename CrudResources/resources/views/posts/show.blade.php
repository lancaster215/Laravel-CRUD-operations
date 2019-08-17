@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>Post Show</h2>
			</div>
			<div style="float: right;">
				<a class="btn btn-primary" href="{{route('posts.index')}}">Back</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Region : </strong>
				{{ $post->r_name }}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Province : </strong>
				{{ $post1->p_name }}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>City : </strong>
				{{ $post2->c_name }}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Barangay : </strong>
				{{ $post3->b_name }}
			</div>
		</div>
	</div>