<?php

Route::group(array('module' => 'Home', 'namespace' => 'App\Modules\Home\Controllers'), function() {

    Route::resource('Home', 'HomeController');

});	