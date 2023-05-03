<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
//     return view('welcome');
// });
Route::get('',[AuthController::class,'index'])->name('login');
Route::post('login',[AuthController::class,'login'])->name('login');
Route::group(['middleware'=>'guest'],function(){


//Route::get('register',[AuthController::class,'register_view'])->name('register');
//Route::post('register',[AuthController::class,'register'])->name('register');
});


Route::group(['middleware'=>'auth'],function(){
Route::get('logout',[AuthController::class,'Logout'])->name('logout');
});
//Route::get('home',[AuthController::class,'Home'])->name('home');



Route::get('Admin',[AuthController::class,'Admin']);
Route::get('Genre/',[AuthController::class,'Genre']);
Route::post('GenrePost/',[AuthController::class,'GenrePost'])->name('GenrePost');
Route::get('Genre',[AuthController::class, 'show']);
Route::get('/contacts/delete/{id}',[AuthController::class,'delete']);
Route::post('GenreEdit/{id}',[AuthController::class, 'edits']);


Route::get('Artist',[AuthController::class,'Artist']);
Route::post('ArtistPost/',[AuthController::class,'ArtistPost'])->name('ArtistPost');
Route::get('Artist',[AuthController::class, 'ArtistShow']);
Route::get('ArtistDelete/{id}',[AuthController::class,'ArtistDelete']);
Route::post('AstistEdits/{id}',[AuthController::class, 'AstistEdits']);


Route::get('Venue',[AuthController::class,'Venue']);
Route::post('VenuePost/',[AuthController::class,'VenuePost'])->name('VenuePost');
Route::get('Venue',[AuthController::class, 'VenueShow']);
Route::get('VenueDelete/{id}',[AuthController::class,'VenueDelete']);
Route::post('VenueEdits/{id}',[AuthController::class, 'VenueEdits']);


Route::get('Events',[AuthController::class,'Events']);
Route::post('EventsPost/',[AuthController::class,'EventsPost'])->name('EventsPost');
Route::get('Events',[AuthController::class, 'EventsShow']);
Route::get('EventsDelete/{id}',[AuthController::class,'EventsDelete']);
Route::post('EventsEdits/{id}',[AuthController::class, 'EventsEdits']);

// Front End
Route::get('Homes',[AuthController::class,'Homes']);
Route::get('search',[AuthController::class,'SearchPro'])->name('SearchPro');