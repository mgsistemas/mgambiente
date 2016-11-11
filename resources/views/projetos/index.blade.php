@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('projetos.create') }}" class="btn btn-primary">Novo Projeto</a>

        </div>
    </div>
    <div class="row">
        &nbsp;
    </div>



    <table class="table table-responsive table-striped">

        <thead>
        <th width="10%" style="text-align: center">#ID</th>
        <th width="25%" style="text-align: left">Nome do Projeto</th>
        <th width="20%" style="text-align: left">Responsável</th>
        <th width="15%" style="text-align: center">Criação</th>
        <th width="15%" style="text-align: center">Atualização</th>
        <th width="10%" style="text-align: center">Ações</th>
        </thead>
        <tbody>

        @foreach($projetos as $projeto)
        <tr>
            <td>{{ $projeto->id }}</td>
            <td>{{ $projeto->nome }}</td>
            <td>{{ $projeto->responsavel }}</td>
            <td>{{ $projeto->created_at->format('d/m/Y H:i:s') }}</td>
            <td>{{ $projeto->updated_at->format('d/m/Y H:i:s') }}</td>
            <td align="center">
                <a href="{{ route('projetos.edit',$projeto->id) }}" class="btn btn-info">Editar</a>
            </td>
        </tr>
        @endforeach

        </tbody>

    </table>
    {{ $projetos->links() }}
</div>

@endsection