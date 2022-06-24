<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\CategoryController;

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

//pages
Route::get('/', function () {
    return view('pages.index');
});
Route::get('/categories', function () {
    return view('pages.categories');
});
Route::get('/product={id}', function ($id) {
    return view('pages.single-product');
});
Route::get('/categories', function () {
    return view('pages.categories');
});




// profile
Route::get('/profile/user={user}', function () {
    return view('profile.index');
});
Route::get('/profile/edit-user={id}', function ($id) {
    return view('profile.edit-profile');
});

Route::get('/editprofile/{user}', ['App\Http\Controllers\UsersController', 'editProfile'])->name('pages.editprofile');

Route::post('/updateprofile/{user}', ['App\Http\Controllers\UsersController', 'updateProfile'])->name('pages.updateProfile');

// Route::get('/profile/{user}', ['App\Http\Controllers\UsersController', 'showProfile']);


//admin routes
Route::get('admin/user/approve/{id}', [UserController::class,'approve']);
Route::get('admin/users/approve-all', [UserController::class,'approveAll']);
Route::get('admin/order/approve/{id}', [OrderController::class,'approve']);
Route::get('admin/package/approve/{id}', [PackageController::class,'approve']);
Route::get('admin/packages/approve-all', [PackageController::class,'approveAll']);

Route::resource('admin/users' , 'App\Http\Controllers\UserController')->middleware('auth');
Route::resource('admin/packages' , 'App\Http\Controllers\PackageController')->middleware('auth');
Route::resource('admin/categories' , 'App\Http\Controllers\CategoryController')->middleware('auth');
Route::resource('admin/messages' , 'App\Http\Controllers\MessageController')->middleware('auth');
Route::resource('admin/cities' , 'App\Http\Controllers\CityController')->middleware('auth');
Route::get('items/{id}' , 'App\Http\Controllers\OrderController@orderItems');

Route::get('orders/{id}' , 'App\Http\Controllers\OrderController@orders');
Route::get('order/items/{id}' , 'App\Http\Controllers\OrderController@profileItems');


Route::resource('categories', CategoryController::class);
Route::get('categories/{packages}', [CategoryController::class,'show'])->name('categories.show');

Route::get('/softDelete/{package}', [PackageController::class,'softDelete'])->name('packages.softDelete');
Route::resource('packages', PackageController::class);
Route::resource('orders', OrderController::class);

Route::get('' , 'App\Http\Controllers\CategoryController@showCategory');

// Route::get('/user-profile-{id}', [ProfilesController::class, 'index'])->middleware(['auth'])->name('profile');

require __DIR__.'/auth.php';
