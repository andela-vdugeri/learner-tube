<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
 <title>Learner Tube - Never stop learning</title>

 <!-- CSS  -->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
 <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
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
		<h5 class="white-text">Company Bio</h5>
		<p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


	 </div>
	 <div class="col l3 s12">
		<h5 class="white-text">Settings</h5>
		<ul>
		 <li><a class="white-text" href="#!">Link 1</a></li>
		 <li><a class="white-text" href="#!">Link 2</a></li>
		 <li><a class="white-text" href="#!">Link 3</a></li>
		 <li><a class="white-text" href="#!">Link 4</a></li>
		</ul>
	 </div>
	 <div class="col l3 s12">
		<h5 class="white-text">Connect</h5>
		<ul>
		 <li><a class="white-text" href="#!">Link 1</a></li>
		 <li><a class="white-text" href="#!">Link 2</a></li>
		 <li><a class="white-text" href="#!">Link 3</a></li>
		 <li><a class="white-text" href="#!">Link 4</a></li>
		</ul>
	 </div>
	</div>
 </div>
 <div class="footer-copyright">
	<div class="container">
	 Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
	</div>
 </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{ asset('js/materialize.js') }}"></script>
<script src="{{ asset('js/init.js') }}"></script>

</body>
</html>
