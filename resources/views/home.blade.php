@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <p>Seja Bem vindo!</p>
                    <p>Este é o flib, o site onde você consegue gerenciar sua biblioteca.</p>
                    <p>Aqui dentro nós temos 3 telas muito importantes:</p>
                    <div class='pb-3'>
                        <ul class="list-group">
                            <li class="list-group-item">Clientes</li>
                            <li class="list-group-item">Livros</li>
                            <li class="list-group-item">Locações</li>
                        </ul>
                    </div>
                    <h4 class="pt-2">Clientes:</h4>
                    <p>Nesta tela que pode ser acessada pelo menu no canto superior direito, permite que você cadastre, edite e apague os clientes de sua biblioteca.</p>
                    <h4 class="pt-2">Livros:</h4>
                    <p>Muito semelhante a tela de clientes, permite que você cadastre, edite e faça locações de seus livros :)</p>
                    <h4 class="pt-2">Locações:</h4>
                    <p>E por ultimo temos a tela de locações, aqui você podera visualizar todas locações feitas na bibliote e registrar a devolução dos livros.</p>
                    <p>Espero que tenha ficado claro, em caso de duvidas, estou a disposição.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
