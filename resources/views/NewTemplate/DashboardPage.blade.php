@extends('layouts.appnew')

     @section('content')
	 {{ csrf_field() }}
    
     <div class="container">
        <div class="home-intro text-center">
          <h1 class="welcome-title animated fadeInLeft"><span class="blue">Recived messages</span></h1>
        </div>         
       <table class="table table-bordered">
     <thead>
      <tr>
        <th>Sender</th>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
          @if(count($messages ) > 0)
          @foreach($messages  as $message)
       
           <td>{{$message->name}}</td>
          <td >{{$message->title}}</td>
          <td>
               
<a href ="#" class="show-modal button btn btn-primary btn-speces"  data-title="{{$message->title}}" data-id="{{$message->name}}" data-message="{{$message->message}}">
  <i class="far fa-eye" ></i>
</a>
    
<a  type ="submit" class="button btn btn-danger btn-speces" data-toggle="modal" data-target="#exampleModalLong"><i class="far fa-trash-alt" ></i></a>

</td> 
  </tr>
  <div class="modal" id="exampleModalLong" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      
        <div class="modal-body">
          <p>Do you want to delete this message? </p>
        </div>
        <div class="modal-footer">
          <a  type ="submit" class="button btn btn-danger btn-speces"  a href ="{{route('dltmsg', $message->id)}}">confirm</a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach
    
  @endif
 
</tbody>
</table>
</div></div> 

<div id="showmsg" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
                  </div>
                    <div class="modal-body">
                   
                    <div class="form-group">
                      <label for="message"></label>
                      <b id="by"/>
                    </div>
                    </div>
                    </div>
                  </div>
                  </div>

    @endsection