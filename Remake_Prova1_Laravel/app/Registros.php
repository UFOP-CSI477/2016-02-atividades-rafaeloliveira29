<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registros extends Model
{
    //

    public function atletas()
    {
        return $this->hasMany('atletas');
    }
}
