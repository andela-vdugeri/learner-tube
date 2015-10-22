@extends('layouts.app')


@section('content')
<div class="row">
 <div class="col s12 m5">
	<div class="row section">
	 <div class="col s12 m12">

	 </div>
	</div>
	<div class="row section">
	 <div class="col s12 m12">

	 </div>
	</div>
	<div class="row section">
	 <div class="col s12 m12">

	 </div>
	</div>
 </div>

 <div class="col s12 m6">
	<div class="card card-panel large">
	 <form class="col s12" action="{{url('/register')}}" method="post">
		<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		@if(count($errors) > 0)
		 <div class="row">
			<div class="col s12 m6">
			 @foreach($errors as $error)
				<ul>
				 <li class="accent-1">{{$errors}}</li>
				</ul>
			 @endforeach
			</div>
		 </div>
		@endif
		<div class="row">
		 <div class="input-field col s12">
			<input placeholder="username" id="username" name="name" type="text">
			<label for="username">Username</label>
		 </div>
		</div>
		<div class="row">
		 <div class="input-field col s12">
			<input type="text" placeholder="email" name="email" id="email">
			<label for="email">Email</label>
		 </div>
		</div>
		<div class="row">
		 <div class="input-field col s12">
			<input type="password" name="password" placeholder="password" id="password">
			<label for="password">Password</label>
		 </div>
		</div>
		<div class="row">
		 <div class="input-field col s12">
			<input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password">
			<label for="password_confirmation">Confirm your password</label>
		 </div>
		</div>
		<div class="row">
		 <div class="col s2">
			<a href="{{ url('facebook') }}" class="fa fa-facebook fa-2x"></a>
		 </div>
		 <div class="col s2">
			<a href="{{ url('twitter') }}" class="fa fa-twitter fa-2x"></a>
		 </div>
		 <div class="col s2">
			 <a href="{{ url('github') }}" class="fa fa-github fa-2x"></a>
		 </div>
		 <button class="btn waves-effect waves-light right cyan" type="submit" name="action">Sign Up
			<i class="material-icons right">send</i>
		 </button>
		</div>
	 </form>
	</div>
 </div>
</div>
@endsection

@section('footer')
 @include('partials.footer')
@endsection