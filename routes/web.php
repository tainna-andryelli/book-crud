<?php

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

/*O PHP com o Laravel utiliza um controle de rotas para exibir as páginas para o usuário*/

/*Route::get('/teste', function () {
    return view('welcome');
});*/

//passando rota através de um controller chamado 'BookController' e vai chamar o método index de dentro desse controller:
use App\Http\Controllers\BookController;
Route::resource('/books', BookController::class);
