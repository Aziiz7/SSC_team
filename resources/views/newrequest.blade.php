

@extends('layouts.app')

@section('content')




{!! Form::open(['url' => 'newrequest/submit']) !!}



<div class="form-group">
    {{Form::label('to', 'To')}}

    {{Form::text('email', '',['class'=>'form-control','placeholder'=>'Reciver'])}}
</div>
 
<div class="form-group">
    {{Form::label('title', 'Title')}}

    {{Form::text('title', '',['class'=>'form-control','placeholder'=>'Message Title'])}}
</div>
 




<div class="form-group">
     {{Form::label('message', 'Message')}}

     {{Form::textarea('message', '',['class'=>'form-control','placeholder'=>'Enter your Message '])}}
</div>

<div>
    {{Form::submit('Submit', ['class'=>'bnt btn-primary'])}}
</div>
{!! Form::close() !!}


@endsection

@section('sidebar')
@parent
  <div class="sidebar">
  <img src="https://www.freepngimg.com/thumb/telephone/68708-ipma-message-icon-email-telephone-png-image-high-quality.png" width="300" height="200">
  </div>@endsection