@extends('layouts.app')

@section('nav')
 @include('partials.home-nav')
@endsection

@section('content')
 <div class="col-sm-12 col-md-6 col-lg-3">
	@include('partials.sidebar')
 </div>

 <div class="row">
	@if(count($errors) > 0)
	 @include('errors.error')
	@endif
	<div class="col-sm-6 col-md-12 col-lg-4 col-lg-offset-2" style="margin-top: 200px;">
	 <div class="panel panel-default">
		<div class="panel-heading">New Video</div>
		<div class="panel-body">
		 <form method="post" action="{{ route('post.login') }}">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<div class="form-group">
			 <div class="input-group">
				<span class="input-group-addon" id="title-addon">Title</span>
				<input name="title" id="title" type="text" class="form-control" placeholder="Title" aria-describedby="title-addon">
			 </div>
			</div>
			<div class="form-group">
			 <div class="input-group">
				<span class="input-group-addon" id="url-addon">Link</span>
				<input name="url" type="url" class="form-control" placeholder="Video link" aria-describedby="url-addon">
			 </div>
			</div>
			<div class="form-group">
			 <div class="input-group">
				<span class="input-group-addon" id="description-addon">About</span>
				<textarea name="description" class="form-control" placeholder="Short Description" aria-describedby="description-addon" rows="5" cols="25"></textarea>
			 </div>
			</div>
			<div class="form-group">
			 <div class="input-group">
				<span class="input-group-addon" id="category-addon">category</span>
				<select name="category" class="form-control" id="category">
				 @foreach($categories as $category)
					<option value="{{ $category->id }}">{{ $category->name }}</option>
				 @endforeach
				</select>
			 </div>
			</div>
			<div class="form-group">
			 <div class="col-xs-2 col-sm-2 col-md-2 col-lg-5 col-lg-offset-9">
				<input type="submit" class="btn btn-primary" name="submit" value="Post">
			 </div>
			</div>
		 </form>
		</div>
	 </div>
	</div>
 </div>
@endsection