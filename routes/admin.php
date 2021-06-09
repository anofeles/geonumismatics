<?php



use Illuminate\Support\Facades\Route;

Route::prefix('backend')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin');
    Route::get('/admin/{localid}/{local}', 'HomeController@index')->name('admin.local');

    Route::prefix('categoris')->group(function () {
        Route::get('/{local}','HomeController@categorisviuv')->name('admin.local.categorisviuv');
        Route::get('/add/{local}','HomeController@categorisadd')->name('admin.add.categorisviuv');
        Route::post('/add/{local}','HomeController@categorisadd')->name('admin.add.categorisviuv');
        Route::get('/edit/{local}/{catid}','HomeController@categorisedit')->name('admin.edit.categorisviuv');
        Route::post('/edit/{local}/{catid}','HomeController@categorisedit')->name('admin.edit.categorisviuv');
        Route::get('/delete/{local}/{catid}','HomeController@categorisdelete')->name('admin.delete.categorisviuv');
        Route::get('/img/{local}/{photoid}','HomeController@categorisphoto')->name('admin.delete.photo');
    });
    Route::prefix('menus')->group(function () {

    });
    Route::prefix('pages')->group(function () {

    });
});

Route::namespace('\App\Http\Controllers\frontend\Auth')->group(function () {
    Route::get('logout', 'LoginController@logout')->name('admin.home.logout');
});
