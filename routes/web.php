<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NotifyController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/newsletter', [NotifyController::class, 'store'])->name('notify.store');
Route::post('/contact-form', [ContactController::class, 'storeForm'])->name('contact.save');