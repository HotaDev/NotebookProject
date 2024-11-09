<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AddNotebookController;
use App\Http\Controllers\DeleteNotebookController;
use App\Http\Controllers\EditNotebookController;
use App\Http\Controllers\GetAllNotebookController;
use App\Http\Controllers\GetOneNotebookController;


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

Route::get('/user', function (Request $request) {
    return $request->user();
});

Route::get('v1/notebook', 'App\Http\Controllers\NotebookController@notebook');

Route::post('v1/notebook', 'App\Http\Controllers\NotebookController@notebookAdd'); 

Route::get('v1/notebook/{id}', 'App\Http\Controllers\NotebookController@notebookSearch');

Route::post('v1/notebook/{id}', 'App\Http\Controllers\NotebookController@notebookEdit');

Route::delete('v1/notebook/{id}', 'App\Http\Controllers\NotebookController@notebookDelete');