<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsCategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\StoreUserController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CartController;
use Darryldecode\Cart\CartCollection;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

use App\Mail\helloMail;
use App\Http\Controllers\ContactController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('template1.contact');
});
Route::get('/about', function () {
    return view('template1.about');
});
Route::get('/about2', function () {
    return view('template2.about');
});
Route::get('/contact2', function () {
    return view('template2.contact');
});
Route::get('/template3', function () {
    return view('template3.nav');
});
Route::get('/contact2', function () {
    return view('template2.contact');
});

//easy example for send mail
Route::get('/email', function () {
    Mail::to(Auth::user()->email)->send(new Sendmail());
    return response()->json(['great check your mail box']);
});

//
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prifix'=>'admin','middleware'=>'auth'],function(){

//Admin Dashboard
Route::get('/',[AdminController::class,'Admin'])->name('admin');
//UserManagement

//categories management
Route::resource('category',CategoriesController::class);
// Products management
Route::resource('product',ProductsController::class);
Route::get('Offer/{id}', [ProductsController::class, 'Offer'])->name('Offer');
Route::post('addOffer/{id}', [ProductsController::class, 'addOffer'])->name('addOffer');
});
//subcategories management
Route::resource('subcategory',SubcategoryController::class);

Route::resource('ProductCat', ProductCategoryController::class);

//stores management
Route::resource('store',StoreController::class);
   Route::get('/addstores/{id}', [StoreController::class, 'addstores'])->name('addstore');
   Route::post('/savestores/{id}', [StoreController::class, 'store'])->name('storesave');
Route::post('active/{id}',[StoreController::class,'active'])->name('active');
//template
Route::post('temp/{id}',[StoreUserController::class,'setTemplate'])->name('store.setTemplate');
Route::get('/productStore/{id}', [ProductsController::class, 'productStore'])->name('productStore');
////
Route::get('/showstores/{id}', [FrontController::class, 'showstores'])->name('showstores');

//user-store


//spatie
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});
 

//storeManagement
Route::resource('ProductCat', ProductsCategoryController::class);
Route::get('/productCategory/{id}', [ProductsCategoryController::class, 'productCategory'])->name('productCategory');







Route::resource('stores',StoreUserController::class);
Route::post('/updatestoreuser/{id}', [StoreUserController::class, 'update'])->name('updatestoreuser');
//frontstorecategory
//show stores
Route::get('/show/{id}', [FrontController::class, 'show'])->name('frontshowstore');
//view details store
Route::get('/index/{id}', [FrontController::class, 'index'])->name('details-store');

Route::get('/showcategory', [FrontController::class, 'showcategory'])->name('showcategory');
Route::get('/showsubcategory/{id}', [FrontController::class, 'showsubcategory'])->name('showsubcategory');


////cart shopping
//show cart
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');

//add product to cart
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
//discount
Route::post('/product/{productId}/addDiscount/{discountValue}', [CartController::class, 'applyDiscount'])->name('applyDiscount');
//show order
Route::resource('order',OrdersController::class);
Route::get('order', [OrdersController::class, 'index'])->name('order.index');
Route::post('addtorder', [OrdersController::class, 'store'])->name('order.store');
Route::get('addorder', [CartController::class, 'create'])->name('order.create');
Route::delete('/orders/{order}', [OrdersController::class,'destroy'])->name('order.destroy');
//sendMail
 Route::get('/send', [MailController::class, 'index']);
 Route::get('/contact-Us', [ContactController::class, 'contact']);
 Route::post('contact', [ContactController::class, 'sendEmail'])->name('contact.store');


