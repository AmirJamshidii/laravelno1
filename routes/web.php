<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CardsController;

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

// Route::get('/', function () {
//     $people = ['amir', 'saeed', 'reza'];

//     return view('welcome', compact('people'));
// });


// route::get('/', [PagesController::class, 'home']);

// Route::get('ik', function () {
//     return view('ik');
// });

// Route::get('about', function () {
//     return view('about');
// });

route::get('cards', [CardsController::class, 'index']);
route::get('cards/{card}', [CardsController::class, 'show']);