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
    return view('home');
})->name('home');

Route::get('/ren', function () {
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
    return view('ren', $data);
})->name('ren');

Route::get('/yu', function () {
    $data = [
        'name' => 'Yu',
        'lastname' => 'Narukami',
        'personae' => [
            [
                'name' => 'Izanagi',
                'element' => 'Divino',
                'resistance' => 'Fulmine, Maledetto',
                'weakness' => 'Vento'
            ],
            [
                'name' => 'Yoshitsune',
                'element' => 'Fisico',
                'resistance' => 'Fisico, Fuoco, Fulmine, Sacro',
                'weakness' => 'None'
            ],
        ],
    ];
    return view('yu', $data);
})->name('yu');
