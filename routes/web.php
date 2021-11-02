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

use App\Http\Daos\PagesDao;

Route::get('/','FrontEnd\HomeController@index')->name('index');


// Route::get('/menu/categoryProduct', function () {
//     return view('frontend.content.categoryProduct');
// });
Route::get('/menu/categoryProduct','FrontEnd\ItemController@GetCategoriesItems');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// customer auth
Route::post('customer/login', 'Customer\LoginController@login')->name('login');
Route::post('customer/register','Customer\RegisterController@register')->name('customer.register');
Route::post('/logout','Customer\LoginController@logout')->name('logout');

Route::get('login/{provider}', 'Customer\SocialController@redirectToProvider')->name('social.login');
Route::get('login/{provider}/callback', 'Customer\SocialController@handleProviderCallback');

Route::group(['middleware' => ['auth.customer']], function () {

    // customer route here
});
// password reset
Route::get('password/reset', 'Customer\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Customer\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::post('password/reset', 'Customer\ResetPasswordController@reset')->name('password.update');
Route::get('password/reset/{token}', 'Customer\ResetPasswordController@showResetForm')->name('password.reset');
//end password reset

//for pages
$pages = PagesDao::getActivePages();
foreach($pages as $page){
	Route::get($page->slug,['as'=>$page->slug,'uses'=>'FrontEnd\HomeController@getPage']);
}

//end
