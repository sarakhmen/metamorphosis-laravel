<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AbonementsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', [MainController::class, 'landing'])->name('landing');

Route::get('/info', [MainController::class, 'info'])->name('info');

Route::get('/container', [MainController::class, 'container'])->name('container');

Route::get('/model/test', [\App\Http\Controllers\VisitorsController::class, 'test'])->name('model.test');

Route::post('/subscribe/abonement/{abonementUid}', [AbonementsController::class, 'subscribe'])->name('subscribe.abonement');

