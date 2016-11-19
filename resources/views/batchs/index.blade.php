@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Lista de Batchs</h3>
    <div class="row">
        <div class="col-lg-3">
            @if (Auth::user()->role != \App\User::ROLE_CLIENT)
            <a href="{{ route('batchs.create') }}" class="btn btn-primary">Novo Batch</a>
            @endif
        </div>
        <div class="col-lg-3">
            &nbsp;
        </div>
        <div class="col-lg-6">
            <div class="input-group">
                <input type="text" class="form-control" id="busca" placeholder="Buscar por Nome do Batch...">
                <span class="input-group-btn">
                    <a href="#" onclick="javascript:buscar()" class="btn btn-default">Vai!</a>
                </span>
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->    </div>
    <div class="row">
        &nbsp;
    </div>
    <table class="table table-striped table-responsive">
        <thead>
            <th width="05%">#ID</th>
            <th width="20%">Nome do Batch</th>
            <th width="15%">Projeto</th>
            <th width="15%">Execução</th>
            <th width="10%">Ambiente</th>
            <th width="15%">Saída</th>
            <th width="10%">Situação</th>
            <th width="05%">Ações</th>
        </thead>
        <tbody>
            @foreach($batchs as $batch)
                <tr>
                    <td>{{ $batch->id }}</td>
                    <td>{{ $batch->nome }}</td>
                    <td>{{ \App\Projeto::getNomeProjeto($batch->projeto_id) }}</td>
                    <td>{{ $batch->execucao }}</td>
                    <td>{{ $batch->ambiente }}</td>
                    <td>{{ $batch->saida }}</td>
                    <td>{{ $batch->situacao }}</td>
                    <td align="center">
                        @if (Auth::user()->role != \App\User::ROLE_CLIENT)
                        <a href="{{ route('batchs.edit',$batch->id) }}" title="Editar Batch :  {{ $batch->nome }}" >
                            <img src="{{URL::asset('/img/edit_sgps.png')}}"  height="20" width="20">
                        </a>
                        @endif
                        <a href="{{ route('batchs.show',$batch->id) }}" title="Ver Detalhes do Batch {{ $batch->nome }}" >
                            <img src="{{URL::asset('/img/lupa.png')}}"  height="20" width="20">
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row" style="text-align: center;">
        {{ $batchs->links() }}
    </div>
</div>

@endsection

<script type="text/javascript">

    function buscar() {
        var busca = $('#busca').val();
        if (busca != '') {
           location.href = 'batchs/search/' + busca;
        } else {
           location.href = '{{ url('/batchs') }}';
        }
    }

</script>

@section('post-scripts')
    @parent


@endsection