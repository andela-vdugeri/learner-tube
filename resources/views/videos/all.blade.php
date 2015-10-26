@extends('layouts.app')



@section('navigation')
 @include('partials.home-nav')
@endsection



@section('content')
 <section>
	<div class="row">
	 <div class="col s3 m3">
		<div class="section">
		 <div class="card">
			<div class="card-image waves-effect waves-block waves-light">
			 <img class="activator" src="{{$user->avatar_url}}" width="120" height="260" >
			</div>
			<div class="card-content">
			 <span class="card-title activator grey-text text-darken-4">{{ $user->name }}<i class="material-icons right">more_vert</i></span>
			 <p><a href="{{ route('profile.edit', $user->id) }}">Edit Profile</a></p>
			</div>
			<div class="card-reveal">
			 <span class="card-title grey-text text-darken-4">About Me<i class="material-icons right">close</i></span>
			 <p>{{ $user->about }}</p>
			</div>
		 </div>
		</div>
	 </div>
	 <div class="col s6 m6">
		<div class="section">
		 <div class="row float-up">
			<div class="col s12 m6 l9 ">
			 {{--<a class="btn-floating btn-large waves-effect waves-light red right" href="" id="show-form" name="add"><i class="material-icons">add</i></a>--}}
			</div>
		 </div>
		 <div class="row" id="videos">
			<div class="section">
			 <div class="section">
			 </div>
			 @foreach($videos as $video)
				<div class="col s6 m6">
				 <div class="card">
					<div class="card-image waves-effect waves-block waves-light">
					 <a href="{{route('show.video', $video->id)}}" >
						<img src="https://img.youtube.com/vi/{{ $video->url }}/hqdefault.jpg"/>
					 </a>
					</div>
					<div class="card-content">
					 <span class="card-title activator grey-text text-darken-4">{{ $video->title }}<i class="material-icons right">more_vert</i></span>
					</div>
					<div class="card-reveal">
					 <span class="card-title grey-text text-darken-4">{{ $video->title }}<i class="material-icons right">close</i></span>
					 <p>{{ $video->description }}</p>
					</div>
				 </div>
				</div>
			 @endforeach
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