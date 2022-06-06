<?php

namespace Database\Seeders;

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
      $user = [
            [
               'name'=>'Tenant',
               'email'=>'tenant@gmail.com',
                'is_tenant'=>'1',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Staff',
               'email'=>'staff@gmail.com',
                'is_staff'=>'0',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Owner',
               'email'=>'owner@gmail.com',
                'is_owner'=>'0',
               'password'=> bcrypt('123456'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}