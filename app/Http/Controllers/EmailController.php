<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class EmailController extends Controller
{
    public function SendEmail(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'body' => 'required|min:10'
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $body = $request->input('body');
        
        Mail::to('mohammed-jumah@outlook.com')
            ->send(new SendEmail($name, $email, $subject, $body));

        return redirect('/SendEmail')->with('success', 'We got your email and Will answer Soon..!');
    }  }
