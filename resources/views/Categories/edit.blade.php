@extends('app')

@section('content')
	<h2>Edit Category: {{ $category->name }}</h2>
	<hr />

	{!! Form::model($category, ['method' => 'PATCH', 'route' => ['categories.update', $category->slug]]) !!}
		@include('categories/partials/_form', ['submit_text' => 'Save'])
	{!! Form::close() !!}
@endsection