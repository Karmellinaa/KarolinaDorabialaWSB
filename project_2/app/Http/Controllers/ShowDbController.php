<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowDbController extends Controller
{
    public function showDbTable(){
       // return DB::select('select * from users_test');
       //return DB::table('users_test')->get();

        //return DB::table('users_test')
        //->where('lastName', 'Dorabiała')
        //->get();

        //$data=DB::table('users_test') ->count();
        //echo $data;

        //$data=DB::table('users_test')->where('lastName', 'Dorabiała')->get();
        //echo $data;
        //print_r($data);

        //return DB::table('users_test')->where('lastName', 'Nowak')->delete();

        // DB::table('users_test')
        // ->insert([
        //     'firstName' => 'Michal',
        //     'lastName' => 'Bajdalski',
        //     'birthday'=>'2000-11-10'
        // ]);

        // $data = DB::table('users_test')
        // ->where('lastName', 'Bajdalski')
        // ->update([
        //     'firstName' => 'Kuba',
        //     'lastName' => 'Pawlak'
        // ]);
        // echo $data;

        //return number_format(DB::table('users_test')->avg('weight'),'2');

        //return number_format(DB::table('users_test')->count('weight'));
        
        return DB::table('users_test')
        ->select('users_test.firstName', 'users_test.lastName','city.cityName')
        ->join('city','city_id', 'city.id')
        ->get();
    }
}
