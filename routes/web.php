<?php


  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ContactsController;

use App\Http\Controllers\BlogController;


  
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
  
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('acceuil');
});

Route::get('/service', function () {
    return view('service');
});


Route::get('/rendez-vous', function () {
    return view('rendez-vous');
});

Route::get('/espace-client', function () {
    return view('espace-client');
});

Route::get('/contacter', function () {
    return view('contacter');
});

Route::get('/layouts/admin/dash', function () {
    return view('layouts.admin-dash-layout');
});

Route::get('/FormulaireBlogs', function () {
    return view('FormulaireBlogs');
});

Route::get('/Blog', function () {
    return view('Blog');
});


Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
   
});
  

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.Home');


});


Route::get('contact', [ContactsController::class, 'create'])->name('contact.create');
Route::post('contact', [ContactsController::class, 'store'])->name('contact.store');


Route::get('blog', [BlogController::class, 'create'])->name('blog.create');
Route::post('blog', [BlogController::class, 'store'])->name('blog.store');

Route::get('/Blog', [BlogController::class, 'show'])->name('Blog');
