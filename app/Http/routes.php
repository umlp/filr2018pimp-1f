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
use Response;

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('tasks');
    });
    
    Route::get('/prendre-photo-primitive', function (Request $request) {
        return view('prendre-photo-primitive');
    });
    
    Route::get('/prendre-photo-derivee', function (Request $request) {
        return view('prendre-photo-derivee');
    });
    
    Route::get('/prendre-photo-equation-1', function (Request $request) {
        return view('prendre-photo-equation-1');
    });
    
    Route::get('/prendre-photo-equation-2', function (Request $request) {
        return view('prendre-photo-equation-2');
    });
    
    Route::get('/afficher-resultat', function () {
        return view('afficher-resultat');
    });
    
    Route::get('/aide', function () {
        return view('aide');
    });
    
    Route::post('/traiter-image', function (Request $request) {
        //Implementer
    });
});
