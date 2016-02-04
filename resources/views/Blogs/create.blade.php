@extends('app')

@section('content')
	<h2>Create new blog for category: {{ $category->name }}</h2>
	<hr />

	{!! Form::model(new App\Blog, ['route' => 'categories.blogs.store', $category->slug]) !!}
		@include('blogs/partials/_form', ['submit_text' => 'Create Blog'])
	{!! Form::close() !!}
@endsection