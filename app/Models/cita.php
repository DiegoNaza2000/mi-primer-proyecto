<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
    use HasFactory;
    public function medicos(){
        return $this->hasManyThrough(medico::class, 'id_medicos');
    }

    protected $table = 'citas';
    protected $primarykey = 'id';
    protected $fillable = [
        'id_medicos',
        'id_pacientes',
        'fecha',
        'hora',
    ];

}
