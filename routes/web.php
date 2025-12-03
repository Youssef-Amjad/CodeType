<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

Route::get('/', [WebController::class, 'home'])->name('home');


Route::get('/test', function () {
    return [];
});


Route::view('/about', 'web.about.index')->name('about');
Route::view('/contact', 'web.contact.index')->name('contact');
Route::view('/faqs', 'web.faqs.index')->name('faqs');
Route::view('/privacy', 'web.privacy.index')->name('privacy');

include __DIR__ . '/auth.php';
include __DIR__ . '/blog.php';
