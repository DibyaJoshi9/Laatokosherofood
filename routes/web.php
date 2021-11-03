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

Route::get('/','FrontEnd\HomeController@index');


// Route::get('/menu/categoryProduct', function () {
//     return view('frontend.content.categoryProduct');
// });
Route::get('/menu/categoryProduct','FrontEnd\ItemController@GetCategoriesItems');


Route::post('/cart-item', 'FrontEnd\ItemController@AddCartItems');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//for pages
$pages = PagesDao::getActivePages();
foreach($pages as $page){
	Route::get($page->slug,['as'=>$page->slug,'uses'=>'FrontEnd\HomeController@getPage']);
}

//end
