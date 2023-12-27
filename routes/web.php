<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;   
use App\Http\Controllers\Login;
use App\Http\Controllers\CommuteController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    if(request()->has('from_signup') and request()->has('name')) {
        return view('login', [
            'name' => request()->name,
            'from_signup' => 'true'
        ]);
    }
    return view('login');
})->name('login');


Route::get('/signup', function () {
    return view('signup');
})->name('signup');


Route::get('/', function () {
    $user = Auth::user();
    return view('welcome', ['name' => isset($user) ? $user->name : null]);
})->name('welcome');

Route::get('/commute/create', [CommuteController::class, 'createForm'])->name('commute.create');
Route::get('/commute/index', [CommuteController::class, 'createForm'])->name('commute.index');
Route::post('/commute/store', [CommuteController::class, 'store'])->name('commute.store');


Route::post('/signup', [Login::class, 'signup']);
Route::post('/login', [Login::class, 'login']);