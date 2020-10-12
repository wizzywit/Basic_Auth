<?php

use App\Http\Controllers\PostController;
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

// get all posts
// Route::get('/posts',[PostController::class, 'index']);

// // create route
// Route::post('/posts', 'PostController@index');

// // update
// Route::put('/posts/{id}');

// //delete
// Route::delete('/posts/{id}');

// //get a single post
// Route::get('/posts/{id}');

//short hand
Route::prefix('v1')->group(function(){
    Route::apiResource('posts',PostController::class);
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
