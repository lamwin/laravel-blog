<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel | Blogs</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/global.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/foundation.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/normalize.css') }}" rel="stylesheet">

  	<script src="{{ URL::asset('js/vendor/custom.modernizr.js') }}"></script>

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="top-bar" data-topbar role="navigation" style="margin-bottom: 10px;">
	  <ul class="title-area">
	    <li class="name">
	      <h1><a href="#">Laravel | Blogs</a></h1>
	    </li>
	     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
	    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	  </ul>
	</nav>

	<div class="row">
		<div class="large-12 columns">

			@yield('content')

			<br />

			@if (Session::has('message'))
				<p style="color: orange;">{{ Session::get('message') }}</a>
			@endif
		</div>
	</div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="{{ URL::asset('js/vendor/jquery.js') }}"></script>
	  <script src="{{ URL::asset('js/foundation.min.js') }}"></script>
	  <script>
	    $(document).foundation();
	  </script>
</body>
</html>