@extends('layouts.app')


@section('navigation')
	@include('partials.home-nav')
@endsection


@section('content')

 <div class="row">
	<div class="col s12 m12 l12">
	<div class="col s3 m3 l3">
		&nbsp
	</div>
	 <div class="col s6 m6 l6">
		<div class="section">
		 <div class="section">
			<div class="section">
			 <div class="card card-panel">
				<div id="editProfile">
				 <form method="post" action="{{ route('user.profile', $user->id) }}" id="edit-profile">
					<input type="hidden" name="_token" value="{!! csrf_token() !!}">
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
								<input type="file" id="file" multiple>
							 </div>
								<input type="file" name="file" id="file">
							</div>
							<div class="waves-effect waves-block waves-light" id="imagePreview">
							 <img src="{{$repo->getAvatarUrl($user)}}" height="80" width="240" id="profile-pic">
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
						<button class="btn waves-effect waves-light right" type="submit" name="action">Update
						 <i class="material-icons right">send</i>
						</button>
					 </div>
				 </form>
				</div>
			 </div>
			</div>
		 </div>

		</div>
	 </div>
	 <div class="col s3 m3 l3">

	 </div>
	</div>
 </div>

@endsection

