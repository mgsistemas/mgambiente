@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Cadastrar Novo Projeto</h3>
            </div>
        </div>
        <div class="panel-body">
            @include('errors._erros')

            {!! Form::open(['route'=>'projetos.store','method'=>'POST','class'=>'form-horizontal']) !!}

            @include('projetos._form')

            @include('projetos._footer')


            {!! Form::close() !!}
        </div>
    </div>


@endsection