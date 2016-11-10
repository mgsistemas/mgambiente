<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    const SITUACAO_ATIVO = 'Ativo';
    const SITUACAO_INATIVO = 'Inativo';

    protected $table = 'batchs';

    protected $fillable = [
            'nome','projeto_id','ambiente','execucao','saida','situacao','observacao'
        ];

    public function projeto()
    {
        return $this->belongsTo('\App\Projeto','projeto_id','id');
    }

}
