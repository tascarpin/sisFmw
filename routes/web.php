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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('test', function (){
//    //Lógica ??
//    //HTML ??
//    return "Olá mundo";
//});

////Aula 13/05
//Route::get('testeController', 'testeController@index');
//Route::get('testeController/exercicio', 'testeController@exercicio');
//Route::get('testeController/primeiraView', 'testeController@primeiraView');
////----------
////Aula 20/05
//Route::get('testeController/exibenome/{nome}', 'testeController@exibeNome');
//Route::get('testeController/terceiraView', 'testeController@terceiraView');


//Route::get('/teste', 'testeController@index');
//Route::get('/teste/create', 'testeController@create');
//Route::post('/teste', 'testeController@store');
//Route::get('/teste/{id}', 'testeController@show');
//Route::get('/teste/{id}/edit', 'testeController@edit');
//Route::put('/teste/{id}', 'testeController@update');
//Route::delete('/teste/{id}', 'testeController@destroy');
//Route::get('/teste/remove/{id}', 'testeController@remove');


//Aula 27/05
//CRUD - Controller Produto
Route::resource('products', 'ProductsController');

//Aula 03/06
Route::get('test', function (){
    $repository = app()->
//    make(sisFmw\Repositories\CategoryRepositoryEloquent::class);
    make(sisFmw\Repositories\CategoryRepository::class);
    return $repository->all();
});

