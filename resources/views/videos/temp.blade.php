<!-- display videos  -->
<div class="col s6 m6 l6" id="videos">
 @foreach($user->videos as $video)
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