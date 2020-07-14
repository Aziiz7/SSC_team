@extends('layouts.appnew')

    @section('content')


        <div class="container" text="center">

         <h1><span class="blue"> Users </span></h1></br></br>
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
                       <button class="btn btn-danger btn-md rounded-0 " type="submit" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close "></i></button></a>
                    </form>
                      @endcan
                    </td>   
                </tr>
            @endforeach
            </tbody>
            </table>
            </div>
          </div>
        </div>

	@endsection