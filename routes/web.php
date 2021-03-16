<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FAQController;
use App\Http\Controllers\UserController;

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



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::group(['middleware' => 'auth'], function(){
    // Route::get('/dashboard', 'App\Http\Controllers\UserController@index')->name('dashboard');
    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('export', [UserController::class, 'export'])->name('export');
    Route::get('users/{id}',[UserController::class, 'show'])->name('users');
    Route::resource('faqs', FAQController::class);
    // Route::post('faq', [FAQController::class, 'store'])->name('faq');
    // Route::post('faqs', [FAQController::class, 'create'])->name('faqs');
});


require __DIR__.'/auth.php';
