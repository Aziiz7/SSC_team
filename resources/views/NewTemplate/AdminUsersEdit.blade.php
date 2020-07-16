@extends('layouts.appnew')

    @section('content')

         <div class="container ">
         <div class="home-intro text-center">
          <h1 class="welcome-title animated fadeInLeft"><span class="blue">Edit user {{ $user->name }}</span></h1></br>
          <div class="sidebar">
           <img src="https://image.flaticon.com/icons/svg/78/78948.svg" width="300" height="175" postion="center">
         </div>
        </div> 
          <div class="row">
             <div class="col">
             <table class="table table-bordered table-align">
              <form action="{{ route('admin.users.update', $user)  }}" method="POST">

              <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text1" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Univarsity" class="col-md-2 col-form-label text-md-right">Univarsity</label>

                            <div class="col-md-6">
                                <input id="Univarsity" type="text1" class="form-control @error('Univarsity') is-invalid @enderror" name="Univarsity" value="{{ $user->Univarsity }}" required autofocus>

                                @error('Univarsity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="univarsityemail" class="col-md-2 col-form-label text-md-right">Univarsity Email</label>

                            <div class="col-md-6">
                                <input id="univarsityemail" type="email" class="form-control @error('univarsityemail') is-invalid @enderror" name="univarsityemail" value="{{ $user->univarsityemail }}" required autofocus>

                                @error('univarsityemail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="grade" class="col-md-2 col-form-label text-md-right">Grade</label>

                            <div class="col-md-6">
                                <input id="grade" type="numeric" class="form-control @error('grade') is-invalid @enderror" name="grade" value="{{ $user->grade }}" required autofocus>

                                @error('grade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="semster" class="col-md-2 col-form-label text-md-right">Semster</label>

                            <div class="col-md-6">
                                <input id="semster" type="text1" class="form-control @error('semster') is-invalid @enderror" name="semster" value="{{ $user->semster }}" required autofocus>

                                @error('semster')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                   @csrf
                   {{ method_field('PUT') }}
                   <div class="form-group row">
                   <label for="roles" class="col-md-2 col-form-label text-md-right">Roles</label>
                   
                   <div class="col-md-6">
                   @foreach($roles as $role)
                       <div class="form-check">
                          <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                          @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                          <label>{{ $role->name }}</label>
                       </div>
                   @endforeach
                   </div>
                   </div>
                    <button type="submit" class="btn btn-primary">
                       Update
                    </button>
              </form>
            </table>
            </div>
          </div>
        </div>

    @endsection