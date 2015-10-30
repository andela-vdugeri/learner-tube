@extends('layouts.app')


@section('nav')
 @include('partials.landing-nav')
@endsection


@section('content')
 @if(count($errors) > 0)
	@include('errors.error')
 @endif
 <div class="row">
	<div class="col-sm-6 col-md-12 col-lg-4 col-lg-offset-4" style="margin-top: 200px;">
	 <div class="panel panel-default">
		<div class="panel-heading">Update Profile</div>
		<div class="panel-body">
		 <form action="{{ route('user.profile', $user->id) }}" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<div class="row">
			 <div class="col-xs-6 col-md-3 col-lg-offset-9">
				<div class="thumbnail">
				 <img src="{{ $user->avatar_url }}" alt="profile image" id="profile-pic" height="60" width="80">
				</div>
			 </div>
			</div>
			 <input type="file" name="image" id="image">
			<div class="form-group">
			 <div class="input-group">
				<span class="input-group-addon" id="username-addon"><span class="glyphicon glyphicon-user"></span></span>
				<input type="text" name="name" id="name" class="form-control" placeholder="Username" aria-describedby="username-addon" value="{{ $user->name }}">
			 </div>
			</div>
			<div class="form-group">
			 <div class="input-group">
				<span class="input-group-addon" id="email-addon">@</span>
				<input type="email" name="email" id="email" class="form-control" placeholder="Email address" aria-describedby="email-addon" value="{{ $user->email  }}">
			 </div>
			</div>
			<div class="form-group">
			 <div class="input-group">
				<span class="input-group-addon" id="password-addon"><span class="glyphicon glyphicon-user"></span></span>
				<input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-describedby="password-addon" value="{{ $user->password }}">
			 </div>
			</div>
			<div class="form-group">
			 <div class="input-group">
				<span class="input-group-addon" id="about-addon"><span class="glyphicon glyphicon-user"></span></span>
				<textarea name="about" id="about" class="form-control" aria-describedby="about-addon" rows="5" placeholder="about me...">{{ $user->about }}</textarea>
			 </div>
			</div>
			 <div class="col-xs-3 col-sm-3 col-md-3">
				<div class="pull-right">
				  <input type="submit" class="btn btn-primary btn-right" name="submit" value="Update">
				</div>
			 </div>
		 </form>
		</div>
	 </div>
	</div>
 </div>
@endsection