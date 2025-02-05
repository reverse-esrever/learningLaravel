<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'weclome';
});

Route::any('/dashboard', function () {
    return 'weclome to dashoard';
});

Route::match(['get,post'],'/users', function () {
    return ['john', 'alex', 'kara'];
});
