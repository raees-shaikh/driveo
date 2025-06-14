<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::domain(config('app.wink_domain'))->group(function () {
    Route::get('/', function () {
        return redirect()->route('wink.auth.login');
    });
});

Route::domain(config('app.web_domain'))->group(function () {

    Route::group(['as' => 'frontend.'], function () {
        Route::get('/', function () {
            return view('frontend.index');
        })->name('index');

        Route::get('/about', function () {
            return view('frontend.about');
        })->name('about');

        Route::get('/why-electric-vehicles', function () {
            return view('frontend.why-electric-vehicles');
        })->name('why-electric-vehicles');

        // Route::get('/gallery', function () {
        //     return view('frontend.gallery.index');
        // })->name('gallery');
        Route::get('/gallery', 'App\Http\Controllers\frontend\GalleryController@index')->name('gallery');
        Route::get('/gallery/show/{slug}', 'App\Http\Controllers\frontend\GalleryController@show')->name('gallery.show');
        // Route::get('/show-gallery', function () {
        //     return view('frontend.gallery.show-gallery');
        // })->name('show-gallery');

        // Route::get('/news-blogs', function () {
        //     return view('frontend.news-blogs.index');
        // })->name('news-blogs');
        Route::get('/news-blogs', 'App\Http\Controllers\frontend\NewsController@index')->name('news-blogs');
        Route::get('/news-blog/{slug}', 'App\Http\Controllers\frontend\NewsController@show')->name('blog.show');

        // Route::get('/chat-bot', function () {
        //     return view('frontend.chat-bot');
        // })->name('chat-bot');

        // Route::get('/show', function () {
        //     return view('frontend.news-blogs.show');
        // })->name('show');

        Route::get('/disclaimer-policy', function () {
            return view('frontend.disclaimer-policy');
        })->name('disclaimer-policy');


        Route::get('/privacy-policy', function () {
            return view('frontend.privacy-policy');
        })->name('privacy-policy');

        Route::get('/faq', function () {
            return view('frontend.faq');
        })->name('faq');

        // Route::get('/samira-mathews', function () {
        //     return view('frontend.samira-mathews');
        // })->name('samira-mathews');

        Route::get('/services', function () {
            return view('frontend.services');
        })->name('services');

        Route::get('/why-us', function () {
            return view('frontend.why-us');
        })->name('why-us');

        Route::get('/contact', function () {
            return view('frontend.contact');
        })->name('contact');
        Route::post('/customer_form/submit', 'App\Http\Controllers\frontend\ContactUsController@customerFormSubmit')->name('customer_form.submit');
        Route::post('/partner_form/submit', 'App\Http\Controllers\frontend\ContactUsController@partnerFormSubmit')->name('partner_form.submit');

        Route::get('/our-offerings', function () {
            return view('frontend.our-offerings');
        })->name('our-offerings');


        // routes for redirecting start

        Route::get('our-offerings/f-m-s', function () {
            return view('frontend.our-offerings');
        })->name('our-offerings/f-m-s');

        Route::get('our-offerings/c-p-s', function () {
            return view('frontend.our-offerings');
        })->name('our-offerings/c-p-s');

        Route::get('our-offerings/f-m-s-s', function () {
            return view('frontend.our-offerings');
        })->name('our-offerings/f-m-s-s');

        Route::get('our-offerings/f-a', function () {
            return view('frontend.our-offerings');
        })->name('our-offerings/f-a');

        // routes for redirecting end
    });
});
