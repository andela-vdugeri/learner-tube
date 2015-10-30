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
		  <li><a href="{{ route('video.create') }}" id="upload">New Video</a></li>
			<li><a href="{{ route('category.create') }}">New Category</a></li>
		  <li class="dropdown">
			 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<img src="{{ $user->avatar_url }}" class="profile-image img-circle" width="40" height="40"><b class="caret"></b>
			 </a>
			 <ul class="dropdown-menu">
				<li><a href="{{ route('dashboard') }}"><i class="fa fa-home">{{$user->name}}</i></a></li>
				<li class="divider"></li>
				<li><a href="{{ route('profile.edit', $user->id) }}"><i class="fa fa-cog">Edit Profile</i></a></li>
				<li class="divider"></li>
				<li><a href="{{ route('videos.all') }}"><i class="fa fa-file-video-o">My Videos</i></a></li>
				<li class="divider"></li>
				<li><a href="{{ route('auth.logout') }}"><i class="fa fa-sign-out"></i>Sign Out</a></li>
			 </ul>
			</li>
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