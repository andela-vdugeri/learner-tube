@extends('layouts.app')

@section('navigation')
 @include('partials.home-nav')
@endsection
@section('content')
 <div class="row">
	<!-- start of left column -->
	<div class="col s3 m3 l3">
	<div class="col s16 m6 l6 pull-left">
	 <a class="btn-floating btn-large waves-effect waves-light red right" href="" id="show-form" name="add"><i class="material-icons">add</i></a>
	</div>
	 <!-- left side bar -->
		<div class="collection">
		 @foreach($categories as $category)
			<a class="collection-item" href="{{ url('categories', $category->id) }}">{{ $category->name }}<span class=" new badge">1</span></a>
		 @endforeach
		</div>

	 <!-- flash session info -->
	 <div class="col s6 m6 l6">
		@if(Session::has('info'))
		 <div id="collection">
			<a href="{{ url('categories', $category->id) }}" class="collection-item">{{ Session::get('info') }}</a>
		 </div>
		@endif
	 </div>
	 <!--- end of flash session info -->
	</div>
	<!-- end of left column -->

	<!-- start of right column -->
	<!-- Video upload form -->
	<div class="section"></div>
	<div id="addVideo" class="card large col s6 m6 l6 offset-l1">
	 <form method="post" action="{{ route('post.video') }}" id="post-video">
		<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		<div class="modal-content">
		 <h5>Post a link to a youtube video</h5>
		 <div class="input-field">
			<input type="text" name="title" id="title" required>
			<label for="title">Title</label>
		 </div>
		 <div class="input-field">
			<textarea class="materialize-textarea" name="description" id="description" required></textarea>
			<label for="description">Description</label>
		 </div>
		 <div class="input-field">
			<input type="text" name="url" id="url" required>
			<label for="url">video link</label>
		 </div>
		 <div class="input-field">
			<select name="category" id="category" class="browser-default" required>
			 <option value="" selected>Select a category</option>
			 @foreach($categories as $category)
				<option value="{{ $category->id }}">{{ $category->name }}</option>
			 @endforeach
			</select>
		 </div>
		</div>
		<div class="section"></div>
		<div class="modal-footer">
		 <button class="btn waves-effect waves-light" type="submit" name="close" id="close-form">Close
			<i class="material-icons right">close</i>
		 </button>
		 <button class="btn waves-effect waves-light right" type="submit" name="action" id="show-form">Post
			<i class="material-icons right">send</i>
		 </button>
		</div>
	 </form>
	</div>
	<!-- end of video upload form -->

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



@endsection

{{--@section('footer')--}}
	{{--@include('partials.footer')--}}
{{--@endsection--}}

