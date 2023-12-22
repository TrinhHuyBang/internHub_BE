<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\JobPostingController;
use App\Http\Controllers\ReviewCommentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserReviewReactionController;
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
Route::match(['post', 'put'], '/review-reaction', [UserReviewReactionController::class, 'reaction']);
Route::post('/create-comment', [ReviewCommentController::class, 'create']);
Route::get('/get-similar-job', [SearchController::class, 'getSimilarJob']);
Route::get('/review-detail/{id}', [ReviewController::class, 'getReviewById']);
