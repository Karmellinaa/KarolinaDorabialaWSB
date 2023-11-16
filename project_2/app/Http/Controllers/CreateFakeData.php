<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CreateFakeData extends Controller
{
    public function Show()
    {
        //$faker = Faker::create();
        $faker = Faker::create('pl_PL');
        $user = [];

        //echo $faker->name;

        for ($i = 0; $i < 10; $i++) {
            //echo "$faker->firstNameMale<br>";
            //echo "$faker->firstNameFemale<br>";
            $users[] = [
                //'imie' => $faker->firstName, 
                //'nazwisko' => $faker->lastName
                'name' => $faker->lastName,
                'email' => $faker->email,
                'password' => bcrypt($faker->password),
                'created_at' => now(),
                'updated_at' => now(),
            ];
            DB::insert('insert into users (name, email, password, created_at, updated_at) values(?, ?, ?, ?, ?)', array_values($users[0]));
        }

        //print_r($users);
        //print_r($users[1]);
    }
}
