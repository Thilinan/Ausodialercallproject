<?php

use App\Http\Controllers\agentcontroller;
use App\Http\Controllers\Auth\LogingController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\numberGetcontroller;
use App\Http\Controllers\skillcontroller;
use App\Models\agent;
use Illuminate\Support\Facades\Route;

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

Route::get('/store',[EmployeeController::class,'store']
);

Route::get('/tra', function () {

    return view('employee.views');

});

Route::resource('employee', EmployeeController::class);

//agent sotre route
Route::get('/agent', [agentcontroller::class,'store'] );

Route::get('/employee', [agentcontroller::class,'index'] );

Route::get('/', [LoginController::class,'loginForm'] )->name('agent.loginForm');
Route::post('/login', [LoginController::class,'login'] )->name('agent.login');




//Route::post('/hh', [LoginController::class,'login'] )->name('get.number');

// Route::get('/dashboard', function () {
//     $login = new LoginController();
//     $users =  $login->views();

//     $numberget = new numberGetcontroller();
//     $posts =  $numberget ->views();

//     return view('dashboard', compact('login','numberget'));
// });




// login route
