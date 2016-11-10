
<div class="form-group">
    {!! Form::label('projeto_id','Projeto',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::select('projeto_id',$projetos,null,['class'=>'form-control'])!!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('nome','Nome do Batch',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('nome',null,['class'=>'form-control'])!!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('ambiente','Ambiente de Execução',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('ambiente',null,['class'=>'form-control'])!!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('execucao','Hora da Execução',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('execucao',null,['class'=>'form-control'])!!}
    </div>
</div>


<div class="form-group">
    {!! Form::label('saida','Saída Gerada',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('saida',null,['class'=>'form-control'])!!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('situacao','Situação do Batch',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::select('situacao',['Ativo'=>'Ativo','Inativo'=>'Intivo'],null,['class'=>'form-control'])!!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('observacao','Observações',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::textarea('observacao',null,['class'=>'form-control','rows'=>6,'cols'=>80])!!}
    </div>
</div>
