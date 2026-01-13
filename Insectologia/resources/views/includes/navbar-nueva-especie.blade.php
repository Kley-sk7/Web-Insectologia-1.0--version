    <!-- Navbar con botones -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('image/PUCE LOGO AMAZONAS.png') }}" alt="Logo" class="logo">
            </a>
            <div class="navbar-buttons-container">
                <button type="submit" form="registro-especie-form" class="btn-nav btn-guardar">
                    <i class="fas fa-save"></i> Guardar
                </button>
                <button type="button" onclick="cancelarRegistro()" class="btn-nav btn-cancelar">
                    <i class="fas fa-times"></i> Cancelar
                </button>
            </div>
        </div>
    </nav>
