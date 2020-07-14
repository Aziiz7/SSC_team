<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class PagesController extends Controller
{
    public function getAbout(){
        return view('NewTemplate.AboutPage');
    }
    public function getNewrequest(){
        return view('NewTemplate.NewRequest');
    }
    public function getDashboard(){
        return view('NewTemplate.DashboardPage');
    }
    public function getWelcome(){
        return view('welcome');
    }
    public function getlogin(){
        return view('login');
    }
    public function getStudent(){
        return view('NewTemplate.StudentsPage');
    }
    public function getSendEmail(){
        return view('NewTemplate.contactusPage');
    }
    public function getSendEmailForGuest(){
        return view('SendEmailForGuest');
    }

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

        return redirect('/SendEmail')->with('success', 'We got your email and will answer Soon..!');
    }
}