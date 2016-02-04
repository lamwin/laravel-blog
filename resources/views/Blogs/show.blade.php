@extends('app')

@section('content')
	<!--<a href="{{ route('categories.show', [$category->slug]) }}">Back</a>-->

	<ul class="breadcrumbs">
		<li><a href="{{ route('categories.index') }}">All Categories</a></li>
		<li><a href="{{ route('categories.show', [$category->slug]) }}">{{ $category->name }}</a></li>
		<li class="current">{{ $blog->title }}</li>
	</ul>

	<div class="row">
		<div class="large-10 columns">
			<h3>{{ $blog->title }}</h3>
			<p class="subheader">{{ date("M d, Y", strtotime($blog->created_at)) }} <small><i>by</i></small> <strong>Lam Nguyen</strong></p>
		</div>
	</div>

	<hr />

	<div class="row">
		<div class="large-12 columns">
			<p>{!! nl2br(e($blog->body)) !!}</p>
		</div>
	</div>
@endsection