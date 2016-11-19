<?php

namespace App;

use Faker\Provider\cs_CZ\DateTime;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = [
        'nome',
        'responsavel'
    ];

    public function batches(){
        return $this->hasMany('\App\Batch');
    }

    public function backlogs()
    {
        return $this->hasMany('\App\Backlog');
    }

    public static function getNomeProjeto($id)
    {
        $projeto = \App\Projeto::find($id);
        return $projeto->nome;
    }

    public function getCreateAtFormattedAttribute()
    {
        return (new \DateTime($this->created_at))->format('d/m/Y H:i:s');
    }

    public function getUpdatedAtFormattedAttribute()
    {
        return (new \DateTime($this->updated_at))->format('d/m/Y H:i:s');
    }

}
