<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;



use App\Http\Controllers\{

	
    UserController,

	

};
use Illuminate\Support\Facades\Route; 

Auth::routes();
  
	
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




//route spare_part
Route::resource('spare_part', spare_partController::class);


//route pemesanan
Route::resource('pemesanan', PemesananController::class);
Route::get('/pemesanan_create', 'PemesananController@home');

//route perintah perbaikan
Route::resource('perintah_perbaikan', PerintahperbaikanController::class);
Route::get('/perintah_create', 'PerintahperbaikanController@home');

//route perbaikan
Route::resource('perbaikan', PerbaikanController::class);
Route::get('/perbaikan_create', 'PerbaikanController@home');
//route survey
Route::resource('survey', SurveyController::class);
Route::get('/survey_create', 'SurveyController@home');




 Route::get('/', 'AuthManageController@viewLogin')->name('login');
 Route::get('/login', 'AuthManageController@viewLogin')->name('login');
Route::post('/verify_login', 'AuthManageController@verifyLogin');
Route::post('/first_account', 'UserManageController@firstAccount');

Route::group(['middleware' => ['auth', 'checkRole:admin,mekanik,user']], function(){
	Route::get('/logout', 'AuthManageController@logoutProcess');
	Route::get('/dashboard', 'ViewManageController@viewDashboard');
	// ------------------------- Fitur Cari -------------------------	// ------------------------- Profil -------------------------
	Route::get('/profile', 'UserManageController@viewAccount');
	Route::post('/profile/update/data', 'ProfileManageController@changeData');
	Route::post('/profile/update/password', 'ProfileManageController@changePassword');
	Route::post('/profile/update/picture', 'ProfileManageController@changePicture');
	// ------------------------- Kelola Akun -------------------------
	// > Akun
	Route::get('/account', 'UserManageController@viewAccount');
	Route::get('/account/new', 'UserManageController@viewNewAccount');
	Route::post('/account/create', 'UserManageController@createAccount');
	Route::get('/account/edit/{id}', 'UserManageController@editAccount');
	Route::post('/account/update', 'UserManageController@updateAccount');
	Route::get('/account/delete/{id}', 'UserManageController@deleteAccount');
	Route::get('/account/filter/{id}', 'UserManageController@filterTable');
	// > Akses
	Route::get('/access', 'AccessManageController@viewAccess');
	Route::get('/access/change/{user}/{access}', 'AccessManageController@changeAccess');
	Route::get('/access/check/{user}', 'AccessManageController@checkAccess');
	Route::get('/access/sidebar', 'AccessManageController@sidebarRefresh');
	// -------------------------  -------------------------

});
               