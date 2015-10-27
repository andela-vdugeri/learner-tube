@extends('layouts.app')


@section('navigation')
	@if($user)
	 @include('partials.home-nav')
 	@else
	 @include('partials.landing-nav')
  @endif
@endsection


@section('content')
 <div class="row">
	<div class="col s3 m3 l3">
	 {{--<!-- left side bar -->--}}
	 {{--<ul id="slide-out" class="side-nav">--}}
		{{--<li class="no-padding">--}}
		 {{--<ul class="collapsible collapsible-accordion">--}}
			{{--<li>--}}
			 {{--<a class="collapsible-header">Categories<i class="mdi-navigation-arrow-drop-down"></i></a>--}}
			 {{--<div class="collapsible-body">--}}
				{{--<ul>--}}
				 {{--@foreach($categories as $category)--}}
					{{--<li><a href="{{ url('categories', $category->id) }}">{{ $category->name }}</a></li>--}}
				 {{--@endforeach--}}
				{{--</ul>--}}
			 {{--</div>--}}
			{{--</li>--}}
		 {{--</ul>--}}
		{{--</li>--}}
	 {{--</ul>--}}
	 {{--<a href="#" data-activates="slide-out" class="button-collapse" id="collapsible"><i class="mdi-navigation-menu"></i>Categories</a>--}}
	 {{--<!--- end of left side-bar -->--}}
	 </div>
	</div>
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