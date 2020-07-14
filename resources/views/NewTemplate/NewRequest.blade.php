@extends('layouts.appnew')

  @section('content')

	<div id="menu-1" class="homepage home-section container">
    <!-- <h3>This page contains all the messages recived.<br>
  Admin can read or delete.<h3> -->
  <div class="sidebar">
    <img src="https://image.flaticon.com/icons/svg/78/78948.svg" width="300" height="175" postion="center">
  </div>
    {!! Form::open(['url' => 'newrequest/submit']) !!}



<div class="form-group">
    {{Form::label('to', 'To')}}

    {{Form::text('email', '',['class'=>'form-control','placeholder'=>'Reciver'])}}
	@error('email')
             <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
             </span>
         @enderror
</div>
 
<div class="form-group">
    {{Form::label('title', 'Title')}}

    {{Form::text('title', '',['class'=>'form-control','placeholder'=>'Message Title'])}}
	@error('title')
             <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
             </span>
         @enderror
</div>
 




<div class="form-group">
     {{Form::label('message', 'Message')}}

     {{Form::textarea('message', '',['class'=>'form-control','placeholder'=>'Enter your Message' ])}}
	     @error('message')
             <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
             </span>
         @enderror
</div>

<div>
<button type="submit" class="btn btn-primary">
                       submit
                    </button>
</div> </br></br>

{!! Form::close() !!}

</div>

@endsection