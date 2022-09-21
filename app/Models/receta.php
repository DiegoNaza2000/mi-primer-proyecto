<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receta extends Model
{
    use HasFactory;

    public function medicos(){
        return $this->hasOne(medico::class, 'receta_medicos');
    }

    protected $table = 'recetas';
    protected $primarykey = 'id';
    protected $fillable = [
        'id_pacientes',
        'id_medicos',
        'enfermedad',
        'medicamento',
    ];
}
