
        // JavaScript para manejar las miniaturas y botones de partes
        document.addEventListener('DOMContentLoaded', function() {
            const miniImgs = document.querySelectorAll('.mini-img');
            const btnPartes = document.querySelectorAll('.btn-partes');
            
            // Función para cambiar la imagen principal
            function cambiarImagenPrincipal(src, alt) {
                const imgPrincipal = document.querySelector('.image-container img');
                imgPrincipal.src = src;
                imgPrincipal.alt = alt;
            }
            
            // Event listeners para miniaturas
            miniImgs.forEach(img => {
                img.addEventListener('click', function() {
                    // Remover clase active de todas las miniaturas
                    miniImgs.forEach(i => i.classList.remove('active'));
                    // Agregar clase active a la miniatura clickeada
                    this.classList.add('active');
                    
                    // Cambiar imagen principal (aquí usarías diferentes imágenes según la parte)
                    cambiarImagenPrincipal(this.src, this.alt);
                });
            });
            
            // Event listeners para botones de partes
            btnPartes.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remover clase active de todos los botones
                    btnPartes.forEach(b => b.classList.remove('active'));
                    // Agregar clase active al botón clickeado
                    this.classList.add('active');
                    
                    const parte = this.getAttribute('data-parte');
                    
                    // Encontrar la miniatura correspondiente y cambiar la imagen
                    const miniImgCorrespondiente = document.querySelector(`.mini-img[data-parte="${parte}"]`);
                    if (miniImgCorrespondiente) {
                        // Remover active de todas las miniaturas y agregarlo a la correcta
                        miniImgs.forEach(i => i.classList.remove('active'));
                        miniImgCorrespondiente.classList.add('active');
                        cambiarImagenPrincipal(miniImgCorrespondiente.src, miniImgCorrespondiente.alt);
                    }
                });
            });
        });
  