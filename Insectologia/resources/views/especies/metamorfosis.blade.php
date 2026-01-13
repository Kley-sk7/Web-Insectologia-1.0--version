<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metamorfosis - {{ $especie['nombre_cientifico'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/metamorfosis.css')
</head>

<body class="bg-light">
    @include('includes.navbar-metamorfosis')

    <div class="header-bg">
        <div class="container text-center">
            <h1 class="display-6 fw-bold">Metamorfosis - {{ $especie->nombre_cientifico }}</h1>
            <p class="lead mb-0">{{ $especie->nombre_comun }}</p>
        </div>
    </div>

    <div class="container my-4">
        <!-- Información general de la especie -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Información de la Especie</h4>
                        <div class="d-flex flex-wrap">
                            <span class="info-badge">
                                <strong>Orden:</strong> {{ $especie->orden }}
                            </span>
                            <span class="info-badge">
                                <strong>Familia:</strong> {{ $especie->familia }}
                            </span>
                            <span class="info-badge">
                                <strong>Tipo Metamorfosis:</strong> {{ $especie->tipo_metamorfosis }}
                            </span>
                            <span class="info-badge">
                                <strong>Género:</strong> {{ $especie->genero }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-center mb-4">Ciclo de Vida</h2>

        @if($especie->ciclosVida->count() > 0)
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th width="120">Etapa</th>
                        <th width="150">Imagen (Hacer clik para anpliar)</th>
                        <th width="120">Alimentación</th>
                        <th width="120">Hábitat</th>
                        <th width="150">Métodos de Control</th>
                        <th>Detalles de Control</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($especie->ciclosVida as $ciclo)
                    <tr>
                        <!-- Columna ETAPA -->
                        <td class="text-center">
                            <strong class="etapa-badge">{{ $ciclo->etapa }}</strong>
                        </td>
                        
                        <!-- Columna IMAGEN -->
                        <td class="text-center">
                            @if($ciclo->ruta_imagen && Storage::disk('public')->exists($ciclo->ruta_imagen))
                            <img src="{{ asset('storage/' . $ciclo->ruta_imagen) }}"
                                class="table-image clickable-image"
                                alt="{{ $ciclo->etapa }}"
                                data-bs-toggle="modal"
                                data-bs-target="#imagenModal"
                                onclick="cambiarImagenModal('{{ asset('storage/' . $ciclo->ruta_imagen) }}', '{{ $ciclo->etapa }}')"
                                title="Haz clic para ampliar">
                            @else
                            <div class="no-image-table">
                                <i class="fas fa-image fa-lg text-muted"></i>
                                <small class="d-block mt-1">No disponible</small>
                            </div>
                            @endif
                        </td>        
                        <!-- Columna ALIMENTACIÓN -->
                        <td>
                            <span class="small">{{ $ciclo->alimentacion ?? 'No especificada' }}</span>
                        </td>
                        
                        <!-- Columna HÁBITAT -->
                        <td>
                            <span class="small">{{ $ciclo->habitat ?? 'No especificado' }}</span>
                        </td>
                        
                        <!-- Columna MÉTODOS DE CONTROL -->
                        <td>
                            @if($ciclo->metodos_control)
                                @php
                                    $metodos = json_decode($ciclo->metodos_control, true);
                                    if(is_array($metodos)) {
                                        echo '<div class="small">';
                                        foreach($metodos as $metodo) {
                                            echo '<span class="badge bg-secondary me-1 mb-1">' . $metodo . '</span>';
                                        }
                                        echo '</div>';
                                    } else {
                                        echo '<span class="badge bg-secondary">' . $ciclo->metodos_control . '</span>';
                                    }
                                @endphp
                            @else
                                <span class="text-muted small">No especificados</span>
                            @endif
                        </td>
                        
                        <!-- Columna DETALLES DE CONTROL -->
                        <td>
                            @if($ciclo->detalle_control)
                            <p class="mb-0 small">{{ Str::limit($ciclo->detalle_control, 150) }}</p>
                            @if(strlen($ciclo->detalle_control) > 150)
                            <button type="button" class="btn btn-sm btn-outline-primary mt-1" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#detalleModal{{ $ciclo->id }}">
                                Ver completo
                            </button>
                            @endif
                            @else
                            <span class="text-muted small">No especificados</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modales para detalles completos -->
        @foreach($especie->ciclosVida as $ciclo)
        @if($ciclo->detalle_control && strlen($ciclo->detalle_control) > 150)
        <div class="modal fade" id="detalleModal{{ $ciclo->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detalles de Control - {{ $ciclo->etapa }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>{{ $ciclo->detalle_control }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach

        @else
        <div class="alert alert-info text-center">
            <i class="fas fa-info-circle me-2"></i>
            No hay información de ciclos de vida disponible para esta especie.
        </div>
        @endif
    </div>

    <!-- Modal para imágenes ampliadas -->
    <div class="modal fade" id="imagenModal" tabindex="-1" aria-labelledby="imagenModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imagenModalLabel">Metamorfosis - {{ $especie->nombre_cientifico }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImagenPrincipal" src="" class="img-fluid rounded" alt="">
                    <div class="mt-3">
                        <small class="text-muted" id="modalDescripcion"></small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function cambiarImagenModal(src, descripcion) {
            document.getElementById('modalImagenPrincipal').src = src;
            document.getElementById('modalDescripcion').textContent = descripcion;
        }

        // Debug: Verificar datos en consola
        console.log('Datos de la especie:', @json($especie));
        console.log('Ciclos de vida:', @json($especie->ciclosVida));
    </script>
</body>

</html>