<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\DropDownWithSearch;
use App\Http\Livewire\About;

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

Route::get('/', function () { return view('welcome'); })->name('home');

Route::get('/about', About::class)->name('about');

Route::get('/test', DropDownWithSearch::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
