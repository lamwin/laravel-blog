@extends('app')

@section('content')
	<h2>Edit blog for category: {{ $category->name }}</h2>
	<hr />

	{!! Form::model($blog, ['method' => 'PATCH', 'route' => ['categories.blogs.update', $category->slug, $blog->slug]]) !!}
		@include('blogs/partials/_form', ['submit_text' => 'Save'])
	{!! Form::close() !!}
@endsection