<?php

Route::group(array('module' => 'Admin', 'namespace' => 'App\Modules\Admin\Controllers'), function() {

   Route::group(['middleware' => ['web']], function () {

            Route::get('/', function(){
            return view('Admin::welcome');
            });

       Route::get('adminLogout','AdminController@adminLogout');

            Route::get('/adminlogin','AdminController@adminloginview');
            Route::post('/adminlogin','AdminController@adminLogin');

            Route::group(['middleware' => ['auth']], function () {

            Route::get('/dashboard', 'AdminController@admindashboard');

       });



      });


});

