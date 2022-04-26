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
    $params = [
        'title' => 'Hello Word!',
        'links' => [
            [
                'url' => '/',
                'title' => 'Home'
            ],
            [
                'url' => '/contatti',
                'title' => 'contatti'
            ],
            [
                'url' => '/prodotti',
                'title' => 'prodotti'
            ],
            [
                'url' => '/negozio',
                'title' => 'negozio'
            ],
            [
                'url' => '/documenti',
                'title' => 'documenti'
            ]
        ],
    ];
    return view('home', $params);
})->name('home');

Route::get('/contatti', function () {
    $params = [
        'title' => 'Contatti'
    ];
    return view('contatti', $params);
})->name('contatti');

Route::get('/prodotti', function () {
    $params = [
        'title' => 'Prodotti'
    ];
    return view('prodotti', $params);
})->name('prodotti');

Route::get('/negozio', function () {
    $params = [
        'title' => 'Negozio'
    ];
    return view('negozio', $params);
})->name('negozio');

Route::get('/documenti', function () {
    $params = [
        'title' => 'Documenti'
    ];
    return view('documenti', $params);
})->name('documenti');

