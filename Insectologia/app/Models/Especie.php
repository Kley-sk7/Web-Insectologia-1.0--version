<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    use HasFactory;

    protected $table = 'especies';
    
    protected $fillable = [
        'nombre_comun',
        'nombre_cientifico',
        'detalle_general',
        'orden',
        'familia',
        'genero',
        'especie',
        'dominio',
        'reino',
        'filo',
        'clase',
        'tipo_metamorfosis',
        'partes_dinamicas',
        'descripcion_completa',
        'descripcion_cabeza',
        'descripcion_torax',
        'descripcion_abdomen',
        'descripcion_patas',
        'descripcion',
        'habitat',
        'distribucion_geografica',
        'estado_conservacion'
    ];

    protected $casts = [
        'partes_dinamicas' => 'array',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    // ✅ MUTADOR PARA partes_dinamicas - VALIDACIÓN AL GUARDAR
    public function setPartesDinamicasAttribute($value)
    {
        if (is_null($value)) {
            $this->attributes['partes_dinamicas'] = null;
            return;
        }
        
        if (is_string($value)) {
            // Intentar decodificar JSON
            $decoded = json_decode($value, true);
            if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                // Validar estructura de cada parte
                $validated = $this->validarYEstructurarPartes($decoded);
                $this->attributes['partes_dinamicas'] = json_encode($validated);
            } else {
                // Si no es JSON válido, intentar como array serializado
                $this->attributes['partes_dinamicas'] = json_encode([]);
            }
        } elseif (is_array($value)) {
            // Validar estructura del array
            $validated = $this->validarYEstructurarPartes($value);
            $this->attributes['partes_dinamicas'] = json_encode($validated);
        } else {
            $this->attributes['partes_dinamicas'] = null;
        }
    }
    
    // ✅ ACCESOR PARA parts_dinamicas - SIEMPRE RETORNAR ARRAY
    public function getPartesDinamicasAttribute($value)
    {
        if (is_array($value)) {
            return $value;
        }
        
        if (is_string($value)) {
            $decoded = json_decode($value, true);
            return is_array($decoded) ? $decoded : [];
        }
        
        return [];
    }
    
    // ✅ MÉTODO PARA VALIDAR Y ESTRUCTURAR PARTES DINÁMICAS
    private function validarYEstructurarPartes(array $partes): array
    {
        $tiposPermitidos = [
        'alas',                    // ← Coincide
        'antenas',                 // ← Coincide
        'piezas_bucales',          // ← Cambia 'aparato_bucal' por 'piezas_bucales'
        'ojos',                    // ← Coincide
        'patas_especializadas',    // ← Coincide
        'apendices',               // ← Agrega 'apendices'
        'otro'                     // ← Cambia 'otros' por 'otro'
    ];
        $estructuradas = [];
        $idsUnicos = [];
        
        foreach ($partes as $index => $parte) {
            // Validar que sea un array
            if (!is_array($parte)) {
                continue;
            }
            
            // Asignar ID único si no existe
            $idUnico = $parte['id_unico'] ?? 'parte_' . time() . '_' . $index;
            
            // Verificar que el ID sea único
            if (in_array($idUnico, $idsUnicos)) {
                $idUnico = $idUnico . '_' . $index;
            }
            $idsUnicos[] = $idUnico;
            
            // Validar y limpiar tipo
            $tipo = $parte['tipo'] ?? 'otro';
            if (!in_array($tipo, $tiposPermitidos)) {
                $tipo = 'otro';
            }
            
            // Estructurar datos limpios
            $estructuradas[] = [
                'id_unico' => $idUnico,
                'tipo' => $tipo,
                'nombre' => htmlspecialchars($parte['nombre'] ?? 'Parte ' . ($index + 1), ENT_QUOTES, 'UTF-8'),
                'imagen' => $parte['imagen'] ?? null,
                'descripcion' => htmlspecialchars($parte['descripcion'] ?? 'Sin descripción', ENT_QUOTES, 'UTF-8')
            ];
        }
        
        return $estructuradas;
    }

    // ✅ NUEVO: Método para obtener partes por tipo
    public function getPartesPorTipo($tipo)
    {
        $partes = $this->partes_dinamicas;
        return array_filter($partes, function($parte) use ($tipo) {
            return ($parte['tipo'] ?? '') === $tipo;
        });
    }
    
    // ✅ NUEVO: Método para obtener descripción de alas
    public function getDescripcionAlasAttribute()
    {
        $partesAlas = $this->getPartesPorTipo('alas');
        
        if (!empty($partesAlas)) {
            $primeraAla = reset($partesAlas);
            return $primeraAla['descripcion'] ?? 'Información en partes dinámicas';
        }
        
        return $this->descripcion ?? 'No especificado';
    }

    // Relaciones
    public function imagenesMorfologicas()
    {
        return $this->hasMany(Imagenes_morfologicas::class);
    }

    public function ciclosVida()
    {
        return $this->hasMany(CicloVida::class, 'especie_id');
    }

    public function getSlugAttribute()
    {
        return str_replace(' ', '_', $this->nombre_cientifico);
    }

    public function imagenCompleta()
    {
        return $this->hasOne(Imagenes_Morfologica::class)->where('tipo_imagen', 'completa');
    }
    
    public function imagenCabeza()
    {
        return $this->hasOne(ImagenMorfologica::class)->where('tipo_imagen', 'cabeza');
    }
    
    public function imagenTorax()
    {
        return $this->hasOne(ImagenMorfologica::class)->where('tipo_imagen', 'torax');
    }
    
    public function imagenAbdomen()
    {
        return $this->hasOne(ImagenMorfologica::class)->where('tipo_imagen', 'abdomen');
    }
    
    public function imagenPatas()
    {
        return $this->hasOne(ImagenMorfologica::class)->where('tipo_imagen', 'patas');
    }
}