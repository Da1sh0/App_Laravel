<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TipoNovedadController;
use App\Http\Controllers\NaturalezaJuridicaController;
use App\Http\Controllers\PagoDevengadoController;


Route::get('/', function () {return view('welcome');});
Route::get('/vista1',[PruebaController::class,('vista1')])->name('vista1'); 
Route::get('/vista2',[PruebaController::class,('vista2')])->name('vista2');
Route::get('/vista3',[PruebaController::class,('vista3')])->name('vista3');


Route::get('/calculadora', [PruebaController::class,('mostrar_calculadora')])->name('ruta_mostrar_calculadora');
Route::post('/prueba/calcuadora', [PruebaController::class, 'calcular'])->name('ruta_resultado_calculadora');


Route::get('/producto/productos/crear', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/producto/productos', [ProductoController::class, 'store'])->name('productos.store');
Route::get('/producto/productos', [ProductoController::class, 'index'])->name('productos.index');


Route::get('/tipoNovedad/tipo-novedad/crear', [TipoNovedadController::class, 'create'])->name('tipo_novedad.create');
Route::post('/tipoNovedad/tipo-novedad', [TipoNovedadController::class, 'store'])->name('tipo_novedad.store');
Route::get('/tipoNovedad/tipo-novedad', [TipoNovedadController::class, 'index'])->name('tipo_novedad.index');


Route::get('/naturalezaJuridica/naturaleza-juridica/crear', [NaturalezaJuridicaController::class, 'create'])->name('naturaleza_juridica.create');
Route::post('/naturalezaJuridica/naturaleza-juridica', [NaturalezaJuridicaController::class, 'store'])->name('naturaleza_juridica.store');
Route::get('/naturalezaJuridica/naturaleza-juridica', [NaturalezaJuridicaController::class, 'index'])->name('naturaleza_juridica.index');


Route::get('/pagoDevengado/pago-devengado/crear', [PagoDevengadoController::class, 'create'])->name('pago_devengado.create');
Route::post('/pagoDevengado/pago-devengado', [PagoDevengadoController::class, 'store'])->name('pago_devengado.store');
Route::get('/pagoDevengado/pago-devengado', [PagoDevengadoController::class, 'index'])->name('pago_devengado.index');
