<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colección Entomológica - Login</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="container">
        <div class="info-panel">
            <h1 class="title">COLECCIÓN ENTOMOLÓGICA</h1>
            <p class="subtitle"></p>
        </div>

        <div class="login-panel">
            <div class="form-container">
                <!-- Formulario de Login -->
                <div id="loginForm">
                    <img src="{{ asset('image/PUCE LOGO AMAZONAS.png') }}" alt="Logo Secundario" class="logo-login">
                    <h2 class="welcome">¡Bienvenido Explorador!</h2>

                    <div id="loginMessage"></div>

                    <form id="loginFormElement">
                        @csrf
                        <div class="input-group">
                            <label for="usuario" class="sr-only">Usuario</label>
                            <input type="text" id="usuario" name="usuario" placeholder="Usuario" required>
                        </div>

                        <div class="input-group">
                            <label for="contrasena" class="sr-only">Contraseña</label>
                            <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required>
                        </div>
                        <button type="submit" class="login">Inicio</button>
                    </form>

                    <a href="#" class="forgot-password">¿Olvidaste la contraseña?</a>

                    <p class="switch-form">
                        ¿No tienes cuenta? <a href="#" id="showRegister">¡Regístrate aquí!</a>
                    </p>
                </div>

                <!-- Formulario de Registro -->
                <div id="registerForm" style="display: none;">
                    <img src="{{ asset('image/PUCE LOGO AMAZONAS.png') }}" alt="Logo Secundario" class="logo-login">
                    <h2 class="welcome">Regístro</h2>

                    <div id="registerMessage"></div>

                    <form id="registerFormElement">
                        @csrf
                        <div class="input-group">
                            <label for="nombre" class="sr-only">Nombre y Apellido</label>
                            <input type="text" id="nombre" name="nombre" placeholder="Nombre Completo" required>
                        </div>

                        <div class="input-group">
                            <label for="usuarioRegistro" class="sr-only">Usuario</label>
                            <input type="text" id="usuarioRegistro" name="usuario" placeholder="Nombre de Usuario" required>
                        </div>

                        <div class="input-group">
                            <label for="contrasenaRegistro" class="sr-only">Contraseña</label>
                            <input type="password" id="contrasenaRegistro" name="contrasena" placeholder="Contraseña" required>
                        </div>
                        
                        <p class="switch-form">
                            ¿Ya tienes cuenta? <a href="#" id="showLogin">¡Inicia sesión aquí!</a>
                        </p>
                        <button type="submit" class="register">Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>