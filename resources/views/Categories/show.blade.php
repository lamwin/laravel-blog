@extends('app')

@section('content')
	
	<!--<a href="{{ route('categories.index') }}">Back</a>-->
	<ul class="breadcrumbs">
		<li><a href="{{ route('categories.index') }}">All Categories</a></li>
		<li class="current">{{ $category->name }}</li>
	</ul>

	<h2>{{ $category->name }}</h2>

	<hr />

	<a class="button success" href="{{ route('categories.blogs.create', [$category->slug]) }}">Create new blog</a>

	@if (!$category->blogs->count())
		<p>There's no blog post in this category!</p>
	@else
		<ul class="no-bullet">
			@foreach($category->blogs as $blog)
			<li>
				<div class="row">
					<div class="large-10 columns">
						<h4><a href="{{ route('categories.blogs.show', [$category->slug, $blog->slug]) }}">{{ $blog->title }}</a></h4>
						<p class="subheader">{{ date("M d, Y", strtotime($blog->created_at)) }}</p>
						{!! Form::open(array('method' => 'DELETE', 'route' => array('categories.blogs.destroy', $category->slug, $blog->slug))) !!}
							{!! HTML::decode(link_to_route('categories.blogs.edit', 'Edit', array($category->slug, $blog->slug))) !!} <span class="vertical-divider">|</span>
							{!! Form::button('Delete', array('type' => 'submit', 'class' => 'not-button tiny')) !!}
						{!! Form::close() !!}
					</div>
				</div>
				<hr />
			</li>
			@endforeach
		</ul>
	@endif
@endsection