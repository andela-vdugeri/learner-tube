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
	 <div class="section"></div>
	 <div class="section"></div>
	 <div class="col s9 m9 l9 center">
		 <div>
			 <iframe src="https://youtube.com/embed/{{ $video->url }}" frameborder="0" allowfullscreen height="360" width="450"></iframe>
		 </div>
		</div>
	</div>
 </div>

@endsection