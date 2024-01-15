<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CLiente;
use App\Models\Livro;
use Illuminate\Support\Facades\DB;

class LocacaoController extends Controller
{
    public function locacao(){
        $id = auth::id();
        $clientes = Cliente::with('livros')->where('user_id', $id)->get();

        //ordem das locacoes
        $ordem = array();

        foreach($clientes as $cliente){
            foreach($cliente->livros as $livro){
                array_push($ordem, $livro->pivot->id);
            }
        }

        rsort($ordem);

        return view('locacao.index', ['id' => $ordem, 'clientes' => $clientes]);
    }

    public function locar(livro $livro){
        $id = auth::id();
        $clientes = Cliente::where('user_id', $id)->get();
        return view('locacao.locar', ['livro' => $livro, 'clientes' => $clientes]);
    }

    public function store(livro $livro, Request $request){
        $id = $request->cliente;
        $cliente = Cliente::where('id', $id)->first();

        $livro->clientes()->save($cliente);

        return redirect(route('locacao.index'));
        
    }

    public function update(Livro $livro, Request $request){
        $id = $request->id;
        
        DB::update("update cliente_livro set active = 0 where id = ?", [$id]);

        return redirect(route('locacao.index'));
    }
}
