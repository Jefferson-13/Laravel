<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
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
/*Route::get('/', HomeController::class);*/

Route::get('/', HomeController::class);

/*Route::get('cursos', [CursoController::class, 'index']);*/

Route::get('cursos', [CursoController::class, 'index']);

Route::get('cursos/create', [CursoController::class, 'create']);

Route::get('cursos/{curso}', [CursoController::class, 'show']);

/*

route::get('cursos/create',function(){

});

Route::get('/', function () {
    /*return view('welcome'); */
    /*return "Bienvenido a la pagina principal";
});

Route::get('cursos', function(){
    return "Bienvenido a la pagina cursos";
});

Route::get('cursos/create', function() {
    return "En esta pagina podras crear un curso";
});

Route::get('cursos/{curso}', function($curso){
    return "Bienvenido al curso: $curso";
});

/*Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null) {

    if($categoria){
        return "Bienvenido al curso $curso, de la categoria $categoria";
    }else{
        return "Bienvenido al curso: $curso";
    }
   
});*/