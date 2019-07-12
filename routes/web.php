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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/welcome', 'HomeController@welcome')->name('welcome');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/userlogin', 'HomeController@userLogin')->name('userlogin');
Route::get('/userRegistration', 'HomeController@userRegister')->name('userRegistration');
Route::post('/clientcheck', 'frontend\clientLoginController@index')->name('clientcheck');
Route::post('/saveRegisterData', 'HomeController@saveRegisterData')->name('saveRegisterData');
Route::get('/logout', 'HomeController@logout')->name('logout');
Route::get('/requestItems', 'frontend\RequestItemsController@index')->name('requestItems');
Route::get('/approve/{id}', 'backend\ItemsController@destroy')->name('approve');
Route::get('/display', 'backend\ItemsController@display')->name('display');

Route::get('/restore/{id}', 'backend\ItemsController@restore')->name('restore');
Route::get('/clientapprove/{id}', 'backend\clientController@changestatus')->name('clientapprove');
Route::get('/disapprove/{id}', 'backend\clientController@destroy')->name('disapprove');
Route::get('/clientdetails', 'backend\clientController@index')->name('clientdetails');
Route::get('/dashboard', 'backend\dashboardController@index')->name('dashboard');
Route::post('/search', 'frontend\searchController@index')->name('search');
Route::post('/advanceQuery', 'frontend\advanceSearchController@create')->name('advanceQuery');
Route::post('/requestItems/store', 'frontend\RequestItemsController@store')->name('requestItems.store');
Route::get('/adminlogout', 'HomeController@adminlogout')->name('adminlogout');
Route::get('/advanceSearch', 'frontend\advanceSearchController@index')->name('advanceSearch');
Route::get('/log', 'backend\LogController@index')->name('log');
Route::get('/frontgallery', 'HomeController@gallery')->name('frontgallery');
Route::get('/gallery', 'frontend\GalleryController@index')->name('gallery');
Route::get('/gallery/{id}', 'frontend\GalleryController@create')->name('commission');
Route::get('/displaybids', 'backend\CommissionController@index')->name('displaybids');


Route::resource('items', 'backend\ItemsController');


