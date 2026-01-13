<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @vite('resources/css/nueva-especie.css')
    @vite('resources/js/')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Formulario de Registro de Especies</title>
    <style>
        .hidden {
            display: none;
        }
        
        .dynamic-section {
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
        }
        
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        
        .section-title {
            margin: 0;
            color: #333;
        }
        
        .btn-remove-section {
            background: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .btn-remove-section:hover {
            background: #c82333;
        }
        
        .add-section-control {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }
        
        .btn-add-section {
            background: #28a745;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .btn-add-section:hover {
            background: #218838;
        }
        
        .tipo-parte-select, .nombre-personalizado {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        
        .secciones-dinamicas {
            margin-top: 15px;
        }
        
        .especie-option {
            padding: 8px;
            margin-bottom: 5px;
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .especie-option:hover {
            background: #e9ecef;
            border-color: #adb5bd;
        }
        
        .especie-option.selected {
            background: #d1ecf1;
            border-color: #17a2b8;
        }
        
        .metamorfosis-info {
            background: #f8f9fa;
            border-left: 4px solid #17a2b8;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
        }
        
        .form-buttons {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        
        .btn-submit {
            background: linear-gradient(135deg, #28a745, #218838);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }
        
        .btn-cancel {
            background: linear-gradient(135deg, #6c757d, #5a6268);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }
        
        .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 10px 0;
        }
        
        .checkbox-group label {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .na-option {
            color: #6c757d;
            font-style: italic;
        }
        
        .cycle-section {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }
        
        .imagen-etapa {
            margin: 10px 0;
        }
        
        .image-preview-container {
            margin: 10px 0;
        }
        
        .image-preview {
            max-width: 200px;
            max-height: 200px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        
        .image-controls {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 10px 0;
        }
        
        .btn-compress {
            background: linear-gradient(135deg, #ff9800, #e68900);
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .image-size {
            font-size: 12px;
            color: #666;
        }
        
        .progress-message {
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            animation: messageSlideIn 0.3s ease-out;
        }
        
        @keyframes messageSlideIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes messageSlideOut {
            from {
                opacity: 1;
                transform: translateY(0);
            }
            to {
                opacity: 0;
                transform: translateY(-10px);
            }
        }
        
        .compression-loading {
            display: inline-block;
            width: 12px;
            height: 12px;
            border: 2px solid #fff;
            border-top: 2px solid transparent;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    @include('includes.navbar-nueva-especie')
    <div class="formulario-registro">
        <h2>Formulario de Registro de Especies de Insectos</h2>

        {{-- Mostrar errores de validación --}}
        @if ($errors->any())
        <div style="background-color: #ffdddd; border-left: 6px solid #f44336; margin-bottom: 15px; padding: 15px;">
            <strong>¡Ups! Hubo algunos problemas con tu entrada.</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        {{-- Mostrar mensajes de éxito --}}
        @if (session('success'))
        <div style="background-color: #ddffdd; border-left: 6px solid #4CAF50; margin-bottom: 15px; padding: 15px;">
            <strong>¡Éxito!</strong> {{ session('success') }}
        </div>
        @endif

        <form id="registro-especie-form" action="{{ route('especies.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return validarFormularioCompleto()">
            @csrf

            <!-- Datos Generales -->
            <h3>Datos Generales</h3>
            
            <label for="nombre_comun">Nombre Común:</label>
            <input type="text" id="nombre_comun" name="nombre_comun" value="{{ old('nombre_comun') }}" required>

            <label for="nombre_cientifico">Nombre Científico:</label>
            <input type="text" id="nombre_cientifico" name="nombre_cientifico" value="{{ old('nombre_cientifico') }}" required>

            <!-- Selección de Tipo de Especie -->
            <h3>Selección de Especie</h3>
            <label>¿Qué tipo de insecto vas a registrar?</label>
            <div class="checkbox-group">
                <label>
                    <input type="radio" name="tipo_seleccion" value="existente" onchange="toggleTipoSeleccion()" checked> 
                    Seleccionar especie existente
                </label>
                <label>
                    <input type="radio" name="tipo_seleccion" value="nueva" onchange="toggleTipoSeleccion()"> 
                    Agregar nueva especie
                </label>
            </div>

            <!-- Especies Existentes -->
            <div id="especies-existentes">
                <label for="especie_existente">Selecciona una especie existente:</label>
                <div id="lista-especies">
                    <!-- Las opciones se cargarán con JavaScript -->
                </div>
                <input type="hidden" id="especie_seleccionada" name="especie_seleccionada">
            </div>

            <!-- Nueva Especie -->
            <div id="nueva-especie" class="hidden">
                <label for="nueva_especie_nombre">Nombre de la nueva especie:</label>
                <input type="text" id="nueva_especie_nombre" name="nueva_especie_nombre" placeholder="Ej: Escarabajo Rinoceronte">
                
                <label for="descripcion_especie">Descripción de la nueva especie:</label>
                <textarea id="descripcion_especie" name="descripcion_especie" rows="3" placeholder="Describe las características principales de esta nueva especie..."></textarea>
            </div>

            <!-- Orden -->
            <h3>Orden</h3>
            <label for="orden">Selecciona el orden:</label>
            <select id="orden" name="orden" onchange="actualizarMetamorfosis()" required>
                <option value="" disabled selected>-- Seleccionar --</option>            
                <option value="Hymenoptera" @if(old('orden')=='Hymenoptera' ) selected @endif>Hymenoptera (Avispas, abejas, hormigas)</option>
                <option value="Coleoptera" @if(old('orden')=='Coleoptera' ) selected @endif>Coleoptera (Escarabajos)</option>
                <option value="Lepidoptera" @if(old('orden')=='Lepidoptera' ) selected @endif>Lepidoptera (Mariposas, polillas)</option>
                <option value="Diptera" @if(old('orden')=='Diptera' ) selected @endif>Diptera (Moscas, mosquitos)</option>
                <option value="Orthoptera" @if(old('orden')=='Orthoptera' ) selected @endif>Orthoptera (Saltamontes, grillos)</option>
                <option value="Hemiptera" @if(old('orden')=='Hemiptera' ) selected @endif>Hemiptera (Chinches, pulgones)</option>
                <option value="Odonata" @if(old('orden')=='Odonata' ) selected @endif>Odonata (Libélulas, caballitos del diablo)</option>
                <option value="Neuroptera" @if(old('orden')=='Neuroptera' ) selected @endif>Neuroptera (Crisopas)</option>
                <option value="Blattodea" @if(old('orden')=='Blattodea' ) selected @endif>Blattodea (Cucarachas, termitas)</option>
                <option value="Mantodea" @if(old('orden')=='Mantodea' ) selected @endif>Mantodea (Mantis)</option>
            </select>

            <!-- Taxonomía -->
            <div id="taxonomia" class="{{ old('orden') ? '' : 'hidden' }}">
                <h3>Taxonomía</h3>

                <label for="familia">Familia:</label>
                <input type="text" id="familia" name="familia" value="{{ old('familia') }}" required>

                <label for="genero">Género:</label>
                <input type="text" id="genero" name="genero" value="{{ old('genero') }}" required>

                <label for="especie">Especie:</label>
                <input type="text" id="especie" name="especie" value="{{ old('especie') }}" required>

                <input type="hidden" name="dominio" value="Eukarya">
                <input type="hidden" name="reino" value="Animalia">
                <input type="hidden" name="filo" value="Arthropoda">
                <input type="hidden" name="clase" value="Insecta">

                <div class="taxonomia-fixed">
                    <p><strong>Dominio:</strong> Eukarya</p>
                    <p><strong>Reino:</strong> Animalia</p>
                    <p><strong>Filo:</strong> Arthropoda</p>
                    <p><strong>Clase:</strong> Insecta</p>
                </div>
            </div>

            <!-- Detalle General -->
            <label for="detalle_general">Detalle General:</label>
            <textarea id="detalle_general" name="detalle_general" rows="4" required placeholder="Describe características generales del insecto...">{{ old('detalle_general') }}</textarea>

            <!-- Metamorfosis - CON OPCIÓN DE ELECCIÓN -->
            <div id="metamorfosis-container" class="{{ old('orden') ? '' : 'hidden' }}">
                <h3>Metamorfosis</h3>
                
                <label>Selecciona el tipo de metamorfosis:</label>
                <div class="checkbox-group">
                    <label>
                        <input type="radio" name="tipo_metamorfosis" value="Holometabola" id="metamorfosis_holometabola" onchange="actualizarCiclosVida()" checked> 
                        Holometábola (Completa)
                    </label>
                    <label>
                        <input type="radio" name="tipo_metamorfosis" value="Hemimetabola" id="metamorfosis_hemimetabola" onchange="actualizarCiclosVida()"> 
                        Hemimetábola (Incompleta)
                    </label>
                    <label>
                        <input type="radio" name="tipo_metamorfosis" value="Ametabola" id="metamorfosis_ametabola" onchange="actualizarCiclosVida()"> 
                        Ametábola (Sin metamorfosis)
                    </label>
                </div>
                
                <!-- Información sobre el tipo de metamorfosis -->
                <div id="info-metamorfosis" class="metamorfosis-info">
                    <strong>Holometábola:</strong> Huevo → Larva → Pupa → Adulto (Ej: mariposas, escarabajos)<br>
                    <strong>Hemimetábola:</strong> Huevo → Ninfa → Adulto (Ej: saltamontes, chinches)<br>
                    <strong>Ametábola:</strong> Sin metamorfosis, los juveniles son similares a adultos (Ej: pececillos de plata)
                </div>

                <!-- Ciclos de Vida -->
                <div id="ciclos-vida"></div>
            </div>

            <!-- Morfología con compresión -->
            <h3>Morfología</h3>

            <!-- Imagen Completa -->
            <div class="image-section">
                <label for="imagen_completa">Imagen completa:</label>
                <input type="file" id="imagen_completa" name="imagen_completa" accept="image/*" onchange="previewAndCompressImage(this)">
                <div class="image-preview-container" id="preview_imagen_completa" style="display: none;">
                    <img id="preview_img_imagen_completa" src="" alt="Vista previa" class="image-preview">
                    <div class="image-controls">
                        <button type="button" onclick="compressImage('imagen_completa')" class="btn-compress">
                            <i class="fas fa-compress-alt"></i> Reducir Tamaño
                        </button>
                        <span class="image-size" id="size_imagen_completa"></span>
                    </div>
                </div>
                <label for="descripcion_completa_texto">Descripción Completa del Insecto:</label>
                <textarea id="descripcion_completa_texto" name="descripcion_completa" rows="3" required placeholder="Describe las características generales del insecto...">{{ old('descripcion_completa') }}</textarea>
            </div>

            <!-- Imagen Cabeza -->
            <div class="image-section">
                <label for="imagen_cabeza">Imagen cabeza:</label>
                <input type="file" id="imagen_cabeza" name="imagen_cabeza" accept="image/*" onchange="previewAndCompressImage(this)">
                <div class="image-preview-container" id="preview_imagen_cabeza" style="display: none;">
                    <img id="preview_img_imagen_cabeza" src="" alt="Vista previa" class="image-preview">
                    <div class="image-controls">
                        <button type="button" onclick="compressImage('imagen_cabeza')" class="btn-compress">
                            <i class="fas fa-compress-alt"></i> Reducir Tamaño
                        </button>
                        <span class="image-size" id="size_imagen_cabeza"></span>
                    </div>
                </div>
                <label for="descripcion_cabeza_texto">Descripción Detallada de la Cabeza:</label>
                <textarea id="descripcion_cabeza_texto" name="descripcion_cabeza" rows="3" required placeholder="Describe antenas, ojos, piezas bucales...">{{ old('descripcion_cabeza') }}</textarea>
            </div>

            <!-- Imagen Tórax -->
            <div class="image-section">
                <label for="imagen_torax">Imagen tórax:</label>
                <input type="file" id="imagen_torax" name="imagen_torax" accept="image/*" onchange="previewAndCompressImage(this)">
                <div class="image-preview-container" id="preview_imagen_torax" style="display: none;">
                    <img id="preview_img_imagen_torax" src="" alt="Vista previa" class="image-preview">
                    <div class="image-controls">
                        <button type="button" onclick="compressImage('imagen_torax')" class="btn-compress">
                            <i class="fas fa-compress-alt"></i> Reducir Tamaño
                        </button>
                        <span class="image-size" id="size_imagen_torax"></span>
                    </div>
                </div>
                <label for="descripcion_torax_texto">Descripción Detallada del Tórax:</label>
                <textarea id="descripcion_torax_texto" name="descripcion_torax" rows="3" required placeholder="Describe segmentos, patas, alas...">{{ old('descripcion_torax') }}</textarea>
            </div>

            <!-- Imagen Abdomen -->
            <div class="image-section">
                <label for="imagen_abdomen">Imagen abdomen:</label>
                <input type="file" id="imagen_abdomen" name="imagen_abdomen" accept="image/*" onchange="previewAndCompressImage(this)">
                <div class="image-preview-container" id="preview_imagen_abdomen" style="display: none;">
                    <img id="preview_img_imagen_abdomen" src="" alt="Vista previa" class="image-preview">
                    <div class="image-controls">
                        <button type="button" onclick="compressImage('imagen_abdomen')" class="btn-compress">
                            <i class="fas fa-compress-alt"></i> Reducir Tamaño
                        </button>
                        <span class="image-size" id="size_imagen_abdomen"></span>
                    </div>
                </div>
                <label for="descripcion_abdomen_texto">Descripción Detallada del Abdomen:</label>
                <textarea id="descripcion_abdomen_texto" name="descripcion_abdomen" rows="3" required placeholder="Describe segmentación, apéndices...">{{ old('descripcion_abdomen') }}</textarea>
            </div>

            <!-- Imagen Patas -->
            <div class="image-section">
                <label for="imagen_patas">Imagen patas:</label>
                <input type="file" id="imagen_patas" name="imagen_patas" accept="image/*" onchange="previewAndCompressImage(this)">
                <div class="image-preview-container" id="preview_imagen_patas" style="display: none;">
                    <img id="preview_img_imagen_patas" src="" alt="Vista previa" class="image-preview">
                    <div class="image-controls">
                        <button type="button" onclick="compressImage('imagen_patas')" class="btn-compress">
                            <i class="fas fa-compress-alt"></i> Reducir Tamaño
                        </button>
                        <span class="image-size" id="size_imagen_patas"></span>
                    </div>
                </div>
                <label for="descripcion_patas_texto">Descripción Detallada de las Patas:</label>
                <textarea id="descripcion_patas_texto" name="descripcion_patas" rows="3" required placeholder="Describe tipo de patas, adaptaciones...">{{ old('descripcion_patas') }}</textarea>
            </div>

            <!-- Sección de Partes Adicionales Dinámicas -->
            <div class="dynamic-sections-container">
                <h3>Partes Adicionales del Insecto</h3>
                
                <!-- Botón para agregar nuevas secciones -->
                <div class="add-section-control">
                    <button type="button" id="btn-agregar-seccion" class="btn-add-section">
                        <i class="fas fa-plus-circle"></i> Agregar Nueva Parte
                    </button>
                    
                    <!-- Select para elegir el tipo de parte -->
                    <select id="tipo-parte-select" class="tipo-parte-select">
                        <option value="">-- Seleccionar tipo de parte --</option>
                        <option value="alas">Alas</option>
                        <option value="antenas">Antenas</option>
                        <option value="piezas_bucales">Piezas Bucales</option>
                        <option value="ojos">Ojos</option>
                        <option value="patas_especializadas">Patas Especializadas</option>
                        <option value="apendices">Apéndices</option>
                        <option value="otro">Otro</option>
                    </select>
                    
                    <!-- Input para nombre personalizado -->
                    <input type="text" id="nombre-personalizado" class="nombre-personalizado" 
                           placeholder="Nombre personalizado (si selecciona 'Otro')" style="display: none;">
                </div>
                
                <!-- Contenedor donde se agregarán las secciones dinámicas -->
                <div id="secciones-dinamicas" class="secciones-dinamicas">
                    <!-- Las secciones se agregarán aquí dinámicamente -->
                </div>
            </div>
        </form>
    </div>

    <script>
        // Lista de especies existentes
        const especiesExistentes = [
            { id: 1, nombre: "Abeja Melífera", nombreCientifico: "Apis mellifera", orden: "Hymenoptera", metamorfosis: "Holometabola" },
            { id: 2, nombre: "Mariposa Monarca", nombreCientifico: "Danaus plexippus", orden: "Lepidoptera", metamorfosis: "Holometabola" },
            { id: 3, nombre: "Escarabajo Rinoceronte", nombreCientifico: "Oryctes nasicornis", orden: "Coleoptera", metamorfosis: "Holometabola" },
            { id: 4, nombre: "Saltamontes Común", nombreCientifico: "Caelifera spp.", orden: "Orthoptera", metamorfosis: "Hemimetabola" },
            { id: 5, nombre: "Mosca Doméstica", nombreCientifico: "Musca domestica", orden: "Diptera", metamorfosis: "Holometabola" },
            { id: 6, nombre: "Chinche de Cama", nombreCientifico: "Cimex lectularius", orden: "Hemiptera", metamorfosis: "Hemimetabola" },
            { id: 7, nombre: "Hormiga Roja", nombreCientifico: "Solenopsis invicta", orden: "Hymenoptera", metamorfosis: "Holometabola" },
            { id: 8, nombre: "Mantis Religiosa", nombreCientifico: "Mantis religiosa", orden: "Mantodea", metamorfosis: "Hemimetabola" },
            { id: 9, nombre: "Libélula Común", nombreCientifico: "Sympetrum spp.", orden: "Odonata", metamorfosis: "Hemimetabola" },
            { id: 10, nombre: "Cucaracha Americana", nombreCientifico: "Periplaneta americana", orden: "Blattodea", metamorfosis: "Hemimetabola" },
            { id: 11, nombre: "Crisopa Verde", nombreCientifico: "Chrysoperla carnea", orden: "Neuroptera", metamorfosis: "Holometabola" },
            { id: 12, nombre: "Escarabajo Pelotero", nombreCientifico: "Scarabaeus sacer", orden: "Coleoptera", metamorfosis: "Holometabola" },
            { id: 13, nombre: "Grillo Campestre", nombreCientifico: "Gryllus campestris", orden: "Orthoptera", metamorfosis: "Hemimetabola" },
            { id: 14, nombre: "Polilla de la Ropa", nombreCientifico: "Tineola bisselliella", orden: "Lepidoptera", metamorfosis: "Holometabola" },
            { id: 15, nombre: "Avispa Común", nombreCientifico: "Vespula vulgaris", orden: "Hymenoptera", metamorfosis: "Holometabola" }
        ];

        // Mapeo de órdenes a tipo de metamorfosis por defecto
        const ordenMetamorfosis = {
            'Hymenoptera': 'Holometabola',
            'Coleoptera': 'Holometabola',
            'Lepidoptera': 'Holometabola',
            'Diptera': 'Holometabola',
            'Orthoptera': 'Hemimetabola',
            'Hemiptera': 'Hemimetabola',
            'Odonata': 'Hemimetabola',
            'Neuroptera': 'Holometabola',
            'Blattodea': 'Hemimetabola',
            'Mantodea': 'Hemimetabola'
        };

        // Inicializar cuando carga el DOM
        // Reemplaza tu formulario actual por esta versión con AJAX
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('registro-especie-form');
    
    if (form) {
        form.addEventListener('submit', async function(e) {
            e.preventDefault(); // Prevenir envío normal
            
            if (!validarFormularioCompleto()) {
                return;
            }
            
            // Mostrar loader
            const submitBtn = form.querySelector('.btn-submit');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Registrando...';
            submitBtn.disabled = true;
            
            try {
                const formData = new FormData(form);
                
                const response = await fetch('{{ route("especies.store") }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
                
                if (response.ok) {
                    const result = await response.json();
                    
                    // Mostrar mensaje de éxito
                    showNotification('¡Especie registrada exitosamente!', 'success');
                    
                    // Redirigir después de 2 segundos
                    setTimeout(() => {
                        window.location.href = '{{ route("home") }}';
                    }, 2000);
                    
                } else {
                    const errorData = await response.json();
                    throw new Error(errorData.message || 'Error al registrar la especie');
                }
                
            } catch (error) {
                console.error('Error:', error);
                showNotification('Error: ' + error.message, 'error');
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }
        });
    }
});

// Función para mostrar notificaciones
function showNotification(message, type = 'success') {
    const notification = document.createElement('div');
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 15px 20px;
        border-radius: 6px;
        color: white;
        z-index: 10000;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        animation: slideIn 0.3s ease-out;
        display: flex;
        align-items: center;
        gap: 10px;
    `;
    
    if (type === 'success') {
        notification.style.background = 'linear-gradient(135deg, #28a745, #218838)';
        notification.innerHTML = `<i class="fas fa-check-circle"></i> ${message}`;
    } else {
        notification.style.background = 'linear-gradient(135deg, #dc3545, #c82333)';
        notification.innerHTML = `<i class="fas fa-exclamation-circle"></i> ${message}`;
    }
    
    document.body.appendChild(notification);
    
    // Remover después de 5 segundos
    setTimeout(() => {
        notification.style.animation = 'slideOut 0.3s ease-out forwards';
        setTimeout(() => notification.remove(), 300);
    }, 5000);
}

// Agregar la animación slideOut
if (!document.querySelector('#notification-styles')) {
    const style = document.createElement('style');
    style.id = 'notification-styles';
    style.textContent = `
        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        @keyframes slideOut {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(100%);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);
}

        // Función para alternar entre especies existentes y nueva especie
        function toggleTipoSeleccion() {
            const tipoExistente = document.querySelector('input[name="tipo_seleccion"][value="existente"]');
            const divExistente = document.getElementById("especies-existentes");
            const divNueva = document.getElementById("nueva-especie");
            
            if (tipoExistente.checked) {
                divExistente.style.display = 'block';
                divNueva.classList.add('hidden');
            } else {
                divExistente.style.display = 'none';
                divNueva.classList.remove('hidden');
            }
        }

        // Función para cargar especies existentes
        function cargarEspeciesExistentes() {
            const lista = document.getElementById("lista-especies");
            lista.innerHTML = '';
            
            especiesExistentes.forEach(especie => {
                const div = document.createElement('div');
                div.className = 'especie-option';
                div.innerHTML = `
                    <strong>${especie.nombre}</strong><br>
                    <small>${especie.nombreCientifico} (${especie.orden})</small>
                `;
                
                div.onclick = function() {
                    // Quitar selección anterior
                    document.querySelectorAll('.especie-option').forEach(el => {
                        el.classList.remove('selected');
                    });
                    
                    // Agregar selección actual
                    this.classList.add('selected');
                    
                    // Actualizar campos
                    document.getElementById('nombre_comun').value = especie.nombre;
                    document.getElementById('nombre_cientifico').value = especie.nombreCientifico;
                    document.getElementById('orden').value = especie.orden;
                    document.getElementById('especie_seleccionada').value = especie.id;
                    
                    // Actualizar taxonomía y metamorfosis
                    document.getElementById("taxonomia").classList.remove("hidden");
                    document.getElementById("metamorfosis-container").classList.remove("hidden");
                    
                    // Actualizar metamorfosis según la especie seleccionada
                    actualizarMetamorfosis();
                };
                
                lista.appendChild(div);
            });
        }

        // Función para actualizar la metamorfosis según el orden seleccionado
        function actualizarMetamorfosis() {
            const orden = document.getElementById("orden").value;
            const taxonomiaDiv = document.getElementById("taxonomia");
            const metamorfosisContainer = document.getElementById("metamorfosis-container");
            
            if (orden) {
                taxonomiaDiv.classList.remove("hidden");
                metamorfosisContainer.classList.remove("hidden");
                
                // Establecer tipo de metamorfosis por defecto según el orden
                const tipoPorDefecto = ordenMetamorfosis[orden] || 'Holometabola';
                
                // Marcar el radio button correspondiente
                document.getElementById(`metamorfosis_${tipoPorDefecto.toLowerCase()}`).checked = true;
                
                // Actualizar ciclos de vida
                actualizarCiclosVida();
            } else {
                taxonomiaDiv.classList.add("hidden");
                metamorfosisContainer.classList.add("hidden");
            }
        }
        // Función para actualizar los ciclos de vida según el tipo de metamorfosis
        function actualizarCiclosVida() {
            const tipoMetamorfosis = document.querySelector('input[name="tipo_metamorfosis"]:checked').value;
            const container = document.getElementById("ciclos-vida");
            container.innerHTML = '';

            let etapas = [];
            let descripciones = {
                'Holometabola': {
                    'Huevo': 'Etapa inicial de desarrollo',
                    'Larva': 'Etapa de alimentación y crecimiento',
                    'Pupa': 'Etapa de transformación (metamorfosis)',
                    'Adulto': 'Etapa reproductiva final'
                },
                'Hemimetabola': {
                    'Huevo': 'Etapa inicial de desarrollo',
                    'Ninfa': 'Etapa juvenil similar al adulto pero sin alas',
                    'Adulto': 'Etapa reproductiva final con alas desarrolladas'
                },
                'Ametabola': {
                    'Juvenil': 'Etapa juvenil similar al adulto',
                    'Adulto': 'Etapa reproductiva final'
                }
            };

            if (tipoMetamorfosis === 'Holometabola') {
                etapas = ["Huevo", "Larva", "Pupa", "Adulto"];
            } else if (tipoMetamorfosis === 'Hemimetabola') {
                etapas = ["Huevo", "Ninfa", "Adulto"];
            } else {
                etapas = ["Juvenil", "Adulto"];
            }

            etapas.forEach((etapa, index) => {
                const cicloSection = document.createElement("div");
                cicloSection.classList.add("cycle-section");
                cicloSection.innerHTML = `
                    <h4>${etapa}</h4>
                    <input type="hidden" name="etapas[]" value="${etapa}">

                    <!-- Imagen para la etapa -->
                    <div class="imagen-etapa">
                        <label for="imagen_etapa_${index}">Imagen de ${etapa}:</label>
                        <input type="file" id="imagen_etapa_${index}" name="imagenes_etapas[${index}]" accept="image/*" onchange="previewAndCompressImage(this)">
                        <div class="image-preview-container" id="preview_imagen_etapa_${index}" style="display: none;">
                            <img id="preview_img_imagen_etapa_${index}" src="" alt="Vista previa ${etapa}" class="image-preview">
                            <div class="image-controls">
                                <button type="button" onclick="compressImage('imagen_etapa_${index}')" class="btn-compress">
                                    <i class="fas fa-compress-alt"></i> Reducir Tamaño
                                </button>
                                <span class="image-size" id="size_imagen_etapa_${index}"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Descripción de la etapa -->
                    <label for="ciclo_${index}_descripcion">Descripción de la etapa ${etapa}:</label>
                    <textarea id="ciclo_${index}_descripcion" name="descripciones[]" rows="2" required placeholder="${descripciones[tipoMetamorfosis][etapa] || 'Describe esta etapa...'}"></textarea>

                    <label for="ciclo_${index}_alimentacion">Alimentación:</label>
                    <input type="text" id="ciclo_${index}_alimentacion" name="alimentaciones[]" required placeholder="Ej: Hojas, néctar, otros insectos...">

                    <label for="ciclo_${index}_habitat">Hábitat:</label>
                    <input type="text" id="ciclo_${index}_habitat" name="habitats[]" required placeholder="Ej: Plantas, suelo, agua...">

                    <!-- Métodos de control con opción N/A -->
                    <label>Métodos de Control:</label>
                    <div class="checkbox-group">
                        <label class="na-option">
                            <input type="checkbox" name="metodos_control[${index}][]" value="N/A" onchange="toggleMetodosControl(this, ${index})"> 
                            N/A (No aplica)
                        </label>
                        <label><input type="checkbox" name="metodos_control[${index}][]" value="Cultural" class="control-option-${index}" onchange="toggleNAOption(this, ${index})"> Cultural</label>
                        <label><input type="checkbox" name="metodos_control[${index}][]" value="Biológico" class="control-option-${index}" onchange="toggleNAOption(this, ${index})"> Biológico</label>
                        <label><input type="checkbox" name="metodos_control[${index}][]" value="Químico" class="control-option-${index}" onchange="toggleNAOption(this, ${index})"> Químico</label>
                        <label><input type="checkbox" name="metodos_control[${index}][]" value="MIP" class="control-option-${index}" onchange="toggleNAOption(this, ${index})"> MIP</label>
                    </div>

                    <div class="descripcion-control">
                        <label for="ciclo_${index}_detalle_control">Descripción de Métodos de Control:</label>
                        <textarea id="ciclo_${index}_detalle_control" name="detalles_control[]" rows="3" placeholder="Describe los métodos de control específicos para esta etapa..."></textarea>
                    </div>
                    
                    <hr style="margin: 20px 0; border: 1px solid #eee;">
                `;
                container.appendChild(cicloSection);
            });
        }
        // Funciones para manejar métodos de control
        function toggleMetodosControl(naCheckbox, index) {
            const controlOptions = document.querySelectorAll(`.control-option-${index}`);

            if (naCheckbox.checked) {
                controlOptions.forEach(option => {
                    option.checked = false;
                    option.disabled = true;
                });
            } else {
                controlOptions.forEach(option => {
                    option.disabled = false;
                });
            }
        }

        function toggleNAOption(controlCheckbox, index) {
            const naCheckbox = document.querySelector(`input[value="N/A"][name="metodos_control[${index}][]"]`);

            if (controlCheckbox.checked && naCheckbox) {
                naCheckbox.checked = false;
                const controlOptions = document.querySelectorAll(`.control-option-${index}`);
                controlOptions.forEach(option => {
                    option.disabled = false;
                });
            }
        }
        // =================== FUNCIONES PARA SECCIONES DINÁMICAS ===================
        document.getElementById('tipo-parte-select').addEventListener('change', function() {
            const nombrePersonalizado = document.getElementById('nombre-personalizado');
            nombrePersonalizado.style.display = this.value === 'otro' ? 'block' : 'none';
        });

        document.getElementById('btn-agregar-seccion').addEventListener('click', function() {
            const tipoSelect = document.getElementById('tipo-parte-select');
            const nombrePersonalizado = document.getElementById('nombre-personalizado');
            const tipoParte = tipoSelect.value;
            
            if (!tipoParte) {
                alert('Por favor selecciona un tipo de parte');
                return;
            }
            
            let nombreParte = '';
            
            if (tipoParte === 'otro') {
                nombreParte = nombrePersonalizado.value.trim();
                if (!nombreParte) {
                    alert('Por favor ingresa un nombre para la parte');
                    return;
                }
            } else {
                const nombresPartes = {
                    'alas': 'Alas',
                    'antenas': 'Antenas',
                    'piezas_bucales': 'Piezas Bucales',
                    'ojos': 'Ojos',
                    'patas_especializadas': 'Patas Especializadas',
                    'apendices': 'Apéndices'
                };
                nombreParte = nombresPartes[tipoParte];
            }
            
            const seccionId = 'seccion_' + Date.now();
            const nuevaSeccion = crearSeccionDinamica(seccionId, tipoParte, nombreParte);
            document.getElementById('secciones-dinamicas').appendChild(nuevaSeccion);
            
            tipoSelect.value = '';
            nombrePersonalizado.value = '';
            nombrePersonalizado.style.display = 'none';
        });

        function crearSeccionDinamica(id, tipo, nombre) {
            const div = document.createElement('div');
            div.className = 'dynamic-section';
            div.id = id;
            
            div.innerHTML = `
                <div class="section-header">
                    <h4 class="section-title">${nombre}</h4>
                    <button type="button" class="btn-remove-section" onclick="removerSeccion('${id}')">
                        <i class="fas fa-times"></i> Eliminar
                    </button>
                </div>
                
                <input type="hidden" name="partes_dinamicas[${id}][tipo]" value="${tipo}">
                <input type="hidden" name="partes_dinamicas[${id}][nombre]" value="${nombre}">
                <input type="hidden" name="partes_dinamicas[${id}][id_unico]" value="${id}">
                
                <div class="image-section">
                    <label for="imagen_${id}">Imagen de ${nombre}:</label>
                    <input type="file" id="imagen_${id}" name="partes_dinamicas[${id}][imagen]" 
                           accept="image/*" onchange="previewAndCompressImage(this)">
                    <div class="image-preview-container" id="preview_imagen_${id}" style="display: none;">
                        <img id="preview_img_imagen_${id}" src="" alt="Vista previa" class="image-preview">
                        <div class="image-controls">
                            <button type="button" onclick="compressImage('imagen_${id}')" class="btn-compress">
                                <i class="fas fa-compress-alt"></i> Reducir Tamaño
                            </button>
                            <span class="image-size" id="size_imagen_${id}"></span>
                        </div>
                    </div>
                </div>
                
                <label for="descripcion_${id}">Descripción Detallada de ${nombre}:</label>
                <textarea id="descripcion_${id}" name="partes_dinamicas[${id}][descripcion]" 
                          rows="3" required placeholder="Describe las características de ${nombre}..."></textarea>
            `;
            
            return div;
        }

        function removerSeccion(id) {
            const seccion = document.getElementById(id);
            if (seccion) {
                seccion.remove();
            }
        }
        // =================== FUNCIONES DE COMPRESIÓN DE IMÁGENES ===================
        // (Mantén todas las funciones de compresión que ya tenías)
        function previewAndCompressImage(input) {
            const file = input.files[0];
            if (!file) return;

            const previewId = `preview_${input.id}`;
            const previewImgId = `preview_img_${input.id}`;
            const sizeId = `size_${input.id}`;

            const previewContainer = document.getElementById(previewId);
            const previewImg = document.getElementById(previewImgId);
            const sizeElement = document.getElementById(sizeId);

            const fileSizeMB = (file.size / 1024 / 1024).toFixed(2);
            sizeElement.textContent = `${fileSizeMB} MB`;

            const reader = new FileReader();
            reader.onload = function(e) {
                previewImg.src = e.target.result;
                previewContainer.style.display = 'block';

                if (file.size > 2 * 1024 * 1024) {
                    showCompressionWarning(input.id, fileSizeMB);
                }
            };
            reader.readAsDataURL(file);
        }

        function showCompressionWarning(inputId, fileSizeMB) {
            const previewContainer = document.getElementById(`preview_${inputId}`);
            const warningDiv = document.createElement('div');
            warningDiv.className = 'progress-message';
            warningDiv.style.background = 'linear-gradient(135deg, #fff3cd, #ffeaa7)';
            warningDiv.style.color = '#856404';
            warningDiv.style.borderLeft = '4px solid #ffc107';
            warningDiv.innerHTML = `
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="font-size: 1.1rem;">⚠️</span>
                    <span>Imagen grande (${fileSizeMB} MB). Recomendamos reducir el tamaño para mejor rendimiento.</span>
                </div>
            `;

            const imageControls = previewContainer.querySelector('.image-controls');
            previewContainer.insertBefore(warningDiv, imageControls);

            setTimeout(() => {
                if (warningDiv.parentNode) {
                    warningDiv.style.animation = 'messageSlideOut 0.3s ease-out forwards';
                    setTimeout(() => warningDiv.remove(), 300);
                }
            }, 5000);
        }

        async function compressImage(inputId) {
            const input = document.getElementById(inputId);
            const file = input.files[0];
            if (!file) return;

            const previewContainer = document.getElementById(`preview_${inputId}`);
            const previewImg = document.getElementById(`preview_img_${inputId}`);
            const compressBtn = document.querySelector(`#preview_${inputId} .btn-compress`);
            const sizeElement = document.getElementById(`size_${inputId}`);

            const originalText = compressBtn.innerHTML;
            compressBtn.innerHTML = '<div class="compression-loading"></div> Comprimiendo...';
            compressBtn.disabled = true;

            try {
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                const img = new Image();

                img.onload = function() {
                    const maxWidth = 1200;
                    const maxHeight = 1200;
                    let width = img.width;
                    let height = img.height;

                    if (width > height && width > maxWidth) {
                        height = (height * maxWidth) / width;
                        width = maxWidth;
                    } else if (height > maxHeight) {
                        width = (width * maxHeight) / height;
                        height = maxHeight;
                    }

                    canvas.width = width;
                    canvas.height = height;
                    ctx.drawImage(img, 0, 0, width, height);

                    let quality = 0.8;
                    const originalSizeMB = file.size / 1024 / 1024;

                    if (originalSizeMB > 3) quality = 0.6;
                    if (originalSizeMB > 5) quality = 0.5;
                    if (originalSizeMB > 8) quality = 0.4;

                    canvas.toBlob(function(blob) {
                        const compressedFile = new File([blob], file.name, {
                            type: 'image/jpeg',
                            lastModified: new Date().getTime()
                        });

                        const dataTransfer = new DataTransfer();
                        dataTransfer.items.add(compressedFile);
                        input.files = dataTransfer.files;

                        const reader = new FileReader();
                        reader.onload = function(e) {
                            previewImg.src = e.target.result;

                            const compressedSizeMB = (blob.size / 1024 / 1024).toFixed(2);
                            const originalSizeMB = (file.size / 1024 / 1024).toFixed(2);
                            const reduction = ((1 - (blob.size / file.size)) * 100).toFixed(1);

                            sizeElement.textContent = `${compressedSizeMB} MB (reducido ${reduction}%)`;
                            sizeElement.style.color = '#4CAF50';

                            showCompressionSuccess(inputId, originalSizeMB, compressedSizeMB, reduction);
                        };
                        reader.readAsDataURL(compressedFile);

                        compressBtn.innerHTML = '<i class="fas fa-check"></i> Comprimido';
                        compressBtn.disabled = false;
                        compressBtn.style.background = 'linear-gradient(135deg, #4CAF50, #45a049)';

                        setTimeout(() => {
                            compressBtn.innerHTML = originalText;
                            compressBtn.style.background = 'linear-gradient(135deg, #ff9800, #e68900)';
                        }, 2000);

                    }, 'image/jpeg', quality);
                };

                img.onerror = function() {
                    showCompressionError(inputId, 'Error al cargar la imagen');
                    compressBtn.innerHTML = originalText;
                    compressBtn.disabled = false;
                };

                img.src = URL.createObjectURL(file);

            } catch (error) {
                console.error('Error al comprimir imagen:', error);
                showCompressionError(inputId, 'Error inesperado al comprimir la imagen');
                compressBtn.innerHTML = originalText;
                compressBtn.disabled = false;
            }
        }

        function showCompressionSuccess(inputId, originalSize, compressedSize, reduction) {
            const previewContainer = document.getElementById(`preview_${inputId}`);
            const successDiv = document.createElement('div');
            successDiv.className = 'progress-message';
            successDiv.style.background = 'linear-gradient(135deg, #d4ffd4, #b8f5b8)';
            successDiv.style.color = '#2d5016';
            successDiv.style.borderLeft = '4px solid #4CAF50';
            successDiv.innerHTML = `
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="font-size: 1.1rem;">✅</span>
                    <span>Compresión exitosa: ${originalSize}MB → ${compressedSize}MB (${reduction}% reducción)</span>
                </div>
            `;

            const imageControls = previewContainer.querySelector('.image-controls');
            previewContainer.insertBefore(successDiv, imageControls);

            setTimeout(() => {
                if (successDiv.parentNode) {
                    successDiv.style.animation = 'messageSlideOut 0.3s ease-out forwards';
                    setTimeout(() => successDiv.remove(), 300);
                }
            }, 3000);
        }

        function showCompressionError(inputId, message) {
            const previewContainer = document.getElementById(`preview_${inputId}`);
            const errorDiv = document.createElement('div');
            errorDiv.className = 'progress-message';
            errorDiv.style.background = 'linear-gradient(135deg, #ffd4d4, #f5b8b8)';
            errorDiv.style.color = '#8b0000';
            errorDiv.style.borderLeft = '4px solid #f44336';
            errorDiv.innerHTML = `
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="font-size: 1.1rem;">❌</span>
                    <span>${message}</span>
                </div>
            `;

            const imageControls = previewContainer.querySelector('.image-controls');
            previewContainer.insertBefore(errorDiv, imageControls);

            setTimeout(() => {
                if (errorDiv.parentNode) {
                    errorDiv.style.animation = 'messageSlideOut 0.3s ease-out forwards';
                    setTimeout(() => errorDiv.remove(), 300);
                }
            }, 5000);
        }
        // =================== FUNCIONES DE VALIDACIÓN ===================
        function validarFormularioCompleto() {
            if (!validarTamanioTotal()) {
                return false;
            }
            
            // Validar que se haya seleccionado o creado una especie
            const tipoSeleccion = document.querySelector('input[name="tipo_seleccion"]:checked').value;
            
            if (tipoSeleccion === 'existente') {
                const especieSeleccionada = document.getElementById('especie_seleccionada').value;
                if (!especieSeleccionada) {
                    alert('Por favor selecciona una especie existente');
                    return false;
                }
            } else {
                const nuevaEspecie = document.getElementById('nueva_especie_nombre').value.trim();
                if (!nuevaEspecie) {
                    alert('Por favor ingresa el nombre de la nueva especie');
                    return false;
                }
            }
            
            return true;
        }
        function validarTamanioTotal() {
            const archivos = document.querySelectorAll('input[type="file"]');
            let tamanioTotal = 0;
            const maxTamanio = 50 * 1024 * 1024;

            for (let archivo of archivos) {
                if (archivo.files[0]) {
                    tamanioTotal += archivo.files[0].size;
                }
            }

            if (tamanioTotal > maxTamanio) {
                alert('El tamaño total de las imágenes (' + (tamanioTotal / 1024 / 1024).toFixed(2) + 'MB) excede el límite de 50MB. Por favor, reduce el tamaño de las imágenes.');
                return false;
            }

            return true;
        }
        // Función para cancelar registro
        function cancelarRegistro() {
            if (confirm('¿Estás seguro de que deseas cancelar el registro?')) {
                window.location.href = '{{ route("coleccion") }}';
            }
        }
    </script>
    @include('includes.footer-coleccion')
</body>
</html>