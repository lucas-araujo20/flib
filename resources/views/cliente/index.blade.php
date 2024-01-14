@extends('layouts.app')

@section('content')
    <table class="table table-bordered table-striped table-hover">
        <div class="d-flex justify-content-between">
            <h2 class='pt-3'>Clientes:</h2>
            <div class="d-flex justify-content-end align-items-end p-2"><a href="{{route('cliente.create')}}"><h3>Novo cliente</h3></a></div>
        </div>

        <thead>
            <tr>
                <th>Nome</th>
                <th>Celular</th>
                <th>Endereço</th>
                <th>Editar</th>
                <th>Apagar</th>
            </tr>
        </thead>

        @foreach($clientes as $cliente)
        <tr>
            <td scope="col">{{$cliente->nome}}</td>
            <td>{{$cliente->celular}}</td>
            <td>{{$cliente->endereco}}</td>

            <td>
                <a href="{{route('cliente.edit', ['cliente' => $cliente])}}" class="btn btn-link">editar</a>
            </td>
            <td>
                <form method="post" action="{{route('cliente.delete', ['cliente' => $cliente])}}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-link">deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection