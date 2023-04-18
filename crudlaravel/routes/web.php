<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::view('/jogos','jogos');

//Route::view('/jogos','jogos',['name'=>'GTA']);

//Route::get('/jogos/{name?}',function($name = null){ //? para deixar o parametro opcional
//    return view('jogos',['nomeJogo'=>$name]);
//})->where('name', '[A-Za-z]+'); //filtro para apenas receber texto e nao numeros

//Route::get('/jogos/{name?}/{id?}',function($name = null, $id = null){
 //   return view('jogos',['nomeJogo'=>$name, 'idJogo'=>$id]);
//})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

//Route::get('/jogos', [JogosController::class, 'index']);

//Route::get('/', function () {
//    return view('welcome');
//})->name('home-index');  // <- Nomenclatura para chamar, bom para fazer alteracoes no codigo futuramente

Route::prefix('jogos')->group(function(){

      Route::get('/', [JogosController::class, 'index'])->name('jogos-index');
      
      Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');

      Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
});