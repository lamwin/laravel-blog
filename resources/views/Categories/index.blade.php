@extends('app')

@section('content')
	<ul class="breadcrumbs">
		<li class="current">All Categories</li>
	</ul>
	
	<h2>All Categories</h2>

	<hr />

	<a class="button success" href="{{ route('categories.create') }}">Create new category</a>

	@if (!$categories->count())
		<p>You have no category</p>
	@else
		<ul class="no-bullet">
		@foreach ($categories as $category)
			<li class="category-item"><h4><a class="subheader" href="{{ route('categories.show', $category->slug ) }}">{{ $category->name }} ({{ $category->blogs->count() }})</a></h4></li>
			<li>
				{!! Form::open(array('method' => 'DELETE', 'route' => array('categories.destroy', $category->slug))) !!}
					{!! HTML::decode(link_to_route('categories.edit', 'Edit', array($category->slug))) !!} <span class="vertical-divider"> | </span>
					{!! Form::button('Delete', array('type' => 'submit', 'class' => 'not-button tiny')) !!}
				{!! Form::close() !!}
			</li>
			<hr class="category-line" />
		@endforeach
		</ul>
	@endif

@endsection