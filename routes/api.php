<?php

use App\Http\Controllers\Api\HtmlSnippetController;
use App\Http\Controllers\Api\LinkController;
use App\Http\Controllers\Api\PDFDownloadController;
use App\Models\PDFDownload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('html-snippet', HtmlSnippetController::class);
Route::apiResource('links', LinkController::class);
Route::apiResource('pdf-download', PDFDownloadController::class);
