<?php

use Illuminate\Support\Facades\Route;

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
    return 'Hello, World';
});

Route::post('/', function () {
    // POST 요청에 대한 처리를 담당하는 라우트
});

Route::put('/', function () {
    // PUT 요청에 대한 처리를 담당하는 라우트
});

Route::delete('/', function () {
    // DELETE 요청에 대한 처리를 담당하는 라우트
});

Route::any('/', function () {
    // 요청 메서드에 관계없이 해당 요청을 처리하는 라우트
});

Route::match(['get', 'post'], '/', function () {
    // GET 또는 POST인 요청에 대해서만 처리하는 라우트
});

use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index']);


