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
        'name' => 'Salvo',
        'surname' => 'Pitanza',
        'age' => '35',
        'born' => 'Torino',
        'passions' => [
            'disegno',
            'web coding',
            'arte',
            'montagna'
        ],

    ];

    return view('home', $data);
})->name('home');

Route::get('/biograpy', function (){
    return view('pages.biograpy');
})->name('biograpy');

Route::get('/gallery', function (){
    return view('pages.gallery');
})->name('gallery');

Route::get('/passion', function (){
    return view('pages.passion');
})->name('passion');

Route::get('/contact', function (){
    return view('pages.contact');
})->name('contact');