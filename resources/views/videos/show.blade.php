@extends('layouts.app')


@section('nav')
	@include('partials.nav')
@endsection


@section('content')

 <div class="col-sm-12 col-md-6 col-lg-3">
	@include('partials.sidebar')
 </div>
 <div class="col-sm-12 col-md-6 col-lg-8" style="margin-top: 80px;">
	<div class="embed-responsive embed-responsive-16by9">
	 <iframe class="embed-responsive-item" src="https://youtube.com/embed/{{ $video->url }}" frameborder="0" allowfullscreen height="360" width="450"></iframe>
	</div>
 </div>



	{{--<div class="section">--}}
	 {{--<div class="section"></div>--}}
	 {{--<div class="section"></div>--}}
	 {{--<div class="col s9 m9 l9 center">--}}
		 {{--<div>--}}
			 {{--<iframe src="https://youtube.com/embed/{{ $video->url }}" frameborder="0" allowfullscreen height="360" width="450"></iframe>--}}
		 {{--</div>--}}
		{{--<div><h4>{{ $video->title }}</h4></div>--}}
		{{--<div>{{ $video->description }}</div>--}}
		{{--</div>--}}
 {{--</div>--}}

@endsection