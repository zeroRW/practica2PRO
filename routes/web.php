<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controladorVista;

use App\Http\Controllers\controladorBD;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::view('/','welcome');
Route::view('home','home')->name('apodoHome');
Route::view('registrar','registrar')->name('apodoReg');
Route::view('recuerdo','recuerdo')->name('apodoRec');
*/

//Rutas individuales

Route::get('/', [controladorVista::class, 'showWelcome']);

Route::get('home', [controladorVista::class, 'showHome'])->name('apodoHome');

//Route::get('registrar', [controladorVista::class, 'showIngresar'])->name('apodoReg');

//Route::get('recuerdos', [controladorVista::class, 'showRecuerdos'])->name('apodoRec');

//Ruta para envio POST

//Route::post('GuardarRecuerdo', [controladorVista::class, 'procesarRecuerdo'])->name('save');


//Agrupasion de rutas
/*
route::controller(controladorVista::class)->group
(
    function (){
        Route::get('/','showWelcome');
        Route::get('/home', 'showHome')->name('apodoHome');
        Route::get('/registrar', 'showIngresar')->name('apodoReg');
        Route::get('/recuerdos', 'showRecuerdos')->name('apodoRec');
    }
);
*/


//RUTAS CONTROLADOR BD
Route::get('recuerdo/create', [controladorBD::class, 'create'])->name('recuerdo.create');

Route::get('recuerdo', [controladorBD::class, 'index'])->name('recuerdos.index');

//RUTA PARA STORE
Route::post('recuerdo', [controladorBD::class, 'store'])->name('recuerdo.store');

//RUTA EDIT
Route::get('recuerdo/{id}/edit', [controladorBD::class, 'edit'])->name('recuerdo.edit');

Route::put('recuerdo/{id}', [controladorBD::class, 'update'])->name('recuerdo.update');

//RUTA CONFIRMAR ELIMINACION
Route::get('recuerdo/{id}/show', [controladorBD::class, 'show'])->name('recuerdo.show');

Route::delete('recuerdo/{id}', [controladorBD::class, 'destroy'])->name('recuerdo.destroy');