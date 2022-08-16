<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Hekmatinasser\Verta\Verta;
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

//Front Shop
//Route::get('/',function (){Auth::loginUsingId(1);});
Route::get('/', 'HomeController@index')->name('home');
//Route::get('/', function (){
//    $v = new Verta("2021-03-11 16:02:27");
//    $v = $v->format('Y/n/j');
//    return $v;
//    return Verta::getJalali("2021-03-11 16:02:27"); // [1394,10,4]
//    return $v;
//});

//Google Account Login/Register
Route::get('/auth/google','Auth\GoogleAuthController@redirect')->name('auth.google');
Route::get('/auth/google/callback','Auth\GoogleAuthController@callback');

//Token Two Authenticated
Route::get('/auth/token','Auth\AuthTokenController@getToken')->name('auth.token');
Route::post('/auth/token','Auth\AuthTokenController@postToken');

//Profile FrontEnd
Route::prefix('profile')->group(function (){
    Route::get('/','Profile\ProfileController@index')->name('profile');
    Route::get('twofactor','Profile\ProfileController@getVerifyPhone')->name('twofactorauth');
    Route::post('twofactor','Profile\ProfileController@postVerifyPhone');

    Route::get('twofactor/phone-verify','Profile\ProfileController@getPhoneVerifyCode')->name('phone.verify');
    Route::post('twofactor/phone-verify','Profile\ProfileController@postPhoneVerifyCode');
    Route::get('orders','Profile\ProfileController@orders');

});


//Salesmen Panel
Route::get('/saleman', 'Auth\SalemanController@index')->name('saleman');
Route::post('/saleman', 'Auth\SalemanController@register');
// Route::get('/dashboards', 'Admin\HomeController@index')->name('dash');



//Admin Panel
Route::prefix('dashboard')->group(function (){
    Route::get('/', 'Admin\HomeController@index')->name('dashboard');
    Route::resource('/users','Admin\UserController');
    Route::resource('/comments','Admin\CommentController');
    Route::get('/comment-unapproved','Admin\CommentController@unapprovedGet')->name('unapproved.get');
    Route::patch('/comment-unapproved/{comment}','Admin\CommentController@unapprovedPost')->name('unapproved.post');
    Route::resource('/products','Admin\ProductController');
    Route::resource('/categories','CategoryController');

    //Attribute
    Route::resource('/attributes','Admin\AttributeController');
    Route::get('/attributes/values/{attributes}','Admin\AttributeController@getValues')->name('attributes.get.values');
    Route::post('/attributes/values','Admin\AttributeController@postValues')->name('attributes.post.values');
    Route::delete('/attributes/{attributeValue}','Admin\AttributeController@destroyValues')->name('attributes.delete.values');
    Route::get('/attributes/values/edit/{attributeValue}','Admin\AttributeController@editValues')->name('attributes.edit.values');
    Route::patch('/attributes/values/update/{attributeValue}','Admin\AttributeController@updateValues')->name('attributes.update.values');

    //Permissions
    Route::resource('/permissions','Admin\PermissionController');
    Route::resource('/roles','Admin\RoleController');
    Route::get('/user/roles/{user}','Admin\UserController@addRole')->name('users.role');
    Route::patch('/user/roles/{user}','Admin\UserController@updateRole')->name('users.roles.update');

    //Orders
    Route::resource('/orders','OrderController');
    Route::get('/orders/invoice/{id}','OrderController@invoice')->name('invoice.index');
    Route::patch('/invoice/{id}','OrderController@invoiceStatus')->name('status.invoice');

});


//Products Client
Route::get('/products','ProductController@index');
Route::get('/product/{product}','ProductController@singleProduct');
Route::post('/product/comment','CommentController@sendComment')->name('send.comment');
Route::resource('/cart','CartController');
Route::get('/product/{id}/purchase','PurchaseController@purchase')->name('payment.product');
Route::get('/product/{id}/purchase/result','PurchaseController@result')->name('payment.product.result');

Auth::routes(['verify'=>true]);


