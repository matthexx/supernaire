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


// FRONTEND 
Route::view('/', 'Pages.welcome');
Route::view('/about', 'Pages.about');
Route::view('/news', 'Pages.news');
Route::view('contact', 'Pages.contact');


Route::get('/dashboard.table', function(){
    return view('dashboard.table');
});


Route::get('/test', 'TestController@index');

Auth::routes();

Route::get('/email/verify/{id}', 'RegisterController@verifyUser')->name('verification.verify');


Route::group(['middleware' => 'auth'], function() {
//dashboardfront
Route::view('/dashboard.referrals', 'dashboard.referrals');
Route::view('/dashboard.status', 'dashboard.status');
Route::view('/dashboard.profile', 'dashboard.referrals');

//dashboardheadercontrollers
Route::view('/dashboard.settings', 'dashboard.referrals');
Route::view('/dashboard.notifications', 'dashboard.referrals');
Route::view('/dashboard.editprofile', 'dashboard.referrals');

//userwithdrawearningscontroller
Route::view('/dashboard.balance', 'dashboard.referrals');
Route::view('/dashboard.award', 'dashboard.referrals');



Route::get('/home', 'DashboardController@index');
Route::view('/dashboard.showinvestment', 'Dashboard.showinvestment');




});


Route::group(['middleware' => ['auth', 'admin']], function(){
 
    Route::get('/admindashboard.home', 'HomeController@adminindex')->name('admindashboard.home');
        
});