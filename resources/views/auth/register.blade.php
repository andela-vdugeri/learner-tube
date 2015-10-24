@extends('layouts.app')


@section('content')
<div class="row col s12 m6 l9">
 <div class="col s12 m6 offset-m4">
	<div class="section">
	 <div class="col s12 m12 l9">
		<div class="card card-panel">
		 <form class="col s12 s12 l12" action="{{url('/register')}}" method="post">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<div class="row">
			 <div class="input-field col s12 m12 l12">
				<input placeholder="username" id="username" name="name" type="text" value="{{ old('name') }}">
				<label for="username">Username</label>
			 </div>
			</div>
			<div class="row">
			 <div class="input-field col s12">
				<input type="text" placeholder="email" name="email" id="email" value="{{ old('email') }}">
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
			@if(count($errors) > 0)
			 <div class="row">
				<div class="col s12 m6 l9">
				 @foreach($errors->all() as $error)
					<ul>
					 <li class="red">{{$error}}</li>
					</ul>
				 @endforeach
				</div>
			 </div>
			@endif
		 </form>
		</div>
	 </div>
	</div>
 </div>
</div>
@endsection

@section('footer')
 @include('partials.footer')
@endsection