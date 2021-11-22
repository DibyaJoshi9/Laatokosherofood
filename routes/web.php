<?php

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

use App\Http\Controllers\Customer\SocialController;
use App\Http\Daos\PagesDao;
Auth::routes();

Route::get('/', 'FrontEnd\HomeController@index')->name('index');

Route::get('clear', function () {

    \Illuminate\Support\Facades\Artisan::call('config:cache');

    \Illuminate\Support\Facades\Artisan::call('view:clear');

    \Illuminate\Support\Facades\Artisan::call('route:clear');

    return 'all cache clear';

});

// Route::get('/menu/categoryProduct', function () {
//     return view('frontend.content.categoryProduct');
// });
Route::get('/menu/categoryProduct', 'FrontEnd\ItemController@GetCategoriesItems')->name('menu.categoryProduct');
Route::get('/menu/categoryProductjs','FrontEnd\ItemController@GetCategoriesItemsFromJs');
Route::get('/menu/categoryProduct', 'FrontEnd\ItemController@GetCategoriesItems');

Route::get('/menu/checkout', 'FrontEnd\ItemController@GetCheckout');

Route::post('/sendmail/send', 'SendEmailController@send');

Route::post('/cart-item', 'FrontEnd\ItemController@AddCartItems');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// customer auth
Route::post('customer/login', 'Customer\LoginController@login')->name('login');
Route::post('customer/register', 'Customer\RegisterController@register')->name('customer.register');
Route::post('/logout', 'Customer\LoginController@logout')->name('logout');


Route::get('auth/facebook', [SocialController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [SocialController::class, 'facebookSignin']);


Route::get('auth/google', 'Customer\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Customer\GoogleController@handleGoogleCallback');

Route::group(array('middleware' => ['auth:customer']), function () {
    Route::post('/foo', function () {
        echo 1;
        return;
    });
});

// password reset
Route::get('password/reset', 'Customer\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Customer\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::post('password/reset', 'Customer\ResetPasswordController@reset')->name('password.update');
Route::get('password/reset/{token}', 'Customer\ResetPasswordController@showResetForm')->name('password.reset');
//end password reset

//for pages
$pages = PagesDao::getActivePages();
foreach ($pages as $page) {
    Route::get($page->slug, ['as' => $page->slug, 'uses' => 'FrontEnd\HomeController@getPage']);
}

//end
