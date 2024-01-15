@extends('layouts.app')

@section('content')
    <table class="table table-bordered table-striped table-hover">
        <div class="d-flex justify-content-between">
            <h2 class='pt-3'>Locações:</h2>
        </div>

        <thead>
            <tr>
                <th>Nome</th>
                <th>Celular</th>
                <th>endereço</th>
                <th>locar</th>
            </tr>
        </thead>

        @foreach($clientes as $cliente)
        <tr>
            <td scope="col">{{$cliente->nome}}</td>
            <td>{{$cliente->celular}}</td>
            <td>{{$cliente->endereco}}</td>

            <td>
                <form method="post" action="{{route('locacao.store', ['livro' => $livro])}}">
                    @csrf
                    @method('post')
                    <input type='hidden' name="cliente" value="{{$cliente->id}}">
                    <button type="submit" class="btn btn-link">locar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection