<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand">
            <img src="{{ asset('image/PUCE LOGO AMAZONAS.png') }}" alt="Logo" class="logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <!-- Puedes agregar items de menú aquí si los necesitas -->
            </ul>

            <div class="nav-buttons">
                <button class="btn btn-outline-nav btn-nav" onclick="window.history.back()">Regresar</button>
            </div>
        </div>
    </div>
</nav>

<style>
/* 1. Estilos base del Navbar con efecto glass blur */
.navbar {
    background-color: rgba(255, 255, 255, 0.95); /* Fondo blanco con transparencia */
    backdrop-filter: blur(10px); /* Efecto glass blur */
    -webkit-backdrop-filter: blur(10px); /* Soporte para Safari */
    padding: 12px 0;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1030;
}

/* 2. Estado cuando se hace scroll */
.navbar.scrolled {
    background-color: rgba(255, 255, 255, 0.98); /* Más opaco al hacer scroll */
    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(15px);
    box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
    padding: 8px 0;
}

/* 3. Contenedor del Navbar */
.navbar .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* 4. Estilos del Logo */
.navbar-brand {
    display: flex;
    align-items: center;
    text-decoration: none;
    font-size: 1.5rem;
    font-weight: 700;
    color: #000;
}

.navbar-brand .logo {
    max-height: 45px;
    margin-right: 15px;
    transition: max-height 0.3s ease;
}

.navbar.scrolled .navbar-brand .logo {
    max-height: 40px; /* Logo más pequeño al hacer scroll */
}

/* 5. Estilos del Botón de Regresar */
.nav-buttons .btn-nav {
    background-color: #48aeddff;
    color: #ffffff;
    border: none;
    border-radius: 8px;
    padding: 10px 25px;
    font-weight: 600;
    font-size: 1rem;
    transition: all 0.3s ease;
    text-decoration: none;
    cursor: pointer;
}

.nav-buttons .btn-nav:hover {
    background-color: #71dfa8ff;
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(113, 223, 168, 0.3);
}

/* 6. Navbar toggler para móviles */
.navbar-toggler {
    border: none;
    padding: 4px 8px;
}

.navbar-toggler:focus {
    box-shadow: none;
}

.navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.8%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

/* 7. Ajuste para el contenido principal (evitar que quede detrás del navbar fijo) */
body {
    padding-top: 70px; /* Ajusta según la altura de tu navbar */
}

/* 8. Responsive */
@media (max-width: 768px) {
    .navbar {
        padding: 10px 0;
    }
    
    .navbar.scrolled {
        padding: 6px 0;
    }
    
    .navbar-brand .logo {
        max-height: 40px;
    }
    
    .navbar.scrolled .navbar-brand .logo {
        max-height: 35px;
    }
    
    body {
        padding-top: 60px;
    }
    
    .nav-buttons .btn-nav {
        padding: 8px 20px;
        font-size: 0.9rem;
    }
}

/* 9. Efectos de transición suaves */
.navbar,
.navbar-brand .logo,
.nav-buttons .btn-nav {
    transition: all 0.3s ease;
}
</style>

<script>
// JavaScript para manejar el efecto al hacer scroll
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar');
    
    // Efecto de carga inicial
    setTimeout(() => {
        navbar.style.opacity = '1';
    }, 300);

    // Efecto al hacer scroll
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Inicializar estado
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    }
});
</script>