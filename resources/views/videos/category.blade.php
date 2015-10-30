@extends('layouts.app')


@section('navigation')
	@include('partials.home-nav')
@endsection


@section('content')

 <div class="row">

	<div class="col-sm-6 col-md-12 col-lg-4 col-lg-offset-4" style="margin-top: 200px;">
	 @if(session()->has('info'))
		<div class="alert alert-danger" role="alert">
		 <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		 <span class="sr-only">Error:</span>
		 {{ session()->get('info') }}
		</div>
	 @endif
	 <div class="panel panel-default">
		<div class="panel-heading">New Category</div>
		<div class="panel-body">
		 <form action="{{ route('post.category') }}" method="post">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<div class="form-group">
			 <div class="input-group">
				<span class="input-group-addon" id="name-addon">Name</span>
				<input type="text" name="name" id="name" class="form-control" placeholder="Category name" aria-describedby="name-addon" required>
			 </div>
			</div>
			 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-lg-offset-10">
				<button type="submit" class="btn btn-primary btn-right" name="submit">Add</button>
			 </div>
		 </form>
		</div>
	 </div>
	</div>
 </div>
@endsection