<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $especie['nombre_cientifico'] }} - Detalles</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite('resources/css/includes/especie-detalle.css')
</head>
<body class="bg-light">
    @include('includes.navbar-detalle')
    <div class="page-header text-center">
        <div class="container">
            <h1 class="text-center">{{ $especie->nombre_cientifico }}</h1>
            <p class="lead text-center">{{ $especie->nombre_comun }}</p>
        </div>
    </div>
    <div class="container my-4">
        <div class="row">
            <div class="col-lg-6">
                <!-- IMAGEN PRINCIPAL -->
                <div class="image-container rounded-3 overflow-hidden shadow-sm mb-4">
                    @php
                    $imagenPrincipal = $especie->imagenesMorfologicas->where('tipo_imagen', 'completa')->first();
                    @endphp

                    @if($imagenPrincipal)
                    <img src="{{ asset('storage/' . $imagenPrincipal->ruta_imagen) }}"
                        class="card-img-top clickable-image"
                        alt="{{ $especie->nombre_cientifico }}"
                        data-bs-toggle="modal"
                        data-bs-target="#imagenModal"
                        data-bs-src="{{ asset('storage/' . $imagenPrincipal->ruta_imagen) }}"
                        data-bs-descripcion="{{ $imagenPrincipal->descripcion }}">
                    <div class="image-caption p-2">
                        <small>{{ $imagenPrincipal->descripcion }} - Haz clic para ampliar</small>
                    </div>
                    @else
                    <div class="text-center p-5 bg-light">
                        <p>Imagen no disponible</p>
                    </div>
                    @endif
                </div>

                <h4 class="mt-4 mb-3">{{ $especie->nombre_comun }}</h4>

                <div class="insect-details mb-4">
                    <p><strong>Nombre Científico:</strong> <em>{{ $especie->nombre_cientifico }}</em></p>
                    <p><strong>Reino:</strong> {{ $especie->reino }}</p>
                    <p><strong>Filo:</strong> {{ $especie->filo }}</p>
                    <p><strong>Clase:</strong> {{ $especie->clase }}</p>
                    <p><strong>Orden:</strong> {{ $especie->orden }}</p>
                    <p><strong>Familia:</strong> {{ $especie->familia }}</p>
                    <p><strong>Género:</strong> {{ $especie->genero }}</p>
                    <p><strong>Especie:</strong> {{ $especie->especie }}</p>
                    <p><strong>Dominio:</strong> {{ $especie->dominio }}</p>
                    <p><strong>Metamorfosis:</strong> {{ $especie->tipo_metamorfosis }}</p>
                </div>

                <!-- NAVEGACIÓN MORFOLÓGICA -->
                <div class="d-flex flex-column">
                    <h2 class="h4 fw-bold mb-4">Morfología</h2>

                    @if($especie->imagenesMorfologicas->count() > 0)
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        @foreach($especie->imagenesMorfologicas as $imagen)
                        @if($imagen->tipo_imagen != 'completa')
                        <div class="card" style="width: 150px;">
                            <img src="{{ asset('storage/' . $imagen->ruta_imagen) }}"
                                class="card-img-top clickable-image"
                                alt="{{ $imagen->tipo_imagen }}"
                                style="height: 100px; object-fit: cover;"
                                data-bs-toggle="modal"
                                data-bs-target="#imagenModal"
                                data-bs-src="{{ asset('storage/' . $imagen->ruta_imagen) }}"
                                data-bs-descripcion="{{ $imagen->descripcion }}">
                            <div class="card-body p-2">
                                <small class="card-text">{{ ucfirst($imagen->tipo_imagen) }}</small>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>

                    <!-- Botones de navegación -->
                    <div class="mt-4">
                        <a href="{{ route('especie.metamorfosis', ['especie' => $especie->id]) }}"
                            class="btn btn-outline-primary me-2">
                            Metamorfosis
                        </a>

                        <a href="{{ route('especie.morfologia', ['especie' => $especie->id]) }}"
                            class="btn btn-outline-primary">
                            Morfología
                        </a>
                    </div>
                    @else
                    <div class="alert alert-info">
                        <p class="mb-0">No hay imágenes de morfología disponibles.</p>
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-lg-6">
                <div class="info-card p-4 rounded-3 h-100">
                    <h3 class="fw-bold mb-3">Información Detallada</h3>
                    <div class="descripcion-general">
                        <p class="lead">{{ $especie->detalle_general }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL PARA IMAGEN AMPLIADA -->
    <div class="modal fade" id="imagenModal" tabindex="-1" aria-labelledby="imagenModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imagenModalLabel">{{ $especie->nombre_cientifico }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImagenPrincipal"
                        src=""
                        class="img-fluid modal-image"
                        alt="">
                    <div class="mt-3">
                        <p id="modalDescripcion" class="text-muted"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL PARA ELIMINAR -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirmar Eliminación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>¿Estás seguro de que deseas eliminar la especie <strong>{{ $especie->nombre_cientifico }}</strong>?</p>
                    <p class="text-danger"><small>Esta acción no se puede deshacer.</small></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form action="{{ route('especie.destroy', ['especie' => $especie->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle con Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Función para cambiar la imagen en el modal
        function cambiarImagenModal(src, descripcion) {
            console.log('Cambiando imagen modal:', src, descripcion);
            document.getElementById('modalImagenPrincipal').src = src;
            document.getElementById('modalDescripcion').textContent = descripcion;
        }

        // Inicializar cuando el DOM esté listo
        document.addEventListener('DOMContentLoaded', function() {
            // Configurar evento para todas las imágenes clickeables
            const clickableImages = document.querySelectorAll('.clickable-image');

            clickableImages.forEach(function(image) {
                image.addEventListener('click', function() {
                    const src = this.getAttribute('data-bs-src');
                    const descripcion = this.getAttribute('data-bs-descripcion');
                    cambiarImagenModal(src, descripcion);
                });
            });

            // Inicializar con la primera imagen si existe
            @if($imagenPrincipal)
            cambiarImagenModal(
                '{{ asset('
                storage / ' . $imagenPrincipal->ruta_imagen) }}',
                '{{ $imagenPrincipal->descripcion }}'
            );
            @endif

            // También puedes usar el evento show.bs.modal de Bootstrap
            const imagenModal = document.getElementById('imagenModal');
            if (imagenModal) {
                imagenModal.addEventListener('show.bs.modal', function(event) {
                    // Este evento se dispara cuando el modal se va a mostrar
                    const button = event.relatedTarget; // Botón que activó el modal
                    if (button) {
                        const src = button.getAttribute('data-bs-src');
                        const descripcion = button.getAttribute('data-bs-descripcion');
                        cambiarImagenModal(src, descripcion);
                    }
                });
            }

            // Debug: verificar que Bootstrap esté cargado
            if (typeof bootstrap !== 'undefined') {
                console.log('Bootstrap cargado correctamente');
            } else {
                console.error('Bootstrap no está cargado');
            }
        });
    </script>
</body>

</html>