<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Órdenes de Insectos - Colección Entomológica</title>
    @vite('resources/css/coleccion.css')
    @vite('resources/js/coleccion.js')
    <link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .estadisticas-container {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-card h3 {
            color: #2c3e50;
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .stat-card p {
            color: #7f8c8d;
            margin: 0;
            font-weight: 500;
        }

        .total-especies {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .total-especies h3,
        .total-especies p {
            color: white;
        }

        .filtro-container {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .search-input {
            border-radius: 25px;
            padding: 0.75rem 1.5rem;
            border: 2px solid #e0e6ed;
        }

        .search-input:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        .btn-orden {
            background: white;
            border: 2px solid #e0e6ed;
            color: #2c3e50;
            border-radius: 25px;
            padding: 0.5rem 1.5rem;
            margin: 0.25rem;
            transition: all 0.3s;
        }

        .btn-orden:hover,
        .btn-orden.active {
            background: #667eea;
            border-color: #667eea;
            color: white;
        }

        .no-ordenes {
            text-align: center;
            padding: 3rem;
        }

        .no-ordenes i {
            font-size: 4rem;
            color: #bdc3c7;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    @include('includes.navbar-coleccion')

    <div class="page-header">
        <div class="container">
            <h1 class="titulo-ordenes-principal">ÓRDENES DE INSECTOS</h1>
        </div>
    </div>
    <p class="descripcion-ordenes">
        Los insectos se clasifican en diversos órdenes, cada uno con características únicas y adaptaciones
        extraordinarias que les han permitido conquistar prácticamente todos los hábitats de la Tierra.
    </p>

    <section class="container py-4">
        <!-- Estadísticas -->
        <div class="estadisticas-container">
            <div class="row align-items-center mb-3">
                <div class="col-md-6">
                    <h3 class="mb-0">
                        <i class="fas fa-chart-bar me-2"></i>Estadísticas de la Colección
                    </h3>
                </div>
                <div class="col-md-6 text-end">
                    <span class="badge bg-primary fs-6">
                        Total de Órdenes: {{ count($ordenes) }}
                    </span>
                </div>
            </div>

            <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-3">
                @php
                $totalEspecies = array_sum($estadisticas);
                @endphp
                <div class="col">
                    <div class="stat-card total-especies">
                        <h3>{{ $totalEspecies }}</h3>
                        <p>Total Especies</p>
                    </div>
                </div>

                @foreach($estadisticas as $orden => $cantidad)
                @if($loop->index < 5) {{-- Muestra solo los primeros 5 --}}
                    <div class="col">
                    <div class="stat-card">
                        <h3>{{ $cantidad }}</h3>
                        <p>{{ Str::limit($orden, 15) }}</p>
                    </div>
            </div>
            @endif
            @endforeach

            @if(count($estadisticas) > 5)
            <div class="col">
                <div class="stat-card">
                    <h3>+{{ count($estadisticas) - 5 }}</h3>
                    <p>Otros Órdenes</p>
                </div>
            </div>
            @endif
        </div>
        </div>

        <!-- Filtro y búsqueda -->
        <div class="filtro-container">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="navbar-nuevo">
                        <div class="navbar-buttons-nuevo">
                            <a href="{{ route('formulario-nueva-especie') }}" class="btn btn-primary btn-lg">
                                <i class="fas fa-plus-circle me-2"></i>
                                Nueva Especie
                            </a>
                        </div>
                    </div>
                </div>
                @if($totalEspecies > 0)
                <div class="col-auto">
                    <div class="navbar-buttons-nuevo">

                    </div>
                </div>
                @endif
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="input-group">
                        <span class="input-group-text bg-transparent border-end-0">
                            <i class="fas fa-search text-muted"></i>
                        </span>
                        <input type="text"
                            class="form-control search-input border-start-0"
                            id="searchOrdenes"
                            placeholder="Buscar órdenes...">
                    </div>
                </div>

            </div>
        </div>

        <!-- Grid de órdenes -->
        @if($ordenes->count() > 0)
        <div class="tarjetas" id="ordenesGrid">
            @foreach($ordenes as $orden)
            <div class="col orden-card-col" data-orden="{{ strtolower($orden) }}">
                <a href="{{ route('orden.dinamico', ['orden' => urlencode($orden)]) }}" class="orden-link-wrapper">
                    <div class="orden-card p-3 shadow-sm">
                        {{-- EN coleccion.blade.php - reemplaza la sección de la imagen --}}
                        <div class="image-container position-relative">
                            @if(isset($imagenesOrdenes[$orden]) && $imagenesOrdenes[$orden])
                            @php
                            // Asegurar que la ruta sea correcta
                            $rutaImagen = $imagenesOrdenes[$orden];

                            // Si es una ruta de storage (comienza con imagenes_morfologicas/)
                            if (Str::startsWith($rutaImagen, 'imagenes_morfologicas/')) {
                            $imagenUrl = asset('storage/' . $rutaImagen);
                            }
                            // Si es una ruta directa a /image/
                            elseif (Str::startsWith($rutaImagen, 'image/')) {
                            $imagenUrl = asset($rutaImagen);
                            }
                            // Si no, usar default
                            else {
                            $imagenUrl = asset('image/default-insect.jpg');
                            }
                            @endphp

                            <img src="{{ $imagenUrl }}"
                                alt="{{ $orden }}"
                                class="img-fluid rounded-3 orden-imagen"
                                onerror="this.onerror=null; this.src='{{ asset('image/default-insect.jpg') }}'">
                            @else
                            {{-- Placeholder si no hay imagen --}}
                            <div class="imagen-placeholder rounded-3 d-flex align-items-center justify-content-center">
                                <i class="fas fa-bug fa-3x text-muted"></i>
                            </div>
                            @endif

                            <div class="especie-count-badge">
                                <span class="badge bg-primary">
                                    {{ $estadisticas[$orden] ?? 0 }} {{ ($estadisticas[$orden] ?? 0) == 1 ? 'especie' : 'especies' }}
                                </span>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="orden-nombre">{{ $orden }}</h3>
                            <p class="orden-ejemplos">
                                {{ $ejemplosOrdenes[$orden] ?? 'Diversas especies' }}
                            </p>
                            <div class="orden-meta">
                                <small class="text-muted">
                                    <i class="fas fa-calendar me-1"></i>
                                    Actualizado: {{ now()->format('d/m/Y') }}
                                </small>
                            </div>
                        </div>
                        <div class="card-hover-overlay">
                            <span class="btn btn-sm btn-light">
                                <i class="fas fa-eye me-1"></i>Ver especies
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @else
        <div class="no-ordenes">
            <i class="fas fa-bug"></i>
            <h3 class="mb-3">No hay órdenes registrados</h3>
            <p class="text-muted mb-4">
                Aún no se han registrado especies en la colección.
                ¡Sé el primero en agregar una especie!
            </p>
            <div class="d-flex justify-content-center gap-3">
                <a href="{{ route('formulario-nueva-especie') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-1"></i>Agregar Especie
                </a>
                <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-home me-1"></i>Ir al Dashboard
                </a>
            </div>
        </div>
        @endif

        <!-- Botones de acción -->
        <div class="text-center mt-5 pt-4 border-top">

        </div>
    </section>

    <!-- Modal de información -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <!-- Mantén tu modal existente -->
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script para filtros y búsqueda -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchOrdenes');
            const ordenCards = document.querySelectorAll('.orden-card-col');
            const filterButtons = document.querySelectorAll('.btn-orden, .btn-orden-dropdown');

            // Función para filtrar órdenes
            function filtrarOrdenes() {
                const searchTerm = searchInput.value.toLowerCase();
                const activeFilter = document.querySelector('.btn-orden.active')?.dataset.orden || 'all';

                ordenCards.forEach(card => {
                    const orden = card.dataset.orden;
                    const ordenNombre = card.querySelector('.orden-nombre').textContent.toLowerCase();

                    let mostrar = true;

                    // Aplicar búsqueda
                    if (searchTerm && !ordenNombre.includes(searchTerm)) {
                        mostrar = false;
                    }

                    // Aplicar filtro
                    if (activeFilter !== 'all' && orden !== activeFilter) {
                        mostrar = false;
                    }

                    // Mostrar/ocultar
                    card.style.display = mostrar ? 'block' : 'none';
                });
            }

            // Evento para búsqueda
            searchInput.addEventListener('input', filtrarOrdenes);

            // Evento para filtros
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remover active de todos los botones
                    filterButtons.forEach(btn => {
                        btn.classList.remove('active');
                        if (btn.classList.contains('dropdown-item')) {
                            btn.closest('.dropdown').querySelector('.dropdown-toggle').classList.remove('active');
                        }
                    });

                    // Agregar active al botón clickeado
                    this.classList.add('active');
                    if (this.classList.contains('btn-orden-dropdown')) {
                        this.closest('.dropdown').querySelector('.dropdown-toggle').classList.add('active');
                        this.closest('.dropdown').querySelector('.dropdown-toggle').textContent = this.textContent;
                    }

                    filtrarOrdenes();
                });
            });

            // Animación al cargar
            setTimeout(() => {
                document.querySelectorAll('.orden-card-col').forEach((card, index) => {
                    card.style.animationDelay = `${index * 0.1}s`;
                    card.classList.add('fade-in');
                });
            }, 100);
        });
    </script>

<!-- REEMPLAZA TEMPORALMENTE la sección de la imagen -->
<div class="image-container position-relative" style="border: 2px solid red;">
    @php
        // DEBUG: Mostrar información
        $debugInfo = [
            'orden' => $orden,
            'imagen_asignada' => $imagenesOrdenes[$orden] ?? 'NO ASIGNADA',
            'tiene_imagen' => isset($imagenesOrdenes[$orden]) ? 'SÍ' : 'NO'
        ];
        
        if (isset($imagenesOrdenes[$orden])) {
            $ruta = $imagenesOrdenes[$orden];
            
            // Determinar tipo de ruta
            if (strpos($ruta, 'http') === 0) {
                $debugInfo['tipo'] = 'URL_EXTERNA';
                $debugInfo['url'] = $ruta;
            } elseif (strpos($ruta, 'storage/') === 0) {
                $debugInfo['tipo'] = 'STORAGE';
                $debugInfo['url'] = asset($ruta);
            } elseif (strpos($ruta, 'image/') === 0) {
                $debugInfo['tipo'] = 'LOCAL';
                $debugInfo['url'] = asset($ruta);
                $debugInfo['existe'] = file_exists(public_path($ruta)) ? 'SÍ' : 'NO';
            } else {
                $debugInfo['tipo'] = 'DESCONOCIDO';
            }
        }
    @endphp
    
    <!-- Mostrar info de debug -->
    <div style="background: yellow; padding: 5px; margin-bottom: 5px; font-size: 10px;">
        <strong>DEBUG:</strong><br>
        @foreach($debugInfo as $key => $value)
            {{ $key }}: {{ $value }}<br>
        @endforeach
    </div>
    
    @if(isset($imagenesOrdenes[$orden]) && $imagenesOrdenes[$orden])
        @php
            $ruta = $imagenesOrdenes[$orden];
            
            if (strpos($ruta, 'http') === 0) {
                // URL externa
                $imagenUrl = $ruta;
            } elseif (strpos($ruta, 'storage/') === 0) {
                // Ruta de storage (ya tiene storage/)
                $imagenUrl = asset($ruta);
            } elseif (strpos($ruta, 'image/') === 0) {
                // Ruta local en public/image/
                $imagenUrl = asset($ruta);
            } else {
                // Si no es ninguna, asumir que es ruta de storage sin prefijo
                $imagenUrl = asset('storage/' . $ruta);
            }
        @endphp
        
        <img src="{{ $imagenUrl }}" 
             alt="{{ $orden }}"
             class="img-fluid rounded-3 orden-imagen"
             style="border: 3px solid blue;"
             onerror="console.error('Error loading: {{ $imagenUrl }}'); this.style.border='3px solid red';">
    @else
        <div class="imagen-placeholder rounded-3 d-flex align-items-center justify-content-center" 
             style="background: #f0f0f0; min-height: 150px; border: 2px dashed #ccc;">
            <i class="fas fa-bug fa-3x text-muted"></i>
            <small style="position: absolute; bottom: 5px; left: 5px; color: red;">NO IMAGEN</small>
        </div>
    @endif
    
    <div class="especie-count-badge">
        <span class="badge bg-primary">
            {{ $estadisticas[$orden] ?? 0 }} especies
        </span>
    </div>
</div>

    @include('includes.footer-coleccion')
</body>

</html>