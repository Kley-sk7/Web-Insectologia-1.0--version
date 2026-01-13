<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EspecieController;

// ==================== RUTAS PÚBLICAS ====================

Route::get('/', [EspecieController::class, 'index'])->name('home');
Route::get('/login', function () {
    return view('login');
})->name('login');

// Ruta principal - DEBE usar el controlador que pasa las variables
Route::get('/', [EspecieController::class, 'index'])->name('home');

// Ruta del login (página de inicio de sesión) - SEPARADA
Route::get('/login', function () {
    return view('login');
})->name('login');

// En tu routes/web.php asegúrate de tener:
Route::get('/', function () {
    return view('index'); // Esta es tu página de login
})->name('index');

// En la sección de rutas de la aplicación, agrega:
Route::get('/home', [EspecieController::class, 'index'])->name('home');

Route::get('/especie_detalle/{id}', [EspecieController::class, 'showDetail'])->name('especie_detalle');

// Ruta para ver detalles de especie - USA ESTA
Route::get('/especies/{id}', [EspecieController::class, 'show'])->name('especies.show');

Route::get('/especies/{id}', [EspecieController::class, 'show'])->name('especies.show');

// ==================== RUTAS DE AUTENTICACIÓN ====================

Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ==================== RUTAS DE LA APLICACIÓN ====================

Route::get('/formulario-nueva-especie', function () {
    return view('formulario-nueva-especie');
})->name('formulario-nueva-especie');

// ✅ AGREGA ESTA RUTA - ES LA QUE FALTA
Route::get('/especies/{id}/morfologia', [EspecieController::class, 'morfologia'])->name('especies.morfologia');

Route::get('/especies/{id}', [EspecieController::class, 'show'])->name('especies.show');

Route::get('/coleccion', [EspecieController::class, 'index'])->name('coleccion');

// Ruta dinámica para cualquier orden
Route::get('/coleccion/{orden}', [EspecieController::class, 'ordenDinamico'])
    ->where('orden', '[A-Za-z]+')
    ->name('orden.dinamico');



// En routes/web.php
Route::get('/verificar-storage', function() {
    echo "<h1>Verificación Storage</h1>";
    
    // 1. Verificar enlace simbólico
    $publicStorage = public_path('storage');
    $targetStorage = storage_path('app/public');
    
    echo "<h2>1. Enlace simbólico</h2>";
    echo "Public storage: {$publicStorage}<br>";
    echo "Target storage: {$targetStorage}<br>";
    echo "Es enlace: " . (is_link($publicStorage) ? '✅ SÍ' : '❌ NO') . "<br>";
    
    if (is_link($publicStorage)) {
        echo "Apunta a: " . readlink($publicStorage) . "<br>";
    }
    
    // 2. Verificar imágenes en storage
    echo "<h2>2. Imágenes en storage/app/public/</h2>";
    
    // Verificar carpeta imagenes_morfologicas
    $morfologicas = Storage::disk('public')->files('imagenes_morfologicas');
    echo "<h3>imagenes_morfologicas/</h3>";
    if (count($morfologicas) > 0) {
        echo "<ul>";
        foreach ($morfologicas as $archivo) {
            $url = asset('storage/' . $archivo);
            echo "<li><a href='{$url}' target='_blank'>{$archivo}</a></li>";
        }
        echo "</ul>";
    } else {
        echo "❌ No hay imágenes en imagenes_morfologicas/<br>";
    }
    
    // 3. Verificar imágenes en public/image/
    echo "<h2>3. Imágenes en public/image/</h2>";
    $imagenesLocal = glob(public_path('image/*.{jpg,jpeg,png,gif}'), GLOB_BRACE);
    
    if (count($imagenesLocal) > 0) {
        echo "<ul>";
        foreach ($imagenesLocal as $archivo) {
            $nombre = basename($archivo);
            $url = asset('image/' . $nombre);
            $existe = file_exists($archivo) ? '✅' : '❌';
            echo "<li>{$existe} <a href='{$url}' target='_blank'>{$nombre}</a></li>";
        }
        echo "</ul>";
    } else {
        echo "❌ No hay imágenes en public/image/<br>";
    }
    
    // 4. Verificar una imagen específica
    echo "<h2>4. Test de imagen específica</h2>";
    $imagenTest = 'image/default-insect.jpg';
    $pathTest = public_path($imagenTest);
    
    if (file_exists($pathTest)) {
        $url = asset($imagenTest);
        echo "✅ {$imagenTest} EXISTE<br>";
        echo "URL: <a href='{$url}' target='_blank'>{$url}</a><br>";
        echo "<img src='{$url}' style='max-width: 200px; border: 2px solid green;'><br>";
        echo "Tamaño: " . filesize($pathTest) . " bytes";
    } else {
        echo "❌ {$imagenTest} NO EXISTE<br>";
        echo "Creando imagen de prueba...<br>";
        
        // Crear imagen de prueba
        $im = imagecreate(300, 200);
        $bg = imagecolorallocate($im, 76, 175, 80);
        $text = imagecolorallocate($im, 255, 255, 255);
        imagestring($im, 5, 100, 90, 'DEFAULT', $text);
        imagejpeg($im, $pathTest, 90);
        imagedestroy($im);
        
        echo "✅ Imagen creada en: {$pathTest}";
    }
    
    return '';
});


// En routes/web.php
Route::get('/verificar-bd', function() {
    echo "<h1>Verificación Base de Datos</h1>";
    
    // 1. Todas las especies
    $especies = Especie::withCount('imagenesMorfologicas')->get();
    
    echo "<h2>Especies ({$especies->count()})</h2>";
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Orden</th><th>Imágenes</th><th>Acciones</th></tr>";
    
    foreach ($especies as $especie) {
        echo "<tr>";
        echo "<td>{$especie->id}</td>";
        echo "<td><strong>{$especie->nombre_comun}</strong><br><small>{$especie->nombre_cientifico}</small></td>";
        echo "<td>{$especie->orden}</td>";
        echo "<td>{$especie->imagenes_morfologicas_count}</td>";
        echo "<td>";
        echo "<a href='" . route('especies.show', $especie->id) . "'>Ver</a> | ";
        if ($especie->imagenes_morfologicas_count > 0) {
            echo "<a href='/verificar-imagenes-especie/{$especie->id}'>Ver imágenes</a>";
        }
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    
    // 2. Todas las imágenes morfológicas
    echo "<h2>Imágenes Morfológicas</h2>";
    $imagenes = ImagenMorfologica::with('especie')->get();
    
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>ID</th><th>Especie</th><th>Tipo</th><th>Ruta</th><th>Existe</th><th>URL</th></tr>";
    
    foreach ($imagenes as $imagen) {
        $existe = Storage::disk('public')->exists($imagen->ruta_imagen) ? '✅' : '❌';
        $url = asset('storage/' . $imagen->ruta_imagen);
        
        echo "<tr>";
        echo "<td>{$imagen->id}</td>";
        echo "<td>{$imagen->especie->nombre_comun} ({$imagen->especie->orden})</td>";
        echo "<td>{$imagen->tipo_imagen}</td>";
        echo "<td>{$imagen->ruta_imagen}</td>";
        echo "<td>{$existe}</td>";
        echo "<td><a href='{$url}' target='_blank'>Ver</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    
    return '';
});

// Ruta adicional para ver imágenes de una especie
Route::get('/verificar-imagenes-especie/{id}', function($id) {
    $especie = Especie::with('imagenesMorfologicas')->findOrFail($id);
    
    echo "<h1>Imágenes de: {$especie->nombre_comun}</h1>";
    echo "<p>Orden: {$especie->orden}</p>";
    
    if ($especie->imagenesMorfologicas->count() > 0) {
        foreach ($especie->imagenesMorfologicas as $imagen) {
            $url = asset('storage/' . $imagen->ruta_imagen);
            $existe = Storage::disk('public')->exists($imagen->ruta_imagen) ? '✅' : '❌';
            
            echo "<div style='margin: 20px; padding: 10px; border: 1px solid #ccc;'>";
            echo "<h3>{$imagen->tipo_imagen}</h3>";
            echo "<p>Ruta: {$imagen->ruta_imagen}</p>";
            echo "<p>Existe en storage: {$existe}</p>";
            echo "<p>URL: <a href='{$url}' target='_blank'>{$url}</a></p>";
            
            if (Storage::disk('public')->exists($imagen->ruta_imagen)) {
                echo "<img src='{$url}' style='max-width: 300px; border: 2px solid green;'>";
            } else {
                echo "<div style='background: #ffcccc; padding: 20px;'>";
                echo "⚠️ La imagen no existe en storage";
                echo "</div>";
            }
            
            echo "</div>";
        }
    } else {
        echo "<p>Esta especie no tiene imágenes</p>";
    }
    
    return '';
});

// ==================== RUTAS DE ESPECIES (CONTROLADOR) ====================

// Ya tienes algunas de estas, pero asegúrate de que no haya conflictos
Route::get('/especies/crear', [EspecieController::class, 'create'])->name('especies.create');
Route::post('/especies', [EspecieController::class, 'store'])->name('especies.store');
Route::get('/orden/{orden}', [EspecieController::class, 'showByOrder'])->name('orden.show');

// Si ya tienes esta, puedes mantenerla pero es redundante con la de arriba
// Route::get('/especie/{especie}', [EspecieController::class, 'showDetail'])->name('especie.detalle');

Route::get('/especie/{especie}/morfologia', [EspecieController::class, 'morfologia'])->name('especie.morfologia');
Route::get('/especie/{especie}/metamorfosis', [EspecieController::class, 'metamorfosis'])->name('especie.metamorfosis');
Route::get('/especies', [EspecieController::class, 'index'])->name('especies.index');
Route::get('/form-info/{type}', [EspecieController::class, 'getFormInfo'])->name('form.info');
Route::get('/formulario-unico', [EspecieController::class, 'createUnico'])->name('formulario-unico');
Route::post('/nueva-especie', [EspecieController::class, 'storeHolometabolia']);
Route::post('/formulario-nueva-especie', [EspecieController::class, 'storeHemimetabolia']);
Route::get('/especie/{especie}/edit', [EspecieController::class, 'edit'])->name('especie.edit');
Route::put('/especie/{especie}', [EspecieController::class, 'update'])->name('especie.update');
Route::delete('/especie/{especie}', [EspecieController::class, 'destroy'])->name('especie.destroy');
Route::get('/coleccion/todas-especies', [EspecieController::class, 'todasEspecies'])->name('especies.todas');

// ==================== RUTAS DE ÓRDENES ESPECÍFICAS (opcionales) ====================

Route::get('/hymenoptera', function () {
    $especies = \App\Models\Especie::where('orden', 'Hymenoptera')
        ->with(['imagenesMorfologicas'])
        ->get();
    return view('especies.hymenoptera', compact('especies'));
})->name('hymenoptera');

Route::get('/orthoptera', function () {
    $especies = \App\Models\Especie::where('orden', 'Orthoptera')
        ->with(['imagenesMorfologicas'])
        ->get();
    return view('especies.orthoptera', compact('especies'));
})->name('orthoptera');

Route::get('/lepidoptera', function () {
    $especies = \App\Models\Especie::where('orden', 'Lepidoptera')
        ->with(['imagenesMorfologicas'])
        ->get();
    return view('especies.lepidoptera', compact('especies'));
})->name('lepidoptera');

Route::get('/diptera', function () {
    $especies = \App\Models\Especie::where('orden', 'Diptera')
        ->with(['imagenesMorfologicas'])
        ->get();
    return view('especies.diptera', compact('especies'));
})->name('diptera');

Route::get('/hemiptera', function () {
    $especies = \App\Models\Especie::where('orden', 'Hemiptera')
        ->with(['imagenesMorfologicas'])
        ->get();
    return view('especies.hemiptera', compact('especies'));
})->name('hemiptera');

Route::get('/coleoptera', function () {
    $especies = \App\Models\Especie::where('orden', 'Coleoptera')
        ->with(['imagenesMorfologicas'])
        ->get();
    return view('especies.coleoptera', compact('especies'));
})->name('coleoptera');