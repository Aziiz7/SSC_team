@extends('layouts.appnew')

     @section('content')
         


         <div class="container ">

         <h1><span class="blue"> Students  </span></h1>
             </br>  </br> 
             
          <div class="row">
            <div class="col">
              <table class="table table-bordered table-align">
                <thead>
                  <tr >
            <th >Student</th>
            <th>Univarsity</th>
            <th>Action</th>
     
            
          </tr>
         </thead>
         <tbody>
          @if(count($users ) > 0)
          @foreach($users  as $user)
       
         <td>{{$user->name}}</td>
         <td >{{$user->Univarsity}}</td>
          <td>
             <a href ="#" class="show-modal button btn btn-primary btn-speces"  data-id="{{$user->name}}" data-email="{{$user->email}}"  
               data-title="{{$user->Univarsity}}"   data-grade="{{$user->grade}}" data-semster="{{$user->semster}}" data-univarsityemail="{{$user->univarsityemail}}" >
             <i class="far fa-eye" ></i>
          </a>
  
         </td> 
         </tr>
 
         @endforeach
    
         @endif
 
         </tbody>
 
         </table>
         </div>
        </div>
        </div>
        

     <div id="showstd" class="modal fade" role="dialog">
     <div class="modal-dialog">
         <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title"></h4>
         </div>
     <div class="modal-body">
     <div class="form-group">
                      <label for="email"> Student Email :</label>
                      <b id="by0"/>
                    </div>
                    <div class="form-group">
                      <label for="grade"> Grade :</label>
                      <b id="by2"/>
                    </div>
                    <div class="form-group">
                      <label for="semster">Semster :</label>
                      <b id="by3"/>
                    </div>

                    <div class="form-group">
                      <label for="Univarsity">Study at :</label>
                      <b id="ti"/>
                    </div>

                    <div class="form-group">
                      <label for="univarsityemail">Univarsity Emaill  :</label>
                      <b id="b1"/> 
                    </div>
                   
                  </div>
                    </div>
                  </div>
                  </div>
@endsection