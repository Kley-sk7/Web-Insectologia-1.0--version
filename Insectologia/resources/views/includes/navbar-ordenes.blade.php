<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <!-- Logo que también redirige a la colección -->
        <a class="navbar-brand">
            <img src="{{ asset('image/PUCE LOGO AMAZONAS.png') }}" alt="Logo" class="logo">
        </a>
        <div class="navbar" id="navbarContent">
            <div class="navbar-buttons">
                <!-- Solo el botón Inicio -->
                <a href="{{ route('home') }}" class="btn-outline">Inicio</a>
            </div>
        </div>
    </div>
</nav>

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

    .navbar-brand {
        cursor: pointer;
        text-decoration: none;
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
        background: #2a8cfdd2;
        color: #ffffffff;
        border: 2px solid #2aaefaff;
        padding: 10px 20px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        text-align: center;
        line-height: normal;
    }

    .btn-outline:hover {
        background: #d84343ff;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 255, 255, 0.2);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .navbar-buttons {
            flex-direction: column;
            gap: 10px;
        }
        
        .logo {
            height: 40px;
        }
    }
</style>