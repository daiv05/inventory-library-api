<?php

use App\Http\Controllers\Catalogo\CategoriasPreguntasController;
use Orion\Facades\Orion;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Catalogo\EstadosController;
use App\Http\Controllers\Catalogo\GrupoMetaController;
use App\Http\Controllers\Catalogo\TiposPreguntasController;

Route::get('/estados', [EstadosController::class, 'index'])->name('estados.index');

