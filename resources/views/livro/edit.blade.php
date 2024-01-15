@extends('layouts.app')

@section('content')
{{$livro}}
    <div class="col-12 text center my-5">
        <h1 class="text-center">Editar Livro</h1>
    </div>
    <form method='POST' action="{{route('livro.update', ['livro' => $livro])}}" enctype='multipart/form-data'>
    @csrf
    @method('put')
        <div>
            <div class="form-group p-3">
                <div class="col-md-6 offset-md-3">
                    <label for="name">Nome:</label>
                    <input type='text' id="name" class="form-control col-2" name='nome' placeholder='nome' value="{{$livro->nome}}">
                </div>
            </div>

            <div class="form-group p-3">
                <div class="col-md-6 offset-md-3">
                    <label for="enredo">enredo:</label>
                    <textarea id="enredo" class="form-control" name='enredo' placeholder='enredo'>{{$livro->enredo}}</textarea>
                </div>
            </div>

            <div class="form-group p-3">
                <div class="col-md-6 offset-md-3">
                    <label for="autor">autor:</label>
                    <input type='text' id="autor" class="form-control" name='autor' placeholder='autor' value="{{$livro->autor}}">
                </div>
            </div>

            <div class="form-group p-3">
                <div class="col-md-6 offset-md-3">
                    <label for="imagem">imagem:</label>
                    <input type='file' id="upload" class="form-control" name='imagem'>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <img class="img-thumbnail" src="{{url('images/livros/'.$livro->imagem)}}" id="foto">
                </div>
            </div>


            <div class="form-group d-flex justify-content-center p-3">
                <input type="submit" class="btn btn-primary btn-lg">
            </div>

        </div>
    </form>
<script src="{{url('javascript/preview.js')}}"></script>
@endsection