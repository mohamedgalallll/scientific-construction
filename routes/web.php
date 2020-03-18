<?php

/*
|--------------------------------------------------------------------------
| Start Login Routes
|--------------------------------------------------------------------------
*/
Route::get('/','Site\home\HomeController@index');
Auth::routes();
Route::get('/admin/login', 'Admin\auth\AuthController@login');
Route::get('/admin/register', 'Admin\auth\AuthController@register');
Route::get('/admin/forgot-password', 'Admin\auth\AuthController@forgotPassword');

//  auth
//Route::get('/site/register', 'site\auth\RegisterController@ShowRegisterPage');
//Route::get('/site/login', 'site\auth\LoginController@ShowLoginPage');
// Route::get('/email', function () {
//    return view('site.auth.passwords.email');
// });
// Route::get('/mobile', function () {
//    return view('site.auth.mobilecode');
// });
//  about


Route::get('/countries/getStates', 'Site\countries\CountriesController@getStates');

/*
|--------------------------------------------------------------------------
| Social Media Auth Routes
|--------------------------------------------------------------------------
*/
Route::get('/facebook-redirect', 'Site\auth\LoginController@FacebookRedirect');
Route::get('/facebook-call-back', 'Site\auth\LoginController@FacebookRedirectCallBack');
Route::get('/google-redirect', 'Site\auth\LoginController@GoogleRedirect');
Route::get('/google-call-back', 'Site\auth\LoginController@GoogleRedirectCallBack');

/*
|--------------------------------------------------------------------------
| Social Media Auth Routes
|--------------------------------------------------------------------------
*/
/*
|--------------------------------------------------------------------------
| End Login Routes
|--------------------------------------------------------------------------
*/

Route::get('/clear', function() {
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('route:cache');
    dd('Done');
});

Route::get('/createStorage', function () {
    Artisan::call('storage:link');
});


// Route::get('/tabs', 'HomeController@index')->name('tabs');

