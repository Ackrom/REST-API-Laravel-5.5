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
JsonApi::register('v1')->routes(function ($api) {
    $api->resource('usuarios',[
        'has-many'=>['curriculums','empresas','vacantes'],
    ]);
    $api->resource('vacantes',[
        'has-one'=>['empresas'],
        'has-many'=>['usuarios','cargos','areas']
    ]);
    $api->resource('areas',[
        'has-many'=>'vacantes'
    ]);
    $api->resource('cargos',[
        'has-many'=>'vacantes'
    ]);
    $api->resource('curriculums',[
        'has-one'=>'usuarios'
    ]);
    $api->resource('empresas',[
        'has-one'=>['usuarios'],
        'has-many'=>['vacantes']
    ]);
    $api->resource('postulaciones');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
