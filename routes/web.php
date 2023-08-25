<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

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

Route::get('/umkm', function () {
    return view('pages.umkm.index');
})->name('umkm');

Route::get('/contact', function () {
    return view('pages.contact.index');
})->name('contact');

Route::get('/about', function () {
    return view('pages.about.index');
})->name('about');

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/', function () {
//     return view('index');
// })->name('welcome');


Route::resource('/', IndexController::class)->names([
    'index' => 'welcome'
]);

Route::middleware(['auth', 'verified'])->group(function () {

    // Route::resource('/products', ProductController::class)->except(['show']);
    Route::resource('/products', ProductController::class)->names([
        'index' => 'products.index',
        'create' => 'products.create',
        'store' => 'products.save',
        'destroy' => 'products.destroy',
        'edit' => 'products.edit',
        'update' => 'products.update',
        'show' => 'products.show'
    ]);

    Route::resource('/users', UserController::class)->names([
        'index' => 'users.index',
        'create' => 'users.create',
        'store' => 'users.save',
        'destroy' => 'users.destroy',
        'edit' => 'users.edit',
        'update' => 'users.update',
        'show' => 'users.show'
    ]);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
