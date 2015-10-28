<div class="collection">
 @foreach($categories as $category)
	<a class="collection-item" href="{{ url('categories', $category->id) }}">{{ $category->name }}
	 <span class="badge">{{ $repo->countVideos($category->id) }}</span>
	</a>
 @endforeach
</div>
</div>