<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Auth\GoogleController;

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
    $result=DB::table('properties')->get();
    return view('home.home',['property'=>$result]);
});
Route::get('sale', function () {
    return view('home.sale');
});

Route::get('Login', function () {
    return view('home.Login');
});

Route::get('house', function () {
    return view('home.house');
});

Route::get('villas', function () {
    return view('home.villas');
});

Route::get('Lands', function () {
    return view('home.Lands');
});

Route::get('contact', function () {
    return view('home.contact');
});
Route::get('Rent', function () {
    return view('home.Rent');
});

Route::get('en', function () {
    return view('home.v1');
});
Route::get('property_create', function () {
    return view('home.property.create');
});
Route::get('Maintenance', function () {
    return view('home.Maintenance');
})->name('Maintenance');


Route::controller(PropertyController::class)->group(function (){
    Route::get('properties','index')->name('properties');
    Route::get('property/create','create');
    Route::post('property/insert','insert')->name('property.insert');
    Route::get('property/edit/{id}','edit')->name('property.edit');
    Route::post('property/update/{id}','update')->name('property.update');
    Route::get('property/delete/{id}','delete')->name('property.delete');
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


Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('auth/facebook', [FacebookController::class, 'facebookpage']);
Route::get('auth/facebook/callback', [FacebookController::class, 'redirect']);


Route::get('test', [ImageController::class, 'index']);
Route::post('test/upload', [ImageController::class, 'upload'])->name('test.upload');
