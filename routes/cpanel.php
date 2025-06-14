<?php

use Carbon\Carbon;
use App\Models\Subscription;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;


Route::domain(config('app.cms_domain'))->group(function () {

    // Route::get('/test', function () {

    // });

    require __DIR__ . '/auth.php';

    Route::get("/login", 'App\Http\Controllers\cms\LoginController@loginShow')->name('cms.login');
    Route::post("/login", 'App\Http\Controllers\cms\LoginController@login')->name('cms.login.submit');
    Route::get('/forgot-password', 'App\Http\Controllers\cms\ForgotPasswordController@index')->name('cms.forgotPassword.index');

    // admin auth routes
    Route::group(['middleware' => 'auth:admin'], function () {

        Route::get('/change-password', 'App\Http\Controllers\cms\ChangePasswordController@changePassword')->name('cms.changePassword.index');
        Route::post('/change-password/{id}', 'App\Http\Controllers\cms\ChangePasswordController@passwordChange')->name('cms.password.submit');

        Route::get('/logout', 'App\Http\Controllers\cms\LoginController@logout')->name("cms.logout");

        Route::get('/', 'App\Http\Controllers\cms\StatisticsController@index')->name("cms.statistics.index");

        Route::get('gallery/', 'App\Http\Controllers\cms\GalleryController@index')->name('backend.gallery.index');
        Route::get('gallery/create', 'App\Http\Controllers\cms\GalleryController@create')->name('backend.gallery.create');
        Route::post('gallery/store', 'App\Http\Controllers\cms\GalleryController@store')->name('backend.gallery.store');
        Route::get('gallery/edit/{id}', 'App\Http\Controllers\cms\GalleryController@edit')->name('backend.gallery.edit');
        Route::post('gallery/update/{id}', 'App\Http\Controllers\cms\GalleryController@update')->name('backend.gallery.update');
        Route::get('/gallery/delete/{id}', 'App\Http\Controllers\cms\GalleryController@destroy')->name('backend.gallery.destroy');

        Route::get('/gallery/media/{id}', 'App\Http\Controllers\cms\GallerySectionController@index')->name('backend.gallery.media.index');
        Route::get('/gallery/media/create/{id}','App\Http\Controllers\cms\GallerySectionController@create')->name('backend.gallery.media.create');
        Route::post('/gallery/media/store/{id}','App\Http\Controllers\cms\GallerySectionController@store')->name('backend.gallery.media.store');

        Route::get('/gallery/media/edit/{gallery_id}/{media_id}','App\Http\Controllers\cms\GallerySectionController@edit')->name('backend.gallery.media.edit');
        Route::post('/gallery/media/update/{gallery_id}/{media_id}','App\Http\Controllers\cms\GallerySectionController@update')->name('backend.gallery.media.update');
        Route::get('/gallery/media/delete/{gallery_id}/{media_id}','App\Http\Controllers\cms\GallerySectionController@delete')->name('backend.gallery.media.delete');
    });
});
