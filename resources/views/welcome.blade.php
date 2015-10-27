@extends('layouts.app')


@section('navigation')
 @if($user)
	@include('partials.home-nav')
 @else
	@include('partials.landing-nav')
 @endif
@endsection

@section('content')
 <section>
	<div class="row">
	 @if(!$user)
		<div class="row card-panel">
			 <div class="card-content">
				<div class="large">
				 Tubr was launched on the premise that everyone deserves
				 access to a world-class education. We build a great
				 collection of free online courses from the world’s top
				 Instructors. The world of open education has exploded,
				 so today our curated lists of online courses are hand selected
				 by our staff to show you the very best offerings by subject area.
				 We also make sure there is something for everyone: whether you want
				 to explore a new topic or advance in your current field,
				 we bring the amazing world of academia to you for free.
				</div>
				<div class="center section">
				 <a  href="{{ route('auth.register') }}" class="waves-effect waves-light btn-large cyan">Get Started</a>
				</div>
			 </div>
		 </div>
		@endif
	</div>
	<div class="row">
		<div class="col s3 m3">
		 <ul class="collection collapsible">
			@foreach($categories as $category)
				<li class="collapsible-header"><a href="{{ url('categories', $category->id) }}" class="collection-item">{{ $category->name }}</a></li>
			@endforeach
		 </ul>
	 	</div>
	 <div class="col s8 m8">
		<div class="row"></div>
		<div class="section">
		 @if(count($videos) > 0)
			@foreach($videos as $video)
			<div class="col s6 m6">
			 <div class="card">
				<div class="card-image waves-effect waves-block waves-light">
				 <a href="{{route('show.video', $video->id)}}" >
					<img src="https://img.youtube.com/vi/{{ $video->url }}/hqdefault.jpg"/>
					</a>
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
			@endforeach
		 @else
			<div class="collection">
			<a href="#!" class="collection-item center">No videos in this category yet</a>
			</div>
		 @endif
		</div>
	 </div>
	</div>
 </section>
@endsection


@section('footer')
 @include('partials.footer')
@endsection
