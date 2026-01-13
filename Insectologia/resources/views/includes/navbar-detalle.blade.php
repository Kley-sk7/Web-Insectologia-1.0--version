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
                    <!-- Botón para editar -->
                    <a href="{{ route('especie.edit', ['especie' => $especie->id]) }}" class="btn-editar">
                        <i class="fas fa-edit"></i> Editar Especie
                    </a>
                    

                    <!-- Botón para eliminar (opcional)
                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        <i class="fas fa-trash"></i> Eliminar
                    </button>
                     -->

                    
                </div>
                
            </ul>

            <div class="nav-buttons">
                <button class="btn btn-outline-nav btn-nav" onclick="window.history.back()">Regresar</button>
            </div>
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
        background: #43bad8ff;
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