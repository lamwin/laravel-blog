@extends('app')

@section('content')
	<h2>Create new category</h2>
	<hr />

	{!! Form::model(new App\Category, ['route' => 'categories.store']) !!}
		@include('categories/partials/_form', ['submit_text' => 'Create Category'])
	{!! Form::close() !!}
@endsection