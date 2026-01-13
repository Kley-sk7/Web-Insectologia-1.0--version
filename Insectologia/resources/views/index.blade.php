<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Insectologuia')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/index.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- Barra de navegación con logo y botones -->
    @include('includes.navbar')
    <!-- Header Section -->
    <div class="page-header text-center">
        <div class="container">
            <h9 class="lead">COLECCIÓN ENTOMOLÓGICA</h9>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container my-5">
        <!-- Mission Section -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4">
                <div class="mission-vision-box">
                    <h2 class="mission-vision-title"><strong>Sobre nosotros</strong></h2>
                    <p>En <strong>ISTEC</strong>....</p>
                    <p>.</p>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <img src="{{ asset('image/b.jpeg') }}" alt="Descripción de la imagen" class="mission-vision-image">
            </div>
        </div>


        <!-- Values Section -->
        <div class="row mission-vision-row">
            <div class="col-12 mission-vision-container">
                <div class="col-lg-6 col-md-12 text-content mission-box">
                    <h4 class="box-title">Nuestra Misión</h4>
                    <p>El Instituto Superior Tecnológico “CRECERMAS” es una institución educativa superior que brinda una formación académica integral y de calidad. Su propósito es desarrollar capacidades y competencias profesionales en los estudiantes, preparándolos con un sólido desempeño ético, moral, cultural, social, humanístico, científico y técnico. Los egresados están capacitados para responder, con calidad humana, científica y tecnológica, a los retos y demandas de un mundo en constante cambio. De esta manera, la institución contribuye a generar un modelo de Desarrollo Humano Integral y Sustentable en la región amazónica del Ecuador, especialmente en la provincia de Sucumbíos.</p>
                </div>

                <div class="col-lg-6 col-md-12 text-content vision-box">
                    <h4 class="box-title">Nuestra Visión</h4>
                    <p>El Instituto Superior Tecnológico “CRECERMAS” es una institución líder que promueve un modelo de Desarrollo Humano Integral y Sustentable en la Amazonía ecuatoriana, especialmente en Sucumbíos. Ofrece carreras cortas, no saturadas y con alta empleabilidad, adaptando experiencias educativas nacionales e internacionales a la realidad local. Forma profesionales operativos altamente calificados, capacitados para contribuir con nuevas técnicas y tecnologías al desarrollo humano, la salud, la tecnología y la economía de las organizaciones, con un fuerte sentido de responsabilidad social y conciencia ambiental.</p>
                </div>
            </div>
        </div>

        <div class="divider"></div>

        <!-- Vision Section -->
        <div class="row align-items-center mb-5 feature-section">

            <div class="col-lg-6 mb-4">
                <h2 class="feature-title">DESCUBRIENDO EL MUNDO DE LOS INSECTOS CON CIENCIA Y TECNOLOGÍA</h2>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="content-box">
                    <p>Los insectos son algunos de los seres vivos más diversos y fascinantes del planeta.
                        Están en casi todos los ecosistemas y cumplen funciones esenciales,
                        como polinizar plantas, reciclar materia orgánica y servir de alimento a otros animales.
                        Aunque son pequeños, su impacto es enorme, y conocerlos nos ayuda a entender y mejorar nuestro entorno.
                        En el campo de la tecnología y la investigación, el estudio de los insectos también se apoya en herramientas modernas como cámaras de alta resolución,
                        microscopios digitales, aplicaciones móviles y bases de datos en línea como Naturalist.
                        Exploraremos diferentes órdenes de insectos, es decir,
                        grupos científicos que reúnen especies con características en común. Por ejemplo:</p>
                    <ul>
                        <li>Coleópteros (escarabajos) con sus alas endurecidas.</li>
                        <li>Lepidópteros (mariposas y polillas) con sus alas cubiertas de escamas de colores.</li>
                        <li>Himenópteros(abejas, avispas y hormigas) con su papel clave en la polinización.</li>
                    </ul>
                    <p>Usaremos la tecnología para observar, registrar y clasificar insectos que se encuentran en el entorno del instituto o en casa. Podrás tomar fotografías, anotar observaciones y subir la información a plataformas científicas. Así, no solo aprenderás sobre biodiversidad, sino que también aportarás datos reales para estudios ambientales.</p>
                </div>
            </div>
            @include('includes.footer')
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>