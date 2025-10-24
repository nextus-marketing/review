<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

Route::post('/contact-enquiry', [HomeController::class, 'ContactEnquiryStore'])->name('contact.enquiry.store');
