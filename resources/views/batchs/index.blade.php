@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Lista de Batchs</h3>
    <div class="row">
        <div class="col-lg-3">
            <a href="{{ route('batchs.create') }}" class="btn btn-primary">Novo Batch</a>
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
    <table class="table table-striped">
        <thead>
            <th width="05%">#ID</th>
            <th width="20%">Nome do Batch</th>
            <th width="20%">Projeto</th>
            <th width="15%">Execução</th>
            <th width="30%">Saída</th>
            <th width="05%">Ações</th>
        </thead>
        <tbody>
            @foreach($batchs as $batch)
                <tr>
                    <td>{{ $batch->id }}</td>
                    <td>{{ $batch->nome }}</td>
                    <td>{{ \App\Projeto::getNomeProjeto($batch->projeto_id) }}</td>
                    <td>{{ $batch->execucao }}</td>
                    <td>{{ $batch->saida }}</td>
                    <td>
                        <a href="{{ route('batchs.edit',$batch->id) }}" class="btn btn-info">Editar</a>
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
            location.href = '/batchs/search/' + busca;
        } else {
            location.href = '/batchs';
        }
    }

</script>

@section('post-scripts')
    @parent


@endsection