
document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginFormElement');
    const registerForm = document.getElementById('registerFormElement');
    const showRegister = document.getElementById('showRegister');
    const showLogin = document.getElementById('showLogin');
    const loginMessage = document.getElementById('loginMessage');
    const registerMessage = document.getElementById('registerMessage');

    // Alternar entre login y registro
    showRegister.addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('loginForm').style.display = 'none';
        document.getElementById('registerForm').style.display = 'block';
        clearMessages();
    });

    showLogin.addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('registerForm').style.display = 'none';
        document.getElementById('loginForm').style.display = 'block';
        clearMessages();
    });

    // Manejar login
    loginForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const usuario = document.getElementById('usuario').value;
        const contrasena = document.getElementById('contrasena').value;

        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Iniciando sesión...';
        submitBtn.disabled = true;

        try {
            const response = await fetch('/login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': getCsrfToken(),
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ 
                    usuario: usuario, 
                    contrasena: contrasena 
                })
            });

            const contentType = response.headers.get('content-type');
            if (!contentType || !contentType.includes('application/json')) {
                const text = await response.text();
                throw new Error(`Error del servidor. Status: ${response.status}`);
            }

            const result = await response.json();

            if (result.success) {
                showMessage(loginMessage, '¡Login exitoso! Redirigiendo...', 'success');
                
                localStorage.setItem('auth_token', result.token);
                localStorage.setItem('user_data', JSON.stringify(result.usuario));
                
                setTimeout(() => {
                    window.location.href = '/coleccion';
                }, 1500);
            } else {
                showMessage(loginMessage, result.message, 'error');
            }
        } catch (error) {
            console.error('Error completo:', error);
            showMessage(loginMessage, 'Error de conexión: ' + error.message, 'error');
        } finally {
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
        }
    });

    // Manejar registro
    registerForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const nombre = document.getElementById('nombre').value;
        const usuario = document.getElementById('usuarioRegistro').value;
        const contrasena = document.getElementById('contrasenaRegistro').value;

        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Registrando...';
        submitBtn.disabled = true;

        try {
            const response = await fetch('/register', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': getCsrfToken(),
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ 
                    nombre: nombre,
                    usuario: usuario, 
                    contrasena: contrasena 
                })
            });

            const contentType = response.headers.get('content-type');
            if (!contentType || !contentType.includes('application/json')) {
                const text = await response.text();
                throw new Error(`Error del servidor. Status: ${response.status}`);
            }

            const result = await response.json();

            if (result.success) {
                showMessage(registerMessage, '¡Registro exitoso! Ahora puedes iniciar sesión.', 'success');
                registerForm.reset();
                
                setTimeout(() => {
                    document.getElementById('registerForm').style.display = 'none';
                    document.getElementById('loginForm').style.display = 'block';
                    clearMessages();
                }, 2000);
            } else {
                if (result.errors) {
                    const errorMessages = Object.values(result.errors).flat().join(', ');
                    showMessage(registerMessage, errorMessages, 'error');
                } else {
                    showMessage(registerMessage, result.message, 'error');
                }
            }
        } catch (error) {
            console.error('Error completo:', error);
            showMessage(registerMessage, 'Error de conexión: ' + error.message, 'error');
        } finally {
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
        }
    });

    // Función mejorada para mostrar mensajes
    function showMessage(element, message, type) {
        const alertClass = `alert alert-${type}`;
        
        element.innerHTML = `
            <div class="${alertClass}">
                ${message}
            </div>
        `;
        element.style.display = 'block';

        // Auto-ocultar mensajes de éxito después de 5 segundos
        if (type === 'success') {
            setTimeout(() => {
                if (element.firstChild) {
                    element.firstChild.classList.add('fade-out');
                    setTimeout(() => {
                        element.style.display = 'none';
                        element.innerHTML = '';
                    }, 300);
                }
            }, 5000);
        }
    }

    function clearMessages() {
        loginMessage.style.display = 'none';
        loginMessage.innerHTML = '';
        registerMessage.style.display = 'none';
        registerMessage.innerHTML = '';
    }

    function getCsrfToken() {
        return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    }
});
