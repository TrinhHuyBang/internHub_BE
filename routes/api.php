<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\JobPostingController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SearchController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/search-job', [SearchController::class, 'searchJob']);
Route::get('/list-business', [BusinessController::class, 'list']);
Route::get('/job-detail/{id}', [JobPostingController::class, 'getDetail']);
Route::get('/review-search', [ReviewController::class, 'searchReview']);