@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Editar Projeto</h3>
        </div>
        <div class="panel-body">
            @include('errors._erros')

            {!! Form::model($projeto,['route'=>['projetos.update',$projeto->id],'method'=>'PUT','class'=>'form-horizontal']) !!}

            @include('projetos._form')

            @include('projetos._footer')

            {!! Form::close() !!}
        </div>
    </div>
</div>


@endsection