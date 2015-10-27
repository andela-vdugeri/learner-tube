<div class="nav-wrapper">
 <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
 <ul id="nav-mobile" class="right hide-on-med-and-down">
	<li><a href="{{ route('category.create') }}" class="white-text">Add Category</a></li>
	<li><a href="{{ route('videos.all') }}" class="white-text">Videos</a></li>
	<li><a class="dropdown-button" href="#!" data-activates="profile" data-beloworigin="true"><img src="{{ $user->avatar_url }}" class="circle left-and-down" width="40" height="40"/></a></li>
	<ul id="profile" class="dropdown-content collection">
	 <li><a href="{{ route('profile.edit', $user->id) }}" class="collection-item">Edit profile</a></li>
	 <li><a href="{{ route('auth.logout') }}" class="collection-item">Logout</a></li>
	</ul>
 </ul>
 <ul class="side-nav" id="mobile">
	<li><a href="{{ route('category.create') }}">Add Category</a></li>
	<li><a href="{{ route('videos.all') }}">Videos</a></li>
	<li><a href="{{ route('auth.logout') }}">Logout</a></li>
 </ul>
</div>