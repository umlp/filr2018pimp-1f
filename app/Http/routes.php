<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

use App\Task;
use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('tasks');
    });

    Route::get('/prendre-photo', function (Request $request) {
        return view('prendre-photo');
    });
    
    Route::get('/afficher-resultat', function (Request $request) {
        return view('afficher-resultat');
    });
});
