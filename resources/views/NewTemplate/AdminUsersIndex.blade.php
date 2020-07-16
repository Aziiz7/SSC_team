@extends('layouts.appnew')

    @section('content')


        <div class="container" text="center">

        <div class="home-intro text-center">
          <h1 class="welcome-title animated fadeInLeft"><span class="blue">users</span></h1></br>
          <div class="sidebar">
           <img src="https://image.flaticon.com/icons/svg/78/78948.svg" width="300" height="175" postion="center">
         </div>
         </div> 
          <div class="row">
             <div class="col">
             <table class="table table-bordered table-align">
             <table class="table table-bordered">
             <thead>
               <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Roles</th>
                <th scope="col">Action</th>
              </tr>
             </thead>
             <tbody>
               @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <!-- <td>{{ implode(',', $user->roles()->get()->pluck('name')->toArray()) }}</td> -->
                    <td>
                    <span class="label label-warning">{{ implode(' & ', $user->roles()->get()->pluck('name')->toArray()) }}</span>
                    </td>
                    <td>
                   
           
                      @can('manage-users')
                      <a href="{{ route('admin.users.edit', $user->id) }}"><button class=" btn btn-primary btn-md rounded-0 " type="button" data-toggle="tooltip" data-placement="top" title="Edit" style="float: left"><i class="fa fa-edit "></i></button></a>
                        @endcan
               @can('delete-users')
                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST" style="float: left">
                       @csrf
                       {{ method_field('DELETE') }}
                       <button type ="submit" class="button btn btn-danger btn-speces" data-toggle="model" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button></a>
                    </form>
                      @endcan
                      @can('manage-users')
                  <a href ="#" class="show-modal button btn btn-primary btn-speces"  data-id="{{$user->name}}" data-email="{{$user->email}}"  
                    data-title="{{$user->Univarsity}}"   data-grade="{{$user->grade}}" data-semster="{{$user->semster}}" data-univarsityemail="{{$user->univarsityemail}}" >
                  <i class="far fa-eye" ></i>
               </a>
               @endcan
                    </td>   
                </tr>
            @endforeach
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