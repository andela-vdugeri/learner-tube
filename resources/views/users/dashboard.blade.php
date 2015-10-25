@extends('layouts.app')

@section('navigation')
 @include('partials.home-nav')
@endsection
@section('content')
<section>
 <div class="row">
	 <div class="col s3 m3">
		<div class="section">
			<div class="card">
			 <div class="card-image waves-effect waves-block waves-light">
				<img class="activator" src="{{$user->avatar_url}}">
			 </div>
			 <div class="card-content">
				<span class="card-title activator grey-text text-darken-4">{{ $user->name }}<i class="material-icons right">more_vert</i></span>
				<p><a href="{{ route('profile.edit', $user->id) }}">Edit Profile</a></p>
			 </div>
			 <div class="card-reveal">
				<span class="card-title grey-text text-darken-4">About Me<i class="material-icons right">close</i></span>
				<p>{{ $user->about }}</p>
			 </div>
			</div>
	 </div>
	</div>

	<!-- profile update modal -->


	<div class="col s6 m6">
	 <div class="section">
		<div class="row float-up">
		 <div class="col s12 m6 l9 ">
			<a class="btn-floating btn-large waves-effect waves-light red right modal-trigger" href="#addVideo"><i class="material-icons">add</i></a>
		 </div>
		</div>

		<!-- Video modal -->
		<div id="addVideo" class="modal">
		 <form method="post" action="{{ route('post.video') }}" id="post-video">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		 <div class="modal-content">
			<h5>Post a link to a youtube video</h5>
			<div class="input-field">
			 <input type="text" name="title" id="title" placeholder="title">
			</div>
			<div class="input-field">
			 <textarea class="materialize-textarea" placeholder="Description" name="description" id="description"></textarea>
			</div>
			<div class="input-field">
			 <input type="text" name="url" id="url" placeholder="video url">
			</div>
			<div class="input-field">
			 <select name="category" id="category">
				@foreach($categories as $category)
				 <option value="{{ $category->id }}">{{ $category->name }}</option>
				@endforeach
			 </select>
			</div>
		 </div>
		 <div class="modal-footer">
			<button class="btn waves-effect waves-light modal-close" type="submit" name="action">Post
			 <i class="material-icons right">send</i>
			</button>
		 </div>
		 </form>
		</div>
		<!-- end of modal -->

		<div class="row" id="videos">
		 <div class="section">
			<div class="section">
			</div>
			@foreach($user->videos as $video)
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
		 </div>
	 </div>
	 </div>
	</div>
 </div>
</section>
@endsection

