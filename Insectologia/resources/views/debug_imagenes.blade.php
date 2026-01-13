<!DOCTYPE html>
<html>
<head>
    <title>Debug Imágenes</title>
    <style>
        .debug-container { padding: 20px; }
        .debug-item { margin: 10px 0; padding: 10px; border: 1px solid #ccc; }
        .image-preview { max-width: 200px; max-height: 200px; }
        .success { background: #d4edda; }
        .error { background: #f8d7da; }
    </style>
</head>
<body>
    <div class="debug-container">
        <h1>Debug de Imágenes</h1>
        
        @php
            $especies = \App\Models\Especie::with('imagenesMorfologicas')->limit(10)->get();
        @endphp
        
        @foreach($especies as $especie)
            <div class="debug-item">
                <h3>{{ $especie->nombre_comun }} (ID: {{ $especie->id }})</h3>
                <p>Orden: {{ $especie->orden }}</p>
                
                @if($especie->imagenesMorfologicas->count() > 0)
                    @foreach($especie->imagenesMorfologicas as $imagen)
                        <div class="{{ Storage::disk('public')->exists($imagen->ruta_imagen) ? 'success' : 'error' }}">
                            <p><strong>Tipo:</strong> {{ $imagen->tipo_imagen }}</p>
                            <p><strong>Ruta en BD:</strong> {{ $imagen->ruta_imagen }}</p>
                            <p><strong>Existe en storage:</strong> 
                                {{ Storage::disk('public')->exists($imagen->ruta_imagen) ? 'SÍ' : 'NO' }}
                            </p>
                            <p><strong>URL generada:</strong> {{ asset('storage/' . $imagen->ruta_imagen) }}</p>
                            
                            @if(Storage::disk('public')->exists($imagen->ruta_imagen))
                                <img src="{{ asset('storage/' . $imagen->ruta_imagen) }}" 
                                     alt="Preview" class="image-preview">
                            @endif
                        </div>
                    @endforeach
                @else
                    <p>No tiene imágenes</p>
                @endif
            </div>
        @endforeach
    </div>
</body>
</html>