<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CLiente;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function index(){
        $id = auth::id();
        $clientes = Cliente::where('user_id', $id)->get();
        return view('cliente.index', ['clientes' => $clientes]);
    }

    public function create(){
        return view('cliente.create');
    }

    public function store(Request $request){
        $id = auth::id();
        $data = $request->validate([
            'nome'=>'required',
            'celular'=>'required|numeric',
            'endereco'=>'required'
        ]);

        $newCliente = DB::insert("insert into clientes (nome, celular, endereco, user_id) values (?, ?, ?, ?) ", [$request['nome'], $request['celular'], $request['endereco'], $id]);

        return redirect(route('cliente.index'));
    }

    public function edit(Cliente $cliente){
        return view('cliente.edit', ['cliente' => $cliente]);
    }

    public function update(CLiente $cliente, Request $request){
        $data = $request->validate([
            'nome'=>'required',
            'celular'=>'required|numeric',
            'endereco'=>'required'
        ]);

        $cliente->update($data);

        return redirect(route('cliente.index'));
    }

    public function delete(Cliente $cliente){
        $cliente->delete();

        return redirect(route('cliente.index'));
    }
}
