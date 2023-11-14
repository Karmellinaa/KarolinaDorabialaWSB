<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Route::get('show', [\App\Http\Controllers\ShowController::class, 'show']);
Route::get('show', [ShowController::class, 'show']);
Route::get('show_view', [\App\Http\Controllers\ShowController::class, 'showView']);
Route::get('show_data', [ShowController::class, 'showData']);
Route::view('userform', 'forms.user_form');
Route::get('UserFormController',[\App\Http\Controllers\UserFormController::class,'showForm']);
Route::get('db', [\App\Http\Controllers\ShowDbController::class, 'showDbTable']);

Route::get('/address/{city?}/{street?}/{postalCode?}', function(string $city = '-', string $street = '-', int $postalCode = null){
    $postalCode = is_null($postalCode) ? 'brak kodu pocztowego' : substr($postalCode, 0, 2).'-'.substr($postalCode, 2, 3);
    echo <<< SHOW
      Kod pocztowy: $postalCode<br>
      Miasto: $city<br>
      Ulica: $street<hr>
  SHOW;
  })->name('adres');
  
  Route::redirect('adres/{city?}/{street?}/{postalCode?}', '/address/{city?}/{street?}/{postalCode?}');

  
  Route::get('car', [CarController::class, 'showCarTable']);

  Route::view('addUser', 'forms.adduserform');

  Route::post('AddUser', [CarController::class,'AddUser']);

  Route::get('showdbtable',[UsersController::class, 'Showdbtable']);

  Route::get('show_add_userform', function(){
    return view('forms.add_user_form');
  });

  Route::post('UsersController', [UsersController::class, 'Adduser']);





  