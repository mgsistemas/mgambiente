@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Backlog</h3>
    <div class="row">
        <div class="col-lg-3">
            @if (Auth::user()->role != \App\User::ROLE_CLIENT)
            <a href="{{ route('backlogs.create') }}" class="btn btn-primary">Novo Backlog</a>
            @endif
        </div>
        <div class="col-lg-3">
            &nbsp;
        </div>
        <div class="col-lg-6">
            <div class="input-group">
                <input type="text" class="form-control" id="busca" placeholder="Buscar por Descrição do Batch..."
                       onchange="javascript:buscar()">
                <span class="input-group-btn">
                    <a href="#" onclick="javascript:buscar()" class="btn btn-default">Buscar</a>
                    &nbsp;
                    <a href="{{ route('backlogs.index') }}"  class="btn btn-default">Limpar</a>
                </span>
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->    </div>
    <div class="row">
        &nbsp;
    </div>
    <table class="table table-striped table-responsive">
        <thead>
        <th width="05%">#ID</th>
        <th width="20%">Descrição</th>
        <th width="15%">Projeto</th>
        <th width="15%">Responsável</th>
        <th width="10%">Conclusão</th>
        <th width="15%">Horas</th>
        @if (Auth::user()->role == \App\User::ROLE_ADMIN)
        <th width="15%">H.Int.</th>
        @endif
        <th width="10%">Início</th>
        <th width="10%">Fim</th>
        <th width="10%">Stt</th>
        <th width="05%">Ações</th>
        </thead>
        <tbody>
        @foreach($backlogs as $backlog)
        <tr>
            <td>{{ $backlog->id }}</td>
            <td>{{ $backlog->descricao }}</td>
            <td>{{ \App\Projeto::getNomeProjeto($backlog->projeto_id) }}</td>
            <td>{{ $backlog->responsible->name }}</td>
            <td>{{ $backlog->conclusao }} %</td>
            <td>{{ $backlog->horas }}</td>
            @if (Auth::user()->role == \App\User::ROLE_ADMIN)
            <td>{{ $backlog->horas_internas }}</td>
            @endif
            <td>{{ $backlog->data_inicio_formatted }}</td>
            <td>{{ $backlog->data_fim_formatted }}</td>
            <td>{{ $backlog->situation->description }}</td>
            <td align="center">
                @if (Auth::user()->role != \App\User::ROLE_CLIENT)
                <a href="{{ route('backlogs.edit',$backlog->id) }}" title="Editar Backlog :  {{ $backlog->descricao }}" >
                    <img src="{{URL::asset('/img/edit_sgps.png')}}"  height="20" width="20">
                </a>
                @endif
                <a href="{{ route('backlogs.show',$backlog->id) }}" title="Ver Detalhes do Backlog {{ $backlog->descricao }}" >
                    <img src="{{URL::asset('/img/lupa.png')}}"  height="20" width="20">
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row" style="text-align: center;">
        {{ $backlogs->links() }}
    </div>
</div>

@endsection

<script type="text/javascript">

    function buscar() {
        var busca = $('#busca').val();
        if (busca != '') {
            location.href = 'backlogs/search/' + busca;
        } else {
            location.href = '{{ url('/backlogs') }}';
        }
    }

</script>

@section('post-scripts')
@parent

$('#busca').click(function() {
    var busca = $('#busca').val();
    if (busca != '') {
        location.href = 'backlogs/search/' + busca;
    } else {
        location.href = '{{ url('/backlogs') }}';
    }

));

@endsection