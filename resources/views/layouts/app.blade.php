<!DOCTYPE html>
<html>
<head>
 <title>Home</title>
 <meta name="_token" content="{!! csrf_token() !!}"/>
 <!-- CSS  -->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
 <link href="{{ asset('css/jquery-ui.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
 <link href="{{ asset('css/jquery-ui.structure.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
 <link href="{{ asset('css/jquery-ui.theme.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
 <link href="{{ secure_asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
 <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
 <link href="{{ secure_asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
 <link href="{{ asset('css/font-awesome.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
 <link href="{{ secure_asset('css/font-awesome.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<div class="navbar-fixed">
 <nav class="cyan z-depth-0">
	<div class="nav-wrapper">
	 <a href="{{url('/')}}" class="brand-logo white-text"><span class="navbar-brand-right">Tubr</span></a>
		@yield('navigation')
	</div>
 </nav>
</div>

<div>
 	@yield('content')
</div>

@yield('footer')
<!--  Scripts-->
<script src="{{ asset('js/jquery-1.11.3.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ secure_asset('js/jquery-1.11.3.js') }}"></script>
<script src="{{ asset('js/materialize.js') }}"></script>
<script src="{{ secure_asset('js/materialize.js') }}"></script>
<script src="{{ asset('js/init.js') }}"></script>
<script src="{{ secure_asset('js/init.js') }}"></script>
<script src="{{ secure_asset('js/application.js') }}"></script>
<script src="{{ asset('js/application.js') }}"></script>
</body>
</html>
