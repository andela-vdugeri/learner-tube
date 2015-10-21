@extends('layouts.app')


@section('content')

 <div class="row">
	<div class="col s4">
	 <div class="section">
		<div class="card teal lighten-2">
		 <div class="card-panel teal lighten-5">
			<img  height="200" width="200" src="{{ asset('images/tech.jpg') }}" alt="" class="circle responsive-img z-depth-2" id="profile-image">
			<div class="center-align">
			 <h3>Verem Dugeri</h3>
			</div>
		 </div>
		 <div class="center-align">
			<h4>Videos : 22</h4>
		 </div>
		</div>
	 </div>
	</div>
	<div class="col s6">
	 <div class="section">
		<div class="input-field">
		 <input type="text" id="title" name="title" placeholder="title">
		</div>
		<div class="card z-depth-3">
		 <div class="input-field">
			<textarea id="about" class="materialize-textarea" placeholder="Video description"></textarea>
			<span>
				<i class="material-icons">camera</i>
			 </span>
			<div class="row">
			 <button class="btn waves-effect waves-light right" type="submit" name="action">Upload
				<i class="material-icons right">send</i>
			 </button>
			</div>
		 </div>
		</div>
	 </div>
	 <div class="section">
		<div class="card teal lighten-5 z-depth-3">
		 <div class="row">
			Title - Description of video
		 </div>
		 <div class="video-container">
			<iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
		 </div>
		</div>
		<div class="card teal lighten-5 z-depth-3">
		 <div class="row">
			Title - Description of video
		 </div>
		 <div class="video-container">
			<iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
		 </div>
		</div>
		<div class="card teal lighten-5 z-depth-3">
		 <div class="row">
			Title - Description of video
		 </div>
		 <div class="video-container">
			<iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
		 </div>
		</div>
		</div>
	</div>
 </div>



@endsection