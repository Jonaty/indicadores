<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom_user', 'no_cuenta', 'password', 'semestre', 'carrera', 'facultad', 'campus', 'activo', 'rol'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     public function materias()
    {
        return $this->belongsToMany(Materia::class);
    }

/*    public function getMateriasAttribute()
    {
        return $this->manyMaterias()->pluck('user_id')->toArray();
    }*/
}
