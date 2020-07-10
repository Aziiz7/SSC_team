<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use App\Role;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|max:255|string',
            'email' => 'required|email|unique:users|string',
            'password' => 'required|min:6|confirmed|string',
            'Univarsity' => 'max:255|string',
            'univarsityemail' => 'email|unique:users|string',
            'grade' => 'max:6|numeric',
            'semster' => 'max:10|string',
            'api_token' =>Str::random(60),
        ]);
        
        $user = User::create(request(['name', 'email','password','Univarsity', 'univarsityemail', 'grade','semster', 'api_token']));

        auth()->login($user);
        
        return redirect()->to('/dashboard')->withSuccess('Great! You have Successfully Registration');
    }
}
