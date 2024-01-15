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
                <th>Livro</th>
                <th>devolução</th>
            </tr>
        </thead>

        @for($x=0; $x < count($id); $x++)
            @foreach($clientes as $cliente)
                @foreach($cliente->livros as $livro)
                    @if($livro->pivot->id == $id[$x])
                        <tr>
                            <td>{{$cliente->nome}}</td>
                            <td>{{$cliente->celular}}</td>
                            <td>{{$livro->nome}}</td>
                            @if($livro->pivot->active)
                                <td>
                                <form method="post" action="{{route('locacao.update', ['livro' => $livro])}}">
                                    @csrf
                                    @method('put')
                                    <input type='hidden' name='id' value='{{$id[$x]}}'>
                                    <button type="submit" class="btn btn-link">Devolver</button>
                                </form>
                                </td>
                            @else
                                <td>Livro devolvido</td>
                            @endif
                        </tr>
                    @endif
                @endforeach
            @endforeach
        @endfor
    </table>
@endsection