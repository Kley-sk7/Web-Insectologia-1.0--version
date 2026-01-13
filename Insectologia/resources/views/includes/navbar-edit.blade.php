<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand">
            <img src="{{ asset('image/PUCE LOGO AMAZONAS.png') }}" alt="Logo" class="logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <!-- Menú items si es necesario -->
                <div class="action-buttons">
                </div>
            </ul>
            <div class="nav-buttons">
                <button class="btn btn-outline-nav btn-nav" onclick="window.history.back()">Regresar</button>
            </div>
        </div>

    </div>
</nav>
<style>
    /* Estilos para el navbar personalizado */
.navbar-dark {
    background: linear-gradient(135deg, #ffffff, #ffffff);
    box-shadow: 0 2px 10px rgba(175, 46, 46, 0.1);
    padding: 15px 0;
    position: sticky;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    width: 100%;
}

.navbar .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

/* Logo en la parte izquierda */
.navbar-brand {
    display: flex;
    align-items: center;
    margin-right: auto; /* Empuja todo lo demás a la derecha */
}

.logo {
    height: 50px;
    transition: transform 0.3s ease;
}

.logo:hover {
    transform: scale(1.05);
}

/* Botón de hamburguesa para móviles */
.navbar-toggler {
    border: none;
    background: transparent;
    padding: 8px;
    margin-left: 15px;
}

.navbar-toggler-icon {
    width: 25px;
    height: 25px;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: center;
}

/* Contenedor del menú colapsable */
.navbar-collapse {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    width: auto;
}

/* Botones de navegación en la derecha */
.nav-buttons {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-left: auto; /* Esto empuja los botones a la derecha */
}

/* Estilos para el botón Regresar */
.btn-outline-nav {
    background: #2ecc71; /* Verde para el botón Regresar */
    color: #ffffff;
    border: 2px solid #27ae60;
    padding: 10px 20px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    white-space: nowrap;
}

.btn-outline-nav:hover {
    background: #27ae60;
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(46, 204, 113, 0.3);
}

/* Contenedor de action-buttons si necesitas agregar más botones */
.action-buttons {
    display: flex;
    gap: 10px;
    align-items: center;
}

/* Estilos para el navbar-nav */
.navbar-nav {
    display: flex;
    align-items: center;
    margin-right: 20px;
}

/* Botones adicionales si los necesitas */
.btn-nav {
    background: #3498db; /* Azul para botones generales */
    color: #ffffff;
    border: 2px solid #2980b9;
    padding: 10px 20px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
}

.btn-nav:hover {
    background: #2980b9;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
}

/* Responsive Design */
@media (max-width: 992px) {
    .navbar .container {
        flex-wrap: wrap;
    }
    
    .navbar-collapse {
        order: 3;
        width: 100%;
        justify-content: space-between;
        margin-top: 15px;
        padding-top: 15px;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
    }
    
    .navbar-nav {
        margin-right: 0;
        width: 100%;
        justify-content: center;
        margin-bottom: 10px;
    }
    
    .nav-buttons {
        width: 100%;
        justify-content: center;
        margin-left: 0;
    }
    
    .action-buttons {
        width: 100%;
        justify-content: center;
        margin-bottom: 10px;
    }
}

@media (max-width: 768px) {
    .navbar-dark {
        padding: 10px 0;
    }
    
    .logo {
        height: 40px;
    }
    
    .btn-outline-nav, .btn-nav {
        padding: 8px 15px;
        font-size: 13px;
    }
    
    .navbar-collapse {
        flex-direction: column;
        align-items: stretch;
    }
    
    .navbar-nav {
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }
    
    .nav-buttons {
        flex-direction: column;
        gap: 10px;
        align-items: center;
    }
    
    .action-buttons {
        flex-direction: column;
        gap: 10px;
        align-items: center;
    }
}

@media (max-width: 576px) {
    .navbar .container {
        padding: 0 15px;
    }
    
    .logo {
        height: 35px;
    }
    
    .btn-outline-nav, .btn-nav {
        width: 100%;
        text-align: center;
    }
}

/* Animaciones suaves */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Estilo para cuando el navbar está en top fijo */
.navbar-dark.fixed-top {
    animation: fadeIn 0.3s ease-out;
}

/* Estilo para los botones cuando se expande el menú */
.navbar-collapse.show .nav-buttons {
    animation: slideInRight 0.3s ease-out;
}
</style>