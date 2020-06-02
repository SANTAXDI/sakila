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
});
Route::get('categoria', "CategoriaController@index");

Route::get('categorias/create', "CategoriaController@create");

Route::post('categorias/store', "CategoriaController@store");

Route::get("categorias/edit/{idcategoria}", "CategoriaController@edit");

Route::post("categorias/update", "CategoriaController@update");

Route::get('/', function () {
    return view('welcome');
});


Route::get('paises', function () {
    $paises=[
            "Colombia" => [
                "capital" => "Bogoto",
                "moneda" => "Peso",
                "poblacion" => 55000,
                "ciudades" => ["Cali","Medellin","Barranquilla"]
            ],
            "Ecuador" => [
                "capital" => "Quito",
                "moneda" => "Dolar",
                "poblacion" => 100000,
                "ciudades" => ["Guayaquil","Manta","Pichincha"]
            ],
            "Brazil"=> [
                "capital" => "Brazilia",
                "moneda" => "Real",
                "poblacion" => 220000,
                "ciudades" => ["Santos","Sao Paulo","Bahia"]
            ]
    ];

    //pasar el arreglo de paises a una vista
    return view("paises")->with("paises", $paises);
});
    