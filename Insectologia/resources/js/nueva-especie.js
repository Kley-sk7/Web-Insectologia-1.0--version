
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar');
    
    // Efecto de carga inicial
    setTimeout(() => {
        navbar.style.opacity = '1';
    }, 300);
    
    // Efecto al hacer scroll - solo cambia sombra y padding
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
});

        function validarTamanioTotal() {
            const archivos = document.querySelectorAll('input[type="file"]');
            let tamanioTotal = 0;
            const maxTamanio = 30 * 1024 * 1024; // 30MB máximo total
            
            for (let archivo of archivos) {
                if (archivo.files[0]) {
                    tamanioTotal += archivo.files[0].size;
                }
            }
            
            if (tamanioTotal > maxTamanio) {
                alert('El tamaño total de las imágenes (' + (tamanioTotal / 1024 / 1024).toFixed(2) + 'MB) excede el límite de 30MB. Por favor, reduce el tamaño de las imágenes.');
                return false;
            }
            
            return true;
        }

        // Validar cada imagen individualmente
        document.querySelectorAll('input[type="file"]').forEach(input => {
            input.addEventListener('change', function() {
                if (this.files[0] && this.files[0].size > 5 * 1024 * 1024) {
                    alert('La imagen "' + this.files[0].name + '" es demasiado grande. Máximo 5MB por imagen.');
                    this.value = '';
                }
            });
        });

        function validarTamanio(input) {
            if (input.files[0] && input.files[0].size > 5 * 1024 * 1024) {
                alert('La imagen es demasiado grande. Máximo 5MB por imagen.');
                input.value = '';
            }
        }

        // Disparar la lógica al cargar la página si hay un valor "old" para el orden
        document.addEventListener('DOMContentLoaded', function() {
            if (document.getElementById('orden').value) {
                showTaxonomy();
            }
        });

        function showTaxonomy() {
            const order = document.getElementById("orden").value;
            document.getElementById("taxonomia").classList.remove("hidden");
            
            const metamorfosisSection = document.getElementById("metamorfosis");
            metamorfosisSection.classList.remove("hidden");

            const isHemimetabola = (order === "Orthoptera" || order === "Hemiptera");
            document.getElementById("tipo_metamorfosis").value = isHemimetabola ? "Hemimetabola" : "Holometabola";

            // Generar los ciclos de vida automáticamente
            generarCiclosVida();
        }

        function generarCiclosVida() {
            const container = document.getElementById("ciclos-vida");
            const order = document.getElementById("orden").value;
            container.innerHTML = ''; // Limpiar ciclos anteriores

            let etapas = [];
            if (order === "Orthoptera" || order === "Hemiptera") {
                etapas = ["Huevo", "Ninfa", "Adulto"];
            } else {
                etapas = ["Huevo", "Larva", "Pupa", "Adulto"];
            }

            // Usar nombres de campos que coincidan con el controlador
            etapas.forEach((etapa, index) => {
                const cicloSection = document.createElement("div");
                cicloSection.classList.add("cycle-section");
                cicloSection.innerHTML = `
                    <h4>${etapa}</h4>
                    <input type="hidden" name="etapas[]" value="${etapa}">

                    <label for="ciclo_${index}_alimentacion">Alimentación:</label>
                    <input type="text" id="ciclo_${index}_alimentacion" name="alimentaciones[]" required>

                    <label for="ciclo_${index}_habitat">Hábitat:</label>
                    <input type="text" id="ciclo_${index}_habitat" name="habitats[]" required>

                    <label>Métodos de Control:</label>
                    <div class="checkbox-group">
                        <label><input type="checkbox" name="metodos_control[${index}][]" value="Cultural"> Cultural</label>
                        <label><input type="checkbox" name="metodos_control[${index}][]" value="Biológico"> Biológico</label>
                        <label><input type="checkbox" name="metodos_control[${index}][]" value="Químico"> Químico</label>
                        <label><input type="checkbox" name="metodos_control[${index}][]" value="MIP"> MIP</label>
                    </div>

                    <div class="descripcion-control">
                        <label for="ciclo_${index}_detalle_control">Descripción de Métodos de Control:</label>
                        <textarea id="ciclo_${index}_detalle_control" name="detalles_control[]" rows="3" placeholder="Describe los métodos de control específicos para esta etapa..."></textarea>
                    </div>
                `;
                container.appendChild(cicloSection);
            });
        }

        function cancelarRegistro() {
            window.location.href = '{{ route("coleccion") }}';
        }

        // Función para previsualizar y comprimir imágenes
function previewAndCompressImage(input) {
    const file = input.files[0];
    if (!file) return;

    const previewId = `preview_${input.id}`;
    const previewImgId = `preview_img_${input.id}`;
    const sizeId = `size_${input.id}`;
    
    const previewContainer = document.getElementById(previewId);
    const previewImg = document.getElementById(previewImgId);
    const sizeElement = document.getElementById(sizeId);

    // Mostrar información del archivo
    const fileSizeMB = (file.size / 1024 / 1024).toFixed(2);
    sizeElement.textContent = `${fileSizeMB} MB`;

    // Mostrar preview
    const reader = new FileReader();
    reader.onload = function(e) {
        previewImg.src = e.target.result;
        previewContainer.style.display = 'block';
        
        // Mostrar advertencia si la imagen es muy grande
        if (file.size > 2 * 1024 * 1024) { // 2MB
            showCompressionWarning(input.id, fileSizeMB);
        }
    };
    reader.readAsDataURL(file);
}
// Función para comprimir imagen con mensajes de progreso
async function compressImage(inputId) {
    const input = document.getElementById(inputId);
    const file = input.files[0];
    if (!file) return;

    const previewContainer = document.getElementById(`preview_${inputId}`);
    const previewImg = document.getElementById(`preview_img_${inputId}`);
    const compressBtn = document.querySelector(`#preview_${inputId} .btn-compress`);
    const sizeElement = document.getElementById(`size_${inputId}`);

    // Mostrar estado de carga inicial
    const originalText = compressBtn.innerHTML;
    compressBtn.innerHTML = '<div class="compression-loading"></div> Comprimiendo...';
    compressBtn.disabled = true;

    // Mostrar mensaje de inicio
    showProgressMessage('Iniciando compresión de imagen...', 'info', inputId);

    try {
        // Crear canvas para compresión
        const canvas = document.createElement('canvas');
        const ctx = canvas.getContext('2d');
        const img = new Image();

        img.onload = function() {
            // Mostrar mensaje de redimensionamiento
            showProgressMessage('Redimensionando imagen...', 'info', inputId);

            // Calcular nuevas dimensiones (máximo 1200px en el lado más largo)
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

            // Dibujar imagen redimensionada
            ctx.drawImage(img, 0, 0, width, height);

            // Calcular calidad según tamaño original
            let quality = 0.8;
            const originalSizeMB = file.size / 1024 / 1024;
            
            if (originalSizeMB > 3) quality = 0.6;
            if (originalSizeMB > 5) quality = 0.5;
            if (originalSizeMB > 8) quality = 0.4;

            // Mostrar mensaje de compresión
            showProgressMessage(`Comprimiendo imagen (calidad: ${quality * 100}%)...`, 'info', inputId);

            // Convertir a blob
            canvas.toBlob(function(blob) {
                // Mostrar mensaje de finalización
                showProgressMessage('Finalizando compresión...', 'info', inputId);

                // Crear nuevo archivo
                const compressedFile = new File([blob], file.name, {
                    type: 'image/jpeg',
                    lastModified: new Date().getTime()
                });

                // Actualizar el input file
                const dataTransfer = new DataTransfer();
                dataTransfer.items.add(compressedFile);
                input.files = dataTransfer.files;

                // Actualizar preview
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    
                    // Calcular estadísticas
                    const compressedSizeMB = (blob.size / 1024 / 1024).toFixed(2);
                    const originalSizeMB = (file.size / 1024 / 1024).toFixed(2);
                    const reduction = ((1 - (blob.size / file.size)) * 100).toFixed(1);
                    
                    sizeElement.textContent = `${compressedSizeMB} MB (reducido ${reduction}%)`;
                    sizeElement.style.color = 'var(--color-success)';

                    // Mostrar mensaje de éxito detallado
                    showProgressMessage(
                        `✅ Compresión exitosa: ${originalSizeMB}MB → ${compressedSizeMB}MB (${reduction}% reducción)`,
                        'success',
                        inputId
                    );

                    // Ocultar mensaje después de 3 segundos
                    setTimeout(() => {
                        hideProgressMessage(inputId);
                    }, 3000);
                };
                reader.readAsDataURL(compressedFile);

                // Restaurar botón
                compressBtn.innerHTML = '<i class="fas fa-check"></i> Comprimido';
                compressBtn.disabled = false;
                compressBtn.style.background = 'linear-gradient(135deg, var(--color-success), #45a049)';

                // Restaurar botón después de 2 segundos
                setTimeout(() => {
                    compressBtn.innerHTML = originalText;
                    compressBtn.style.background = 'linear-gradient(135deg, var(--color-warning), #e68900)';
                }, 2000);

            }, 'image/jpeg', quality);

        };

        img.onerror = function() {
            showProgressMessage('❌ Error al cargar la imagen', 'error', inputId);
            compressBtn.innerHTML = originalText;
            compressBtn.disabled = false;
        };

        img.src = URL.createObjectURL(file);

    } catch (error) {
        console.error('Error al comprimir imagen:', error);
        showProgressMessage('❌ Error inesperado al comprimir la imagen', 'error', inputId);
        compressBtn.innerHTML = originalText;
        compressBtn.disabled = false;
        
        // Ocultar mensaje de error después de 5 segundos
        setTimeout(() => {
            hideProgressMessage(inputId);
        }, 5000);
    }
}

// Función para mostrar mensajes de progreso
function showProgressMessage(message, type, inputId) {
    // Remover mensaje anterior si existe
    hideProgressMessage(inputId);
    
    const previewContainer = document.getElementById(`preview_${inputId}`);
    const messageDiv = document.createElement('div');
    messageDiv.id = `progress_message_${inputId}`;
    messageDiv.className = 'progress-message';
    
    // Estilos según el tipo
    const styles = {
        info: {
            background: 'linear-gradient(135deg, #d1ecf1, #bee5eb)',
            color: '#0c5460',
            borderLeft: '4px solid #17a2b8'
        },
        success: {
            background: 'linear-gradient(135deg, #d4ffd4, #b8f5b8)',
            color: '#2d5016',
            borderLeft: '4px solid #4CAF50'
        },
        error: {
            background: 'linear-gradient(135deg, #ffd4d4, #f5b8b8)',
            color: '#8b0000',
            borderLeft: '4px solid #f44336'
        },
        warning: {
            background: 'linear-gradient(135deg, #fff3cd, #ffeaa7)',
            color: '#856404',
            borderLeft: '4px solid #ffc107'
        }
    };
    
    const style = styles[type] || styles.info;
    
    messageDiv.style.cssText = `
        padding: 12px 15px;
        border-radius: 8px;
        margin: 10px 0;
        font-size: 0.85rem;
        font-weight: 600;
        animation: messageSlideIn 0.3s ease-out;
        ${Object.entries(style).map(([key, value]) => `${key}: ${value};`).join(' ')}
    `;
    
    // Añadir icono según el tipo
    const icons = {
        info: '🔧',
        success: '✅',
        error: '❌',
        warning: '⚠️'
    };
    
    messageDiv.innerHTML = `
        <div style="display: flex; align-items: center; gap: 8px;">
            <span style="font-size: 1.1rem;">${icons[type]}</span>
            <span>${message}</span>
        </div>
    `;
    
    // Insertar después del botón de compresión
    const imageControls = previewContainer.querySelector('.image-controls');
    imageControls.parentNode.insertBefore(messageDiv, imageControls.nextSibling);
}

// Función para ocultar mensaje de progreso
function hideProgressMessage(inputId) {
    const existingMessage = document.getElementById(`progress_message_${inputId}`);
    if (existingMessage) {
        existingMessage.style.animation = 'messageSlideOut 0.3s ease-out forwards';
        setTimeout(() => {
            if (existingMessage.parentNode) {
                existingMessage.parentNode.removeChild(existingMessage);
            }
        }, 300);
    }
}

// Función para mostrar notificación toast
function showToast(message, type = 'info') {
    const toast = document.createElement('div');
    toast.className = `toast toast-${type}`;
    toast.innerHTML = `
        <div class="toast-content">
            <span class="toast-icon">${type === 'success' ? '✅' : type === 'error' ? '❌' : 'ℹ️'}</span>
            <span class="toast-message">${message}</span>
        </div>
        <div class="toast-progress"></div>
    `;
    
    document.body.appendChild(toast);
    
    // Mostrar toast
    setTimeout(() => {
        toast.classList.add('show');
    }, 100);
    
    // Ocultar y remover después de 4 segundos
    setTimeout(() => {
        toast.classList.remove('show');
        setTimeout(() => {
            if (toast.parentNode) {
                toast.parentNode.removeChild(toast);
            }
        }, 300);
    }, 4000);
}
document.head.appendChild(style);
