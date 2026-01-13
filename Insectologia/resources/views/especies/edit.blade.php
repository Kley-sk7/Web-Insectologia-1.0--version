<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar {{ $especie->nombre_cientifico }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .form-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
        }

        .form-section {
            border-left: 4px solid #3498db;
            padding-left: 15px;
            margin-bottom: 30px;
        }

        .form-section h3 {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .btn-guardar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-guardar:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-cancelar {
            background: #6c757d;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-cancelar:hover {
            background: #5a6268;
            transform: translateY(-2px);
        }

        .image-preview {
            max-width: 200px;
            max-height: 200px;
            border-radius: 8px;
            margin: 10px 0;
            border: 2px solid #e9ecef;
        }

        .current-image {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .tab-content {
            padding: 20px 0;
        }

        .nav-tabs .nav-link.active {
            background: #3498db;
            color: white;
            border: none;
        }

        .nav-tabs .nav-link {
            color: #3498db;
            font-weight: 500;
        }
    </style>
</head>

<body class="bg-light">
    @include('includes.navbar-edit')

    <div class="container my-4">


        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>¡Error!</strong> Por favor corrige los siguientes errores:
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('especie.update', ['especie' => $especie->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-container">
                <!-- Pestañas para organizar el formulario -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="basico-tab" data-bs-toggle="tab" data-bs-target="#basico" type="button" role="tab">
                            <i class="fas fa-info-circle"></i> Información Básica
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="morfologia-tab" data-bs-toggle="tab" data-bs-target="#morfologia" type="button" role="tab">
                            <i class="fas fa-image"></i> Morfología
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ciclo-tab" data-bs-toggle="tab" data-bs-target="#ciclo" type="button" role="tab">
                            <i class="fas fa-sync-alt"></i> Ciclo de Vida
                        </button>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <!-- Pestaña de Información Básica -->
                    <div class="tab-pane fade show active" id="basico" role="tabpanel">
                        <div class="form-section">
                            <h3><i class="fas fa-bug"></i> Datos de la Especie</h3>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nombre_comun" class="form-label">Nombre Común *</label>
                                    <input type="text" class="form-control" id="nombre_comun" name="nombre_comun"
                                        value="{{ old('nombre_comun', $especie->nombre_comun) }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="nombre_cientifico" class="form-label">Nombre Científico *</label>
                                    <input type="text" class="form-control" id="nombre_cientifico" name="nombre_cientifico"
                                        value="{{ old('nombre_cientifico', $especie->nombre_cientifico) }}" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="detalle_general" class="form-label">Descripción General</label>
                                <textarea class="form-control" id="detalle_general" name="detalle_general" rows="4">{{ old('detalle_general', $especie->detalle_general) }}</textarea>
                            </div>
                        </div>

                        <div class="form-section">
                            <h3><i class="fas fa-sitemap"></i> Taxonomía</h3>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="orden" class="form-label">Orden *</label>
                                    <select class="form-select" id="orden" name="orden" required>
                                        <option value="">Seleccionar orden...</option>
                                        <option value="Orthoptera" {{ old('orden', $especie->orden) == 'Orthoptera' ? 'selected' : '' }}>Orthoptera</option>
                                        <option value="Hemiptera" {{ old('orden', $especie->orden) == 'Hemiptera' ? 'selected' : '' }}>Hemiptera</option>
                                        <option value="Hymenoptera" {{ old('orden', $especie->orden) == 'Hymenoptera' ? 'selected' : '' }}>Hymenoptera</option>
                                        <option value="Coleoptera" {{ old('orden', $especie->orden) == 'Coleoptera' ? 'selected' : '' }}>Coleoptera</option>
                                        <option value="Lepidoptera" {{ old('orden', $especie->orden) == 'Lepidoptera' ? 'selected' : '' }}>Lepidoptera</option>
                                        <option value="Diptera" {{ old('orden', $especie->orden) == 'Diptera' ? 'selected' : '' }}>Diptera</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="familia" class="form-label">Familia *</label>
                                    <input type="text" class="form-control" id="familia" name="familia"
                                        value="{{ old('familia', $especie->familia) }}" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="genero" class="form-label">Género *</label>
                                    <input type="text" class="form-control" id="genero" name="genero"
                                        value="{{ old('genero', $especie->genero) }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="especie" class="form-label">Especie *</label>
                                    <input type="text" class="form-control" id="especie" name="especie"
                                        value="{{ old('especie', $especie->especie) }}" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="tipo_metamorfosis" class="form-label">Tipo de Metamorfosis</label>
                                <select class="form-select" id="tipo_metamorfosis" name="tipo_metamorfosis">
                                    <option value="Holometabola" {{ old('tipo_metamorfosis', $especie->tipo_metamorfosis) == 'Holometabola' ? 'selected' : '' }}>Holometabola (Completa)</option>
                                    <option value="Hemimetabola" {{ old('tipo_metamorfosis', $especie->tipo_metamorfosis) == 'Hemimetabola' ? 'selected' : '' }}>Hemimetabola (Incompleta)</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Pestaña de Morfología -->
                    <div class="tab-pane fade" id="morfologia" role="tabpanel">
                        <div class="form-section">
                            <h3><i class="fas fa-camera"></i> Imágenes Morfológicas</h3>
                            <p class="text-muted">Puedes actualizar las imágenes existentes o agregar nuevas.</p>

                            @php
                            $tiposImagenes = [
                            'completa' => 'Imagen Completa',
                            'cabeza' => 'Cabeza',
                            'torax' => 'Tórax',
                            'abdomen' => 'Abdomen',
                            'patas' => 'Patas'
                            ];
                            @endphp

                            @foreach($tiposImagenes as $tipo => $label)
                            @php
                            $imagenActual = $especie->imagenesMorfologicas->where('tipo_imagen', $tipo)->first();
                            @endphp

                            <div class="current-image">
                                <h6>{{ $label }}</h6>

                                @if($imagenActual)
                                <div class="d-flex align-items-center gap-3">
                                    <img src="{{ asset('storage/' . $imagenActual->ruta_imagen) }}"
                                        class="image-preview"
                                        alt="{{ $imagenActual->descripcion }}">
                                    <div class="flex-grow-1">
                                        <p class="mb-1"><strong>Actual:</strong> {{ $imagenActual->descripcion }}</p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                id="eliminar_imagen_{{ $tipo }}"
                                                name="eliminar_imagenes[]" value="{{ $tipo }}">
                                            <label class="form-check-label text-danger" for="eliminar_imagen_{{ $tipo }}">
                                                Eliminar esta imagen
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <p class="text-muted mb-2">No hay imagen actual</p>
                                @endif

                                <div class="mt-2">
                                    <label for="nueva_imagen_{{ $tipo }}" class="form-label">
                                        {{ $imagenActual ? 'Reemplazar con nueva imagen' : 'Agregar imagen' }}
                                    </label>
                                    <input type="file" class="form-control" id="nueva_imagen_{{ $tipo }}"
                                        name="nuevas_imagenes[{{ $tipo }}]">
                                    <input type="text" class="form-control mt-2"
                                        name="descripciones_imagenes[{{ $tipo }}]"
                                        placeholder="Descripción de la imagen"
                                        value="{{ $imagenActual ? $imagenActual->descripcion : '' }}">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Pestaña de Ciclo de Vida -->
                    <div class="tab-pane fade" id="ciclo" role="tabpanel">
                        <div class="form-section">
                            <h3><i class="fas fa-life-ring"></i> Ciclo de Vida</h3>
                            <p class="text-muted">Actualiza la información del ciclo de vida de la especie.</p>

                            <div id="ciclos-container">
                                @if($especie->ciclosVida->count() > 0)
                                @foreach($especie->ciclosVida as $index => $ciclo)
                                <div class="card mb-3 ciclo-item">
                                    <div class="card-header bg-light">
                                        <h6 class="mb-0">{{ $ciclo->etapa }}</h6>
                                    </div>
                                    <div class="card-body">
                                        <input type="hidden" name="ciclos[{{ $index }}][id]" value="{{ $ciclo->id }}">
                                        <input type="hidden" name="ciclos[{{ $index }}][etapa]" value="{{ $ciclo->etapa }}">

                                        @if($ciclo->ruta_imagen)
                                        <div class="mb-3">
                                            <label class="form-label">Imagen Actual</label>
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="{{ asset('storage/' . $ciclo->ruta_imagen) }}"
                                                    class="image-preview"
                                                    alt="{{ $ciclo->etapa }}">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="eliminar_ciclo_imagen_{{ $index }}"
                                                        name="eliminar_ciclo_imagenes[{{ $index }}]" value="1">
                                                    <label class="form-check-label text-danger" for="eliminar_ciclo_imagen_{{ $index }}">
                                                        Eliminar imagen
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                        <div class="mb-3">
                                            <label class="form-label">Nueva Imagen (opcional)</label>
                                            <input type="file" class="form-control"
                                                name="nuevas_imagenes_ciclos[{{ $index }}]">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Alimentación *</label>
                                                <input type="text" class="form-control"
                                                    name="ciclos[{{ $index }}][alimentacion]"
                                                    value="{{ old('ciclos.'.$index.'.alimentacion', $ciclo->alimentacion) }}" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Hábitat *</label>
                                                <input type="text" class="form-control"
                                                    name="ciclos[{{ $index }}][habitat]"
                                                    value="{{ old('ciclos.'.$index.'.habitat', $ciclo->habitat) }}" required>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Métodos de Control</label>
                                            <div class="row">
                                                @php
                                                $metodosActuales = $ciclo->metodos_control ? json_decode($ciclo->metodos_control, true) : [];
                                                @endphp
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="ciclos[{{ $index }}][metodos_control][]"
                                                            value="Cultural"
                                                            {{ in_array('Cultural', $metodosActuales) ? 'checked' : '' }}>
                                                        <label class="form-check-label">Cultural</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="ciclos[{{ $index }}][metodos_control][]"
                                                            value="Biológico"
                                                            {{ in_array('Biológico', $metodosActuales) ? 'checked' : '' }}>
                                                        <label class="form-check-label">Biológico</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="ciclos[{{ $index }}][metodos_control][]"
                                                            value="Químico"
                                                            {{ in_array('Químico', $metodosActuales) ? 'checked' : '' }}>
                                                        <label class="form-check-label">Químico</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="ciclos[{{ $index }}][metodos_control][]"
                                                            value="MIP"
                                                            {{ in_array('MIP', $metodosActuales) ? 'checked' : '' }}>
                                                        <label class="form-check-label">MIP</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Detalles de Control</label>
                                            <textarea class="form-control"
                                                name="ciclos[{{ $index }}][detalle_control]"
                                                rows="3">{{ old('ciclos.'.$index.'.detalle_control', $ciclo->detalle_control) }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <div class="alert alert-info">
                                    No hay ciclos de vida registrados para esta especie.
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Botones de acción -->
                <div class="d-flex justify-content-between align-items-center mt-4 pt-3 border-top">
                    <button type="button" onclick="window.history.back()" class="btn btn-cancelar">
    <i class="fas fa-times"></i> Cancelar
</button>
                    <button type="submit" class="btn btn-guardar">
                        <i class="fas fa-save"></i> Guardar Cambios
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Previsualización de imágenes
        document.querySelectorAll('input[type="file"]').forEach(input => {
            input.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        // Buscar el contenedor de previsualización más cercano
                        const container = this.closest('.current-image') || this.closest('.card-body');
                        let preview = container.querySelector('.image-preview');

                        if (!preview) {
                            preview = document.createElement('img');
                            preview.className = 'image-preview mt-2';
                            this.parentNode.appendChild(preview);
                        }

                        preview.src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });
        });

        // Manejo de pestañas
        const triggerTabList = [].slice.call(document.querySelectorAll('#myTab button'));
        triggerTabList.forEach(function(triggerEl) {
            const tabTrigger = new bootstrap.Tab(triggerEl);
            triggerEl.addEventListener('click', function(event) {
                event.preventDefault();
                tabTrigger.show();
            });
        });
    </script>
</body>

</html>