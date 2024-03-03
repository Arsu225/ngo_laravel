<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DynamicPageController;
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

Route::get('/',[DynamicPageController::class,'index'])->name('home');

Route::get('ourwork', function () {
    return view('pages.ourwork');
})->name('our-projects');

Route::get('donate', function () {
    return view('pages.donate');
})->name('donate-now');

Route::get('about-us', function () {
    return view('pages.aboutus');
})->name('about-us');

Route::get('project-details/{slug}',[DynamicPageController::class,'projectDetail'])->name('project-details');
