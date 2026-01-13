<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OrdenInsecto extends Model
{
    protected $table = 'ordenes_insectos';
    protected $fillable = [
        'nombre', 'slug', 'descripcion_general', 'caracteristicas_principales',
        'imagen_representativa', 'numero_especies', 'tipo_metamorfosis',
        'habitat', 'distribucion', 'importancia_ecologica', 'estado_conservacion',
        'orden_display', 'activo'
    ];
    
    public function especies(): HasMany
    {
        return $this->hasMany(Especie::class, 'orden', 'nombre');
    }
    
    public function especiesActivas()
    {
        return $this->especies()
            ->orderBy('nombre_cientifico')
            ->get();
    }
    
    // Accesores útiles
    public function getRutaImagenAttribute()
    {
        if ($this->imagen_representativa) {
            return asset('storage/' . $this->imagen_representativa);
        }
        return asset('image/default-orden.jpg');
    }
}