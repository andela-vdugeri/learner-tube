@extends('layouts.app')


@section('content')
 <div class="row">
	<div class="col s12 m5">
	 &nbsp;
	</div>
	<div class="col s12 m6">
		<div class="card card-panel">
		 <form class="col s12" method="post" action="{{ url('/login') }}">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<div class="row">
			 <div class="input-field">
				<input type="email" id="email" name="email" placeholder="email">
				<label for="email">Email</label>
			 </div>
			</div>

			<div class="row">
			 <div class="input-field">
				<input type="password" id="password" name="password" placeholder="password">
				<label for="password">Password</label>
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
			 <button class="btn waves-effect waves-light right" type="submit" name="action">Log In
				<i class="material-icons right">send</i>
			 </button>
			</div>


			@if(count($errors) > 0)
			<div class="red">
			 <ul>
				@foreach($errors->all() as $error)
				 <li>{{ $error }}</li>
				@endforeach
			 </ul>
			</div>
			@endif

			@if(session()->has('message'))
			 <div class="red">
				<ul>
				 <li>{{session('message')}}</li>
				</ul>
			 </div>
			@endif
		 </form>
		</div>
	</div>
 </div>
@endsection