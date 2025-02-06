<?php

use Illuminate\Http\Request;
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

//Использование параметров в маршрутах
Route::get('/transactions/{transactionId}', function($transactionId){
    return "transaction #$transactionId was processed";
});
Route::get('/transactions/{transactionId}/files/{fileId}', function(int $transactionId,int $filesId){
    return "transaction #$transactionId was processed in file $filesId";
});

//Необязательные параметры
//Добавление регeлярного выражения через where
Route::get('/report/{year}/{month?}', function($year, $month = null){
    return "report date: $year $month";
})->where('year', '[0-9]+');

//Использование параметров строки запроса

Route::get('/report', function (Request $request) {
    $year = $request->get('year');
    $month = $request->get('month');

    return "report. Query string params: year: $year, month:$month";
});