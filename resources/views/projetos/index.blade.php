@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            @if (Auth::user()->role != \App\User::ROLE_CLIENT)
            <a href="{{ route('projetos.create') }}" class="btn btn-primary">Novo Projeto</a>
            @endif
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
                @if (Auth::user()->role != \App\User::ROLE_CLIENT)
                <a href="{{ route('projetos.edit',$projeto->id) }}" >
                    <img src="{{ asset('img//edit_sgps.png')}}" title="Editar Projeto : {{ $projeto->nome }}" width="20" height="20"/>
                </a>
                @endif
                <a href="{{ route('projetos.show',$projeto->id) }}" >
                    <img src="{{ asset('img//lupa.png')}}" title="Ver detalhes do Projeto : {{ $projeto->nome }}" width="20" height="20"/>
                </a>
            </td>
        </tr>
        @endforeach

        </tbody>

    </table>
    {{ $projetos->links() }}
</div>

@endsection