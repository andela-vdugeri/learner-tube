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
	 <div class="section">
		<div class="card ">
		 @foreach($categories as $category)
			<div class="row center">
			 <a href="{{ url('categories', $category->id) }}">{{ $category->name }}</a>
			</div>
			<div class="divider"></div>
		 @endforeach
		</div>
	 </div>
	</div>
	<div class="section">
	 <div class="col s4 m4 l4 offset-m3">
		<div class="card large">
		 <div class="card-image waves-effect waves-block waves-light">
			 <iframe src="https://youtube.com/embed/{{ $video->url }}" frameborder="0" allowfullscreen height="360" width="450"></iframe>
		 </div>
		 <div class="card-content">
			<span class="card-title activator grey-text text-darken-4">{{ $video->title }}<i class="material-icons right">more_vert</i></span>
		 </div>
		 <div class="card-reveal">
			<span class="card-title grey-text text-darken-4">{{ $video->title }}<i class="material-icons right">close</i></span>
			<p>{{ $video->description }}</p>
		 </div>
		</div>

	 </div>
	</div>
 </div>

@endsection