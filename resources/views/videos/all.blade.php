@extends('layouts.app')



@section('navigation')
 @include('partials.home-nav')
@endsection



@section('content')
 <section>
	<div class="row">
	 <div class="col s3 m3">
		<div class="section">
		 <!-- left side bar -->
		 <div class="section"></div>
		 <div class="collection">
			@foreach($categories as $category)
			 <a class="collection-item" href="{{ url('categories', $category->id)  }}">{{ $category->name }}</a>
			@endforeach
		 </div>
		</div>
	 </div>

		<div class="section">
		 <div class="col s8 m8 l8" id="videos">
			<div class="section"></div>
			@foreach($user->videos as $video)
			 <div class="col s3 m3 l3 hide-long-text">
				<div class="card">
				 <div>
					<a href="{{route('show.video', $video->id)}}" >
					 <img src="https://img.youtube.com/vi/{{ $video->url }}/hqdefault.jpg" width="250" height="120"/>
					</a>
				 </div>
				</div>
				<span><p>{{ $video->description }}</p></span>
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