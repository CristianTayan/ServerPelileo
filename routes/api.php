<?php

use Illuminate\Http\Request;

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
    // Route::get('getDeudas', "API\WEB_DEUDASController@getDeudas");
    // Route::get('getDeuda/{id}', 'API\WEB_DEUDASController@getDeudaById');

    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', 'AuthController@login');
        Route::post('signup', 'AuthController@signup');

        Route::group(['middleware' => 'auth:api'], function() {
            Route::get('logout', 'AuthController@logout');
            Route::get('user', 'AuthController@user');
            Route::get('getDeudas', "API\WEB_DEUDASController@getDeudas");
            // Route::post('getDeuda/{id}', 'API\WEB_DEUDASController@getDeudaById');
        });
    });

    Route::post('getDeuda/{id}', 'API\WEB_DEUDASController@getDeudaById');
    Route::put('pagar/{pago}','API\emi01Controller@pago');
    Route::post('totalImpuesto/{id}', 'API\WEB_DEUDASController@totalImpuesto');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
