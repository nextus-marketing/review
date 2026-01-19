<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

Route::post('/contact-enquiry', [HomeController::class, 'ContactEnquiryStore'])->name('contact.enquiry.store');

Route::get('/blogs', [HomeController::class, 'index'])->name('blogs');

Route::get('/blogs/{slug}', [HomeController::class, 'blog_details'])->name('blogs.details');

Route::get('/smtp-test', function () {
    Mail::raw('SMTP is working perfectly', function ($m) {
        $m->to('offers@comparehomesecurity.org')
          ->subject('SMTP Test Success');
    });
});
