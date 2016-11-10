@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Editar Batch</h3>
        </div>
        <div class="panel-body">
            @include('errors._erros')

            {!! Form::model($batch,['route'=>['batchs.update',$batch->id],'method'=>'PUT','class'=>'form-horizontal']) !!}

            @include('batchs._form')

            @include('batchs._footer')

            {!! Form::close() !!}
        </div>
    </div>
</div>


@endsection