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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('dashboard');
});

Auth::routes();

Route::middleware(['auth'])->group(function(){

    Route::get('dashboard', 'TestingsuiteController@dashboard');
    Route::get('initialize_mdc_test', 'TestingsuiteController@initializeMdcTest');
    Route::post('save_mdc_info_data', 'TestingsuiteController@storeMdcInfoData');
    Route::get('choose_test_cases', 'TestingsuiteController@chooseTestCases');
});

