<?php

use App\Http\Controllers\Admin\AnimalController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadImageController;



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/about', 'MainController@about');
Route::get('/', 'MainController@index');
Route::get('/{animal?}', 'MainController@animal')->name('category');
Route::delete('/delete/animal/{id}','MainController@destroy');
Route::delete('/animals/{animal}', 'MainController@destroyAnimal')->name('animals.destroy');
Route::get('/animal', 'MainController@create')->name('animal-create');
Route::post('/animal', 'MainController@store')->name('animal-store');

Route::get('/post', [PostController::class, 'Submit'])->name('post');
Route::post('/post', [PostController::class, 'Submit'])->name('post');

Route::get('/create', 'PostController@store');
