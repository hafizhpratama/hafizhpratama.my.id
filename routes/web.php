<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\OpenAiController;
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
    return view('welcome');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/projects/openai', [OpenAiController::class, 'index']);
Route::post('/projects/openai', [OpenAiController::class, 'result'])->name('result');

Route::get('/projects/blog', [BlogController::class, 'index']);
Route::get('/projects/blog/{slug}', [BlogController::class, 'show']);
