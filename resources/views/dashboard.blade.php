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
				<img class="activator" src="{{$repo->getAvatarUrl($user)}}">
			 </div>
			 <div class="card-content">
				<span class="card-title activator grey-text text-darken-4">{{ $user->name }}<i class="material-icons right">more_vert</i></span>
				<p><a href="#editProfile" class="modal-trigger">Edit Profile</a></p>
			 </div>
			 <div class="card-reveal">
				<span class="card-title grey-text text-darken-4">About Me<i class="material-icons right">close</i></span>
				<p>{{ $user->about }}</p>
			 </div>
			</div>
	 </div>
	</div>

	<!-- profile update modal -->

	<div id="editProfile" class="modal">
	 <form method="post" action="{{ route('user.profile', $user->id) }}" id="edit-profile">
		<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		<div class="modal-content">
		 <div class="row">
			<div class="col s12 m12 l12">
			 <div class="col s6">
				<div class="input-field">
				 <i class="material-icons prefix">mode_edit</i>
				 <input type="text" name="name" id="name" value="{{$user->name}}">
				</div>
			 </div>
			 <div class="col s2 offset-s4 ">
				<div class="file-field input-field" id="image">
				 <div class="btn">
					<span>File</span>
					<input type="file" id="file">
				 </div>
				 <div class="file-path-wrapper">
					<input class="file-path validate" type="text">
				 </div>
				</div>
				 <div class="waves-effect waves-block waves-light">
					<img src="{{$repo->getAvatarUrl($user)}}" height="100" width="100" id="profile-pic">
				 </div>
			 </div>
			</div>
		 </div>
		 <div class="row">
			<div class="input-field">
			 <i class="material-icons prefix">mode_edit</i>
			 <input type="email" name="email" id="email" value="{{ $user->email }}">
			</div>
			<div class="input-field">
			 <i class="material-icons prefix">mode_edit</i>
			 <textarea class="materialize-textarea" placeholder="about" name="about" id="about">{{ $user->about }}</textarea>
			 <label for="about">About Me</label>
			</div>
			<div class="input-field">
			 <i class="material-icons prefix">mode_edit</i>
			 <input type="password" name="password" id="password" placeholder="password">
			</div>
		 </div>
		 <div class="modal-footer">
			<button class="btn waves-effect waves-light modal-close" type="submit" name="action">Update
			 <i class="material-icons right">send</i>
			</button>
		 </div>
		 </div>
	 </form>
	</div>
	<!-- end of profile update modal -->

	<div class="col s6 m6">
	 <div class="section">
		<div class="row">
		 <a class="btn-floating btn-large waves-effect waves-light red right modal-trigger" href="#addVideo"><i class="material-icons">add</i></a>
		</div>

		<!-- modal -->
		<div id="addVideo" class="modal">
		 <form method="post" action="{{ route('post.video') }}" id="post-video">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		 <div class="modal-content">
			<h5>Post a video</h5>
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
		 @foreach($user->videos as $video)
			<div class="col s6 m6">
			 <div class="card card-right section">
				<div class="video-container">
				 <iframe width="640" height="480" src="{{ $video->url }}" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="row center">
				 {{ $video->description }}
				</div>
			 </div>
			</div>
		 @endforeach
	 </div>
	 </div>
	</div>
 </div>
</section>
@endsection

<script type="text/javascript" src="{{ asset('js/application.js') }}"></script>
