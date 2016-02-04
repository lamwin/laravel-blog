<div class="row">
	<div class="large-6 columns">
		{!! Form::label('name', 'Name:') !!}
		{!! Form::text('name') !!}
		@if ($errors->has('name'))
		    <?php echo $errors->first('name', '<div data-alert class="alert-box warning">
			  You need to enter a name for the category!
			</div>'); ?>
		@endif
	</div>
</div>

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
	<div class="large-6 columns">
		<a class="button alert" href="{{ route('categories.index') }}">Back</a>
		{!! Form::submit($submit_text, ['class' => 'button success']) !!}
	</div>
</div>