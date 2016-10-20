<?php
Route::group(array('module' => 'User', 'namespace' => 'App\Modules\User\Controllers'), function() {
   Route::group(['middleware' => ['web']], function () {

        Route::post('/login', 'UserdemoController@userLogin');
        Route::get('/login', 'UserdemoController@userloginview');

       Route::group(['middleware' => ['logger']], function () {
           Route::get('/userdashboard', 'UserdemoController@userdashboard');
       });

        Route::get('/signup', 'UserdemoController@userRegistorview');
        Route::post('/signup', 'UserdemoController@userRegistor');

        Route::get('/userlogout', 'UserdemoController@userLogout');

        Route::resource('/forgetpass','UserdemoController@forgetpass');

        Route::resource('update','UserdemoController@update');

        Route::resource('forgetPassValidate','UserdemoController@forgetPassValidate');

        Route::resource('forgotpassotp','UserdemoController@forgotpassotp');

        Route::resource('email','AdminController@mail');
   });

});

