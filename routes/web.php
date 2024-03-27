<?php

use App\Http\Controllers\LivrosController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('agendamento');
});


Auth::routes();

Route::group(['middleware'=>'auth'],function(){

    ##criar_livros
Route::get('/livros',[LivrosController::class,'index'])->name('livros.index');
Route::get('/livros/create',[LivrosController::class,'create'])->name('livros.create');
Route::post('/livros/store',[LivrosController::class,'store'])->name('livros.store');
Route::get('/livros/edit/{id}',[LivrosController::class,'edit'])->name('livros.edit');
Route::post('/livros/update/{id}',[LivrosController::class,'update'])->name('livros.update');
Route::get('/livros/destroy/{id}',[LivrosController::class,'destroy'])->name('livros.destroy');
Route::get('/agendamento',[LivrosController::class,'agendamento'])->name('livros.agendamento');
Route::get('/agendamento/agendar/{id}',[LivrosController::class,'agendar'])->name('livros.agendar');
Route::get('/meus_agendamentos',[LivrosController::class,'meus_agendamentos'])->name('livros.meus_agendamentos');   
Route::get('/meus_agendamentos/destroy/{id}',[LivrosController::class,'remover_agendamento'])->name('livros.remover_agendamento');


});