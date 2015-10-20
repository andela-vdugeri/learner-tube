
@extends('layouts.app')

@section('content')

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Learner Tube</h1>
        <div class="row center">
          <h5 class="header col s12 light">Get all the video tutorials you need to become a pro in that field</h5>
        </div>
        <div class="row center">
          <a href="{{url('/register')}}" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="{{ asset('images/background1.jpg') }}" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Video Tutorial</h5>

            <p class="light"><img height="200" width="200" alt="Video frame" src="#"></p>
          </div>
        </div>

			  <div class="col s12 m4">
				 <div class="icon-block">
				 <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
				 <h5 class="center">Video Tutorial</h5>

				 <p class="light"><img height="200" width="200" alt="Video frame" src="#"></p>
				 </div>
			  </div>

			 <div class="col s12 m4">
				<div class="icon-block">
				 <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
				 <h5 class="center">Video Tutorial</h5>

				 <p class="light"><img height="200" width="200" alt="Video frame" src="#"></p>
				</div>
			 </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Don't stop learning.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{ asset('images/background2.jpg') }}" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Never stop learning</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{ asset('images/background3.jpg') }}" alt="Unsplashed background img 3"></div>
  </div>
@endsection
