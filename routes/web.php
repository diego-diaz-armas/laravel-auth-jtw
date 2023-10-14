<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\algoController;
use App\Http\Controllers\grupoRController;
use Illuminate\Http\Request;

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



Route::get('algo', function () {
    return view('algo');
});
//si le dejamos Route::get '/' sustituiremos la vista welcome mi url asi es http://127.0.0.1:8000/algo
//y me muestra la vista welcomne primero y luego la mia.
Route::get('/', function () {
    return view('welcome');
});
//pasamos parametros mediante las routas a las vistas
Route::view('algo','algo',['nombre'=>'diego']);

//llamar una vista mediante un controlador aca voy a generar la ruta para el controlador con get
Route::get('/ruta-controlador', [algoController::class, 'index']);

//recibir parametros desde la url con ?variable
Route::get('nueva-routa',function(Request $request){
    return "hola ".$request->get('variable');
});


//otra forma de recibir parametros desde la url por medio del controlador
//Route::get('/NUEVA-R/{id}',[algoController::class, 'nuevaR']);
//otra forma http://127.0.0.1:8000/2
//Route::get('//{id}',[algoController::class, 'nuevaR']);

//grupo de controlladoras cre grupoRController para esta practica
//acordarse de agregar use App\Http\Controllers\grupoRController; aca
//cuidado con los nombres

Route::prefix('ruta')->group(function(){

    //con esto podemos navegar por las url sin escribir las url
    Route::name('ruta.')->group(function(){
        Route::get('/user',function(){
            //return view 'algo', "falta parentesis recto"'nombre'=>'mercado pago'"falta parentesis recto" ;
            return view('algo');
        })->name('user');
                public funvtion (){

                };
            //rutas  renombreados
            Route::get('/user/index',[grupoRController::class,'index'])->name('home');
            Route::get('/user/eliminar',[grupoRController::class,'destroy'])->name('borrar');
            //

    });



    Route::get('/index',[grupoRController::class,'index']);
    Route::get('/show',[grupoRController::class,'show']);//aca podriamos mandar un id por url show/id
    Route::get('/edit',[grupoRController::class,'edit']);
    Route::get('/eliminar',[grupoRController::class,'destroy']);
    Route::get('/modificar',[grupoRController::class,'update']);
    Route::get('/crear',[grupoRController::class,'create']);
    Route::get('/store',[grupoRController::class,'store']);

    //accedemos mediante http://127.0.0.1:8000/ruta/eliminar
    //http://127.0.0.1:8000/ruta/show
    //http://127.0.0.1:8000/ruta/edit
    //http://127.0.0.1:8000/ruta/modificar
    //http://127.0.0.1:8000/ruta/index


});

//para el middleware

Route::get('/productos',[algoController::class, 'mostrarProductos'])-> middleware('verificar_usuario');
Route::get('/no_admin', [algoController::class, 'noAdmin'])->name('no_admin');
//como algo controller tenia una nuevaR sandola tube que comentarla para que funcione
//nuevaR devuelve un id que se le pasa desde url





