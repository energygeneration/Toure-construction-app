<?php

namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [ 
               'first_name'=>'Toure User',
               'last_name'=>'Admin User',
               'phone'=>'90251696',
               'email'=>'admin@tutsmake.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
           
            [
                'first_name'=>'Toure User',
                'last_name'=>'User',
               'phone'=>'90251696',
               'email'=>'user@tutsmake.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}