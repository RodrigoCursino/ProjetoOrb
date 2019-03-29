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
    return redirect("/home");
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'Web\HomeController@index')->name('home');
    foreach (File::files(app()->path() . '/Routes/auth') as $file) {
        require $file;
    }
});

Route::get('slc.js', function () {
    $json = json_encode(array_merge(\App\Slc::scriptVariables(), []));
    $js = <<<js
window.Slc = {$json};
js;
    return response($js)->header('Content-Type', 'text/javascript');
})->name('slc.js');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
