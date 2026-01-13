 // Funciones para el modal de logout
        function showLogoutConfirm() {
            document.getElementById('logoutConfirmModal').style.display = 'block';
        }

        function hideLogoutConfirm() {
            document.getElementById('logoutConfirmModal').style.display = 'none';
        }

        function performLogout() {
            const token = localStorage.getItem('auth_token');
            
            // Mostrar mensaje de cerrando sesión
            showToast('Cerrando sesión...', 'info');
            
            if (token) {
                fetch('/logout', {
                    method: 'POST',
                    headers: {
                        'Authorization': `Bearer ${token}`,
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    // Limpiar localStorage sin importar la respuesta
                    localStorage.removeItem('auth_token');
                    localStorage.removeItem('user_data');
                    
                    showToast('Sesión cerrada exitosamente', 'success');
                    
                    setTimeout(() => {
                        window.location.href = '/';
                    }, 1500);
                })
                .catch(error => {
                    console.error('Error al cerrar sesión:', error);
                    // Limpiar localStorage incluso si hay error
                    localStorage.removeItem('auth_token');
                    localStorage.removeItem('user_data');
                    showToast('Sesión cerrada', 'info');
                    setTimeout(() => {
                        window.location.href = '/';
                    }, 1000);
                });
            } else {
                // Si no hay token, simplemente redirigir
                localStorage.removeItem('auth_token');
                localStorage.removeItem('user_data');
                window.location.href = '/';
            }
            
            hideLogoutConfirm();
        }

        // Función para mostrar toasts
        function showToast(message, type) {
            // Remover toast anterior si existe
            const existingToast = document.querySelector('.toast');
            if (existingToast) {
                existingToast.remove();
            }

            // Crear nuevo toast
            const toast = document.createElement('div');
            toast.className = `toast ${type}`;
            toast.textContent = message;
            document.body.appendChild(toast);

            // Auto-remover después de 3 segundos
            setTimeout(() => {
                toast.classList.add('hide');
                setTimeout(() => {
                    if (toast.parentNode) {
                        toast.parentNode.removeChild(toast);
                    }
                }, 300);
            }, 3000);
        }

        // Cerrar modal al hacer clic fuera
        document.getElementById('logoutConfirmModal').addEventListener('click', function(e) {
            if (e.target === this) {
                hideLogoutConfirm();
            }
        });

        // Cerrar modal con tecla Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                hideLogoutConfirm();
            }
        });

        // Mostrar mensaje de bienvenida si hay usuario en localStorage
        document.addEventListener('DOMContentLoaded', function() {
            const userData = localStorage.getItem('user_data');
            if (userData) {
                const user = JSON.parse(userData);
                setTimeout(() => {
                    showToast(`¡Bienvenido ${user.nombre}!`, 'success');
                }, 500);
            }
        });