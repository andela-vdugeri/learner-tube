<div class="col-sm-12 col-md-12 col-lg-12 sidebar navbar-default" style="margin: 60px 0 0 -33px;">
 <ul class="nav nav-sidebar">
	<li>
	 <a href="#">Categories</a>
	</li>
 </ul>
 <ul class="list-group">
	@foreach($categories as $category)
	 <li class="nav nav-sidebar list-group-item"><a href="{{ url('categories', $category->id) }}">{{ $category->name }}</a><span class="badge">{{ $repo->countVideos($category->id) }}</span></li>
	@endforeach
 </ul>
</div>