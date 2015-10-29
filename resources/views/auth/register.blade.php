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
		<div class="panel-heading">Sign Up</div>
		<div class="panel-body">
		 <form action="{{ route('post.register') }}" method="post">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<div class="form-group">
			 <div class="input-group">
				<span class="input-group-addon" id="username-addon"><span class="glyphicon glyphicon-user"></span></span>
				<input type="text" name="name" id="name" class="form-control" placeholder="Username" aria-describedby="username-addon">
			 </div>
			</div>
			<div class="form-group">
			 <div class="input-group">
				<span class="input-group-addon" id="email-addon">@</span>
				<input type="email" name="email" id="email" class="form-control" placeholder="Email address" aria-describedby="email-addon">
			 </div>
			</div>
			<div class="form-group">
			 <div class="input-group">
				<span class="input-group-addon" id="password-addon"><span class="glyphicon glyphicon-user"></span></span>
				<input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-describedby="password-addon">
			 </div>
			</div>
			<div class="form-group">
			 <div class="input-group">
				<span class="input-group-addon" id="password-addon"><span class="glyphicon glyphicon-user"></span></span>
				<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm password" aria-describedby="password-addon">
			 </div>
			</div>
			<div class="form-group form-inline">
				<div class=" col-xs-3 col-sm-3 col-md-3">
				 <a href="{{ url('twitter') }}" class="input-group" name="twitter" id="twitter">
					<i class="fa fa-twitter fa-2x pull-right"></i>
				 </a>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3">
				 <a href="{{ url('github') }}" class="input-group" name="gitbub" id="github" >
					<i class="fa fa-github fa-2x pull-right"></i>
				 </a>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3">
				 <a href="{{ url('facebook') }}" class="input-group" name="facebook" id="facebook" >
					<i class="fa fa-facebook fa-2x pull-right"></i>
				 </a>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3">
				 <input type="submit" class="btn btn-primary btn-right" name="submit" value="Register">
				</div>
			</div>
		 </form>
		</div>
	 </div>
	</div>
 </div>
@endsection