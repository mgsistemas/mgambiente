@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Detalhes</h3>
        </div>
        <div class="panel-body">

            <div class="row">
                <div class="col-lg-2">
                    <label>ID : </label>
                </div>
                <div class="col-lg-10">
                    {{ $batch->id }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <label>Projeto : </label>
                </div>
                <div class="col-lg-10">
                    {{ $batch->projeto->nome }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <label>Nome do Batch : </label>
                </div>
                <div class="col-lg-10">
                    {{ $batch->nome }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <label>Ambiente : </label>
                </div>
                <div class="col-lg-10">
                    {{ $batch->ambiente }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <label>Execução : </label>
                </div>
                <div class="col-lg-10">
                    {{ $batch->execucao }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <label>Saída : </label>
                </div>
                <div class="col-lg-10">
                    {{ $batch->saida }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <label>Observação : </label>
                </div>
                <div class="col-lg-10">
                    {{ $batch->observacao }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <label>Situação : </label>
                </div>
                <div class="col-lg-10">
                    {{ $batch->situacao }}
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2">
                    <label>Data de Criação : </label>
                </div>
                <div class="col-lg-10">
                    {{ $batch->create_at_formatted }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <label>Data de Atualização : </label>
                </div>
                <div class="col-lg-10">
                    {{ $batch->updated_at_formatted }}
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <a href="{{route('batchs.index')}}" class="btn btn-default">Voltar</a>
        </div>
    </div>
</div>


@endsection