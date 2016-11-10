<?php

namespace App;

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

    public static function getNomeProjeto($id)
    {
        $projeto = \App\Projeto::find($id);
        return $projeto->nome;
    }

}
