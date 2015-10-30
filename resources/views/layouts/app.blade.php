<!DOCTYPE html>
<html>
<head>
 <title>Tubr</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
 <link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <link href="{{ asset('css/font-awesome.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
 <link href="{{ asset('css/styles.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
 <link href="{{ secure_asset('css/font-awesome.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<div class="container-fluid">
	@yield('nav')
 <div class="row container-fluid">
	@yield('content')
 </div>
 <div class="row">
	@yield('footer')
 </div>
</div>
<script src="{{ asset('js/application.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>