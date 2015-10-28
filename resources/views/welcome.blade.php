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
		<div class="col s3 m3 l3">
		 <div class="collection">
			@foreach($categories as $category)
				<a href="{{ url('categories', $category->id) }}" class="collection-item">{{ $category->name }}<span class="badge black-text">{{ $repo->countVideos($category->id) }}</span></a>
			@endforeach
		 </div>
		</div>
	 <div class="col s8 m8 l8">
		<div class="row"></div>
		 @if(count($videos) > 0)
			@foreach($videos as $video)
			<div class="col s3 m3 l3 hide-long-text">
				 <div>
					<a href="{{route('show.video', $video->id)}}" >
					 <img src="https://img.youtube.com/vi/{{ $video->url }}/hqdefault.jpg" width="200" height="150"/>
					</a>
				 </div>
				<span><p>{{ $video->description }}</p></span>
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
