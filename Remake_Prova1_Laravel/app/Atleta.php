<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'login', 'senha',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
 public function user()
    {
        return $this->belongsTo('App\Atleta');
    }
}

