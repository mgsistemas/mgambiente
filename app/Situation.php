<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Situation extends Model
{
    protected $fillable = ['description'];

    public function backlogs()
    {
        return $this->hasMany('\App\Backlog');
    }

}
