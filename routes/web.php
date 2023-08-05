<?php
use App\Http\Controllers\AllControllers;
use App\Http\Controllers\FlutterwaveController;
use Illuminate\Support\Facades\Cookie;
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


//Route::get('test-get', function () {

   // dd(Cookie::get('ref_code'));
//});


Route::get('/', function () {
    return view('index');
});

Route::get('/affiliates', [AllControllers::class, 'affiliates'])->name('affiliates');

Route::get('/support', [AllControllers::class, 'support'])->name('support');

Route::get('/sellers', [AllControllers::class, 'sellers'])->name('sellers');

Route::get('/reports', [AllControllers::class, 'reports'])->name('reports');

Route::get('/cryptocashout', [AllControllers::class, 'report1'])->name('report1');

Route::get('/courses', [AllControllers::class, 'courses'])->name('courses');

Route::get('/product1', [AllControllers::class, 'product1'])->name('product1');

Route::get('/myapps', [AllControllers::class, 'myapps'])->name('myapps');

Route::get('/usdmyapps', [AllControllers::class, 'usdmyapps'])->name('usdmyapps');

Route::get('/emailmarketing', [AllControllers::class, 'emailmarketing'])->name('emailmarketing');

Route::get('/usdemailmarketing', [AllControllers::class, 'usdemailmarketing'])->name('usdemailmarketing');

Route::get('/digipreneur', [AllControllers::class, 'digipreneur'])->name('digipreneur');

Route::post('/paynow', [AllControllers::class, 'paynow'])->name('paynow')->middleware('auth');

Route::get('/redirectpay', [AllControllers::class, 'redirectpay'])->name('redirectpay')->middleware('auth');

Route::get('/orders', [AllControllers::class, 'orders'])->name('orders')->middleware('auth');

Route::get('/orderdetails', [AllControllers::class, 'orderdetails'])->name('orderdetails')->middleware('auth');

Route::get('/dashboard', [AllControllers::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/products', [AllControllers::class, 'products'])->name('products')->middleware('auth');

Route::get('/sales', [AllControllers::class, 'sales'])->name('sales')->middleware('auth');

Route::post('/flutterpay', [FlutterwaveController::class, 'initialize'])->name('flutterpay')->middleware('auth');

Route::get('/rave/callback', [FlutterwaveController::class, 'callback'])->name('callback');

//Route::get('/dashboard', function () {
    //return view('dashboard1');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';