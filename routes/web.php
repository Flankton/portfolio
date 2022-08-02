<?php

use App\Http\Controllers\EmailsController;
use App\Mail\WelcomeMail;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
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
})->name('home');

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
})->name('details');

// //Mailing routes
// Route::post('/email', function(Request $request){

//     Mail::to('will.enutrof@gmail.com')->send(new WelcomeMail($request));
// })->name('mail');

// Route::post('store-form', [WelcomeMail::class, 'store'])->name('store');

Route::get('/email', [EmailsController::class, 'email']);

Route::post('/emailPost', [EmailsController::class, 'emailPost'])->name('emailpost');
