<a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
<ul id="nav-mobile" class="right hide-on-med-and-down">
 <li><a href="{{ route('category.create') }}" class="white-text">Add Category</a></li>
 <li><a href="{{ route('welcome') }}" class="white-text">Videos</a></li>
 <li><a href="{{ route('auth.logout') }}" class="white-text">Logout</a></li>
</ul>
<ul class="side-nav" id="mobile">
 <li><a href="{{ route('auth.logout') }}">Logout</a></li>
</ul>