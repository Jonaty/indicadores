<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = ['nom_materia', 'semestre', 'carrera', 'p1', 'p2', 'p3', 'ordi', 'extra', 'regu', 'final'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
