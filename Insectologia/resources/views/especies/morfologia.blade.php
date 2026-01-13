<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morfología - {{ $especie->nombre_cientifico ?? 'Especie' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite('resources/css/morfologia.css')
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-bg: #f8f9fa;
            --dark-text: #2c3e50;
            --light-text: #7f8c8d;
        }

        .header-bg {
            background: linear-gradient(135deg, var(--primary-color), #34495e);
            color: white;
            padding: 2.5rem 0;
            margin-bottom: 2rem;
            border-radius: 0 0 15px 15px;
        }

        .info-badge {
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            padding: 5px 15px;
            margin: 0 5px;
            font-size: 0.9rem;
            display: inline-block;
        }

        .morfologia-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 25px;
            margin-bottom: 30px;
            transition: transform 0.3s, box-shadow 0.3s;
            border: 1px solid #eaeaea;
        }

        .morfologia-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .parte-title-box {
            background: linear-gradient(135deg, var(--secondary-color), #2980b9);
            color: white;
            padding: 12px 20px;
            border-radius: 10px;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .parte-image-container {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 25px;
            border: 2px dashed #dee2e6;
            text-align: center;
            min-height: 300px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .parte-image {
            max-width: 100%;
            max-height: 400px;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.3s;
            object-fit: contain;
        }

        .parte-image:hover {
            transform: scale(1.02);
        }

        .no-image {
            color: #6c757d;
            padding: 40px 20px;
        }

        .descripcion-container {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            border-left: 4px solid var(--secondary-color);
        }

        .section-title {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #eaeaea;
        }

        .descripcion-text {
            background: white;
            padding: 15px;
            border-radius: 8px;
            border-left: 3px solid var(--accent-color);
            font-style: italic;
            line-height: 1.6;
            color: var(--dark-text);
        }

        .feature-highlight {
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            border: 1px solid #90caf9;
        }

        .caracteristica-item {
            background: white;
            padding: 12px 15px;
            margin: 8px 0;
            border-radius: 8px;
            border-left: 3px solid var(--secondary-color);
            display: flex;
            align-items: center;
            transition: transform 0.2s;
        }

        .caracteristica-item:hover {
            transform: translateX(5px);
            background: #f0f8ff;
        }

        .caracteristica-item i {
            color: var(--secondary-color);
            margin-right: 10px;
            font-size: 1.1rem;
        }

        /* Estilos para partes dinámicas */
        .dynamic-partes-container {
            padding: 20px;
        }

        .dynamic-parte-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            padding: 20px;
            height: 100%;
            border: 1px solid #eaeaea;
            transition: all 0.3s ease;
        }

        .dynamic-parte-card:hover {
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
            border-color: var(--secondary-color);
        }

        .dynamic-parte-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 15px;
            margin-bottom: 15px;
            border-bottom: 2px solid #f0f0f0;
        }

        .dynamic-parte-icon {
            font-size: 1.3rem;
            color: var(--secondary-color);
            margin-right: 10px;
        }

        .dynamic-parte-image {
            max-width: 100%;
            max-height: 250px;
            border-radius: 8px;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            object-fit: contain;
        }

        .no-partes-message {
            text-align: center;
            padding: 60px 20px;
            color: var(--light-text);
        }

        /* Estilos para tabs */
        .nav-pills .nav-link {
            border-radius: 25px;
            padding: 10px 25px;
            margin: 0 5px;
            color: var(--dark-text);
            border: 1px solid #dee2e6;
            background: white;
            transition: all 0.3s;
        }

        .nav-pills .nav-link:hover {
            background: #f8f9fa;
            transform: translateY(-2px);
        }

        .nav-pills .nav-link.active {
            background: linear-gradient(135deg, var(--secondary-color), #2980b9);
            color: white;
            border-color: var(--secondary-color);
            box-shadow: 0 4px 10px rgba(52, 152, 219, 0.3);
        }

        /* Modal estilizado */
        .modal-header.bg-dark {
            background: linear-gradient(135deg, #2c3e50, #34495e) !important;
        }

        .modal-content {
            border-radius: 15px;
            overflow: hidden;
            border: none;
        }

        /* Animaciones */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            animation: fadeIn 0.6s ease-out;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-bg { padding: 1.5rem 0; }
            .info-badge { margin: 5px; font-size: 0.8rem; }
            .morfologia-card { padding: 15px; }
            .nav-pills .nav-link { padding: 8px 15px; margin: 3px; }
        }
    </style>
</head>

<body class="bg-light">
    @include('includes.navbar-metamorfosis')

    <div class="header-bg">
        <div class="container text-center">
            <h1 class="display-6 fw-bold">Morfología - {{ $especie->nombre_cientifico ?? 'Especie' }}</h1>
            <p class="lead mb-0">{{ $especie->nombre_comun ?? 'Nombre común' }}</p>
            <div class="mt-3">
                <span class="info-badge">
                    <i class="fas fa-dna me-1"></i>Orden: {{ $especie->orden ?? 'No especificado' }}
                </span>
                <span class="info-badge">
                    <i class="fas fa-project-diagram me-1"></i>Familia: {{ $especie->familia ?? 'No especificada' }}
                </span>
                <span class="info-badge">
                    <i class="fas fa-seedling me-1"></i>Especie: {{ $especie->especie ?? 'No especificada' }}
                </span>
            </div>
        </div>
    </div>

    <div class="container my-4 fade-in">
        <!-- Navegación por partes morfológicas -->
        <div class="row mb-4">
            <div class="col-12">
                <ul class="nav nav-pills justify-content-center" id="partesTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="completa-tab" data-bs-toggle="pill" data-bs-target="#completa" type="button" role="tab" aria-controls="completa" aria-selected="true">
                            <i class="fas fa-bug me-2"></i>Completo
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="cabeza-tab" data-bs-toggle="pill" data-bs-target="#cabeza" type="button" role="tab" aria-controls="cabeza" aria-selected="false">
                            <i class="fas fa-brain me-2"></i>Cabeza
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="torax-tab" data-bs-toggle="pill" data-bs-target="#torax" type="button" role="tab" aria-controls="torax" aria-selected="false">
                            <i class="fas fa-arrows-alt me-2"></i>Tórax
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="abdomen-tab" data-bs-toggle="pill" data-bs-target="#abdomen" type="button" role="tab" aria-controls="abdomen" aria-selected="false">
                            <i class="fas fa-ellipsis-h me-2"></i>Abdomen
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="patas-tab" data-bs-toggle="pill" data-bs-target="#patas" type="button" role="tab" aria-controls="patas" aria-selected="false">
                            <i class="fas fa-walking me-2"></i>Patas
                        </button>
                    </li>
                    
                    @if(isset($partesDinamicas) && count($partesDinamicas) > 0)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="partes-dinamicas-tab" data-bs-toggle="pill"
                            data-bs-target="#partes-dinamicas" type="button" role="tab"
                            aria-controls="partes-dinamicas" aria-selected="false">
                            <i class="fas fa-plus-circle me-2"></i>Partes Adicionales
                            <span class="badge bg-primary ms-1">{{ count($partesDinamicas) }}</span>
                        </button>
                    </li>
                    @endif
                </ul>
            </div>
        </div>

        <!-- Contenido de las partes morfológicas -->
        <div class="tab-content" id="partesTabContent">
<!-- Imagen Completa -->
<div class="tab-pane fade show active" id="completa" role="tabpanel" aria-labelledby="completa-tab">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
            <div class="morfologia-card">
                <div class="parte-title-box">
                    <i class="fas fa-bug me-2"></i>VISTA COMPLETA DEL INSECTO
                </div>

                <div class="parte-image-container">
                    @if(isset($partesMorfologicas['completa']['imagen']) && Storage::exists('public/' . $partesMorfologicas['completa']['imagen']))
                    <img src="{{ Storage::url($partesMorfologicas['completa']['imagen']) }}"
                        class="parte-image"
                        alt="Vista completa de {{ $especie->nombre_comun }}"
                        data-bs-toggle="modal"
                        data-bs-target="#imagenModal"
                        onclick="cambiarImagenModal('{{ Storage::url($partesMorfologicas['completa']['imagen']) }}', '{{ $especie->nombre_comun }} - Vista completa')">
                    <div class="mt-3">
                        <small class="text-muted">Haz clic en la imagen para ampliar</small>
                    </div>
                    @elseif($especie->imagen_completa && Storage::exists('public/' . $especie->imagen_completa))
                    <!-- Fallback a campo antiguo -->
                    <img src="{{ Storage::url($especie->imagen_completa) }}"
                        class="parte-image"
                        alt="Vista completa de {{ $especie->nombre_comun }}"
                        data-bs-toggle="modal"
                        data-bs-target="#imagenModal"
                        onclick="cambiarImagenModal('{{ Storage::url($especie->imagen_completa) }}', '{{ $especie->nombre_comun }} - Vista completa')">
                    <div class="mt-3">
                        <small class="text-muted">Haz clic en la imagen para ampliar</small>
                    </div>
                    @else
                    <div class="no-image">
                        <div class="text-center">
                            <i class="fas fa-image fa-3x mb-3 text-muted"></i>
                            <p class="mb-0 fs-5">Imagen no disponible</p>
                            <small class="text-muted">No se ha cargado imagen completa del insecto</small>
                        </div>
                    </div>
                    @endif
                </div>

                <div class="descripcion-container">
                    <h5 class="section-title">
                        <i class="fas fa-clipboard-list me-2"></i>DESCRIPCIÓN GENERAL
                    </h5>

                    @if(isset($partesMorfologicas['completa']['descripcion']) && !empty($partesMorfologicas['completa']['descripcion']))
                    <div class="descripcion-text">
                        <i class="fas fa-quote-left text-muted me-2"></i>
                        {{ $partesMorfologicas['completa']['descripcion'] }}
                    </div>
                    @elseif($especie->descripcion_completa)
                    <div class="descripcion-text">
                        <i class="fas fa-quote-left text-muted me-2"></i>
                        {{ $especie->descripcion_completa }}
                    </div>
                    @elseif($especie->detalle_general)
                    <div class="descripcion-text">
                        <i class="fas fa-quote-left text-muted me-2"></i>
                        {{ $especie->detalle_general }}
                    </div>
                    @else
                    <div class="alert alert-info text-center">
                        <i class="fas fa-info-circle me-2"></i>
                        No hay descripción general disponible.
                    </div>
                    @endif

                                <div class="feature-highlight mt-4">
                                    <div class="text-center">
                                        <h6 class="fw-bold text-dark">Información Taxonómica</h6>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="caracteristica-item">
                                                <i class="fas fa-dna"></i>
                                                <div>
                                                    <strong>Orden:</strong> {{ $especie->orden ?? 'No especificado' }}
                                                </div>
                                            </div>
                                            <div class="caracteristica-item">
                                                <i class="fas fa-project-diagram"></i>
                                                <div>
                                                    <strong>Familia:</strong> {{ $especie->familia ?? 'No especificada' }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="caracteristica-item">
                                                <i class="fas fa-tag"></i>
                                                <div>
                                                    <strong>Género:</strong> {{ $especie->genero ?? 'No especificado' }}
                                                </div>
                                            </div>
                                            <div class="caracteristica-item">
                                                <i class="fas fa-leaf"></i>
                                                <div>
                                                    <strong>Especie:</strong> {{ $especie->especie ?? 'No especificada' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- Cabeza -->
<div class="tab-pane fade" id="cabeza" role="tabpanel" aria-labelledby="cabeza-tab">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="morfologia-card">
                <div class="parte-title-box">
                    <i class="fas fa-brain me-2"></i>ESTRUCTURA CEFÁLICA
                </div>

                <div class="parte-image-container">
                    @if(isset($partesMorfologicas['cabeza']['imagen']) && Storage::exists('public/' . $partesMorfologicas['cabeza']['imagen']))
                    <img src="{{ Storage::url($partesMorfologicas['cabeza']['imagen']) }}"
                        class="parte-image"
                        alt="Cabeza de {{ $especie->nombre_comun }}"
                        data-bs-toggle="modal"
                        data-bs-target="#imagenModal"
                        onclick="cambiarImagenModal('{{ Storage::url($partesMorfologicas['cabeza']['imagen']) }}', 'Cabeza de {{ $especie->nombre_comun }}')">
                    <div class="mt-3">
                        <small class="text-muted">Haz clic en la imagen para ampliar</small>
                    </div>
                    @elseif($especie->imagen_cabeza && Storage::exists('public/' . $especie->imagen_cabeza))
                    <!-- Fallback a campo antiguo -->
                    <img src="{{ Storage::url($especie->imagen_cabeza) }}"
                        class="parte-image"
                        alt="Cabeza de {{ $especie->nombre_comun }}"
                        data-bs-toggle="modal"
                        data-bs-target="#imagenModal"
                        onclick="cambiarImagenModal('{{ Storage::url($especie->imagen_cabeza) }}', 'Cabeza de {{ $especie->nombre_comun }}')">
                    <div class="mt-3">
                        <small class="text-muted">Haz clic en la imagen para ampliar</small>
                    </div>
                    @else
                    <div class="no-image">
                        <div class="text-center">
                            <i class="fas fa-image fa-3x mb-3 text-muted"></i>
                            <p class="mb-0 fs-5">Imagen no disponible</p>
                            <small class="text-muted">No se ha cargado imagen de la cabeza</small>
                        </div>
                    </div>
                    @endif
                </div>

                <div class="descripcion-container">
                    <h5 class="section-title">
                        <i class="fas fa-clipboard-list me-2"></i>DESCRIPCIÓN MORFOLÓGICA
                    </h5>

                    @if(isset($partesMorfologicas['cabeza']['descripcion']) && !empty($partesMorfologicas['cabeza']['descripcion']))
                    <div class="descripcion-text">
                        <i class="fas fa-quote-left text-muted me-2"></i>
                        {{ $partesMorfologicas['cabeza']['descripcion'] }}
                    </div>
                    @elseif($especie->descripcion_cabeza)
                    <div class="descripcion-text">
                        <i class="fas fa-quote-left text-muted me-2"></i>
                        {{ $especie->descripcion_cabeza }}
                    </div>
                    @else
                    <div class="alert alert-info text-center">
                        <i class="fas fa-info-circle me-2"></i>
                        No hay descripción morfológica disponible para la cabeza.
                    </div>
                    @endif

                                <div class="feature-highlight mt-4">
                                    <div class="text-center">
                                        <h6 class="fw-bold text-dark">Características Principales</h6>
                                    </div>
                                    <div class="caracteristica-item">
                                        <i class="fas fa-eye"></i>
                                        <div>
                                            <strong>Ojos:</strong> Compuestos y simples presentes
                                        </div>
                                    </div>
                                    <div class="caracteristica-item">
                                        <i class="fas fa-wave-square"></i>
                                        <div>
                                            <strong>Antenas:</strong> Segmentadas y móviles
                                        </div>
                                    </div>
                                    <div class="caracteristica-item">
                                        <i class="fas fa-teeth"></i>
                                        <div>
                                            <strong>Piezas bucales:</strong> Adaptadas según hábito alimenticio
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- Tórax -->
<div class="tab-pane fade" id="torax" role="tabpanel" aria-labelledby="torax-tab">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="morfologia-card">
                <div class="parte-title-box">
                    <i class="fas fa-arrows-alt me-2"></i>ESTRUCTURA TORÁCICA
                </div>

                <div class="parte-image-container">
                    @if(isset($partesMorfologicas['torax']['imagen']) && Storage::exists('public/' . $partesMorfologicas['torax']['imagen']))
                    <img src="{{ Storage::url($partesMorfologicas['torax']['imagen']) }}"
                        class="parte-image"
                        alt="Tórax de {{ $especie->nombre_comun }}"
                        data-bs-toggle="modal"
                        data-bs-target="#imagenModal"
                        onclick="cambiarImagenModal('{{ Storage::url($partesMorfologicas['torax']['imagen']) }}', 'Tórax de {{ $especie->nombre_comun }}')">
                    <div class="mt-3">
                        <small class="text-muted">Haz clic en la imagen para ampliar</small>
                    </div>
                    @elseif($especie->imagen_torax && Storage::exists('public/' . $especie->imagen_torax))
                    <!-- Fallback a campo antiguo -->
                    <img src="{{ Storage::url($especie->imagen_torax) }}"
                        class="parte-image"
                        alt="Tórax de {{ $especie->nombre_comun }}"
                        data-bs-toggle="modal"
                        data-bs-target="#imagenModal"
                        onclick="cambiarImagenModal('{{ Storage::url($especie->imagen_torax) }}', 'Tórax de {{ $especie->nombre_comun }}')">
                    <div class="mt-3">
                        <small class="text-muted">Haz clic en la imagen para ampliar</small>
                    </div>
                    @else
                    <div class="no-image">
                        <div class="text-center">
                            <i class="fas fa-image fa-3x mb-3 text-muted"></i>
                            <p class="mb-0 fs-5">Imagen no disponible</p>
                            <small class="text-muted">No se ha cargado imagen del tórax</small>
                        </div>
                    </div>
                    @endif
                </div>

                <div class="descripcion-container">
                    <h5 class="section-title">
                        <i class="fas fa-clipboard-list me-2"></i>DESCRIPCIÓN MORFOLÓGICA
                    </h5>

                    @if(isset($partesMorfologicas['torax']['descripcion']) && !empty($partesMorfologicas['torax']['descripcion']))
                    <div class="descripcion-text">
                        <i class="fas fa-quote-left text-muted me-2"></i>
                        {{ $partesMorfologicas['torax']['descripcion'] }}
                    </div>
                    @elseif($especie->descripcion_torax)
                    <div class="descripcion-text">
                        <i class="fas fa-quote-left text-muted me-2"></i>
                        {{ $especie->descripcion_torax }}
                    </div>
                    @else
                    <div class="alert alert-info text-center">
                        <i class="fas fa-info-circle me-2"></i>
                        No hay descripción morfológica disponible para el tórax.
                    </div>
                    @endif

                                <div class="feature-highlight mt-4">
                                    <div class="text-center">
                                        <h6 class="fw-bold text-dark">Segmentación Torácica</h6>
                                    </div>
                                    <div class="caracteristica-item">
                                        <i class="fas fa-layer-group"></i>
                                        <div>
                                            <strong>Prototórax:</strong> Primer segmento con patas anteriores
                                        </div>
                                    </div>
                                    <div class="caracteristica-item">
                                        <i class="fas fa-layer-group"></i>
                                        <div>
                                            <strong>Mesotórax:</strong> Segmento medio con patas y alas anteriores
                                        </div>
                                    </div>
                                    <div class="caracteristica-item">
                                        <i class="fas fa-layer-group"></i>
                                        <div>
                                            <strong>Metatórax:</strong> Segmento posterior con patas y alas posteriores
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- Abdomen -->
<div class="tab-pane fade" id="abdomen" role="tabpanel" aria-labelledby="abdomen-tab">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="morfologia-card">
                <div class="parte-title-box">
                    <i class="fas fa-ellipsis-h me-2"></i>ESTRUCTURA ABDOMINAL
                </div>

                <div class="parte-image-container">
                    @if(isset($partesMorfologicas['abdomen']['imagen']) && Storage::exists('public/' . $partesMorfologicas['abdomen']['imagen']))
                    <img src="{{ Storage::url($partesMorfologicas['abdomen']['imagen']) }}"
                        class="parte-image"
                        alt="Abdomen de {{ $especie->nombre_comun }}"
                        data-bs-toggle="modal"
                        data-bs-target="#imagenModal"
                        onclick="cambiarImagenModal('{{ Storage::url($partesMorfologicas['abdomen']['imagen']) }}', 'Abdomen de {{ $especie->nombre_comun }}')">
                    <div class="mt-3">
                        <small class="text-muted">Haz clic en la imagen para ampliar</small>
                    </div>
                    @elseif($especie->imagen_abdomen && Storage::exists('public/' . $especie->imagen_abdomen))
                    <!-- Fallback a campo antiguo -->
                    <img src="{{ Storage::url($especie->imagen_abdomen) }}"
                        class="parte-image"
                        alt="Abdomen de {{ $especie->nombre_comun }}"
                        data-bs-toggle="modal"
                        data-bs-target="#imagenModal"
                        onclick="cambiarImagenModal('{{ Storage::url($especie->imagen_abdomen) }}', 'Abdomen de {{ $especie->nombre_comun }}')">
                    <div class="mt-3">
                        <small class="text-muted">Haz clic en la imagen para ampliar</small>
                    </div>
                    @else
                    <div class="no-image">
                        <div class="text-center">
                            <i class="fas fa-image fa-3x mb-3 text-muted"></i>
                            <p class="mb-0 fs-5">Imagen no disponible</p>
                            <small class="text-muted">No se ha cargado imagen del abdomen</small>
                        </div>
                    </div>
                    @endif
                </div>

                <div class="descripcion-container">
                    <h5 class="section-title">
                        <i class="fas fa-clipboard-list me-2"></i>DESCRIPCIÓN MORFOLÓGICA
                    </h5>

                    @if(isset($partesMorfologicas['abdomen']['descripcion']) && !empty($partesMorfologicas['abdomen']['descripcion']))
                    <div class="descripcion-text">
                        <i class="fas fa-quote-left text-muted me-2"></i>
                        {{ $partesMorfologicas['abdomen']['descripcion'] }}
                    </div>
                    @elseif($especie->descripcion_abdomen)
                    <div class="descripcion-text">
                        <i class="fas fa-quote-left text-muted me-2"></i>
                        {{ $especie->descripcion_abdomen }}
                    </div>
                    @else
                    <div class="alert alert-info text-center">
                        <i class="fas fa-info-circle me-2"></i>
                        No hay descripción morfológica disponible para el abdomen.
                    </div>
                    @endif

                                <div class="feature-highlight mt-4">
                                    <div class="text-center">
                                        <h6 class="fw-bold text-dark">Segmentación Abdominal</h6>
                                    </div>
                                    <div class="caracteristica-item">
                                        <i class="fas fa-grip-lines"></i>
                                        <div>
                                            <strong>Segmentos:</strong> 9-11 segmentos visibles
                                        </div>
                                    </div>
                                    <div class="caracteristica-item">
                                        <i class="fas fa-asterisk"></i>
                                        <div>
                                            <strong>Apéndices:</strong> Cercos y ovipositor en algunas especies
                                        </div>
                                    </div>
                                    <div class="caracteristica-item">
                                        <i class="fas fa-wind"></i>
                                        <div>
                                            <strong>Espiráculos:</strong> Aberturas respiratorias laterales
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- Patas -->
<div class="tab-pane fade" id="patas" role="tabpanel" aria-labelledby="patas-tab">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="morfologia-card">
                <div class="parte-title-box">
                    <i class="fas fa-walking me-2"></i>ESTRUCTURA DE PATAS
                </div>

                <div class="parte-image-container">
                    @if(isset($partesMorfologicas['patas']['imagen']) && Storage::exists('public/' . $partesMorfologicas['patas']['imagen']))
                    <img src="{{ Storage::url($partesMorfologicas['patas']['imagen']) }}"
                        class="parte-image"
                        alt="Patas de {{ $especie->nombre_comun }}"
                        data-bs-toggle="modal"
                        data-bs-target="#imagenModal"
                        onclick="cambiarImagenModal('{{ Storage::url($partesMorfologicas['patas']['imagen']) }}', 'Patas de {{ $especie->nombre_comun }}')">
                    <div class="mt-3">
                        <small class="text-muted">Haz clic en la imagen para ampliar</small>
                    </div>
                    @elseif($especie->imagen_patas && Storage::exists('public/' . $especie->imagen_patas))
                    <!-- Fallback a campo antiguo -->
                    <img src="{{ Storage::url($especie->imagen_patas) }}"
                        class="parte-image"
                        alt="Patas de {{ $especie->nombre_comun }}"
                        data-bs-toggle="modal"
                        data-bs-target="#imagenModal"
                        onclick="cambiarImagenModal('{{ Storage::url($especie->imagen_patas) }}', 'Patas de {{ $especie->nombre_comun }}')">
                    <div class="mt-3">
                        <small class="text-muted">Haz clic en la imagen para ampliar</small>
                    </div>
                    @else
                    <div class="no-image">
                        <div class="text-center">
                            <i class="fas fa-image fa-3x mb-3 text-muted"></i>
                            <p class="mb-0 fs-5">Imagen no disponible</p>
                            <small class="text-muted">No se ha cargado imagen de las patas</small>
                        </div>
                    </div>
                    @endif
                </div>

                <div class="descripcion-container">
                    <h5 class="section-title">
                        <i class="fas fa-clipboard-list me-2"></i>DESCRIPCIÓN MORFOLÓGICA
                    </h5>

                    @if(isset($partesMorfologicas['patas']['descripcion']) && !empty($partesMorfologicas['patas']['descripcion']))
                    <div class="descripcion-text">
                        <i class="fas fa-quote-left text-muted me-2"></i>
                        {{ $partesMorfologicas['patas']['descripcion'] }}
                    </div>
                    @elseif($especie->descripcion_patas)
                    <div class="descripcion-text">
                        <i class="fas fa-quote-left text-muted me-2"></i>
                        {{ $especie->descripcion_patas }}
                    </div>
                    @else
                    <div class="alert alert-info text-center">
                        <i class="fas fa-info-circle me-2"></i>
                        No hay descripción morfológica disponible para las patas.
                    </div>
                    @endif

                                <div class="feature-highlight mt-4">
                                    <div class="text-center">
                                        <h6 class="fw-bold text-dark">Estructura de las Patas</h6>
                                    </div>
                                    <div class="caracteristica-item">
                                        <i class="fas fa-bone"></i>
                                        <div>
                                            <strong>Coxa:</strong> Segmento basal de la pata
                                        </div>
                                    </div>
                                    <div class="caracteristica-item">
                                        <i class="fas fa-bone"></i>
                                        <div>
                                            <strong>Fémur:</strong> Segmento principal y robusto
                                        </div>
                                    </div>
                                    <div class="caracteristica-item">
                                        <i class="fas fa-bone"></i>
                                        <div>
                                            <strong>Tibia:</strong> Segmento alargado con espinas
                                        </div>
                                    </div>
                                    <div class="caracteristica-item">
                                        <i class="fas fa-paw"></i>
                                        <div>
                                            <strong>Tarso:</strong> Segmentos terminales con uñas
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Partes Dinámicas -->
             
            @if(isset($partesDinamicas) && count($partesDinamicas) > 0)
            <div class="tab-pane fade" id="partes-dinamicas" role="tabpanel" aria-labelledby="partes-dinamicas-tab">
               
 <!-- DEBUG -->
    <div class="alert alert-info">
        <p>Número de partes: {{ count($partesDinamicas) }}</p>
        <pre>@php print_r($partesDinamicas) @endphp</pre>
    </div>

            <div class="dynamic-partes-container">
                    <div class="row">
                        @foreach($partesDinamicas as $index => $parte)
                        <div class="col-lg-6 col-md-12 mb-4">
                            <div class="dynamic-parte-card">
                                <div class="dynamic-parte-header">
                                    <div>
                                        @php
                                        $icono = match($parte['tipo']) {
                                            'alas' => 'fa-feather-alt',
                                            'antenas' => 'fa-wave-square',
                                            'piezas_bucales' => 'fa-teeth',
                                            'ojos' => 'fa-eye',
                                            'patas_especializadas' => 'fa-walking',
                                            'apendices' => 'fa-asterisk',
                                            default => 'fa-plus-circle'
                                        };
                                        @endphp
                                        <i class="fas {{ $icono }} dynamic-parte-icon"></i>
                                        <strong>{{ $parte['nombre'] ?? 'Parte ' . ($index + 1) }}</strong>
                                    </div>
                                    <span class="badge bg-light text-dark">Parte {{ $index + 1 }}</span>
                                </div>

                                <div class="dynamic-parte-content">

                                  <!-- DEBUG de la imagen -->
                    <div class="alert alert-warning">
                        <p>Imagen path: {{ $parte['imagen'] ?? 'No hay imagen' }}</p>
                        <p>Storage exists: {{ Storage::disk('public')->exists($parte['imagen'] ?? '') ? 'Sí' : 'No' }}</p>
                    </div>
                    
                                    <!-- Imagen -->
                                    <div class="parte-image-container mb-3">
                                        @if(isset($parte['imagen']) && $parte['imagen'] && Storage::exists('public/' . $parte['imagen']))
                                        <img src="{{ Storage::url($parte['imagen']) }}"
                                            class="dynamic-parte-image"
                                            alt="{{ $parte['nombre'] ?? 'Parte adicional' }}"
                                            data-bs-toggle="modal"
                                            data-bs-target="#imagenModal"
                                            onclick="cambiarImagenModal('{{ Storage::url($parte['imagen']) }}', '{{ $parte['nombre'] ?? 'Parte adicional' }}')">
                                        <div class="mt-2">
                                            <small class="text-muted">Haz clic en la imagen para ampliar</small>
                                        </div>
                                        @else
                                        <div class="no-image text-center py-4">
                                            <i class="fas fa-image fa-2x mb-2 text-muted"></i>
                                            <p class="mb-0 text-muted">Imagen no disponible</p>
                                        </div>
                                        @endif
                                    </div>

                                    <!-- Descripción -->
                                    <div class="descripcion-container">
                                        <h6 class="section-title mb-3">
                                            <i class="fas fa-clipboard-list me-2"></i>DESCRIPCIÓN
                                        </h6>
                                        @if(isset($parte['descripcion']) && !empty(trim($parte['descripcion'])))
                                        <div class="descripcion-text">
                                            <i class="fas fa-quote-left text-muted me-2"></i>
                                            {{ $parte['descripcion'] }}
                                        </div>
                                        @else
                                        <div class="alert alert-info text-center py-2">
                                            <small><i class="fas fa-info-circle me-1"></i>No hay descripción disponible</small>
                                        </div>
                                        @endif
                                        
                                        @if(isset($parte['tipo']))
                                        <div class="mt-3">
                                            <small class="text-muted">
                                                <i class="fas fa-tag me-1"></i>Tipo: {{ $parte['tipo'] }}
                                            </small>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @else
            <div class="tab-pane fade" id="partes-dinamicas" role="tabpanel" aria-labelledby="partes-dinamicas-tab">
                <div class="no-partes-message">
                    <i class="fas fa-plus-circle fa-3x text-muted mb-3"></i>
                    <h4 class="text-muted">No hay partes adicionales registradas</h4>
                    <p class="text-muted">Esta especie no tiene partes morfológicas adicionales registradas.</p>
                </div>
            </div>
            @endif
        </div>

        <!-- Modal para imágenes -->
        <div class="modal fade" id="imagenModal" tabindex="-1" aria-labelledby="imagenModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header bg-dark text-white">
                        <h5 class="modal-title" id="imagenModalLabel">
                            <i class="fas fa-expand-alt me-2"></i>Vista Ampliada - Morfología
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center p-0">
                        <img id="modalImagenPrincipal" src="" class="img-fluid w-100" style="max-height: 80vh; object-fit: contain;" alt="">
                    </div>
                    <div class="modal-footer bg-light">
                        <small class="text-muted" id="modalDescripcion"></small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Botones de navegación -->
    <div class="container mb-4">
        <div class="d-flex justify-content-between">
            <a href="{{ route('coleccion') }}" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left me-2"></i>Volver a la Colección
            </a>
            <a href="{{ route('especies.metamorfosis', ['id' => $especie->id]) }}" class="btn btn-primary">
                Ver Metamorfosis <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function cambiarImagenModal(src, descripcion) {
            document.getElementById('modalImagenPrincipal').src = src;
            document.getElementById('modalDescripcion').textContent = descripcion;
        }

        // Efecto de carga suave
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.morfologia-card, .dynamic-parte-card');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    card.style.transition = 'all 0.6s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 200);
            });

            // Activar la pestaña de partes dinámicas si viene por URL
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.get('tab') === 'partes-dinamicas') {
                const tab = new bootstrap.Tab(document.getElementById('partes-dinamicas-tab'));
                tab.show();
            }
        });

        // Función para mostrar pestaña específica
        function mostrarPestania(parte) {
            const tabId = parte + '-tab';
            const tabElement = document.getElementById(tabId);

            if (tabElement) {
                const tab = new bootstrap.Tab(tabElement);
                tab.show();
            } else {
                // Si no existe la pestaña, redirigir a partes dinámicas
                const tabDinamica = document.getElementById('partes-dinamicas-tab');
                if (tabDinamica) {
                    const tab = new bootstrap.Tab(tabDinamica);
                    tab.show();
                }
            }
        }

        // Expandir todas las partes dinámicas con scroll
        function expandirPartesDinamicas() {
            const tab = new bootstrap.Tab(document.getElementById('partes-dinamicas-tab'));
            tab.show();

            // Scroll suave a la sección
            setTimeout(() => {
                document.getElementById('partes-dinamicas').scrollIntoView({
                    behavior: 'smooth'
                });
            }, 300);
        }
    </script>
</body>
</html>