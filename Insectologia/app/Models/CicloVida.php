<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CicloVida extends Model
{
    use HasFactory;

    protected $fillable = [
        'especie_id',
        'etapa',
        'descripcion',
        'alimentacion',
        'habitat',
        'ruta_imagen',
        'metodos_control',
        'detalle_control'
    ];

    protected $casts = [
        'metodos_control' => 'array'
    ];

    public function especie()
    {
        return $this->belongsTo(Especie::class);
    }
}