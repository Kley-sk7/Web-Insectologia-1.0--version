<?php

namespace App\Http\Controllers;

use App\Models\Especie;
use App\Models\ImagenMorfologica;
use App\Models\CicloVida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class EspecieController extends Controller
{
    /**
     * Mostrar página principal de colección
     */
    public function index()
    {
        Log::info('=== INICIANDO MÉTODO INDEX ===');

        // Obtener TODOS los órdenes únicos de la base de datos
        $ordenes = Especie::select('orden')
            ->distinct()
            ->whereNotNull('orden')
            ->where('orden', '!=', '')
            ->orderBy('orden')
            ->pluck('orden');

        $estadisticas = [];
        $imagenesOrdenes = [];
        $ejemplosOrdenes = [];

        // Configuración de imágenes y ejemplos por defecto
        $ordenesPredefinidos = [
            'Orthoptera' => [
                'imagen' => 'image/langosta.jpg',
                'ejemplos' => 'Saltamontes, grillo y cucarachas'
            ],
            'Hemiptera' => [
                'imagen' => 'image/heteropetra.jpg',
                'ejemplos' => 'Chinches'
            ],
            'Hymenoptera' => [
                'imagen' => 'image/avispa.png',
                'ejemplos' => 'Abejas, avispas y hormigas'
            ],
            'Coleoptera' => [
                'imagen' => 'image/coleoptera.jpg',
                'ejemplos' => 'Escarabajos'
            ],
            'Lepidoptera' => [
                'imagen' => 'image/lepidoctera.jpg',
                'ejemplos' => 'Mariposas y polillas'
            ],
            'Diptera' => [
                'imagen' => 'image/diptera.jpg',
                'ejemplos' => 'Moscas y mosquitos'
            ],
        ];

        foreach ($ordenes as $orden) {
            // Contar especies
            $estadisticas[$orden] = Especie::where('orden', $orden)->count();

            // PRIMERO: Intentar obtener imagen REAL de alguna especie del orden
            $imagenReal = $this->obtenerImagenRealParaOrden($orden);

            if ($imagenReal) {
                // Usar imagen real si existe
                $imagenesOrdenes[$orden] = $imagenReal;
                Log::info("Orden {$orden}: Usando imagen REAL - " . $imagenReal);
            } else {
                // Si no hay imagen real, usar la predefinida
                if (isset($ordenesPredefinidos[$orden])) {
                    $imagenesOrdenes[$orden] = $ordenesPredefinidos[$orden]['imagen'];
                    $ejemplosOrdenes[$orden] = $ordenesPredefinidos[$orden]['ejemplos'];
                    Log::info("Orden {$orden}: Usando imagen PREDEFINIDA - " . $ordenesPredefinidos[$orden]['imagen']);
                } else {
                    // Si no está predefinido, usar default
                    $imagenesOrdenes[$orden] = 'image/default-insect.jpg';
                    $ejemplosOrdenes[$orden] = 'Diversas especies';
                    Log::warning("Orden {$orden}: No tiene imagen, usando DEFAULT");
                }
            }

            // Si aún no tenemos ejemplos, usar los predefinidos
            if (!isset($ejemplosOrdenes[$orden])) {
                $ejemplosOrdenes[$orden] = $ordenesPredefinidos[$orden]['ejemplos'] ?? 'Diversas especies';
            }
        }

        // DEBUG: Mostrar resumen
        Log::info('=== RESUMEN FINAL INDEX ===');
        Log::info('Total órdenes: ' . count($ordenes));

        foreach ($ordenes as $orden) {
            Log::info("Orden: {$orden}");
            Log::info("  - Estadística: " . ($estadisticas[$orden] ?? 0));
            Log::info("  - Imagen asignada: " . ($imagenesOrdenes[$orden] ?? 'Ninguna'));
            Log::info("  - Ejemplos: " . ($ejemplosOrdenes[$orden] ?? 'Ninguno'));
        }

        Log::info('=== FIN MÉTODO INDEX ===');

        return view('coleccion', compact(
            'ordenes',
            'estadisticas',
            'imagenesOrdenes',
            'ejemplosOrdenes'
        ));
    }

    /**
     * Método auxiliar para obtener imagen real para un orden
     */
    private function obtenerImagenRealParaOrden($orden)
    {
        // Buscar cualquier especie del orden que tenga imágenes
        $especie = Especie::where('orden', $orden)
            ->whereHas('imagenesMorfologicas')
            ->with(['imagenesMorfologicas' => function ($query) {
                $query->where('tipo_imagen', 'completa')
                    ->orWhere('tipo_imagen', 'cabeza')
                    ->orWhere('tipo_imagen', 'torax')
                    ->limit(1);
            }])
            ->first();

        if ($especie && $especie->imagenesMorfologicas->count() > 0) {
            $imagen = $especie->imagenesMorfologicas->first();

            // Verificar que la imagen exista físicamente
            if (Storage::disk('public')->exists($imagen->ruta_imagen)) {
                return asset('storage/' . $imagen->ruta_imagen);
            } else {
                Log::error("Imagen en BD no existe físicamente: " . $imagen->ruta_imagen);
                return null;
            }
        }

        return null;
    }

    /**
     * Almacenar nueva especie
     */
  public function store(Request $request)
{
    Log::info('=== DATOS RECIBIDOS EN STORE ===');

    // Debug de partes dinámicas
    if ($request->has('partes_dinamicas')) {
        Log::info('Partes dinámicas recibidas:', $request->partes_dinamicas);

        // Debug de imágenes en partes dinámicas
        foreach ($request->partes_dinamicas as $idUnico => $parte) {
            Log::info("Parte {$idUnico}: " . json_encode($parte));

            if ($request->hasFile("partes_dinamicas.{$idUnico}.imagen")) {
                Log::info("  - Tiene imagen: " . $request->file("partes_dinamicas.{$idUnico}.imagen")->getClientOriginalName());
            } else {
                Log::info("  - NO tiene imagen");
            }
        }
    } else {
        Log::info('NO hay partes dinámicas recibidas');
    }

    // 1. Validación básica
    $validated = $request->validate([
        'nombre_comun' => 'required|string|max:255',
        'nombre_cientifico' => 'required|string|max:255',
        'orden' => 'required|string|max:100',
        'familia' => 'required|string|max:100',
        'genero' => 'required|string|max:100',
        'especie' => 'required|string|max:100',
        'detalle_general' => 'required|string',

        // Imágenes principales
        'imagen_completa' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        'imagen_cabeza' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        'imagen_torax' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        'imagen_abdomen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        'imagen_patas' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',

        // Descripciones
        'descripcion_completa' => 'required|string',
        'descripcion_cabeza' => 'required|string',
        'descripcion_torax' => 'required|string',
        'descripcion_abdomen' => 'required|string',
        'descripcion_patas' => 'required|string',

        // Ciclo de vida
        'tipo_metamorfosis' => 'required|in:Holometabola,Hemimetabola,Ametabola',
        'etapas' => 'required|array',
        'etapas.*' => 'string',
        'descripciones' => 'required|array',
        'descripciones.*' => 'string',
        'alimentaciones' => 'required|array',
        'alimentaciones.*' => 'string',
        'habitats' => 'required|array',
        'habitats.*' => 'string',
        'imagenes_etapas' => 'nullable|array',
        'imagenes_etapas.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
    ]);

    try {
        // 2. Crear la especie
        $especieData = [
            'nombre_comun' => $request->nombre_comun,
            'nombre_cientifico' => $request->nombre_cientifico,
            'detalle_general' => $request->detalle_general,
            'orden' => $request->orden,
            'familia' => $request->familia,
            'genero' => $request->genero,
            'especie' => $request->especie,
            'tipo_metamorfosis' => $request->tipo_metamorfosis,
            'descripcion_completa' => $request->descripcion_completa,
            'descripcion_cabeza' => $request->descripcion_cabeza,
            'descripcion_torax' => $request->descripcion_torax,
            'descripcion_abdomen' => $request->descripcion_abdomen,
            'descripcion_patas' => $request->descripcion_patas,
            'dominio' => 'Eukarya',
            'reino' => 'Animalia',
            'filo' => 'Arthropoda',
            'clase' => 'Insecta',
        ];

        $especie = Especie::create($especieData);
        Log::info('Especie creada ID: ' . $especie->id);

        // 3. Guardar imágenes morfológicas
        $this->guardarImagenesMorfologicas($especie, $request);

        // 4. Guardar partes dinámicas
        $this->guardarPartesDinamicas($especie, $request);

        // 5. Guardar ciclos de vida
        $this->guardarCiclosVida($especie, $request);

        Log::info('=== ESPECIE REGISTRADA EXITOSAMENTE ===');

        return redirect()->route('coleccion')
            ->with('success', '¡Especie registrada exitosamente!');
    } catch (\Exception $e) {
        Log::error('Error al crear especie: ' . $e->getMessage());
        Log::error($e->getTraceAsString());

        return back()->with('error', 'Error: ' . $e->getMessage())->withInput();
    }
}

    /**
     * Guardar imágenes morfológicas
     */
    private function guardarImagenesMorfologicas($especie, $request)
    {
        $tipos = [
            'completa' => 'imagen_completa',
            'cabeza' => 'imagen_cabeza',
            'torax' => 'imagen_torax',
            'abdomen' => 'imagen_abdomen',
            'patas' => 'imagen_patas',
        ];

        foreach ($tipos as $tipo => $campo) {
            if ($request->hasFile($campo)) {
                $imagen = $request->file($campo);

                // Generar nombre único
                $nombreArchivo = Str::slug($especie->nombre_cientifico) . '_' . $tipo . '_' . time() . '.' . $imagen->getClientOriginalExtension();

                // Guardar en storage
                $ruta = $imagen->storeAs('imagenes_morfologicas', $nombreArchivo, 'public');

                // Crear registro en BD
                $especie->imagenesMorfologicas()->create([
                    'tipo_imagen' => $tipo,
                    'ruta_imagen' => $ruta,
                    'descripcion' => $request->input('descripcion_' . $tipo) ?? 'Imagen de ' . $tipo
                ]);

                Log::info("Imagen {$tipo} guardada: " . $ruta);
            }
        }
    }

    /**
     * Guardar ciclos de vida
     */
    private function guardarCiclosVida($especie, $request)
    {
        if (!$request->has('etapas') || empty($request->etapas)) {
            return;
        }

        foreach ($request->etapas as $index => $etapa) {
            if (!empty($etapa)) {
                $cicloData = [
                    'etapa' => $etapa,
                    'descripcion' => $request->descripciones[$index] ?? 'Sin descripción',
                    'alimentacion' => $request->alimentaciones[$index] ?? 'No especificado',
                    'habitat' => $request->habitats[$index] ?? 'No especificado',
                ];

                // Guardar imagen de la etapa
                if ($request->hasFile("imagenes_etapas.{$index}")) {
                    $imagen = $request->file("imagenes_etapas.{$index}");
                    $nombreArchivo = Str::slug($especie->nombre_cientifico) . '_etapa_' . Str::slug($etapa) . '_' . time() . '.' . $imagen->getClientOriginalExtension();
                    $ruta = $imagen->storeAs('imagenes_etapas', $nombreArchivo, 'public');
                    $cicloData['ruta_imagen'] = $ruta;
                }

                $especie->ciclosVida()->create($cicloData);
                Log::info("Ciclo de vida {$etapa} guardado");
            }
        }
    }

    private function guardarPartesDinamicas($especie, $request)
    {
        if (!$request->has('partes_dinamicas') || empty($request->partes_dinamicas)) {
            Log::info('No hay partes dinámicas para guardar');
            return;
        }

        $partesDinamicas = [];

        foreach ($request->partes_dinamicas as $idUnico => $parte) {
            // Datos básicos de la parte
            $parteData = [
                'tipo' => $parte['tipo'] ?? 'otro',
                'nombre' => $parte['nombre'] ?? 'Parte adicional',
                'descripcion' => $parte['descripcion'] ?? '',
                'id_unico' => $idUnico
            ];

            // Guardar imagen si existe
            if ($request->hasFile("partes_dinamicas.{$idUnico}.imagen")) {
                try {
                    $imagen = $request->file("partes_dinamicas.{$idUnico}.imagen");

                    // Generar nombre único para la imagen
                    $nombreArchivo = Str::slug($especie->nombre_cientifico) . '_' .
                        Str::slug($parteData['nombre']) . '_' .
                        time() . '_' .
                        Str::random(8) . '.' .
                        $imagen->getClientOriginalExtension();

                    // Guardar en storage
                    $ruta = $imagen->storeAs('imagenes_dinamicas', $nombreArchivo, 'public');

                    $parteData['imagen'] = $ruta; // Guardar solo el nombre del archivo
                    Log::info("Imagen de parte dinámica guardada: " . $ruta);
                } catch (\Exception $e) {
                    Log::error("Error al guardar imagen de parte dinámica: " . $e->getMessage());
                    $parteData['imagen'] = null;
                }
            } else {
                $parteData['imagen'] = null;
            }

            $partesDinamicas[] = $parteData;
        }

        // Guardar como JSON en la base de datos
        $especie->partes_dinamicas = json_encode($partesDinamicas);
        $especie->save();

        Log::info('Partes dinámicas guardadas: ' . count($partesDinamicas) . ' partes');
    }

    // ==================== MÉTODOS EXISTENTES (mantener estos) ====================

    public function ordenDinamico($orden)
    {
        // Decodificar el nombre del orden
        $orden = urldecode($orden);

        // Obtener todas las especies del orden
        $especies = Especie::with(['imagenesMorfologicas', 'ciclosVida'])
            ->where('orden', $orden)
            ->orderBy('nombre_cientifico')
            ->get();

        if ($especies->isEmpty()) {
            return view('coleccion.orden_vacio', compact('orden'));
        }

        // Obtener todos los órdenes para el sidebar
        $todosOrdenes = Especie::select('orden')
            ->distinct()
            ->whereNotNull('orden')
            ->where('orden', '!=', '')
            ->orderBy('orden')
            ->pluck('orden');

        // Calcular estadísticas
        $totalEspecies = $especies->count();
        $familias = $especies->pluck('familia')->filter()->unique()->values();
        $familiasCount = $familias->count();
        $generosCount = $especies->pluck('genero')->filter()->unique()->count();

        // Contar especies con imágenes
        $especiesConImagenes = $especies->filter(function ($especie) {
            return $especie->imagenesMorfologicas->count() > 0;
        })->count();

        // Obtener familia principal
        $familiaPrincipal = $especies->pluck('familia')->filter()
            ->countBy()
            ->sortDesc()
            ->keys()
            ->first();

        // Descripción del orden
        $descripcion = $this->obtenerDescripcionOrden($orden);

        return view('orden', compact(
            'especies',
            'orden',
            'descripcion', // ✅ Esta variable ahora sí existe
            'todosOrdenes',
            'totalEspecies',
            'familias',
            'familiasCount',
            'generosCount',
            'especiesConImagenes',
            'familiaPrincipal'
        ));
    }

    /**
     * Obtener descripción para un orden específico
     */
    private function obtenerDescripcionOrden($orden)
    {
        $descripciones = [
            'Orthoptera' => 'Los ortópteros incluyen saltamontes, grillos y cucarachas. Se caracterizan por sus patas traseras adaptadas para saltar y su aparato bucal masticador.',
            'Hemiptera' => 'Los hemípteros son conocidos como "chinches" y tienen un aparato bucal en forma de pico para succionar líquidos. Incluyen pulgones, cigarras y chinches de cama.',
            'Hymenoptera' => 'Los himenópteros incluyen abejas, avispas y hormigas. Muchas especies son sociales y tienen un importante papel como polinizadores.',
            'Coleoptera' => 'Los coleópteros (escarabajos) son el orden más diverso de insectos. Se caracterizan por sus alas anteriores endurecidas (élitros) que protegen las alas posteriores.',
            'Lepidoptera' => 'Los lepidópteros incluyen mariposas y polillas. Se caracterizan por sus alas cubiertas de escamas y su aparato bucal en forma de espiritrompa para succionar néctar.',
            'Diptera' => 'Los dípteros incluyen moscas y mosquitos. Tienen solo un par de alas funcionales, con el segundo par reducido a balancines (halterios) para la estabilización del vuelo.',
            'Odonata' => 'Los odonatos incluyen libélulas y caballitos del diablo. Son depredadores aéreos con grandes ojos compuestos y alas transparentes.',
            'Neuroptera' => 'Los neurópteros incluyen crisopas y hormigas león. Tienen alas con una densa red de venas y son depredadores en sus etapas larvales.',
            'Blattodea' => 'Los blatodeos incluyen cucarachas y termitas. Son insectos generalmente nocturnos con cuerpo aplanado.',
            'Mantodea' => 'Los mantodeos incluyen las mantis religiosas. Son depredadores con patas delanteras especializadas para capturar presas.',
        ];

        return $descripciones[$orden] ??
            "El orden {$orden} incluye diversas especies de insectos con características morfológicas y biológicas únicas que se adaptan a diferentes hábitats.";
    }

    public function ordenVacio($orden)
    {
        return view('coleccion.orden_vacio', compact('orden'));
    }

    public function debugImagenes(Request $request)
    {
        Log::info('=== DEBUG DE IMÁGENES ===');

        // 1. Verificar qué imágenes llegan
        $archivos = [];
        foreach ($request->allFiles() as $campo => $archivo) {
            $archivos[$campo] = [
                'nombre' => $archivo->getClientOriginalName(),
                'tamaño' => $archivo->getSize(),
                'mime' => $archivo->getMimeType(),
                'extension' => $archivo->getClientOriginalExtension()
            ];
        }

        Log::info('Archivos recibidos:', $archivos);

        // 2. Verificar configuración de storage
        $storagePath = storage_path('app/public');
        $publicPath = public_path('storage');

        Log::info('Storage path: ' . $storagePath);
        Log::info('Public path: ' . $publicPath);
        Log::info('Link exists: ' . (is_link($publicPath) ? 'SÍ' : 'NO'));

        return response()->json([
            'archivos_recibidos' => $archivos,
            'storage_config' => [
                'disk' => config('filesystems.default'),
                'public_disk' => config('filesystems.disks.public')
            ]
        ]);
    }

    public function showDetail($especie)
    {
        // Buscar por nombre científico (reemplazar _ por espacio)
        $nombreCientifico = str_replace('_', ' ', $especie);

        $especie = Especie::where('nombre_cientifico', $nombreCientifico)
            ->with(['imagenesMorfologicas', 'ciclosVida'])
            ->firstOrFail();

        return view('especie_detalle', compact('especie'));
    }

    public function showByOrder($orden)
    {
        $especies = Especie::where('orden', $orden)->get();
        return view('includes.' . strtolower($orden), compact('especies'));
    }

public function morfologia($id)
{
    // Cargar la especie con sus imágenes morfológicas
    $especie = Especie::with('imagenesMorfologicas')->findOrFail($id);

    // Obtener todas las imágenes morfológicas de esta especie
    $imagenesMorfologicas = $especie->imagenesMorfologicas;

    // Crear un array organizado por tipo
    $partesMorfologicas = [
        'completa' => [
            'imagen' => null,
            'descripcion' => null
        ],
        'cabeza' => [
            'imagen' => null,
            'descripcion' => null
        ],
        'torax' => [
            'imagen' => null,
            'descripcion' => null
        ],
        'abdomen' => [
            'imagen' => null,
            'descripcion' => null
        ],
        'patas' => [
            'imagen' => null,
            'descripcion' => null
        ]
    ];

    // Organizar las imágenes por tipo
    foreach ($imagenesMorfologicas as $imagen) {
        if (isset($partesMorfologicas[$imagen->tipo_imagen])) {
            $partesMorfologicas[$imagen->tipo_imagen]['imagen'] = $imagen->ruta_imagen;
            $partesMorfologicas[$imagen->tipo_imagen]['descripcion'] = $imagen->descripcion;
        }
    }

    // Si no hay descripciones en imagenes_morfologicas, usar las de la tabla especies
    if (empty($partesMorfologicas['completa']['descripcion']) && !empty($especie->descripcion_completa)) {
        $partesMorfologicas['completa']['descripcion'] = $especie->descripcion_completa;
    }
    if (empty($partesMorfologicas['cabeza']['descripcion']) && !empty($especie->descripcion_cabeza)) {
        $partesMorfologicas['cabeza']['descripcion'] = $especie->descripcion_cabeza;
    }
    if (empty($partesMorfologicas['torax']['descripcion']) && !empty($especie->descripcion_torax)) {
        $partesMorfologicas['torax']['descripcion'] = $especie->descripcion_torax;
    }
    if (empty($partesMorfologicas['abdomen']['descripcion']) && !empty($especie->descripcion_abdomen)) {
        $partesMorfologicas['abdomen']['descripcion'] = $especie->descripcion_abdomen;
    }
    if (empty($partesMorfologicas['patas']['descripcion']) && !empty($especie->descripcion_patas)) {
        $partesMorfologicas['patas']['descripcion'] = $especie->descripcion_patas;
    }

    // Decodificar partes dinámicas si están en JSON
    $partesDinamicas = [];
    if ($especie->partes_dinamicas) {
        $partesDinamicas = json_decode($especie->partes_dinamicas, true);
        if (!is_array($partesDinamicas)) {
            $partesDinamicas = [];
        }
    }

    return view('especies.morfologia', [
        'especie' => $especie,
        'partesMorfologicas' => $partesMorfologicas,
        'partesDinamicas' => $partesDinamicas
    ]);
}

    public function createUnico()
    {
        return view('nueva-especie');
    }

    public function metamorfosis($especieId)
    {
        $especie = Especie::with(['imagenesMorfologicas', 'ciclosVida'])->findOrFail($especieId);

        // DEBUG TEMPORAL
        Log::info('=== DATOS ENVIADOS A VISTA METAMORFOSIS ===');
        Log::info('Especie ID: ' . $especie->id);
        Log::info('Ciclos de vida count: ' . $especie->ciclosVida->count());

        foreach ($especie->ciclosVida as $ciclo) {
            Log::info("Ciclo: {$ciclo->etapa} - Descripción: " . ($ciclo->descripcion ?? 'NULL'));
        }

        return view('especies.metamorfosis', compact('especie'));
    }

    public function getFormInfo($type)
    {
        $formInfo = [
            'holometabolia' => [
                'title' => 'Especie Holometabolia',
                'description' => 'Formulario para especies con metamorfosis completa',
                'details' => [
                    'Metamorfosis completa (huevo, larva, pupa, adulto)',
                    'Ejemplos: mariposas, escarabajos, moscas',
                    'Las larvas y adultos tienen diferentes hábitats'
                ]
            ],
            'hemimetabolia' => [
                'title' => 'Especie Hemimetabolia',
                'description' => 'Formulario para especies con metamorfosis incompleta',
                'details' => [
                    'Metamorfosis incompleta (huevo, ninfa, adulto)',
                    'Ejemplos: saltamontes, cucarachas, chinches',
                    'Las ninfas se parecen a los adultos'
                ]
            ]
        ];

        // Verificar si el tipo existe
        if (!array_key_exists($type, $formInfo)) {
            return response()->json([], 404);
        }

        return response()->json($formInfo[$type]);
    }

    public function createHolometabolia()
    {
        return view('nueva-especie');
    }

    public function createHemimetabolia()
    {
        return view('formulario-nueva-especie');
    }

    public function storeHolometabolia(Request $request)
    {
        // Lógica para guardar especies Holometabolia
    }

    public function storeHemimetabolia(Request $request)
    {
        // Lógica para guardar especies Hemimetabolia
    }

    public function edit($id)
    {
        $especie = Especie::with(['imagenesMorfologicas', 'ciclosVida'])->findOrFail($id);
        return view('especies.edit', compact('especie'));
    }

    public function update(Request $request, $id)
    {
        try {
            $especie = Especie::with(['imagenesMorfologicas', 'ciclosVida'])->findOrFail($id);

            // Validación
            $request->validate([
                'nombre_comun' => 'required|string',
                'nombre_cientifico' => 'required|string',
                'orden' => 'required|string',
                'familia' => 'required|string',
                'genero' => 'required|string',
                'especie' => 'required|string',
            ]);

            // Actualizar datos básicos
            $especie->update([
                'nombre_comun' => $request->nombre_comun,
                'nombre_cientifico' => $request->nombre_cientifico,
                'detalle_general' => $request->detalle_general ?? 'Sin descripción',
                'orden' => $request->orden,
                'familia' => $request->familia,
                'genero' => $request->genero,
                'especie' => $request->especie,
                'tipo_metamorfosis' => $request->tipo_metamorfosis ?? 'Desconocido',
            ]);

            // Actualizar imágenes morfológicas
            $this->actualizarImagenesMorfologicas($especie, $request);

            // Actualizar ciclos de vida
            $this->actualizarCiclosVida($especie, $request);

            return redirect()->route('especie.detalle', ['especie' => $especie->id])
                ->with('success', 'Especie actualizada exitosamente!');
        } catch (\Exception $e) {
            return back()->with('error', 'Error: ' . $e->getMessage())->withInput();
        }
    }

    private function actualizarImagenesMorfologicas($especie, $request)
    {
        $tiposImagenes = ['completa', 'cabeza', 'torax', 'abdomen', 'patas'];

        foreach ($tiposImagenes as $tipo) {
            // Eliminar imagen si se solicitó
            if ($request->has('eliminar_imagenes') && in_array($tipo, $request->eliminar_imagenes)) {
                $imagen = $especie->imagenesMorfologicas->where('tipo_imagen', $tipo)->first();
                if ($imagen) {
                    // Eliminar archivo físico
                    if (Storage::disk('public')->exists($imagen->ruta_imagen)) {
                        Storage::disk('public')->delete($imagen->ruta_imagen);
                    }
                    // Eliminar registro de BD
                    $imagen->delete();
                }
            }

            // Agregar/actualizar imagen si se envió una nueva
            if ($request->hasFile("nuevas_imagenes.{$tipo}")) {
                $imagen = $request->file("nuevas_imagenes.{$tipo}");
                $descripcion = $request->input("descripciones_imagenes.{$tipo}") ?? 'Imagen de ' . $tipo;

                // Eliminar imagen existente si hay
                $imagenExistente = $especie->imagenesMorfologicas->where('tipo_imagen', $tipo)->first();
                if ($imagenExistente) {
                    if (Storage::disk('public')->exists($imagenExistente->ruta_imagen)) {
                        Storage::disk('public')->delete($imagenExistente->ruta_imagen);
                    }
                    $imagenExistente->delete();
                }

                // Guardar nueva imagen
                $nombreArchivo = time() . '_' . $tipo . '_' . $imagen->getClientOriginalName();
                $ruta = $imagen->storeAs('imagenes_morfologicas', $nombreArchivo, 'public');

                $especie->imagenesMorfologicas()->create([
                    'tipo_imagen' => $tipo,
                    'ruta_imagen' => $ruta,
                    'descripcion' => $descripcion
                ]);
            }
        }
    }

    private function actualizarCiclosVida($especie, $request)
    {
        if (!$request->has('ciclos')) {
            return;
        }

        foreach ($request->ciclos as $index => $cicloData) {
            $ciclo = CicloVida::find($cicloData['id']);

            if ($ciclo) {
                // Eliminar imagen si se solicitó
                if (isset($request->eliminar_ciclo_imagenes[$index]) && $ciclo->ruta_imagen) {
                    if (Storage::disk('public')->exists($ciclo->ruta_imagen)) {
                        Storage::disk('public')->delete($ciclo->ruta_imagen);
                    }
                    $cicloData['ruta_imagen'] = null;
                }

                // Agregar nueva imagen si se envió
                if ($request->hasFile("nuevas_imagenes_ciclos.{$index}")) {
                    $imagen = $request->file("nuevas_imagenes_ciclos.{$index}");
                    $nombreArchivo = time() . '_ciclo_' . $index . '.' . $imagen->getClientOriginalExtension();
                    $ruta = $imagen->storeAs('imagenes_etapas', $nombreArchivo, 'public');
                    $cicloData['ruta_imagen'] = $ruta;
                }

                // Procesar métodos de control
                if (isset($cicloData['metodos_control']) && is_array($cicloData['metodos_control'])) {
                    $cicloData['metodos_control'] = json_encode($cicloData['metodos_control']);
                } else {
                    $cicloData['metodos_control'] = null;
                }

                $ciclo->update($cicloData);
            }
        }
    }

    public function destroy($id)
    {
        try {
            $especie = Especie::findOrFail($id);
            $especie->delete();

            return redirect()->route('coleccion')
                ->with('success', 'Especie eliminada exitosamente!');
        } catch (\Exception $e) {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            // Cargar la especie con todas sus relaciones
            $especie = Especie::with([
                'imagenesMorfologicas',
                'ciclosVida',
            ])->findOrFail($id);

            Log::info('Mostrando detalles de especie ID: ' . $id);

            return view('especie_detalle', compact('especie'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            Log::error('Especie no encontrada ID: ' . $id);
            abort(404, 'Especie no encontrada');
        }
    }
}
