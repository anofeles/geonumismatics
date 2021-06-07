<?php



use Illuminate\Support\Facades\Route;

Route::prefix('backend')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin');

    Route::prefix('categoris')->group(function () {

    });
    Route::prefix('menus')->group(function () {

    });
    Route::prefix('pages')->group(function () {

    });
});

Route::namespace('\App\Http\Controllers\frontend\Auth')->group(function () {
    Route::get('logout', 'LoginController@logout')->name('admin.home.logout');
});
