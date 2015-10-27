@extends('layouts.app')


@section('navigation')
	@if($user)
	 @include('partials.home-nav')
 	@else
	 @include('partials.landing-nav')
  @endif
@endsection


@section('content')
	<div class="section">
	 <div class="section"></div>
	 <div class="section"></div>
	 <div class="col s9 m9 l9 center">
		 <div>
			 <iframe src="https://youtube.com/embed/{{ $video->url }}" frameborder="0" allowfullscreen height="360" width="450"></iframe>
		 </div>
		<div><h4>{{ $video->title }}</h4></div>
		<div>{{ $video->description }}</div>
		</div>
 </div>

@endsection