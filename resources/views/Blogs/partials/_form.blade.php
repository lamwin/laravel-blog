<div class="row">
	<div class="large-6 columns">
		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title') !!}
		@if ($errors->has('title'))
		    <?php echo $errors->first('title', '<div data-alert class="alert-box warning">
			  You have to give this blog post a title!
			</div>'); ?>
		@endif
	</div>
</div>

{!! Form::hidden('category_id', $category->id) !!}

<div class="row">
	<div class="large-6 columns">
		{!! Form::label('slug', 'Slug:') !!}
		{!! Form::text('slug') !!}
		@if ($errors->has('slug'))
		    <?php echo $errors->first('slug', '<div data-alert class="alert-box warning">
			  You need to enter your slug field!
			</div>'); ?>
		@endif
	</div>
</div>

<div class="row">
	<div class="large-12 columns">
		{!! Form::label('body', 'Body:') !!}
		{!! Form::textarea('body') !!}
		@if ($errors->has('body'))
		    <?php echo $errors->first('body', '<div data-alert class="alert-box warning">
			  You need to provide a body for this blog post!
			</div>'); ?>
		@endif
	</div>
</div>
<br />

<div class="row">
	<div class="large-6 columns">
		<a class="button alert" href="{{ route('categories.show', [$category->slug]) }}">Back</a>
		{!! Form::submit($submit_text, ['class' => 'button success']) !!}
	</div>
</div>