@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Detalhes do Projeto</h3>
        </div>
        <div class="panel-body">

            <div class="row">
                <div class="col-lg-2">
                    <label>ID : </label>
                </div>
                <div class="col-lg-10">
                    {{ $projeto->id }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <label>Projeto : </label>
                </div>
                <div class="col-lg-10">
                    {{ $projeto->nome }}
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2">
                    <label>Data de Criação : </label>
                </div>
                <div class="col-lg-10">
                    {{ $projeto->create_at_formatted }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <label>Data de Atualização : </label>
                </div>
                <div class="col-lg-10">
                    {{ $projeto->updated_at_formatted }}
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <a href="{{route('projetos.index')}}" class="btn btn-default">Voltar</a>
        </div>
    </div>
</div>


@endsection