@extends('layouts.app')


@section('navigation')
	@include('partials.home-nav')
@endsection


@section('content')
	<div class="row">
		<div class="col s3 m3 l3">
			&nbsp;
		</div>
		<div class="col s6 m6 l6">
			<div class="section">
			 <div class="section"></div>
			 <div class="section"></div>
			 <div class="section"></div>
			 <div class="section"></div>
			 <div class="card card-panel">
				<div class="card-title black-text center">
				 New Category
				</div>
				<form action="{{ route('post.category') }}" method="post">
				 <input type="hidden" value="{{ csrf_token() }}" name="_token">
				 <div class="input-field">
					<input type="text" name="category" id="category" required>
					<label for="category">Category Name</label>
				 </div>
				 <div class="input-field">
					<button class="btn waves-effect waves-light right" type="submit">Add
					 <i class="material-icons right">send</i>
					</button>
				 </div>
				 <div>
					@if(count($errors) > 0)
					 <ul>
						@foreach( $errors as $error)
						 <li class="red-text">{{ $error }}</li>
						@endforeach
					 </ul>
					@endif
				 </div>
				</form>
			 </div>
			</div>
		</div>
	</div>
@endsection