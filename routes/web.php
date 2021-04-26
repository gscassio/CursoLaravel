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
    $nome ="Matheus";
    $idade = 29;
    $arr = [10,20,30,40,50];

    $nomes = ["Marcos","Cássio","Joao","Maria"];

    return view('welcome',
    [   
        'nome' => $nome,
        'idade'=> $idade,
        'profissao'=> "Programador",
        'arr' => $arr,
        'nomes' => $nomes 
    
    ]);
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/produto', function () {
    $busca = request('search');

    return view('produto', ['busca'=>$busca]);
});

Route::get('/produto/{id}', function ($id) {
    return view('product', ['id' => $id]);
});