<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
    protected $fillable = ['name'];


    public function backlogs()
    {
        $this->hasMany('\App\Backlog');
    }
}
