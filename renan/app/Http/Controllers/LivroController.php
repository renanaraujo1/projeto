<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LivroController extends Controller
{
    public function criar(Request $request){
        $request->validate([
            'autor' => 'required',
            'titulo' => 'required',
            'subtitulo' => 'required',
            'edicao' => 'required',
            'editora' => 'required',
            'ano_de_publicacao' => 'required'
        ]);

        DB::table("livros")->insert(
            [
                'id_do_usuario' => Auth::id(),
                'autor' => $request->autor,
                'titulo' => $request->titulo,
                'subtitulo' => $request->subtitulo,
                'edicao' => $request->edicao,
                'editora' => $request->editora,
                'ano_de_publicacao' => $request->ano_de_publicacao
            ]
        );

        return redirect('/dashboard');
    }
    public function deletar($id){
        DB::table("livros")->where("id", $id)->delete();
        return redirect('/dashboard');
    }
    public function atualizar(Request $request, $id){
        $request->validate([
            'autor' => 'required',
            'titulo' => 'required',
            'subtitulo' => 'required',
            'edicao' => 'required',
            'editora' => 'required',
            'ano_de_publicacao' => 'required'
        ]);

        
        DB::table("livros")->where("id", $id)->update([
            'id_do_usuario' => Auth::id(),
            'autor' => $request->autor,
            'titulo' => $request->titulo,
            'subtitulo' => $request->subtitulo,
            'edicao' => $request->edicao,
            'editora' => $request->editora,
            'ano_de_publicacao' => $request->ano_de_publicacao
        ]);

        return redirect('/dashboard');
    }
}
