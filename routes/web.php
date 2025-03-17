<?php

use App\Http\Controllers\ProcessTransactionController;
use App\Http\Controllers\TransactionController;
use App\Http\Middleware\AdminCustomMiddleware;
use App\Http\Middleware\OtherAdminCustomMiddleware;
use App\MusicService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'weclome';
});

//Группирование маршрутов
//Групирование по префиксу
Route::prefix('transactions')->group(function () {
    //Группироваие по контроллеру 
    Route::controller(TransactionController::class)->group(function(){
        //Присваивание имени маршрутам
        Route::get('/', 'index')->name('transaction.index');
        Route::get('/{transaction}',  'show')->whereNumber('transaction')->name('transaction.show');
        Route::get('/create',  'create')->name('transaction.create');
        Route::post('/',  'store')->name('transaction.store');
    });
    //использование invokable контроллера
    Route::get('/{transaction}/process', ProcessTransactionController::class)->whereNumber('transaction');
});

Route::middleware('admin')->prefix('administration')->group(function(){

    Route::get('/', function(){
        return 'secret admin page';
    });
    Route::get('/other', function(){
        return "other adminpage";
    })->withoutMiddleware(OtherAdminCustomMiddleware::class);
});

Route::get('/music', [MusicService::class, 'play']);
Route::get('/pipe', [MusicService::class, 'pipe']);
