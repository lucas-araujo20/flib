@extends('layouts.app')
@section('content')

<p class="opacity-0">{{$count = 0}}</p>
<div class="container-fluid">
    <div class="mt-5 ml-5 pl-5">

        <div class="d-flex justify-content-between">
            <h2 class='pt-3'>Meus livros:</h2>

            <div class="d-flex justify-content-end align-items-end p-2">
                <a href="{{route('livro.create')}}"><h3>Novo Livro</h3></a>
            </div>

        </div>

        @foreach ($livros as $livro)
            <div class="card mt-4 ml-5">
                <div class="card-body d-flex ">
                    <div class="h-25 w-25">
                        <img class="d-block w-50" src="{{url('images/livros/'.$livro->imagem)}}" >
                    </div>
                    <div class="book_information card-body d-flex justify-content-between">
                        <div class="inform">
                            <div class="book_title">
                                <h2 class="card-title">{{$livro->nome}}</h2>                               
                            </div>

                            <div class='autor'>
                                <h4 class='card-title'>Autor: {{$livro->autor}}</h4>
                            </div>

                            <div class="enredo">
                                <p>{{substr($livro->enredo, 0, 170)}}...</p>
                            </div>
                        </div>

                        
                        <div class="botões">
                            <div class="editar pb-3">
                                    <a href="{{route('livro.edit', ['livro' => $livro])}}" class="btn btn-outline-primary btn-block">Editar </a>
                            </div>

                            @foreach($livro->clientes as $cliente)
                                @if($cliente->pivot->active == 1)
                                    <p class="opacity-0">{{$count++}}</p>
                                @endif
                            @endforeach

                            @if($count < 1)
                                <div class="locacao mb-3">
                                    <a href="{{route('locacao.locar', ['livro' => $livro])}}" class="btn btn-outline-primary btn-block">locar</a>
                                </div>
                            @else
                                <div class="locacao mb-3">
                                    <h5>Livro já alugado</h5>
                                </div>
                                <p class="opacity-0">{{$count = 0}}</p>
                            @endif
                        </div>

                    </div>   

                </div>
            </div>
        @endforeach

    </div>
</div>

@endsection