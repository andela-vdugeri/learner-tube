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
				<img class="activator" src="https://static.pexels.com/photos/9752/taking-photo-hiking-sport-adventure-large.jpg">
			 </div>
			 <div class="card-content">
				<span class="card-title activator grey-text text-darken-4">John Doe<i class="material-icons right">more_vert</i></span>
				<p><a href="#">Edit Profile</a></p>
			 </div>
			 <div class="card-reveal">
				<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
				<p>Here is some more information about this person that is only revealed once clicked on.</p>
			 </div>
			</div>
	 </div>
	</div>
	<div class="col s6 m6">
	 <div class="section">
		<div class="row">
		 <a class="btn-floating btn-large waves-effect waves-light red right modal-trigger" href="#addVideo"><i class="material-icons">add</i></a>
		</div>
		<!-- modal -->

		<div id="addVideo" class="modal">
		 <form method="post" action="{{ route('post.video') }}">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		 <div class="modal-content">
			<h5>Post a video</h5>
			<div class="input-field">
			 <input type="text" name="title" id="title" placeholder="title">
			</div>
			<div class="input-field">
			 <input type="text" name="url" id="url" placeholder="video url">
			</div>
			<div class="input-field">
			 <select name="category" id="category">
				<option value="1">programming</option>
				<option value="2">graphic design</option>
			 </select>
			</div>
		 </div>
		 <div class="modal-footer">
			<button class="btn waves-effect waves-light" type="submit" name="action" id="post-video">Post
			 <i class="material-icons right">send</i>
			</button>
		 </div>
		 </form>
		</div>
		<!-- end of modal -->

		<div class="row">
		 <div class="col s6 m6">
			<div class="card card-right section">
			 <div class="video-container">
				<iframe width="640" height="360" src="https://www.youtube.com/embed/LgvKyC0WcW8" frameborder="0" allowfullscreen></iframe>
			 </div>
			</div>
		 </div>

		 <div class="col s6 m6">
			<div class="card card-right section">
			 <div class="video-container">
				<iframe width="640" height="360" src="https://www.youtube.com/embed/LgvKyC0WcW8" frameborder="0" allowfullscreen></iframe>
			 </div>
			</div>
		 </div>
		</div>
		<div class="row">
		 <div class="col s6 m6">
			<div class="card card-right section">
			 <div class="video-container">
				<iframe width="640" height="360" src="https://www.youtube.com/embed/LgvKyC0WcW8" frameborder="0" allowfullscreen></iframe>
			 </div>
			</div>
		 </div>
		</div>
	 </div>
	</div>
 </div>
</section>
@endsection

<script type="text/javascript" src="{{ asset('js/application.js') }}"></script>
