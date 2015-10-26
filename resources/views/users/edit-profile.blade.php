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
				 <form method="post" action="{{ route('user.profile', $user->id) }}" enctype="multipart/form-data" id="edit-profile">
					<input type="hidden" name="_token" value="{!! csrf_token() !!}">
					 <div class="row">
						<div class="col s12 m6 l9">
						 <div class="col s6">
							<div class="input-field">
							 <i class="material-icons prefix">mode_edit</i>
							 <input type="text" name="name" id="name" value="{{$user->name}}" required>
							</div>
						 </div>
						 <div class="col s2 offset-s4 ">
							<div class="file-field input-field" id="image">
								<input type="file" name="file" id="file">
							</div>
							<div class="waves-effect waves-block waves-light" id="imagePreview">
							 <img src="{{$user->avatar_url}}" height="120" width="100" id="profile-pic">
							</div>
						 </div>
						</div>
					 </div>
					 <div class="row">
						<div class="input-field">
						 <i class="material-icons prefix">mode_edit</i>
						 <input type="email" name="email" id="email" value="{{ $user->email }}" required>
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

