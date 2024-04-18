<?php

use App\Http\Controllers\CmsController;
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
    return view('pages.home');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::post('/contact-us', [CmsController::class, 'contact_us']);
Route::get('/{para?}/{para2?}', [CmsController::class, 'index']);

