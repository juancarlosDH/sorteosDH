<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sorteo extends Model
{
    protected $table = 'sorteos';

    protected $guarded = [];

    public function participantes()
    {
        return $this->belongsToMany(User::class, 'participantes', 'sorteo_id', 'usuario_id');
    }
}
