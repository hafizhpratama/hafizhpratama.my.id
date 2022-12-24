<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\OpenAiController;
use App\Http\Controllers\SitemapXmlController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/projects/openai', [OpenAiController::class, 'index']);
Route::post('/projects/openai', [OpenAiController::class, 'result'])->name('result');

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{slug}', [BlogController::class, 'show']);
Route::get('/blog/author/{slug}', [BlogController::class, 'author']);
Route::get('/blog/tag/{slug}', [BlogController::class, 'tag']);

Route::get('/sitemap.xml', [SitemapXmlController::class, 'index']);
Route::get('/certificates', [SitemapXmlController::class, 'displayCertificates']);
Route::get('/storage/wink/images/{filename}', [SitemapXmlController::class, 'displayImage']);

Route::get('/search',[BlogController::class, 'search']);