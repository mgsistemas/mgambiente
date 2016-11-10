@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Editar Batch</h3>
        </div>
        <div class="panel-body">
            @include('errors._erros')

            {!! Form::open(['route'=>'batchs.store','method'=>'POST','class'=>'form-horizontal']) !!}

            @include('batchs._form')

            @include('batchs._footer')

            {!! Form::close() !!}
        </div>
    </div>
</div>


@endsection