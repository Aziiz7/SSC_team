@extends('layouts.app')
@section('content')


<div class="jumbotron text-left">


    <div class="container ">

         <h1> Users  </h1>
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
                    <label class="badge badge-success">{{ implode(',', $user->roles()->get()->pluck('name')->toArray()) }}</label>
                    </td>
                    
                    <td>
                      @can('manage-users')
                    <!--<a href="{{ route('admin.users.update', $user->id) }}"><button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Add"><i class="fa fa-table float-left"></i></button></a>-->
                    <a href="{{ route('admin.users.edit', $user->id) }}"><button class=" btn btn-primary btn-sm rounded-0 " type="button" data-toggle="tooltip" data-placement="top" title="Edit" style="float: left"><i class="fa fa-edit "></i></button></a>
                      @endcan
                    
                    </td>   
                </tr>
            @endforeach
            </tbody>
            </table>
            </div>
          </div>
     </div>
 </div>
@endsection
   
    @section('sidebar')
    @parent
   
      <div class="sidebar">
      <img src="https://image.flaticon.com/icons/svg/78/78948.svg" width="300" height="175">
      </div>
    @endsection