@extends('layouts.app')

@section('nav')
	@include('partials.home-nav')
@endsection

@section('content')
 <div class="col-sm-12 col-md-6 col-lg-3">
	@include('partials.sidebar')
 </div>
 <div class="col-sm-12 col-md-6 col-lg-8" style="margin-top: 80px;">
	@foreach($user->videos as $video)
	<div class="col-sm-6 col-md-3">
	 <div class="thumbnail">
		<a href="#">
		 <img src="https://img.youtube.com/vi/{{ $video->url }}/hqdefault.jpg" alt="video thumbnail" height="171" width="280">
		</a>
		<div class="caption">
		 <h6>{{ $video->title }}</h6>
		</div>
	 </div>
	</div>
	@endforeach
 </div>


@endsection