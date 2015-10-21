<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
 <title>Learner Tube - Never stop learning</title>

 <!-- CSS  -->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
 <link href="{{ secure_asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
 <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
 <link href="{{ secure_asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="white" role="navigation">
 <div class="nav-wrapper container">
	<a id="logo-container" href="#" class="brand-logo">L-Tube</a>
	<ul class="right hide-on-med-and-down">
	 <li><a href="{{url('/register')}}">Sign Up</a></li>
	 <li><a href="{{url('/login')}}">Sign In</a></li>
	</ul>

	<ul id="nav-mobile" class="side-nav">
	 <li><a href="#">Sign Up</a></li>
	 <li><a href="#">Sign In</a></li>
	</ul>
	<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
 </div>
</nav>

<div>
 	@yield('content')
</div>

<footer class="page-footer teal">
 <div class="container">
	<div class="row">
	 <div class="col l6 s12">
		<h5 class="white-text">Learner Tube</h5>
		<p class="grey-text text-lighten-4"></p>
	 </div>
	</div>
 </div>
 <div class="footer-copyright">
	<div class="container">
	 Copyright <a class="brown-text text-lighten-3" href="http://danverem.com">Danvery</a> &copy;2015
	</div>
 </div>
</footer>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{ asset('js/materialize.js') }}"></script>
<script src="{{ asset('js/init.js') }}"></script>

</body>
</html>
