<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');
Route::view('/services', 'services')
    ->name('services');
Route::view('/customer-industries', 'customer-industries')
    ->name('customer-industries');
Route::view('/about-us', 'about-us')
    ->name('about-us');
Route::view('/contact-us', 'contact-us')
    ->name('contact-us');

Route::prefix('/blogs')->group(function () {
    Route::view('/the-pros-and-cons-of-outsourcing', 'blogs.the-pros-and-cons-of-outsourcing')
        ->name('blogs.the-pros-and-cons-of-outsourcing');
    Route::view('/the-benefits-of-virtualization-in-IT', 'blogs.the-benefits-of-virtualization-in-IT')
        ->name('blogs.the-benefits-of-virtualization-in-IT');
    Route::view('/digital-transformation-the-key-to-business-success', 'blogs.digital-transformation-the-key-to-business-success')
        ->name('blogs.digital-transformation-the-key-to-business-success');
    Route::view('/the-benefits-and-risks-of-BYOD', 'blogs.the-benefits-and-risks-of-BYOD')
        ->name('blogs.the-benefits-and-risks-of-BYOD');
    Route::view('/things-to-consider-while-upgrading-your-website', 'blogs.things-to-consider-while-upgrading-your-website')
        ->name('blogs.things-to-consider-while-upgrading-your-website');
    Route::view('/why-and-when-do-you-need-a-website-upgrade', 'blogs.why-and-when-do-you-need-a-website-upgrade')
        ->name('blogs.why-and-when-do-you-need-a-website-upgrade');
});
