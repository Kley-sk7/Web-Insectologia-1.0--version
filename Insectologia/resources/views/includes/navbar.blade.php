<nav class="navbar navbar-expand-lg navbar-dark fixed-top transition-all">
    <div class="container">
        <a class="navbar-brand transition-all">
            <img src="{{ asset('image/PUCE LOGO AMAZONAS.png') }}" alt="Logo" class="logo">
        </a>
        
        <button class="navbar-toggler transition-all" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse transition-all" id="navbarContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <!-- Menú items -->
            </ul>
            
            <div class="nav-buttons">
                <a href="{{ url('login') }}" class="btn btn-outline-nav btn-nav transition-all">Login/Registro</a>
            </div>
        </div>
    </div>
</nav>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar');
    
    // Efecto al hacer scroll
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            navbar.classList.add('shadow-lg', 'bg-light');
            navbar.classList.remove('bg-white');
        } else {
            navbar.classList.remove('shadow-lg', 'bg-light');
            navbar.classList.add('bg-white');
        }
    });
    
    // Animación para el collapse del navbar
    const navbarCollapse = document.getElementById('navbarContent');
    navbarCollapse.addEventListener('show.bs.collapse', function () {
        this.classList.add('animating');
    });
    
    navbarCollapse.addEventListener('hidden.bs.collapse', function () {
        this.classList.remove('animating');
    });
});
</script>