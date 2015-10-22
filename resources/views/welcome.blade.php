@extends('layouts.app')


@section('navigation')
@include('partials.landing-nav')
@endsection

@section('content')
 <section>
	<div class="row">
		<div class="col s3 m3">
		 <div class="section">
		 <div class="card ">
			<form>
			 <div class="input-field">
				<input id="search" type="search" required>
				<label for="search"><i class="material-icons">search</i></label>
				<i class="material-icons">close</i>
			 </div>
			</form>
			<div class="row center">
			 <a href="#">cat 1</a>
			</div>
			<div class="divider"></div>
			<div class="row center">
			 <a href="#">cat 2</a>
			</div>
			<div class="divider"></div>
			<div class="row center">
			 <a href="#">cat 3</a>
			</div>
		 </div>
		</div>
	 </div>
	 <div class="col s8 m8">
		<div class="section">
		 <div class="col s4 m4">
			<div class="card">
			 <div class="video-container">
			 <iframe width="640" height="360" src="https://www.youtube.com/embed/LgvKyC0WcW8" frameborder="0" allowfullscreen></iframe>
			</div>
			</div>
			<div class="card">
			 <div class="video-container">
			 <iframe width="640" height="360" src="https://www.youtube.com/embed/LgvKyC0WcW8" frameborder="0" allowfullscreen></iframe>
			</div>
			</div>
			<div class="card">
			 <div class="video-container">
			 <iframe width="640" height="360" src="https://www.youtube.com/embed/LgvKyC0WcW8" frameborder="0" allowfullscreen></iframe>
			</div>
			</div>
		 </div>
		 <div class="col s4 m4">
			<div class="card">
			 <div class="video-container">
			  <iframe width="640" height="360" src="https://www.youtube.com/embed/LgvKyC0WcW8" frameborder="0" allowfullscreen></iframe>
			 </div>
			</div>
			<div class="card">
			 <div class="video-container">
				<iframe width="640" height="360" src="https://www.youtube.com/embed/LgvKyC0WcW8" frameborder="0" allowfullscreen></iframe>
			 </div>
			</div>
		 </div>
		 <div class="col s4 m4">
			<div class="card">
			 <div class="video-container">
				<iframe width="640" height="360" src="https://www.youtube.com/embed/LgvKyC0WcW8" frameborder="0" allowfullscreen></iframe>
			 </div>
			</div>
			<div class="card">
			 <div class="video-container">
				<iframe width="640" height="360" src="https://www.youtube.com/embed/LgvKyC0WcW8" frameborder="0" allowfullscreen></iframe>
			 </div>
			</div>
		 </div>
		</div>
	 </div>
	</div>
 </section>
@endsection


@section('footer')
 @include('partials.footer')
@endsection
