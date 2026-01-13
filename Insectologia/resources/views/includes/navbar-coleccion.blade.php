<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <div class="navbar-brand">
            <img src="{{ asset('image/PUCE LOGO AMAZONAS.png') }}" alt="Logo" class="logo">
        </div>
        <div class="navbar" id="navbarContent">
            <div class="navbar-buttons">
                <!-- Botón que abre el modal -->
                <button onclick="showLogoutConfirm()" class="btn-outline">Cerrar sesión</button>
            </div>
        </div>
    </div>
</nav>

<!-- Modal de confirmación -->
<div id="logoutConfirmModal" class="confirm-modal" style="display: none;">
    <div class="confirm-modal-content">
        <div class="modal-icon">⚠️</div>
        <h3>¿Cerrar sesión?</h3>
        <p>¿Estás seguro de que quieres salir de la aplicación?</p>
        <div class="modal-buttons">
            <button class="btn-cancel" onclick="hideLogoutConfirm()">Cancelar</button>
            <a href="{{ route('index') }}" class="btn-confirm">Sí, cerrar sesión</a>
        </div>
    </div>
</div>

<style>
    /* Estilos para el navbar */
    .navbar-dark {
        background: linear-gradient(135deg, #ffffffff, #ffffffff);
        box-shadow: 0 2px 10px rgba(175, 46, 46, 0.1);
        padding: 15px 0;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        width: 100%;
    }

    .logo {
        height: 50px;
        transition: transform 0.3s ease;
    }

    .logo:hover {
        transform: scale(1.05);
    }

    .navbar-buttons {
        display: flex;
        gap: 15px;
        align-items: center;
    }

    .btn-outline {
        background: #ff1d1dff;
        color: #ffffffff;
        border: 2px solid #e22e2eff;
        padding: 10px 20px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
    }

    .btn-outline:hover {
        background: #d84343ff;
        color: #2c3e50;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 255, 255, 0.2);
    }

    /* Estilos para el modal personalizado */
    .confirm-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(5px);
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: fadeIn 0.3s ease-out;
    }

    .confirm-modal-content {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        text-align: center;
        max-width: 400px;
        width: 90%;
        animation: slideIn 0.3s ease-out;
    }

    .modal-icon {
        font-size: 48px;
        margin-bottom: 15px;
    }

    .confirm-modal-content h3 {
        margin: 0 0 10px 0;
        color: #333;
        font-size: 20px;
        font-weight: 600;
    }

    .confirm-modal-content p {
        color: #666;
        margin: 0 0 25px 0;
        line-height: 1.5;
        font-size: 14px;
    }

    .modal-buttons {
        display: flex;
        gap: 12px;
        justify-content: center;
    }

    .btn-cancel, .btn-confirm {
        padding: 12px 25px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        transition: all 0.3s ease;
        min-width: 120px;
        font-size: 14px;
    }

    .btn-cancel {
        background: #f8f9fa;
        color: #6c757d;
        border: 2px solid #dee2e6;
    }

    .btn-cancel:hover {
        background: #e9ecef;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(108, 117, 125, 0.2);
    }

    .btn-confirm {
        background: linear-gradient(135deg, #e74c3c, #c0392b);
        color: white;
    }

    .btn-confirm:hover {
        background: linear-gradient(135deg, #c0392b, #a93226);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(231, 76, 60, 0.3);
    }

    /* Animaciones */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-20px) scale(0.9);
        }
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    /* Responsive */
    @media (max-width: 768px) {
        .navbar-buttons {
            flex-direction: column;
            gap: 10px;
        }
        
        .confirm-modal-content {
            padding: 25px 20px;
        }
        
        .modal-buttons {
            flex-direction: column;
        }
        
        .btn-cancel, .btn-confirm {
            width: 100%;
        }
    }

    
    /* Asegúrate de que el botón confirmar sea un enlace */
    .btn-confirm {
        background: linear-gradient(135deg, #e74c3c, #c0392b);
        color: white;
        padding: 12px 25px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        transition: all 0.3s ease;
        min-width: 120px;
        font-size: 14px;
        text-decoration: none;
        display: inline-block;
        text-align: center;
    }
</style>

<script>
    function showLogoutConfirm() {
        document.getElementById('logoutConfirmModal').style.display = 'flex';
    }

    function hideLogoutConfirm() {
        document.getElementById('logoutConfirmModal').style.display = 'none';
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
</script>
<style>
    /* Estilos para el navbar */
    .navbar-dark {
        background: linear-gradient(135deg, #ffffffff, #ffffffff);
        box-shadow: 0 2px 10px rgba(175, 46, 46, 0.1);
        padding: 15px 0;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        width: 100%;
    }

    .logo {
        height: 50px;
        transition: transform 0.3s ease;
    }

    .logo:hover {
        transform: scale(1.05);
    }

    .navbar-buttons {
        display: flex;
        gap: 15px;
        align-items: center;
    }

    .btn-outline {
        background: #ff1d1dff;
        color: #ffffffff;
        border: 2px solid #e22e2eff;
        padding: 10px 20px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
    }

    .btn-outline:hover {
        background: #d84343ff;
        color: #2c3e50;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 255, 255, 0.2);
    }

    /* Estilos para el modal personalizado */
    .confirm-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(5px);
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: fadeIn 0.3s ease-out;
    }

    .confirm-modal-content {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        text-align: center;
        max-width: 400px;
        width: 90%;
        animation: slideIn 0.3s ease-out;
    }

    .modal-icon {
        font-size: 48px;
        margin-bottom: 15px;
    }

    .confirm-modal-content h3 {
        margin: 0 0 10px 0;
        color: #333;
        font-size: 20px;
        font-weight: 600;
    }

    .confirm-modal-content p {
        color: #666;
        margin: 0 0 25px 0;
        line-height: 1.5;
        font-size: 14px;
    }

    .modal-buttons {
        display: flex;
        gap: 12px;
        justify-content: center;
    }

    .btn-cancel, .btn-confirm {
        padding: 12px 25px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        transition: all 0.3s ease;
        min-width: 120px;
        font-size: 14px;
    }

    .btn-cancel {
        background: #f8f9fa;
        color: #6c757d;
        border: 2px solid #dee2e6;
    }

    .btn-cancel:hover {
        background: #e9ecef;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(108, 117, 125, 0.2);
    }

    .btn-confirm {
        background: linear-gradient(135deg, #e74c3c, #c0392b);
        color: white;
    }

    .btn-confirm:hover {
        background: linear-gradient(135deg, #c0392b, #a93226);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(231, 76, 60, 0.3);
    }

    /* Animaciones */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-20px) scale(0.9);
        }
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    /* Responsive */
    @media (max-width: 768px) {
        .navbar-buttons {
            flex-direction: column;
            gap: 10px;
        }
        
        .confirm-modal-content {
            padding: 25px 20px;
        }
        
        .modal-buttons {
            flex-direction: column;
        }
        
        .btn-cancel, .btn-confirm {
            width: 100%;
        }
    }
</style>