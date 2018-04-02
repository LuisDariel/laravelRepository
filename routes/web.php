<?php

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
//use PDF;

Route::get('/', function () {
    $data = [
        'dato' => ''
    ];
    $pdf = PDF::loadView('AT3', $data)->setPaper('letter', 'landscape');
    return $pdf->stream();
});
