<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    use HasFactory;

    public function medicos(){
        return $this->belongsTo(medico::class, 'id_medicos');
    }

    public function recetas(){
        return $this->belongsTo(paciente::class, 'id_recetas');
    }


    protected $primarykey = 'id';
    protected $table = 'pacientes';
    protected $fillable = [
        'nombre',
        'apellido',
        'edad',
        'telefono',
        'telefono',
        'correo',
        'sexo',
    ];
}
