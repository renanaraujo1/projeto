<?php

use App\Http\Controllers\LivroController;
use App\Http\Controllers\ProfileController;
use App\Models\Livro;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $li = DB::table("livros")->where('id_do_usuario', Auth::id())->paginate(100);
    return view('dashboard')->with("livros", $li);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cadastrar', function() {
        return view('cadastro');
    });

    Route::get('/editar/{id}', function($id) {
        $li = DB::table("livros")->where('id', $id)->first();
        return view('editar')->with("livro", $li);
    });

    Route::post('/cadastro', [LivroController::class, 'criar']);
    Route::post('/edit/{id}', [LivroController::class, 'atualizar']);
    Route::get('/deletar/{id}', [LivroController::class, 'deletar']);
});

require __DIR__.'/auth.php';
