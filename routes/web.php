<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KayuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WarnaController;
use App\Models\Checkout;
use App\Models\Jenis;
use App\Models\Kayu;
use App\Models\Product;
use App\Models\User;
use App\Models\Warna;
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
    return view('welcome',[
        'products'=>Product::all(),
        'category'=>[ProductController::class, 'jenis'],
        'kayus'=>Kayu::all(),
        'jenis'=>Jenis::all(),
        'warnas'=>Warna::all(),    
    ]);
});
Route::get('/about', function () {
    return view('about',[
        // 'products'=>Product::all()    
    ]);
});
Route::get('/contact', function () {
    return view('contact',[
        // 'products'=>Product::all()    
    ]);
});
Route::get('/product',[ProductController::class, 'index'])->name('products.show');




Route::resource('kayus', KayuController::class);
Route::resource('products', ProductController::class);
Route::resource('jenis', JenisController::class);
Route::resource('warnas', WarnaController::class);

//user
Route::get('/nav', function () {
    return view('layouts.nav');
});


Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/cart', [CartController::class, 'show']);
Route::get('/order', [CheckoutController::class, 'show']);

Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/history', function () {
    return view('history');
});
Route::get( '/checkout', [CartController::class,'buy']);
Route::post( '/buy', [CheckoutController::class,'create']);


Route::get( '/deletecart/{id}', [CartController::class,'destroy']);
Route::get( '/deleteorder/{id}', [CheckoutController::class,'destroy']);

Route::get('/product/{id}',  [ProductController::class, 'show'] );
// Route::get('/myaccount',  [UserController::class, 'show'] );

Route::get('/myaccount', function () {
    return view('profile');
});
Route::post( '/addcart/{id}', [CartController::class,'addcart']);
Route::get( '/deletecart/{id}', [CartController::class,'destroy']);




Route::resource('checkouts', CheckoutController::class);
//admin
Route::get('/admin/addproduct',[ProductController::class, 'create']);
Route::get('/admin/addkayu', [KayuController::class, 'create']);
Route::get('/admin/addjenis', [JenisController::class, 'create']);
Route::get('/admin/addwarna', [WarnaController::class, 'create']);

Route::get('/admin/listuser',[ProfileController::class, 'listuser']);
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/admin/listproduct',  function () {
    return view('listproduct',[
    'products'=>Product::all(),

        ]);
});

Route::get('/admin/listjenis',  function () {
    return view('listjenis',[
    'jenis'=>Jenis::all(),

        ]);
});

Route::get('/admin/listkayu',  function () {
    return view('listkayu',[
    'kayu'=>Kayu::all(),

        ]);
});

Route::get('/admin/listwarna',  function () {
    return view('listwarna',[
    'warna'=>Warna::all(),

        ]);
});
Route::get('/admin/listorder', function () {
    return view('listorder', [
        'checkout' => Checkout::all(),
    ]);
});

Route::get('/admin/addkayu', function () {
    return view('addkayu');
});
Route::get('/admin/addwarna', function () {
    return view('addwarna');
});

Route::get('/admin/addjenis', function () {
    return view('addjenis');
});


//gatau

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
