<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagenes_Morfologica extends Model
{
    use HasFactory;

    protected $fillable = [
        'especie_id',
        'tipo_imagen',
        'ruta_imagen',
        'descripcion'
    ];

    public function especie()
    {
        return $this->belongsTo(Especie::class);
    }
}