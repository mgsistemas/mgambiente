<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Responsible;

class Backlog extends Model
{
    protected $fillable = [
        'descricao',
        'projeto_id',
        'situation_id',
        'responsible_id',
        'horas',
        'conclusao',
        'dependente',
        'hora_inicio',
        'hora_fim',
        'observacao'
    ];

    public function projeto()
    {
        return $this->belongsTo('\App\Projeto','projeto_id','id');
    }

    public function situation()
    {
        return $this->belongsTo('\App\Situation','situation_id','id');
    }

    public function responsible()
    {
        return $this->belongsTo('\App\Responsible','responsible_id','id');
    }

    public function getDataInicioFormattedAttribute()
    {
        return (new \DateTime($this->data_inicio))->format('d/m/Y');
    }

    public function getDataFimFormattedAttribute()
    {
        return (new \DateTime($this->data_fim))->format('d/m/Y');
    }

}
