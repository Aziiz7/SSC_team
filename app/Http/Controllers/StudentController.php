<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;
class StudentController extends Controller
{
    public function getStudent(){

        $users = User::where('id', '!=', auth()->id())->get();
       
        return view('/students')->with('users',$users );}
        

}
