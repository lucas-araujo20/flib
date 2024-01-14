@extends('layouts.app')

@section('content')
    <div class="col-12 text center my-5">
        <h1 class="text-center">Novo Cliente</h1>
    </div>
    <form method='POST' action="{{route('cliente.update', ['cliente' => $cliente])}}">
    @csrf
    @method('put')
    <div>
        <div class="form-group p-3">
            <div class="col-md-6 offset-md-3">
                <label for="name">Nome:</label>
                <input type='text' id="name" class="form-control col-2" name='nome' placeholder='nome' value="{{$cliente->nome}}">
            </div>
        </div>

        <div class="form-group p-3">
            <div class="col-md-6 offset-md-3">
                <label for="celular">Celular:</label>
                <input type='number' id="celular" class="form-control" name='celular' placeholder='celular' value="{{$cliente->celular}}">
            </div>
        </div>

        <div class="form-group p-3">
            <div class="col-md-6 offset-md-3">
                <label for="endereço">endereço:</label>
                <input type='text' id="enreço" class="form-control" name='endereco' placeholder='endereço' value="{{$cliente->endereco}}">
            </div>
        </div>

        <div class="form-group d-flex justify-content-center p-3">
            <input type="submit" class="btn btn-primary btn-lg">
        </div>
    </div>
    </form>
@endsection