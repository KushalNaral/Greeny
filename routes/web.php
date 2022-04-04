<?php


use App\Http\Controllers\Admin\Auth\AdminSessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\GenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\Auth\UserSessionController;

use App\Http\Controllers\Vendor\Auth\VendorSessionController;
use App\Http\Controllers\VendorsController;
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

Route::get('/greeny', function () {
    return view('welcome');
});

Route::get('/greeny/products', [ProductsController::class, 'index'])->name('home');
Route::get('/', [GenController::class, 'index'])->name('main');
//admin route

        Route::get('admin/login', [AdminSessionController::class, 'create'])->name('adminLogin');
        Route::post('admin/login', [AdminSessionController::class, 'store'])->name('adminLoggedIn');
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('adminDashboard');
        Route::post('/admin/logout', [AdminSessionController::class, 'destroy'])->name('adminLogout');

//vendor route
        Route::get('vendor/login', [VendorSessionController::class, 'create'])->name('vendorLogin');
        Route::post('vendor/login', [VendorSessionController::class, 'store'])->name('vendorLoggedIn');
        Route::get('/vendor/dashboard', [VendorsController::class, 'index'])->name('vendorDashboard');
        Route::post('/vendor/logout', [VendorSessionController::class, 'destroy'])->name('vendorLogout');

        Route::get('/vendor/register', [VendorsController::class, 'create']);
        Route::post('/vendor/register', [VendorsController::class, 'store'])->name('venRegister');
        Route::get('vendor/registered', [VendorsController::class, 'registered'])->name('venRegistered');


//user route
        Route::get('/user/login', [UserSessionController::class, 'create'])->name('userLogin');
        Route::post('/user/login', [UserSessionController::class, 'store'])->name('userLoggedIn');
        Route::get('/user/dashboard', [UserController::class, 'index'])->name('userDashboard');
        Route::get('/user/logout', [UserSessionController::class, 'destroy'])->name('userLogout');

        Route::get('/user/register', [UserController::class, 'create']);
        Route::get('/user/register', [UserController::class, 'store'])->name('userRegister');
        Route::get('/user/registered', [UserController::class, 'registered'])->name('userRegistered');






//for single brand page

        Route::get('/greeny/{vendor}', [VendorsController::class, 'show']);


//for single product page

        Route::get("/greeny/{category:slug}/{product:id}", [ProductsController::class, 'show']);



//for cart component

        Route::get('/', [ProductsController::class, 'index']);
        Route::get('cart', [ProductsController::class, 'cart'])->name('cart');
        Route::get('addToCart/{id}', [ProductsController::class, 'addToCart'])->name('addToCart');
        Route::patch('updateCart', [ProductsController::class, 'update'])->name('updateCart');
        Route::delete('removeFromCart', [ProductsController::class, 'remove'])->name('removeFromCart');





//for error page

        Route::get('/error/wrong-password', function (){
            return view('Errors/wrongPass');
        });

/*
Route::get('', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

require __DIR__.'/auth.php';
