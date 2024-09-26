<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RemediobrasilController;

Route::get('/',[RemediobrasilController::class,'RemedioHome'])->name('home-remedio');

Route::get('/gerencia-remedio',[RemediobrasilController::class,'gerenciarRemedio'])->name('gerenciar-remedio');

Route::get('/altera-remedio/{id}',[RemediobrasilController::class,'mostrarRemedioId'])->name('mostrar-remedio-id');

Route::get('/salvar-remedio',[RemediobrasilController::class,'ShowFormulario'])->name('mostrar-formulario');

Route::post('/salvar-remedio',[RemediobrasilController::class,'SalvarRemedio'])->name('cadastrar-formulario');

Route::delete('apaga-remedio/{id}', [RemediobrasilController::class,'destroy'])->name('apagar-remedio');

Route::put('altera-remedio/{id}',[RemediobrasilController::class,'update'])->name('alterar-remedio');
