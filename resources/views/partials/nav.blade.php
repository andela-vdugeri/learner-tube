<nav class="navbar navbar-default navbar-fixed-top">
 <div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
	 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	 </button>
	 <a class="navbar-brand" href="{{ url('/') }}">Tubr</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	 <ul class="nav navbar-nav">
	 </ul>
	 <ul class="nav navbar-nav navbar-right">
		@if(!$user)
		<li><a href="{{ route('auth.login')  }}">Login</a></li>
		<li><a href="{{ route('auth.register') }}">Register</a></li>
		@else
		  <li><a href="{{ route('video.create') }}"><button type="button" class="btn btn-default btn-sm">Upload</button></a></li>
		  <li><a href="{{ route('videos.all') }}">Videos</a></li>
		  <li><a href="{{ route('auth.logout') }}">Logout</a></li>
		@endif
	 </ul>
	</div>
 </div>
</nav>








<!--- my code -->

{{--<nav class="navbar navbar-default navbar-fixed-top">--}}
 {{--<div class="container-fluid">--}}
	{{--<div class="navbar-header">--}}
	 {{--<a class="navbar-brand" href="{{ url('/') }}">Tubr</a>--}}
	{{--</div>--}}
	{{--<ul class="nav navbar-nav" style="margin-left: 1020px;">--}}
	 {{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
	 {{--<li><a href="#">Register</a></li>--}}
	{{--</ul>--}}
 {{--</div>--}}
{{--</nav>--}}