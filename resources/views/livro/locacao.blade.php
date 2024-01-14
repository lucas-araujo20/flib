@extends('layouts.app')

@section('content')
    <table class="table table-bordered table-striped table-hover">
        <div class="d-flex justify-content-between">
            <h2 class='pt-3'>Locações:</h2>
            <div class="d-flex justify-content-end align-items-end p-2"><a href="{{route('cliente.create')}}"><h3>Nova Locação</h3></a></div>
        </div>

        <thead>
            <tr>
                <th>Nome</th>
                <th>Celular</th>
                <th>Livro</th>
                <th>devolução</th>
            </tr>
        </thead>

        @foreach($livros as $livro)
            @if (count($livro->clientes) >0)
                <tr>
                    <td scope="col">{{$livro->clientes[0]['nome']}}</td>
                    <td>{{$livro->clientes[0]['celular']}}</td>
                    <td>{{$livro->nome}}</td>

                    <td>
                        <form method="post" action="#">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-link">devolução</button>
                        </form>
                    </td>
                </tr>
            @endif
        @endforeach
    </table>
@endsection