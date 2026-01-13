<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $orden }} - Colección Entomológica</title>
    @vite('resources/css/coleccion.css')
    @vite('resources/css/especies.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Header dinámico para el orden */
        .page-header {
            background: linear-gradient(135deg, rgba(40, 99, 174, 0.9) 0%, rgba(36, 123, 160, 0.9) 100%),
            url('{{ asset("image/background-insectos.jpg") }}') center/cover;
            color: white;
            padding: 4rem 0;
            margin-bottom: 3rem;
            position: relative;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
            opacity: 0.1;
        }

        .header-content {
            position: relative;
            z-index: 2;
        }

        .orden-titulo {
            font-family: 'Young Serif', serif;
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .orden-subtitulo {
            font-size: 1.5rem;
            opacity: 0.9;
            max-width: 800px;
            margin: 0 auto 2rem;
        }

        /* Sidebar */
        .sidebar-ordenes {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            padding: 1.5rem;
            position: sticky;
            top: 20px;
        }

        .sidebar-header {
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 1rem;
            margin-bottom: 1.5rem;
        }

        .sidebar-header h5 {
            color: #2c3e50;
            font-weight: 600;
        }

        .orden-sidebar-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem 1rem;
            margin-bottom: 0.5rem;
            border-radius: 8px;
            color: #2c3e50;
            text-decoration: none;
            transition: all 0.3s;
            border: 1px solid transparent;
        }

        .orden-sidebar-item:hover {
            background: #f8f9fa;
            border-color: #e9ecef;
            transform: translateX(5px);
        }

        .orden-sidebar-item.active {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-color: #667eea;
        }

        .orden-sidebar-item .badge {
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
        }

        .orden-sidebar-item.active .badge {
            background: rgba(255, 255, 255, 0.2);
        }

        /* Información del orden */
        .info-orden-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            padding: 1.5rem;
            margin-top: 1.5rem;
        }

        .info-orden-card h6 {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 1rem;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 0.5rem;
        }

        /* Grid de especies */
        .especies-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .especie-card-detalle {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
            height: 100%;
        }

        .especie-card-detalle:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .especie-imagen-container {
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .especie-imagen-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .especie-card-detalle:hover .especie-imagen-container img {
            transform: scale(1.1);
        }

        .especie-imagen-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
            display: flex;
            align-items: flex-end;
            padding: 1rem;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .especie-card-detalle:hover .especie-imagen-overlay {
            opacity: 1;
        }

        .especie-content {
            padding: 1.5rem;
        }

        .especie-nombre-cientifico {
            color: #2c3e50;
            font-weight: 600;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .especie-nombre-comun {
            color: #7f8c8d;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .especie-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid #f0f0f0;
        }

        /* Estadísticas del orden */
        .estadisticas-orden {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1rem;
            margin: 2rem 0;
        }

        .estadistica-item {
            background: white;
            border-radius: 10px;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .estadistica-valor {
            font-size: 2rem;
            font-weight: 700;
            color: #667eea;
            margin-bottom: 0.5rem;
        }

        .estadistica-label {
            color: #7f8c8d;
            font-size: 0.9rem;
        }

        /* Estado vacío */
        .empty-state-orden {
            text-align: center;
            padding: 3rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .empty-state-orden i {
            font-size: 4rem;
            color: #bdc3c7;
            margin-bottom: 1.5rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .orden-titulo {
                font-size: 2.5rem;
            }

            .orden-subtitulo {
                font-size: 1.2rem;
            }

            .especies-grid {
                grid-template-columns: 1fr;
            }

            .sidebar-ordenes {
                margin-bottom: 2rem;
                position: static;
            }
        }

        /* Animaciones */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .especie-card-detalle {
            animation: fadeInUp 0.5s ease-out forwards;
            opacity: 0;
        }
    </style>
</head>

<body>
    @include('includes.navbar-ordenes')

    <!-- Header del orden -->
    <div class="page-header">
        <div class="container">
            <div class="header-content">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                        </nav>
                        <h1 class="orden-titulo">{{ $orden }}</h1>
                        <p class="orden-subtitulo">{{ $descripcion }}</p>

                        <div class="d-flex flex-wrap gap-2">
                            @php
                            $tiposMetamorfosis = $especies->pluck('tipo_metamorfosis')->unique();
                            @endphp
                            @foreach($tiposMetamorfosis as $tipo)
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="header-icon">
                            <i class="fas fa-bug" style="font-size: 8rem; opacity: 0.3;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="row">
            <!-- Sidebar con lista de órdenes -->
            <div class="col-lg-3">
                <div class="sidebar-ordenes">
                    <div class="sidebar-header">
                        <h5>
                            <i class="fas fa-list-ul me-2"></i>Todos los Órdenes
                        </h5>
                        <p class="small text-muted mb-0">{{ count($todosOrdenes) }} órdenes registrados</p>
                    </div>

                    <div class="ordenes-list">
                        @foreach($todosOrdenes as $ordenItem)
                        @php
                        $especiesCount = $estadisticas[$ordenItem] ?? 0;
                        @endphp
                        <a href="{{ route('orden.dinamico', ['orden' => urlencode($ordenItem)]) }}"
                            class="orden-sidebar-item {{ $orden == $ordenItem ? 'active' : '' }}">
                            <span>{{ $ordenItem }}</span>
                            <span class="badge">{{ $especiesCount }}</span>
                        </a>
                        @endforeach
                    </div>

                    <!-- Información del orden -->
                    <div class="info-orden-card">
                        <h6>
                            <i class="fas fa-info-circle me-2"></i>Acerca de este orden
                        </h6>
                        <p class="small mb-0">{{ $descripcion }}</p>

                        @if($familiaPrincipal)
                        <div class="mt-3">
                            <p class="small mb-1">
                                <strong>Familia principal:</strong> {{ $familiaPrincipal }}
                            </p>
                        </div>
                        @endif

                        <div class="mt-3">
                            <a href="https://es.wikipedia.org/wiki/{{ str_replace(' ', '_', $orden) }}"
                                target="_blank"
                                class="btn btn-sm btn-outline-primary w-100">
                                <i class="fab fa-wikipedia-w me-1"></i>Ver en Wikipedia
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contenido principal: Especies -->
            <div class="col-lg-9">
             
                <!-- Barra de acciones -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>
                        <i></i>Especies de {{ $orden }}
                        <span class="badge bg-primary fs-6">{{ $totalEspecies }}</span>
                    </h2>
                </div>

                @if($especies->count() > 0)
                <!-- Grid de especies -->
                <div class="especies-grid" id="especiesContainer">
                    @foreach($especies as $especie)
                    @php
                    // Obtener imagen principal
                    $imagenPrincipal = $especie->imagenesMorfologicas
                    ->where('tipo_imagen', 'completa')
                    ->first();

                    // Obtener primera imagen si no hay completa
                    if (!$imagenPrincipal && $especie->imagenesMorfologicas->count() > 0) {
                    $imagenPrincipal = $especie->imagenesMorfologicas->first();
                    }

                    // Contar etapas de vida
                    $etapasCount = $especie->ciclosVida->count();
                    @endphp

                    <div class="especie-card-detalle"
                        data-nombre="{{ strtolower($especie->nombre_cientifico) }}"
                        data-familia="{{ strtolower($especie->familia) }}"
                        data-metamorfosis="{{ strtolower($especie->tipo_metamorfosis) }}"
                        style="animation-delay: {{ $loop->index * 0.1 }}s">
                        <div class="especie-imagen-container">
                            @if($imagenPrincipal)
                            <img src="{{ asset('storage/' . $imagenPrincipal->ruta_imagen) }}"
                                alt="{{ $especie->nombre_cientifico }}">
                            @else
                            <div class="especie-imagen-container bg-light d-flex align-items-center justify-content-center">
                                <i class="fas fa-bug fa-3x text-muted"></i>
                            </div>
                            @endif
                            <div class="especie-imagen-overlay">
                                <span class="badge bg-light text-dark">
                                    <i class="fas fa-camera me-1"></i>
                                    {{ $especie->imagenesMorfologicas->count() }} imágenes
                                </span>
                            </div>
                        </div>

                        <div class="especie-content">
                            <h5 class="especie-nombre-cientifico">
                                {{ $especie->nombre_cientifico }}
                            </h5>
                            <p class="especie-nombre-comun">
                                <i class="fas fa-tag me-1"></i>{{ $especie->nombre_comun }}
                            </p>

                            <div class="especie-info">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <small class="text-muted d-block">Familia:</small>
                                        <p class="mb-0">{{ $especie->familia ?? 'No especificada' }}</p>
                                    </div>
                                    <div class="col-6">
                                        <small class="text-muted d-block">Género:</small>
                                        <p class="mb-0">{{ $especie->genero ?? 'No especificado' }}</p>
                                    </div>
                                </div>

                                @if($especie->detalle_general && $especie->detalle_general != 'Sin descripción')
                                <div class="mt-2">
                                    <p class="small text-muted mb-0">
                                        {{ Str::limit($especie->detalle_general, 100) }}
                                    </p>
                                </div>
                                @endif
                            </div>

                            
                        </div>

                        {{-- ENCONTRAR ESTA PARTE --}}
                        <div class="especie-footer p-3 border-top">
    <div class="d-grid">
        {{-- Este botón ya está correcto --}}
        <a href="{{ route('especies.show', $especie->id) }}" 
           class="btn btn-sm btn-primary">
            <i class="fas fa-eye me-1"></i>Ver detalles
        </a>
    </div>
</div>
                    </div>
                    @endforeach
                </div>
                @else
                <!-- Estado vacío -->
                <div class="empty-state-orden">
                    <i class="fas fa-bug"></i>
                    <h3 class="mb-3">No hay especies registradas</h3>
                    <p class="text-muted mb-4">
                        Aún no se han registrado especies en el orden <strong>{{ $orden }}</strong>.
                    </p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="{{ route('formulario-nueva-especie') }}?orden={{ urlencode($orden) }}"
                            class="btn btn-primary">
                            <i class="fas fa-plus me-1"></i>Agregar primera especie
                        </a>
                        <a href="{{ route('coleccion') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left me-1"></i>Volver a órdenes
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Scripts para filtros -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchEspecies');
            const filterFamilia = document.getElementById('filterFamilia');
            const filterMetamorfosis = document.getElementById('filterMetamorfosis');
            const especieCards = document.querySelectorAll('.especie-card-detalle');

            function filtrarEspecies() {
                const searchTerm = searchInput.value.toLowerCase();
                const familiaSeleccionada = filterFamilia.value.toLowerCase();
                const metamorfosisSeleccionada = filterMetamorfosis.value.toLowerCase();

                especieCards.forEach(card => {
                    const nombre = card.dataset.nombre;
                    const familia = card.dataset.familia;
                    const metamorfosis = card.dataset.metamorfosis;

                    let mostrar = true;

                    // Filtrar por búsqueda
                    if (searchTerm && !nombre.includes(searchTerm)) {
                        mostrar = false;
                    }

                    // Filtrar por familia
                    if (familiaSeleccionada && familia !== familiaSeleccionada) {
                        mostrar = false;
                    }

                    // Filtrar por metamorfosis
                    if (metamorfosisSeleccionada && metamorfosis !== metamorfosisSeleccionada) {
                        mostrar = false;
                    }

                    // Aplicar visibilidad
                    if (mostrar) {
                        card.style.display = 'block';
                        card.style.animation = 'fadeInUp 0.5s ease-out';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }

            // Event listeners
            searchInput.addEventListener('input', filtrarEspecies);
            filterFamilia.addEventListener('change', filtrarEspecies);
            filterMetamorfosis.addEventListener('change', filtrarEspecies);

            // Navegación con teclado
            document.addEventListener('keydown', function(e) {
                if (e.key === '/' && e.target !== searchInput) {
                    e.preventDefault();
                    searchInput.focus();
                }

                if (e.key === 'Escape') {
                    searchInput.value = '';
                    filterFamilia.value = '';
                    filterMetamorfosis.value = '';
                    filtrarEspecies();
                }
            });
        });
    </script>

    @include('includes.footer-coleccion')
</body>

</html>