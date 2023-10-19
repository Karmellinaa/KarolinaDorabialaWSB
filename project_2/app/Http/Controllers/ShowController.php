<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show(){
        return 'Kontroler ShowController';
    }

    public function showView(){
        $data = [
            'firstName' => 'Jan',
            'lastName' => 'Nowak',
            'city' => 'Poznań',
            'hobby' => ['siatkówka', 'żużel', 'fotografia']
        ];
        return View('table', $data);
    }
    public function showData(){
        //return 'Imię i Nazwisko:';
         $data = [
            'firstName' => 'Karolina',
            'lastName' => 'Dorabiała',
            'city' => 'Poznań',
            'hobby' => ['siatkówka', 'żużel', 'fotografia']
        ];
        //return View('table', $data);
        return View('data', $data);
        //return View('data', ['data' => $data]);
        
    }
}

