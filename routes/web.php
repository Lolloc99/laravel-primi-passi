<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $data = [
        'name' => 'Ren',
        'lastname' => 'Amamiya',
        'personae' => [
            [
                'name' => 'Arsène',
                'element' => 'Maledetto',
                'resistance' => 'Maledetto',
                'weakness' => 'Sacro, ghiaccio'
            ],
            [
                'name' => 'Kaguya',
                'element' => 'Sacro',
                'resistance' => 'Vento, Sacro, Maledetto',
                'weakness' => 'Fuoco'
            ],
            [
                'name' => 'Satanael',
                'element' => 'Maledetto, Divino',
                'resistance' => 'All',
                'weakness' => 'None'
            ],
        ],
    ];
    return view('home', $data);
});
