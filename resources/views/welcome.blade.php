@extends('layouts.app')


@section('navigation')
@include('partials.landing-nav')
@endsection

@section('content')
 <section>
	<div class="row">
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
	</div>
	<div class="row">
		<div class="col s3 m3">
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
	 <div class="col s8 m8">
		<div class="row"></div>
		<div class="section">
		 @foreach($videos as $video)
		 <div class="col s4 m4">
			<div class="card">
			 	<div class="video-container">
				 <iframe width="640" height="360" src="{{ $video->url }}" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		 </div>
		 @endforeach
		</div>
	 </div>
	</div>
 </section>
@endsection


@section('footer')
 @include('partials.footer')
@endsection
