<?php

use Illuminate\Http\Request;

Route::group(['as' => 'api.', 'middleware' => ['auth:api']], function () {
    foreach (File::files(app()->path() . '/Routes/api') as $file) {
        require $file;
    }
});

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
