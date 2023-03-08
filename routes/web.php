<?php

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
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
/* =======developer======== */
//Route::get('/', [eController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')-> middleware(['auth','isAdmin']) ->group(function(){
    Route::get('dashboad',[App\Http\Controllers\admin\DashboadController::class, 'index']);

    //group controller//
    Route::controller(App\Http\Controllers\admin\CategoryController::class)->group(function () {
        Route::get('/category', 'index');
        Route::get('/category/create', 'create');
        Route::post('/category', 'store');
        Route::get('/category/{category}/edit', 'edit');
        Route::put('/category/{category}', 'update');
    });
//brnads//
  Route::get('/brand',App\Http\Livewire\Admin\Brands\Index::class);

});

//pratice second category2//
Route::prefix('admin')-> middleware(['auth','isAdmin']) ->group(function(){
    Route::get('dashboad',[App\Http\Controllers\admin\DashboadController::class, 'index']);

    //group controller//
    Route::controller(App\Http\Controllers\admin\Category2Controller::class)->group(function () {
        Route::get('/category2', 'index2');
        Route::get('/category2/create2', 'create2');
        Route::post('/category2', 'store');
        Route::get('/category2/{category2}/edit', 'edit');
       // Route::put('/category/{category}', 'update');
    });

    //category route //
   // Route::get('category', [App\Http\Controllers\admin\CategoryController::class, 'index']);
   // Route::get('category/create', [App\Http\Controllers\admin\CategoryController::class, 'create']);
   // Route::post('category', [App\Http\Controllers\admin\CategoryController::class, 'store']);

   //brand category//
   //Route::get('/brand');

});
