<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use Illuminate\Support\Facades\Auth;

class LivroController extends Controller
{
    public function index(){
        $id = auth::id();
        $livros = Livro::where('user_id', $id)->get();
        return view('livro.index', ['livros' => $livros]);
    }

    public function create(){
        return view('livro.create');
    }

    public function store(Request $request){
        $id = auth::id();
        $data = $request->validate([
            'nome'=>'required',
            'enredo'=>'required',
            'autor'=>'required'
        ]);

        $livro = new Livro;

        $livro->nome = $request->nome;
        $livro->enredo = $request->enredo;
        $livro->autor = $request->autor;
        $livro->user_id = $id;

        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $img = $request->imagem;

            $extension = $img->extension();

            $imgname = md5($img->getClientOriginalName() . strtotime('now')) . "." . $extension;

            $img->move(public_path('images/livros'), $imgname);

            $livro->imagem = $imgname;
        }

        $livro->save();

        return redirect(route('livro.index'));
    }

    public function edit(Livro $livro){
        return view('livro.edit', ['livro' => $livro]);
    }

    public function update(Request $request, Livro $livro){
        $data = $request->validate([
            'nome'=>'required',
            'enredo'=>'required',
            'autor'=>'required'
        ]);

        $livro->nome = $request->nome;
        $livro->enredo = $request->enredo;
        $livro->autor = $request->autor;

        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $img = $request->imagem;

            $extension = $img->extension();

            $imgname = md5($img->getClientOriginalName() . strtotime('now')) . "." . $extension;

            $img->move(public_path('images/livros'), $imgname);

            $livro->imagem = $imgname;
        }

        $livro->update();

        return redirect(route('livro.index'));
    }
}
