<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function (){
    return view("login");
})->name('login');

Route::get('/register', function (){
    return view('register');
})->name('register');



Route::get('/administrador/', [Controllers\UsuariosController::class, 'indexAdm'])->name('adm_index');
Route::get('/administrador/novo', [Controllers\UsuariosController::class, 'createAdm'])->name('adm_create');
Route::post('/administrador/novo', [Controllers\UsuariosController::class, 'insereAdm'])->name('adm_store');
Route::get('/administrador/consultar/{id}', [Controllers\UsuariosController::class, 'showAdm'])->name('adm_show');
Route::get('/administrador/apagar/{id}', [Controllers\UsuariosController::class, 'destroyAdm'])->name('adm_destroy');


Route::get('/usuario/novo', [Controllers\UsuariosController::class, 'create'])->name('usuario_create');
Route::post('/usuario/novo', [Controllers\UsuariosController::class, 'store'])->name('usuario_store');
Route::get('/usuario/alterar/{id}', [Controllers\UsuariosController::class, 'edit'])->name('usuario_edit');
Route::get('/usuario/consultar/{id}', [Controllers\UsuariosController::class, 'show'])->name('usuario_show');
Route::get('/usuario/apagar/{id}', [Controllers\UsuariosController::class, 'destroy'])->name('usuario_destroy');
Route::get('/usuario/', [Controllers\UsuariosController::class, 'index'])->name('usuario_index');

//Route::post('/main', function (Request $request) {
//    $input = Request::only('username', 'password');
//    $user = DB::select('EXEC sp_select_usuario_candidato ?', [$input['username']]);
//
//    return 'home';
//})->name('principal');

