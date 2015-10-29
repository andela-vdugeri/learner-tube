@extends('layouts.app')


@section('nav')
 <nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
	 <div class="navbar-header">
		<a class="navbar-brand" href="{{ url('/') }}">Tubr</a>
	 </div>
	 <ul class="nav navbar-nav" style="margin-left: 1020px;">
		<li><a href="#">Videos</a></li>
		<li><a href="#">Logout</a></li>
		<div class="media">

		</div>
	 </ul>
	</div>
 </nav>
@endsection