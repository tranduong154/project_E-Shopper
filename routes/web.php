<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandtController;

use App\Http\Controllers\FontEnd\TaiKhoanController;
use App\Http\Controllers\FontEnd\TrangChuController;
use App\Http\Controllers\FontEnd\LoginController;
use App\Http\Controllers\FontEnd\BlogController;
use App\Http\Controllers\FontEnd\AccountController;
use App\Http\Controllers\FontEnd\MyproductController;
use App\Http\Controllers\FontEnd\AddproductController;
use App\Http\Controllers\FontEnd\ShopController;
use App\Http\Controllers\FontEnd\CheckoutController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Shop\VNPAYController;
/*ShopController
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/cauthu/list', [App\Http\Controllers\CauuthuController::class, 'index']);

// Route::get('/demo', [App\Http\Controllers\DemoController::class, 'index']);


// khi làm form thì luôn có 2 router giong nhau

// - get: 
// + truyen data từ controller sang view (nếu có data)
// + bên view hiên thị ra form

// - post: 
// + tù view truyen data ve controller xu ly

// - trong action của form, k truyen router vào:
// + thì nó tự chạy lại router hiện tai, với method=post
// + nêu có truyen router vào thi nó nhay trang minh muốn


/////////////Profile
////////////Country
Route::get('/admin/profile', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin');
Route::post('/admin/profile', [App\Http\Controllers\Admin\UserController::class, 'update']);
Route::get('/admin/country', [App\Http\Controllers\Admin\CountryController::class, 'index']);
Route::get('/admin/country/add', [App\Http\Controllers\Admin\CountryController::class, 'addcountry']);
Route::post('/admin/country/add', [App\Http\Controllers\Admin\CountryController::class, 'add']);
Route::get('/admin/country/edit/{id}', [App\Http\Controllers\Admin\CountryController::class, 'edit']);
Route::post('/admin/country/edit/{id}', [App\Http\Controllers\Admin\CountryController::class, 'update']);
Route::get('/admin/country/delete/{id}', [App\Http\Controllers\Admin\CountryController::class, 'delete']);
///////Category
Route::get('/admin/category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
Route::get('/admin/category/add', [App\Http\Controllers\Admin\CategoryController::class, 'addcategory']);
Route::post('/admin/category/add', [App\Http\Controllers\Admin\CategoryController::class, 'add']);
Route::get('/admin/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
Route::post('/admin/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
Route::get('/admin/category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'delete']);
//////////brand
Route::get('/admin/brand', [App\Http\Controllers\Admin\BrandController::class, 'index']);
Route::get('/admin/brand/add', [App\Http\Controllers\Admin\BrandController::class, 'addbrand']);
Route::post('/admin/brand/add', [App\Http\Controllers\Admin\BrandController::class, 'add']);
Route::get('/admin/brand/edit/{id}', [App\Http\Controllers\Admin\BrandController::class, 'edit']);
Route::post('/admin/brand/edit/{id}', [App\Http\Controllers\Admin\BrandController::class, 'update']);
Route::get('/admin/brand/delete/{id}', [App\Http\Controllers\Admin\BrandController::class, 'delete']);
/////////////Blogs
Route::get('/admin/blog/list', [App\Http\Controllers\Admin\BlogController::class, 'index']);
Route::get('/admin/blog/addblog', [App\Http\Controllers\Admin\BlogController::class, 'addblog']);
Route::post('/admin/blog/addblog', [App\Http\Controllers\Admin\BlogController::class, 'Postblog']);
Route::get('/admin/blog/editblog/{id}', [App\Http\Controllers\Admin\BlogController::class, 'edit']);
Route::post('/admin/blog/editblog/{id}', [App\Http\Controllers\Admin\BlogController::class, 'update']);
Route::get('/admin/blog/delete/{id}', [App\Http\Controllers\Admin\BlogController::class, 'delete']);
////////////FontEnd///////
// Route::get('/fontend/home', [App\Http\Controllers\FontEnd\TrangChuController::class, 'index'])->name('home');



Route::get('/fontend/register', [App\Http\Controllers\FontEnd\TaiKhoanController::class, 'index']);
Route::post('/fontend/register', [App\Http\Controllers\FontEnd\TaiKhoanController::class, 'addregister']);
Route::get('/fontend/home', [App\Http\Controllers\FontEnd\TrangChuController::class, 'index'])->name('fontend');
Route::get('/fontend/login', [App\Http\Controllers\FontEnd\LoginController::class, 'index']);
Route::post('/fontend/login', [App\Http\Controllers\FontEnd\LoginController::class, 'login']);

Route::group([
    'middleware' =>['admin']
],function(){
   
    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    
});


//blog
Route::get('/fontend/blog', [App\Http\Controllers\FontEnd\BlogController::class, 'index']);
Route::get('/fontend/blog/detail/{id}', [App\Http\Controllers\FontEnd\BlogController::class, 'detail']);
Route::post('/fontend/blog/rate', [App\Http\Controllers\FontEnd\BlogController::class, 'rate']);
Route::post('/fontend/blog/cmt/{id}', [App\Http\Controllers\FontEnd\BlogController::class, 'cmt']);
Route::post('/fontend/blog/cmt/{id}', [App\Http\Controllers\FontEnd\BlogController::class, 'repcmt']);
///logout
Route::get('/logout', [LoginController::class, 'logout']);
//////Account
Route::get('/fontend/account', [App\Http\Controllers\FontEnd\AccountController::class, 'index']);
Route::post('/fontend/account', [App\Http\Controllers\FontEnd\AccountController::class, 'update']);
Route::get('/fontend/account/myproduct', [App\Http\Controllers\FontEnd\MyproductController::class, 'index']);
Route::get('/fontend/account/edit/{id}', [App\Http\Controllers\FontEnd\MyproductController::class, 'edit']);
Route::post('/fontend/account/edit/{id}', [App\Http\Controllers\FontEnd\MyproductController::class, 'update']);

Route::get('/fontend/account/delete/{id}', [App\Http\Controllers\FontEnd\MyproductController::class, 'delete']);
Route::get('/fontend/account/addproduct', [App\Http\Controllers\FontEnd\AddproductController::class, 'index']);
Route::post('/fontend/account/addproduct', [App\Http\Controllers\FontEnd\AddproductController::class, 'add']);

//////Shop
Route::get('/fontend/shop', [App\Http\Controllers\Shop\ShopController::class, 'index']);
// Route::get('/fontend/home', [App\Http\Controllers\Shop\ShopController::class, 'home']);
Route::get('/fontend/shop/error', [App\Http\Controllers\Shop\ShopController::class, 'error']);
Route::get('/fontend/shop/contact', [App\Http\Controllers\Shop\ShopController::class, 'contact']);
Route::get('/fontend/shop/deltai/{id}', [App\Http\Controllers\Shop\ShopController::class, 'detail']);

///////cart
Route::get('/fontend/cart', [App\Http\Controllers\Shop\ShopController::class, 'cart']);
Route::post('/fontend/cart', [App\Http\Controllers\Shop\ShopController::class, 'tangcart']);
Route::post('/fontend/cart/add/{id}', [App\Http\Controllers\Shop\ShopController::class, 'add_cart']);
Route::get('/fontend/cart/delete/{id}', [App\Http\Controllers\Shop\ShopController::class, 'delete']);
Route::get('/fontend/cart/qty/{id}', [App\Http\Controllers\Shop\ShopController::class, 'tangcart']);
Route::get('/fontend/cart/qtyy/{id}', [App\Http\Controllers\Shop\ShopController::class, 'giamcart']);
///////checkout
Route::get('/fontend/checkout', [App\Http\Controllers\Shop\CheckoutController::class, 'index'])->name('checkout');;
Route::post('/fontend/checkout', [App\Http\Controllers\Shop\CheckoutController::class, 'addregister']);
Route::get('/fontend/checkout/email', [App\Http\Controllers\Shop\CheckoutController::class, 'email']);
///Search
Route::get('/fontend/home/searchh', [App\Http\Controllers\FontEnd\TrangChuController::class, 'search']);
Route::post('/fontend/home/search', [App\Http\Controllers\FontEnd\TrangChuController::class, 'timkiem']);


////////mail
Route::get('/test', [App\Http\Controllers\MailController::class, 'index']);

//////VNpay
Route::post('/vnpayy', [App\Http\Controllers\Shop\VNPAYController::class, 'vnpay_payment']);