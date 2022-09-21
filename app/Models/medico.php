<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medico extends Model
{
    use HasFactory;

public function recetas(){
    return $this->hasOne(receta::class, 'id_recetas');
}

public function citas(){
    return $this->hasMany(cita::class, 'id_citas');
}

protected $table = 'medicos';
    protected $primarykey = 'id';
    protected $fillable = [
        'nombre',
        'telefono',
        'correo',
        'id_especialidads',
    ];

}
