
        document.addEventListener('DOMContentLoaded', function() {
            const infoModal = document.getElementById('infoModal');
            const infoFormBtns = document.querySelectorAll('.info-form-btn');
            
            // Agregar evento click a todos los botones de información
            infoFormBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault(); // Prevenir la navegación inmediata
                    
                    const formType = this.getAttribute('data-form-type');
                    const formUrl = this.getAttribute('href');
                    
                    // Mostrar el modal
                    const modal = new bootstrap.Modal(infoModal);
                    modal.show();
                    
                    // Cargar la información del formulario
                    loadFormInfo(formType, formUrl);
                });
            });
            
            // Función para cargar información del formulario
            async function loadFormInfo(formType, formUrl) {
                // Mostrar loading y ocultar contenido/error
                document.getElementById('loadingSpinner').style.display = 'block';
                document.getElementById('modalContent').style.display = 'none';
                document.getElementById('modalError').style.display = 'none';
                
                try {
                    const response = await fetch(`/form-info/${formType}`);
                    
                    if (!response.ok) {
                        throw new Error('Error en la respuesta del servidor');
                    }
                    
                    const formData = await response.json();
                    
                    if (Object.keys(formData).length === 0) {
                        throw new Error('No se encontró información para este formulario');
                    }
                    
                    // Actualizar el contenido del modal
                    document.getElementById('modalFormTitle').textContent = formData.title;
                    document.getElementById('modalFormDescription').textContent = formData.description;
                    document.getElementById('modalContinueBtn').setAttribute('href', formUrl);
                    
                    // Actualizar la lista de detalles
                    const detailsList = document.getElementById('modalFormDetails');
                    detailsList.innerHTML = formData.details.map(detail => 
                        `<li class="list-group-item">${detail}</li>`
                    ).join('');
                    
                    // Mostrar contenido y ocultar loading
                    document.getElementById('loadingSpinner').style.display = 'none';
                    document.getElementById('modalContent').style.display = 'block';
                    
                } catch (error) {
                    console.error('Error loading form info:', error);
                    document.getElementById('loadingSpinner').style.display = 'none';
                    document.getElementById('modalError').style.display = 'block';
                }
            }
            
            // Limpiar modal cuando se cierre
            infoModal.addEventListener('hidden.bs.modal', function() {
                document.getElementById('modalContent').style.display = 'none';
                document.getElementById('modalError').style.display = 'none';
                document.getElementById('loadingSpinner').style.display = 'block';
            });
        });
