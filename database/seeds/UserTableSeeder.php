<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::truncate();
       DB::table('role_user')->truncate();

       $adminRole = Role::where('name', 'admin')->first();
       $advisorRole = Role::where('name', 'advisor')->first();
       $studentRole = Role::where('name', 'student')->first();

        
          $admin = User::create([

            'name' =>'SEU',
            'email'=>'seu@seu.edu',
            'Univarsity'=>'KSU',
            'univarsityemail'=>'seu@seu.edu.sa',
            'grade'=>'4.22',
            'semster'=>'third',
            'password' => 'Admin',
            'remember_token' =>str_random(11),
         ] );


          $advisor = User::create([

            'name' =>'Harvard',
            'email'=>'harvard@harvard.edu',
            'Univarsity'=>'KSU',
            'univarsityemail'=>'seu@seu.edu.sa',
            'grade'=>'4.22',
            'semster'=>'third',
            'password' => 'Admin',
            'remember_token' =>str_random(10),
         ] );

          $student = User::create([

            'name' =>'Abdulaziz',
            'email'=>'abulazizalhoimel@gmail.com',
            'Univarsity'=>'KSU',
            'univarsityemail'=>'seu@seu.edu.sa',
            'grade'=>'4.22',
            'semster'=>'third',
            'password' => 'Admin',
            'remember_token' =>str_random(12),
         ] );

       $admin->roles()->attach($adminRole);
       $advisor->roles()->attach($advisorRole);
       $student->roles()->attach($studentRole);
    }
}
