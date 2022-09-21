<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class especialidad extends Model
{
    use HasFactory;

    public function medicos(){
        return $this->hasMany(medico::class, 'id_especialidads');
    }

    protected $table = 'especialidads';
    protected $primarykey = 'id';
    protected $fillable = [
        'nombre',

    ];
}
