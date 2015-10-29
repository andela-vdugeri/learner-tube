@extends('layouts.app')


@section('nav')
	@include('partials.nav')
@endsection


@section('content')
	<div class="row">
	 @if(count($errors) > 0)
		@include('errors.error')
	 @endif
	 <div class="col-sm-6 col-md-12 col-lg-4 col-lg-offset-4" style="margin-top: 200px;">
		<div class="panel panel-default">
		 <div class="panel-heading">Login</div>
		 <div class="panel-body">
			<form method="post" action="{{ route('post.login') }}">
			 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
			 <div class="form-group">
				<div class="input-group">
				 <span class="input-group-addon" id="email-addon">@</span>
				 <input name="email" id="email" type="text" class="form-control" placeholder="email" aria-describedby="username-addon">
				</div>
			 </div>
			 <div class="form-group">
				<div class="input-group">
				 <span class="input-group-addon" id="password-addon"><span class="glyphicon glyphicon-user"></span></span>
				 <input name="password" type="password" class="form-control" placeholder="password" aria-describedby="password-addon">
				</div>
			 </div>
			 <div class="form-group form-inline">
				 <div class=" col-xs-3 col-sm-3 col-md-3">
					<a href="{{ url('twitter') }}" class="input-group">
					 <i class="fa fa-twitter fa-2x pull-right"></i>
					</a>
				 </div>
				 <div class="col-xs-3 col-sm-3 col-md-3">
					<a href="{{ url('github') }}" class="input-group" >
					 <i class="fa fa-github fa-2x pull-right"></i>
					</a>
				 </div>
					<div class="col-xs-3 col-sm-3 col-md-3">
					 <a href="{{ url('facebook') }}" class="input-group" >
						<i class="fa fa-facebook fa-2x pull-right"></i>
					 </a>
					</div>
				 <div class="col-xs-3 col-sm-3 col-md-3">
					<input type="submit" class="btn btn-primary btn-right" name="submit" value="Login">
				 </div>
			 </div>
			</form>
		 </div>
		</div>
	 </div>
	</div>
@endsection