@extends('layouts.appnew')

  @section('content')

	<div id="menu-1" class="homepage home-section container">
  <div class="home-intro text-center">
          <h1 class="welcome-title animated fadeInLeft"><span class="blue">new message</span></h1></br>  
    <!-- <h3>This page contains all the messages recived.<br>
  Admin can read or delete.<h3> -->
  <div class="sidebar">
  <a href="https://icon-library.net/icon/compose-icon-23.html" title="Compose Icon #162872"><img src="https://icon-library.net//images/compose-icon/compose-icon-23.jpg" width="350" /></a>
  </div>
  </div>
  <div class="card-body">
               <form action="{{ url('/newrequest/submit') }}" method="post">
                  @csrf
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <label>Email:</label>
                           <input type="email" name="email" class="form-control"  placeholder="Reciver" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                           @if ($errors->has('email'))
                                  <span class="text-danger">{{ $errors->first('email') }}</span>
                              @endif
                              </br></div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <label>Title:</label>
                           <input type="title" name="title" class="form-control" placeholder="Message Title" @error('title') is-invalid @enderror" name="mestitlesage" value="{{ old('title') }}" required autocomplete="title">
                           @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                           @endif
                           </br> </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <label>Message:</label>
                           <textarea type="message" name="message" class="form-control" rows="4" cols="50" placeholder="Enter your Message" @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" required autocomplete="message"></textarea>
                           @if ($errors->has('message'))
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                            @endif
                            </br></div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <button class="btn btn-primary" type="submit">Submit</button>
                        </div></br>
                     </div>
                  </div>
               </form>
            </div>

@endsection