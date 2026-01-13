<?php

return [

    'orthoptera' => [
        [
        'slug' => 'Gryllus_campestris',
        'nombre_cientifico' => 'Gryllus campestris',
        'fecha' => '12-23-2015',
        'nombre_comun' => 'Grillo de campo',
        'orden' => 'Orthoptera',
        'familia' => 'Gryllidae',
        'descripcion' => 'El grillo de campo, conocido como Gryllus campestris, es un insecto que pertenece al suborden Ensifera. Es conocido por el canto estridente que emiten los machos para atraer a las hembras.',
        'habitat' => 'Praderas, jardines y áreas agrícolas',
        'imagen' => 'Gryllus campestris.jpeg',
        'distribucion' => 'Europa, Asia, Norte de África',
        'dieta' => 'Plantas, hojas, ocasionalmente pequeños insectos',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Gryllus',
        'especie' => 'G. campestris',
        'galeria_imagenes' => [
            [
                'archivo' => 'Gryllus_campestris_huevo.jpg',
                'descripcion' => 'Fase de huevo del Grillo de campo.',
                'categoria' => 'metamorfosis'
            ],
            [
                'archivo' => 'Gryllus_campestris_ninfa.jpg',
                'descripcion' => 'Ninfa de Grillo de campo (etapa juvenil).',
                'categoria' => 'metamorfosis'
            ],
            [
                'archivo' => 'Gryllus_campestris_adulto.jpg', 
                'descripcion' => 'Grillo adulto recién mudado.',
                'categoria' => 'metamorfosis'
            ],
            [
                'archivo' => 'Gryllus_campestris_cabeza.jpg',
                'descripcion' => 'Detalle de la cabeza, mostrando las largas antenas características.',
                'categoria' => 'cabeza'
            ],
            [
                'archivo' => 'Gryllus_campestris_alas.jpg',
                'descripcion' => 'Vista superior de las alas utilizadas para la estridulación.',
                'categoria' => 'alas'
            ],
        ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Incompleta (Hemimetábola)',
            'duracion_total' => '10-12 meses',
            'habitos_alimenticios' => 'Omnívoro',
            'etapas' => [
                'huevo' => [
                    'duracion' => '8-10 meses (invernación)',
                    'descripcion' => 'Huevos invernan en el suelo.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Suelo, base de plantas'
                ],
                // El grillo no pasa por pupa, usa 'ninfa' en su lugar
                'ninfa' => [ 
                    'duracion' => '2-3 meses',
                    'descripcion' => '5-6 estadios ninfales.',
                    'alimentacion' => 'Material vegetal e insectos',
                    'habitat' => 'Vegetación densa'
                ],
                'adulto' => [
                    'duracion' => '2-3 meses',
                    'descripcion' => 'Alas completamente desarrolladas, capacidad de estridulación.',
                    'alimentacion' => 'Hojas, flores, insectos',
                    'habitat' => 'Arbustos y árboles'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => ['C' => 'X', 'Q' => '', 'B' => '', 'M' => 'X', 'descripcion' => 'Laboreo del suelo para destruir huevos invernantes.'],
                'ninfa' => ['C' => 'X', 'Q' => 'X', 'B' => 'X', 'M' => '', 'descripcion' => 'Control temprano con insecticidas selectivos y métodos biológicos.'],
                'adulto' => ['C' => 'X', 'Q' => 'X', 'B' => 'X', 'M' => 'X', 'descripcion' => 'Trampas de luz para machos y control manual en áreas críticas.']
            ]
            ],
// --- SECCIÓN DE MORFOLOGÍA CON IMÁGENES ASOCIADAS ---
'morfologia' => [
    'cabeza' => [
        'estructura' => 'Hipognata (orientada hacia abajo).',
        'caracteristicas' => 'Ojos compuestos grandes y ocelos visibles. Antenas largas y delgadas (filiformes).',
        'piezas_bucales' => 'Tipo masticador, con mandíbulas fuertes adaptadas para cortar material vegetal.',
        'imagenes' => [
            [
                'archivo' => 'Gryllus_campestris_cabeza_focal.jpg',
                'descripcion' => 'Detalle de la cabeza, mostrando las largas antenas características.',
                'detalle_extendido' => 'La cabeza hipognata está orientada verticalmente. Presenta ojos compuestos para la visión y antenas filiformes extremadamente largas y sensibles, cruciales para la detección de vibraciones y olores. Las piezas bucales son de tipo masticador.'
            ]
        ]
    ],
    'torax' => [
        'divisiones' => 'Protórax, Mesotórax, Metatórax.',
        'protorax' => 'El pronoto es grande y robusto, con forma de escudo que cubre parte de la cabeza.',
        'patas' => 'Tres pares de patas. Las patas traseras son muy grandes y musculosas, especializadas para el salto (saltadoras).',
        'imagenes' => [
            [
                'archivo' => 'Gryllus_campestris_torax_patas.jpg',
                'descripcion' => 'Vista lateral del tórax y la pata saltadora.',
                'detalle_extendido' => 'El tórax aloja los músculos de las patas y alas. Las patas traseras son saltadoras, con un fémur hipertrofiado, esenciales para la locomoción. El protórax actúa como un escudo protector (pronoto).'
            ]
        ]
    ],
    'abdomen' => [
        'segmentos' => 'Diez segmentos visibles.',
        'apendices' => 'Termina en un par de cercos sensoriales. Las hembras poseen un ovipositor largo, tubular y en forma de sable, utilizado para depositar los huevos en el suelo.',
        'imagenes' => [
            [
                'archivo' => 'Gryllus_campestris_abdomen_ovipositor.jpg',
                'descripcion' => 'Abdomen de la hembra con el ovipositor bien visible.',
                'detalle_extendido' => 'El abdomen contiene los órganos viscerales. Termina con cercos sensoriales que detectan vibraciones. En las hembras, el ovipositor es un apéndice largo y robusto fundamental para la reproducción, permitiendo la puesta de huevos en el suelo.'
            ]
        ]
    ],
    'alas' => [
        'pares' => 'Dos pares: alas delanteras (tegminas) y alas posteriores (membranosas).',
        'tipo' => 'Las tegminas son duras y coriáceas. En los machos, contienen el órgano estridulador (para el canto).',
        'vuelo' => 'Vuelo limitado o ausente en muchos adultos, prefieren saltar o caminar.',
        'imagenes' => [
            [
                'archivo' => 'Gryllus_campestris_alas_estridulacion.jpg',
                'descripcion' => 'Primer plano del órgano de estridulación en las tegminas del macho.',
                'detalle_extendido' => 'Las tegminas son las alas delanteras modificadas. En el macho, estas alas contienen el órgano estridulador, una estructura especializada utilizada para producir el canto de cortejo y territorial, frotando una "lima" contra un "raspador".'
            ]
        ]
    ]
],
// --- FIN SECCIÓN DE MORFOLOGÍA ---
    ],

    // ----------------------------------------------------------------------
    // 2. Locusta migratoria (Langosta migratoria)
    // ----------------------------------------------------------------------
    [
        'slug' => 'Locusta_migratoria',
        'nombre_cientifico' => 'Locusta migratoria',
        'fecha' => '06-15-2020',
        'nombre_comun' => 'Langosta migratoria',
        'orden' => 'Orthoptera',
        'familia' => 'Acrididae',
        'descripcion' => 'La langosta migratoria es un insecto del suborden Caelifera, famoso por su capacidad de cambiar de comportamiento y formar enormes enjambres que pueden devastar cultivos. Posee una fase solitaria y una fase gregaria.',
        'habitat' => 'Zonas áridas, semiáridas, pastizales y áreas agrícolas',
        'imagen' => 'Locusta migratoria.jpeg',
        'distribucion' => 'África, Asia, Australia y Europa',
        'dieta' => 'Plantas, cultivos, vegetación variada',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Locusta',
        'especie' => 'L. migratoria',
        'galeria_imagenes' => [
            [
                'archivo' => 'Locusta migratoria.jpeg',
                'descripcion' => 'Vista de la langosta migratoria adulta en fase solitaria.',
                'categoria' => 'metamorfosis'
            ],
            // Agregando imágenes de ciclo de vida para que la lógica Blade funcione
            [
                'archivo' => 'Locusta_migratoria_huevo.jpg',
                'descripcion' => 'Ooteca de Langosta migratoria en el suelo.',
                'categoria' => 'huevo'
            ],
            [
                'archivo' => 'Locusta_migratoria_ninfa.jpg',
                'descripcion' => 'Ninfa (hopper) de Langosta migratoria.',
                'categoria' => 'ninfa'
            ],
        ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Hemimetábola (Incompleta)',
            'duracion_total' => '2-6 meses (dependiendo de condiciones)',
            'habitos_alimenticios' => 'Herbívoro gregario',
            'etapas' => [
                'huevo' => [
                    'duracion' => '10-20 días',
                    'descripcion' => 'Huevos depositados en ootecas en suelo húmedo. Cada puesta contiene 50-100 huevos.',
                    'alimentacion' => 'No se alimenta (desarrollo embrionario)',
                    'habitat' => 'Suelo arenoso húmedo, a 5-10 cm de profundidad'
                ],
                'ninfa' => [
                    'duracion' => '20-40 días (5-6 estadios)',
                    'descripcion' => 'Conocidas como "hopper". Presentan fases solitarias o gregarias. Mudan 5-6 veces.',
                    'alimentacion' => 'Vegetación variada, cultivos en crecimiento',
                    'habitat' => 'Pastizales, áreas de cultivo, vegetación densa'
                ],
                'adulto' => [
                    'duracion' => '2-5 meses',
                    'descripcion' => 'Alas completamente desarrolladas. Capaces de vuelos largos en enjambre. Fase reproductiva activa.',
                    'alimentacion' => 'Grandes cantidades de vegetación, cultivos maduros',
                    'habitat' => 'Amplia distribución, migratorio'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X', 
                    'Q' => '', 
                    'B' => 'X', 
                    'M' => 'X', 
                    'descripcion' => 'Laboreo del suelo para destruir ootecas. Monitoreo de zonas de oviposición.'
                ],
                'ninfa' => [
                    'C' => 'X', 
                    'Q' => 'X', 
                    'B' => 'X', 
                    'M' => 'X', 
                    'descripcion' => 'Control temprano con insecticidas. Barreras físicas. Depredadores naturales.'
                ],
                'adulto' => [
                    'C' => 'X', 
                    'Q' => 'X', 
                    'B' => 'X', 
                    'M' => 'X', 
                    'descripcion' => 'Vigilancia aérea. Control químico en enjambres. Trampas de luz.'
                ]
            ]
                ],
// --- SECCIÓN DE MORFOLOGÍA CON IMÁGENES ASOCIADAS ---

           'morfologia' => [
        'cabeza' => [
            'estructura' => 'Hipognata (orientada hacia abajo).',
            'caracteristicas' => 'Ojos compuestos grandes y prominentes. Antenas relativamente cortas y robustas. Frente amplio y aplanado.',
            'piezas_bucales' => 'Tipo masticador robusto, adaptado para consumir grandes cantidades de vegetación.',
            'imagenes' => [
                [
                    'archivo' => 'Locusta_migratoria_cabeza.jpg',
                    'descripcion' => 'Vista frontal de la cabeza mostrando los grandes ojos compuestos.',
                    'detalle_extendido' => 'La cabeza presenta una estructura robusta con ojos compuestos muy desarrollados que proporcionan un amplio campo visual. Las antenas son más cortas que en grillos pero igualmente sensibles. Las mandíbulas son extremadamente fuertes para procesar vegetación dura.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax, Metatórax bien diferenciados.',
            'protorax' => 'Pronoto grande en forma de silla de montar, con quilla medial prominente.',
            'patas' => 'Tres pares de patas. Patas traseras extremadamente desarrolladas para el salto. Patas delanteras y medias adaptadas para caminar y sujetarse.',
            'imagenes' => [
                [
                    'archivo' => 'Locusta_migratoria_torax.jpg',
                    'descripcion' => 'Vista dorsal del tórax mostrando el pronoto característico.',
                    'detalle_extendido' => 'El tórax presenta un desarrollo muscular excepcional, especialmente en el metatórax que aloja los potentes músculos de las patas saltadoras. El pronoto tiene forma característica de silla de montar que protege la base de la cabeza.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Once segmentos visibles, los últimos modificados.',
            'apendices' => 'Cercos cortos. En hembras, ovipositor corto adaptado para depositar huevos en suelo compacto.',
            'imagenes' => [
                [
                    'archivo' => 'Locusta_migratoria_abdomen.jpg',
                    'descripcion' => 'Abdomen mostrando los segmentos y apéndices.',
                    'detalle_extendido' => 'El abdomen es alargado y cilíndrico, conteniendo el sistema digestivo y reproductor. En las hembras, el ovipositor es corto pero robusto, diseñado para excavar en suelo duro durante la oviposición.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Dos pares: tegminas anteriores y alas posteriores membranosas.',
            'tipo' => 'Tegminas coriáceas con venación marcada. Alas posteriores amplias y transparentes para vuelo sostenido.',
            'vuelo' => 'Excelentes voladores, capaces de migraciones de cientos de kilómetros.',
            'imagenes' => [
                [
                    'archivo' => 'Locusta_migratoria_alas.jpg',
                    'descripcion' => 'Alas extendidas mostrando la venación característica.',
                    'detalle_extendido' => 'Las alas posteriores son grandes, membranosas y con venación bien definida, adaptadas para vuelos prolongados durante las migraciones. Las tegminas protegen las alas posteriores cuando están en reposo y proporcionan camuflaje.'
                ]
            ]
        ]
                ],
    ],

    // ----------------------------------------------------------------------
    // 3. Schistocerca americana (Langosta americana)
    // ----------------------------------------------------------------------
    [
        'slug' => 'Schistocerca_americana',
        'nombre_cientifico' => 'Schistocerca americana',
        'fecha' => '08-22-2019',
        'nombre_comun' => 'Langosta americana',
        'orden' => 'Orthoptera',
        'familia' => 'Acrididae',
        'descripcion' => 'La langosta americana es un insecto ortóptero nativo de América del Norte, conocido por su potencial para formar enjambres destructivos. Su coloración varía según su fase (solitaria o gregaria).',
        'habitat' => 'Praderas, campos agrícolas, áreas abiertas y bosques claros',
        'imagen' => 'Schistocerca americana.jpeg',
        'distribucion' => 'América del Norte y Central',
        'dieta' => 'Plantas, cultivos, hojas de árboles y arbustos',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Schistocerca',
        'especie' => 'S. americana',
        'galeria_imagenes' => [
            [
                'archivo' => 'Schistocerca americana.jpeg',
                'descripcion' => 'Vista de la langosta americana adulta.',
                'categoria' => 'metamorfosis'
            ],
            // Agregando imágenes de ciclo de vida para que la lógica Blade funcione
            [
                'archivo' => 'Schistocerca_americana_huevo.jpg',
                'descripcion' => 'Huevos en ooteca de Schistocerca americana.',
                'categoria' => 'huevo'
            ],
            [
                'archivo' => 'Schistocerca_americana_ninfa.jpg',
                'descripcion' => 'Ninfa (hopper) de Langosta americana, coloración típica.',
                'categoria' => 'ninfa'
            ],
        ],
        'morfologia' => [
        'cabeza' => [
            'estructura' => 'Hipognata, robusta y ancha.',
            'caracteristicas' => 'Ojos compuestos grandes, de color marrón oscuro. Antenas filiformes de longitud media. Frente con marcadas suturas.',
            'piezas_bucales' => 'Aparato masticador potente, adaptado para consumo de diversas plantas.',
            'imagenes' => [
                [
                    'archivo' => 'Schistocerca_americana_cabeza.jpg',
                    'descripcion' => 'Detalle de la cabeza con sus características distintivas.',
                    'detalle_extendido' => 'La cabeza es ancha y robusta, con un clípeo prominente. Los ojos compuestos son particularmente grandes y oscuros. Las antenas, aunque más cortas que en los grillos, son muy sensibles a estímulos químicos y mecánicos.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax bien desarrollados.',
            'protorax' => 'Pronoto con quilla medial bien marcada y bordes laterales elevados.',
            'patas' => 'Patas traseras extremadamente musculosas para salto. Fémures posteriores con bandas oscuras características.',
            'imagenes' => [
                [
                    'archivo' => 'Schistocerca_americana_torax.jpg',
                    'descripcion' => 'Tórax mostrando la quilla medial y patas robustas.',
                    'detalle_extendido' => 'El tórax presenta una estructura poderosa, con el metatórax especialmente desarrollado para alojar los músculos de las patas saltadoras. El pronoto tiene una quilla medial prominente que es característica de la especie.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Diez segmentos claramente visibles.',
            'apendices' => 'Cercos cortos y cónicos. Ovipositor corto en hembras para puesta en suelo.',
            'imagenes' => [
                [
                    'archivo' => 'Schistocerca_americana_abdomen.jpg',
                    'descripcion' => 'Abdomen con su característica coloración y segmentación.',
                    'detalle_extendido' => 'El abdomen es alargado y muestra una coloración que varía entre individuos. Los segmentos abdominales son claramente visibles, con los últimos segmentos modificados para funciones reproductivas. Los cercos son cortos pero sensibles.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Dos pares: tegminas anteriores y alas posteriores membranosas.',
            'tipo' => 'Tegminas con manchas oscuras características. Alas posteriores hialinas con venación marcada.',
            'vuelo' => 'Buenos voladores, capaces de desplazamientos considerables.',
            'imagenes' => [
                [
                    'archivo' => 'Schistocerca_americana_alas.jpg',
                    'descripcion' => 'Alas mostrando el patrón de coloración característico.',
                    'detalle_extendido' => 'Las tegminas presentan un patrón de manchas oscuras sobre fondo más claro que proporciona camuflaje. Las alas posteriores son transparentes con venación marrón, permitiendo vuelos eficientes durante la dispersión.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Hemimetábola (Incompleta)',
            'duracion_total' => '3-8 meses',
            'habitos_alimenticios' => 'Herbívoro polífago',
            'etapas' => [
                'huevo' => [
                    'duracion' => '15-25 días',
                    'descripcion' => 'Huevos en masas espumosas enterradas en suelo suelto. Resistentes a sequías moderadas.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Suelo arenoso, márgenes de campos'
                ],
                'ninfa' => [
                    'duracion' => '25-50 días (5 estadios)',
                    'descripcion' => 'Ninfas activas que se agrupan en bandas. Coloración críptica en fase solitaria.',
                    'alimentacion' => 'Hojas tiernas, brotes, cultivos jóvenes',
                    'habitat' => 'Vegetación baja, bordes de caminos'
                ],
                'adulto' => [
                    'duracion' => '2-6 meses',
                    'descripcion' => 'Alas largas para vuelo. Capaces de migraciones estacionales. Alta capacidad reproductiva.',
                    'alimentacion' => 'Amplia variedad de plantas cultivadas y silvestres',
                    'habitat' => 'Áreas abiertas, migratorio'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X', 
                    'Q' => '', 
                    'B' => '', 
                    'M' => 'X', 
                    'descripcion' => 'Arado profundo para exponer huevos. Rotación de cultivos.'
                ],
                'ninfa' => [
                    'C' => 'X', 
                    'Q' => 'X', 
                    'B' => 'X', 
                    'M' => '', 
                    'descripcion' => 'Control con insecticidas en bandas ninfales. Aves depredadoras.'
                ],
                'adulto' => [
                    'C' => 'X', 
                    'Q' => 'X', 
                    'B' => 'X', 
                    'M' => 'X', 
                    'descripcion' => 'Monitoreo de poblaciones. Control químico preventivo. Trampas.'
                ]
                ],
                
        ]
    ],
    
    // ----------------------------------------------------------------------
    // 4. Tettigonia viridissima (Saltamontes verde)
    // ----------------------------------------------------------------------
    [
        'slug' => 'Tettigonia_viridissima',
        'nombre_cientifico' => 'Tettigonia viridissima',
        'fecha' => '12-23-2015',
        'nombre_comun' => 'Saltamontes verde',
        'orden' => 'Orthoptera',
        'familia' => 'Tettigoniidae',
        'descripcion' => 'El saltamontes verde grande es un insecto omnívoro conocido por su coloración verde brillante y sus largas antenas. Pertenece al suborden Ensifera.',
        'distribucion' => 'Europa, Asia, Norte de África',
        'habitat' => 'Prados, pastizales, bosques y jardines',
        'imagen' => 'Tettigonia viridissima.jpg',
        'dieta' => 'Plantas, hojas, ocasionalmente pequeños insectos',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Tettigonia',
        'especie' => 'T. viridissima',
        'galeria_imagenes' => [
            [
                'archivo' => 'Tettigonia viridissima.jpg',
                'descripcion' => 'Vista del saltamontes verde adulto.',
                'categoria' => 'metamorfosis'
            ],
            // Agregando imágenes de ciclo de vida para que la lógica Blade funcione
            [
                'archivo' => 'Tettigonia_viridissima_huevo.jpg',
                'descripcion' => 'Huevos puestos en tallos de plantas.',
                'categoria' => 'huevo'
            ],
            [
                'archivo' => 'Tettigonia_viridissima_ninfa.jpg',
                'descripcion' => 'Ninfa de Saltamontes verde, etapa juvenil.',
                'categoria' => 'ninfa'
            ],
        ],
        'morfologia' => [
        'cabeza' => [
            'estructura' => 'Hipognata, alargada verticalmente.',
            'caracteristicas' => 'Ojos compuestos prominentes. Antenas extremadamente largas y filiformes, superando la longitud del cuerpo.',
            'piezas_bucales' => 'Tipo masticador, con mandíbulas fuertes adaptadas para dieta omnívora.',
            'imagenes' => [
                [
                    'archivo' => 'Tettigonia_viridissima_cabeza.jpg',
                    'descripcion' => 'Cabeza mostrando las larguísimas antenas características.',
                    'detalle_extendido' => 'La cabeza es alargada y porta antenas que pueden superar el doble de la longitud del cuerpo. Estas antenas extremadamente largas son altamente sensibles y cruciales para la detección de presas y comunicación. Los ojos son grandes y prominentes.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax bien diferenciados.',
            'protorax' => 'Pronoto en forma de escudo que se extiende sobre la base de la cabeza.',
            'patas' => 'Patas anteriores y medias adaptadas para caminar y manipular presas. Patas posteriores moderadamente desarrolladas para salto.',
            'imagenes' => [
                [
                    'archivo' => 'Tettigonia_viridissima_torax.jpg',
                    'descripcion' => 'Tórax y base de las patas caminadoras.',
                    'detalle_extendido' => 'El tórax presenta un desarrollo equilibrado entre las patas caminadoras y saltadoras. Las patas anteriores están adaptadas para sujetar y manipular presas, mostrando espinas características. El pronoto forma un escudo protector sobre la base de la cabeza.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Diez segmentos visibles, los últimos modificados.',
            'apendices' => 'Cercos cortos. En hembras, ovipositor largo, curvado y en forma de sable para oviposición en tejidos vegetales.',
            'imagenes' => [
                [
                    'archivo' => 'Tettigonia_viridissima_abdomen.jpg',
                    'descripcion' => 'Abdomen mostrando el ovipositor en forma de sable.',
                    'detalle_extendido' => 'El abdomen es alargado y en las hembras presenta un ovipositor característico en forma de sable curvado, que utilizan para insertar huevos en tallos de plantas. Este ovipositor es una adaptación para proteger los huevos del ambiente y depredadores.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Dos pares: tegminas anteriores y alas posteriores.',
            'tipo' => 'Tegminas similares a hojas, proporcionando camuflaje. Alas posteriores membranosas.',
            'vuelo' => 'Vuelo limitado, principalmente planeos cortos. Prefieren el desplazamiento caminando.',
            'imagenes' => [
                [
                    'archivo' => 'Tettigonia_viridissima_alas.jpg',
                    'descripcion' => 'Alas mostrando su adaptación para camuflaje.',
                    'detalle_extendido' => 'Las tegminas tienen una textura y coloración que imita hojas, proporcionando un excelente camuflaje entre la vegetación. Las alas posteriores son membranosas y se pliegan bajo las tegminas cuando no están en uso. Los machos poseen órganos de estridulación en las tegminas.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Hemimetábola (Incompleta)',
            'duracion_total' => '1 año (incluyendo huevo invernante)',
            'habitos_alimenticios' => 'Omnívoro (principalmente herbívoro)',
            'etapas' => [
                'huevo' => [
                    'duracion' => '8-9 meses (invernación)',
                    'descripcion' => 'Huevos puestos en suelo o en tallos de plantas. Sobreviven el invierno en diapausa.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Suelo, base de plantas herbáceas'
                ],
                'ninfa' => [
                    'duracion' => '2-3 meses (6-7 estadios)',
                    'descripcion' => 'Ninfas verdes que mudan varias veces. Desarrollan alas progresivamente.',
                    'alimentacion' => 'Pequeños insectos, áfidos, material vegetal',
                    'habitat' => 'Vegetación media y alta, arbustos'
                ],
                'adulto' => [
                    'duracion' => '2-3 meses',
                    'descripcion' => 'Alas completamente desarrolladas. Machos producen sonidos característicos. Activos al atardecer.',
                    'alimentacion' => 'Insectos pequeños, orugas, material vegetal',
                    'habitat' => 'Arbustos, árboles, vegetación alta'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X', 
                    'Q' => '', 
                    'B' => '', 
                    'M' => '', 
                    'descripcion' => 'Manejo de residuos vegetales. Limpieza de bordes de cultivos.'
                ],
                'ninfa' => [
                    'C' => 'X', 
                    'Q' => '', 
                    'B' => 'X', 
                    'M' => '', 
                    'descripcion' => 'Control biológico natural (predadores). Generalmente no requiere intervención química.'
                ],
                'adulto' => [
                    'C' => '', 
                    'Q' => '', 
                    'B' => 'X', 
                    'M' => '', 
                    'descripcion' => 'Especie beneficiosa como controlador biológico de plagas. Protección en jardines.'
                ]
            ]
        ]
    ],
    
    // ----------------------------------------------------------------------
    // 5. Caelifera (Suborden General)
    // ----------------------------------------------------------------------
    [
        'slug' => 'Caelifera',
        'nombre_cientifico' => 'Caelifera',
        'fecha' => '03-10-2023',
        'nombre_comun' => 'Suborden Caelifera (Langostas y saltamontes)',
        'orden' => 'Orthoptera',
        'familia' => 'Varias familias (Acrididae, Romaleidae, etc.)',
        'descripcion' => 'El suborden Caelifera comprende un amplio grupo de insectos ortópteros comúnmente conocidos como saltamontes y langostas. Se distinguen por sus antenas cortas.',
        'habitat' => 'Praderas, sabanas, desiertos, bosques y áreas agrícolas',
        'imagen' => 'Caelifera.jpg',
        'distribucion' => 'Distribución mundial, en todos los continentes excepto la Antártida',
        'dieta' => 'Principalmente herbívoros (plantas, hojas, cultivos)',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Varios géneros',
        'especie' => 'Múltiples especies',
        'galeria_imagenes' => [
            [
                'archivo' => 'Caelifera.jpg',
                'descripcion' => 'Ejemplar del suborden Caelifera.',
                'categoria' => 'metamorfosis'
            ],
            // Agregando imágenes de ciclo de vida para que la lógica Blade funcione
            [
                'archivo' => 'Caelifera_huevo.jpg',
                'descripcion' => 'Generalidades de la fase de huevo de Caelifera.',
                'categoria' => 'huevo'
            ],
            [
                'archivo' => 'Caelifera_ninfa.jpg',
                'descripcion' => 'Generalidades de la fase ninfal de Caelifera.',
                'categoria' => 'ninfa'
            ],
        ],
         'morfologia' => [
        'cabeza' => [
            'estructura' => 'Generalmente hipognata, variando en forma según familia.',
            'caracteristicas' => 'Ojos compuestos de tamaño variable. Antenas generalmente cortas (menos de 30 segmentos). Ocelos presentes en la mayoría de especies.',
            'piezas_bucales' => 'Tipo masticador típico, adaptado a dieta herbívora.',
            'imagenes' => [
                [
                    'archivo' => 'Caelifera_cabeza.jpg',
                    'descripcion' => 'Ejemplos de variación en la morfología cefálica de Caelifera.',
                    'detalle_extendido' => 'La cabeza en Caelifera muestra variaciones según la familia, pero generalmente presenta antenas cortas (característica que los distingue de Ensifera), ojos compuestos bien desarrollados y aparato bucal masticador robusto adaptado para procesar vegetación.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados pero diferenciables.',
            'protorax' => 'Pronoto variable en forma, desde aplanado hasta con quillas prominentes.',
            'patas' => 'Tres pares de patas. Patas posteriores típicamente desarrolladas para salto, con fémures agrandados.',
            'imagenes' => [
                [
                    'archivo' => 'Caelifera_torax.jpg',
                    'descripcion' => 'Diversidad de estructuras torácicas en Caelifera.',
                    'detalle_extendido' => 'El tórax en Caelifera presenta adaptaciones variadas, pero conserva la estructura básica de tres segmentos. Las patas posteriores están especializadas para el salto en la mayoría de especies, con fémures agrandados que contienen potentes músculos.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Generalmente 10-11 segmentos visibles.',
            'apendices' => 'Cercos cortos. Ovipositor variable, desde corto para puesta en suelo hasta modificado para otras estrategias.',
            'imagenes' => [
                [
                    'archivo' => 'Caelifera_abdomen.jpg',
                    'descripcion' => 'Variación abdominal entre diferentes familias de Caelifera.',
                    'detalle_extendido' => 'El abdomen muestra variaciones según las adaptaciones ecológicas. En general, contiene los sistemas digestivo, respiratorio y reproductor. Los cercos son típicamente cortos y el ovipositor muestra adaptaciones según la estrategia de puesta de huevos de cada especie.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Dos pares en la mayoría de especies (algunas ápteras).',
            'tipo' => 'Tegminas coriáceas anteriores, alas posteriores membranosas (cuando presentes).',
            'vuelo' => 'Capacidad de vuelo variable, desde excelentes voladores hasta especies con vuelo limitado o ápteras.',
            'imagenes' => [
                [
                    'archivo' => 'Caelifera_alas.jpg',
                    'descripcion' => 'Diversidad alar en el suborden Caelifera.',
                    'detalle_extendido' => 'Las alas en Caelifera muestran una gran diversidad. Las tegminas anteriores son típicamente coriáceas y protegen las alas posteriores membranosas. Algunas especies tienen alas reducidas o ausentes. La venación y coloración varían ampliamente entre familias y especies.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Hemimetábola (Incompleta) - General',
            'duracion_total' => 'Variable según especie (1 mes - 2 años)',
            'habitos_alimenticios' => 'Principalmente herbívoros (algunos omnívoros)',
            'etapas' => [
                'huevo' => [
                    'duracion' => '10 días - 9 meses (diapausa)',
                    'descripcion' => 'Huevos en ootecas o individuales. Eclosión sincronizada con condiciones favorables.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Suelo, materia vegetal en descomposición'
                ],
                'ninfa' => [
                    'duracion' => '2 semanas - 6 meses (3-8 estadios)',
                    'descripcion' => 'Estadios juveniles sin alas completamente desarrolladas. Mudas sucesivas.',
                    'alimentacion' => 'Similar a adultos pero en menor cantidad',
                    'habitat' => 'Diversos, según especie y hábitat'
                ],
                'adulto' => [
                    'duracion' => '2 semanas - 12 meses',
                    'descripcion' => 'Estadio reproductivo completo. Alas funcionales en la mayoría de especies.',
                    'alimentacion' => 'Vegetación variada, algunas especies son plagas agrícolas',
                    'habitat' => 'Amplia distribución según adaptaciones específicas'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X', 
                    'Q' => '', 
                    'B' => 'X', 
                    'M' => 'X', 
                    'descripcion' => 'Manejo del suelo. Rotación de cultivos. Control preventivo.'
                ],
                'ninfa' => [
                    'C' => 'X', 
                    'Q' => 'X', 
                    'B' => 'X', 
                    'M' => 'X', 
                    'descripcion' => 'Monitoreo temprano. Control integrado. Métodos culturales y biológicos.'
                ],
                'adulto' => [
                    'C' => 'X', 
                    'Q' => 'X', 
                    'B' => 'X', 
                    'M' => 'X', 
                    'descripcion' => 'Vigilancia continua. Control químico selectivo. Manejo de plagas.'
                ]
            ]
        ]
    ]
    ],
    // ----------------------------------------------------------------------
    // 1. Cicada orni (Cigarra europea)
     [
        'nombre' => 'Hemiptera',
        'slug' => 'Cicada_orni',
        'nombre_cientifico' => 'Cicada orni',
        'fecha' => '07-15-2022',
        'nombre_comun' => 'Cigarra europea',
        'orden' => 'Hemiptera',
        'familia' => 'Cicadidae',
        'descripcion' => 'La Cigarra europea (Cicada orni) es un hemíptero de gran tamaño, fácilmente identificable por su coloración críptica que varía entre tonalidades marrones y grisáceas, lo que le permite camuflarse perfectamente en la corteza de los árboles. El adulto mide aproximadamente 25 milímetros, con una envergadura alar de hasta 70 milímetros.

Este insecto es famoso por el canto estridente, rítmico y potente que emiten exclusivamente los machos durante las horas más calurosas del verano. Este sonido no es vocal, sino que se produce por la vibración de unas membranas especializadas, llamadas tímbales, ubicadas en los laterales del abdomen, funcionando como una caja de resonancia. El objetivo principal del canto es la atracción sexual de las hembras.

La Cicada orni tiene un ciclo de vida hemimetábolo (incompleto), pero es notablemente largo. La fase adulta aérea dura solo un verano, durante la cual se reproducen. Sin embargo, la fase ninfal subterránea puede durar varios años, a menudo más de cuatro. Durante este tiempo, la ninfa vive enterrada y se alimenta de la savia de las raíces de las plantas a través de su probóscide perforadora, emergiendo finalmente para realizar su última muda sobre un tronco antes de convertirse en un adulto alado.',
        'habitat' => 'Áreas boscosas y jardines',
        'imagen' => 'Cicada orni.jpg', // Imagen principal
        'distribucion' => 'Europa y Asia',
        'dieta' => 'Savias de árboles y arbustos',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Cicada',
        'especie' => 'C. orni',
        'galeria_imagenes' => [
            [
                'archivo' => 'Cicada orni.jpg',
                'descripcion' => 'Vista del adulto de la cigarra europea.',
                'categoria' => 'metamorfosis' // Uso general
            ],
            [
                'archivo' => 'Cicada_orni_ninfa.jpg',
                'descripcion' => 'Ninfa de la cigarra saliendo del suelo para la última muda.',
                'categoria' => 'ninfa'
            ],
            [
                'archivo' => 'Cicada_orni_exuvia.jpg',
                'descripcion' => 'Exuvia (piel de ninfa) adherida a un tronco.',
                'categoria' => 'metamorfosis'
            ],
        ],
        'morfologia' => [
        'cabeza' => [
            'estructura' => 'Hipognata, ancha y robusta.',
            'caracteristicas' => 'Ojos compuestos grandes y prominentes. Tres ocelos dispuestos en triángulo. Antenas cortas y setáceas.',
            'piezas_bucales' => 'Estilete largo y fino (probóscide) para succionar savia, retraído bajo la cabeza cuando no se usa.',
            'imagenes' => [
                [
                    'archivo' => 'Cicada_orni_cabeza.jpg',
                    'descripcion' => 'Vista frontal de la cabeza mostrando los grandes ojos y la probóscide.',
                    'detalle_extendido' => 'La cabeza es ancha con ojos compuestos muy desarrollados que proporcionan visión periférica. Posee tres ocelos simples entre los ojos compuestos. Las antenas son cortas pero sensibles. La probóscide está adaptada para perforar tejidos vegetales y succionar savia.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados.',
            'protorax' => 'Pronoto grande que se extiende sobre la base de la cabeza.',
            'patas' => 'Tres pares de patas robustas. Patas anteriores adaptadas para excavar en fase ninfal.',
            'imagenes' => [
                [
                    'archivo' => 'Cicada_orni_torax.jpg',
                    'descripcion' => 'Tórax mostrando la base de las alas y patas robustas.',
                    'detalle_extendido' => 'El tórax es masivo y alberga los potentes músculos alares. Las patas son robustas, especialmente las anteriores que en estado ninfal están adaptadas para excavar en el suelo. El mesotórax es particularmente desarrollado para el vuelo.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Ocho segmentos visibles en machos, siete en hembras.',
            'apendices' => 'En machos, órganos timbales en la base del abdomen para producir sonido. En hembras, ovipositor robusto para insertar huevos en tejidos vegetales.',
            'imagenes' => [
                [
                    'archivo' => 'Cicada_orni_abdomen.jpg',
                    'descripcion' => 'Abdomen mostrando los órganos timbales en el macho.',
                    'detalle_extendido' => 'El abdomen es corto y ancho. En los machos, los primeros segmentos abdominales contienen los órganos timbales - membranas especializadas que vibran para producir el característico canto. En las hembras, el ovipositor es fuerte y aserrado para cortar tejidos vegetales durante la puesta.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Dos pares de alas membranosas.',
            'tipo' => 'Alas anteriores más largas y robustas que las posteriores. Venación conspicua y característica.',
            'vuelo' => 'Excelentes voladores, capaces de vuelos rápidos y direccionales.',
            'imagenes' => [
                [
                    'archivo' => 'Cicada_orni_alas.jpg',
                    'descripcion' => 'Alas extendidas mostrando la venación característica.',
                    'detalle_extendido' => 'Las alas son transparentes con venación marcada. Las alas anteriores son más largas y se superponen a las posteriores en reposo. La venación es compleja y sirve como característica diagnóstica para la identificación de especies. Las alas se mantienen en forma de tejado sobre el cuerpo cuando están en reposo.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Hemimetábola (Incompleta)',
            'duracion_total' => 'Notable larga (4+ años en fase ninfal)',
            'habitos_alimenticios' => 'Fitófago succionador',
            'etapas' => [
                'huevo' => [
                    'duracion' => 'Semanas a meses',
                    'descripcion' => 'Huevos puestos en ramas o corteza de árboles. Eclosión dando paso a la ninfa.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Ramitas y tallos'
                ],
                'ninfa' => [
                    'duracion' => 'Varios años (hasta 7 años en algunas especies)',
                    'descripcion' => 'Vive enterrada y se alimenta de la savia de las raíces a través de su probóscide. Pasa por múltiples mudas.',
                    'alimentacion' => 'Savias de raíces de árboles y arbustos',
                    'habitat' => 'Subterráneo, cerca del sistema radicular'
                ],
                'adulto' => [
                    'duracion' => 'Semanas a un verano',
                    'descripcion' => 'Emerge del suelo para el estadio reproductivo. El macho canta (timbales) para atraer a la hembra.',
                    'alimentacion' => 'Savias de árboles y arbustos',
                    'habitat' => 'Árboles y áreas boscosas'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X', // Cultural
                    'Q' => '',
                    'B' => '',
                    'M' => 'X', // Manejo
                    'descripcion' => 'Manejo de árboles y podas preventivas.'
                ],
                'ninfa' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => '',
                    'descripcion' => 'Fase subterránea, difícil de controlar. No es plaga habitual.'
                ],
                'adulto' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'No se aplica control químico. Conservación de su ecosistema.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 2. Aphis gossypii (Pulgón del algodón)
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Hemiptera',
        'slug' => 'Aphis_gossypii',
        'nombre_cientifico' => 'Aphis gossypii',
        'fecha' => '05-30-2019',
        'nombre_comun' => 'Pulgón del algodón',
        'orden' => 'Hemiptera',
        'familia' => 'Aphididae',
        'descripcion' => 'El Pulgón del algodón (Aphis gossypii) es un hemíptero diminuto de la familia Aphididae, reconocido mundialmente como una plaga agrícola debido a su naturaleza polífaga y su rápida reproducción. Los adultos miden solo entre 1 y 2 milímetros y presentan una coloración muy variable, que va desde el amarillo pálido hasta el verde oscuro o casi negro, dependiendo de la temperatura ambiente, la planta huésped y la densidad de población.

Este pulgón se alimenta al succionar la savia de los tejidos de las plantas con su estilete, causando deformaciones en hojas, brotes y frutos. El daño más significativo no solo es directo, sino también indirecto: mientras se alimenta, excreta una sustancia dulce y pegajosa conocida como mielada, sobre la cual crece un hongo negro llamado negrilla. Esto reduce la capacidad de la planta para realizar la fotosíntesis.

Su ciclo de vida es complejo y a menudo partenogenético (sin machos), lo que permite un crecimiento explosivo de la población. Las hembras pueden dar a luz a ninfas vivas sin necesidad de aparearse, y bajo condiciones ideales, pueden producir hasta 20 generaciones al año, lo que lo convierte en un insecto extremadamente difícil de controlar. Además, es un vector conocido para la transmisión de múltiples virus vegetales.',
        'habitat' => 'Campos agrícolas y jardines',
        'imagen' => 'Aphis gossypii.jpg',
        'distribucion' => 'Cosmopolita',
        'dieta' => 'Savias de plantas',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Aphis',
        'especie' => 'A. gossypii',
        'galeria_imagenes' => [
            [
                'archivo' => 'Aphis gossypii.jpg',
                'descripcion' => 'Vista del pulgón del algodón (forma áptera).',
                'categoria' => 'metamorfosis'
            ],
            [
                'archivo' => 'Aphis_gossypii_colonias.jpg',
                'descripcion' => 'Colonias de pulgones en el envés de una hoja con mielada.',
                'categoria' => 'ninfa'
            ],
        ],
          'morfologia' => [
        'cabeza' => [
            'estructura' => 'Pequeña, triangular, unida directamente al tórax.',
            'caracteristicas' => 'Ojos compuestos bien desarrollados. Antenas largas y filiformes de 6 segmentos. Cornículos (sifúnculos) ausentes o reducidos.',
            'piezas_bucales' => 'Estilete fino y largo (probóscide) para penetrar tejidos vegetales y succionar savia.',
            'imagenes' => [
                [
                    'archivo' => 'Aphis_gossypii_cabeza.jpg',
                    'descripcion' => 'Vista lateral de la cabeza mostrando el estilete.',
                    'detalle_extendido' => 'La cabeza es pequeña con antenas largas que superan la longitud del cuerpo. Los ojos son compuestos y bien desarrollados. El estilete es extremadamente fino y puede extenderse considerablemente para alcanzar los haces vasculares de las plantas. No poseen ocelos en las formas ápteras.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados.',
            'protorax' => 'Pequeño y poco diferenciado en formas ápteras.',
            'patas' => 'Tres pares de patas delgadas y largas adaptadas para caminar sobre vegetación.',
            'imagenes' => [
                [
                    'archivo' => 'Aphis_gossypii_torax.jpg',
                    'descripcion' => 'Cuerpo completo mostrando la estructura torácica.',
                    'detalle_extendido' => 'El tórax está fusionado y es difícil de distinguir en formas ápteras. En formas aladas, el mesotórax está desarrollado para albergar los músculos de las alas. Las patas son largas y delgadas, adaptadas para moverse rápidamente sobre la superficie de las plantas.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Nueve segmentos, los últimos fusionados.',
            'apendices' => 'Sifúnculos (cornículos) cortos y oscuros en el segmento abdominal V o VI. Cauda corta y oscura.',
            'imagenes' => [
                [
                    'archivo' => 'Aphis_gossypii_abdomen.jpg',
                    'descripcion' => 'Abdomen mostrando los sifúnculos y cauda.',
                    'detalle_extendido' => 'El abdomen es ovalado y blando. Presenta dos sifúnculos (cornículos) cortos y oscuros que secretan sustancias cerosas defensivas. La cauda (estructura terminal) es corta y oscura. En las hembras partenogenéticas, el abdomen puede contener embriones en desarrollo visibles a través de la cutícula.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Dos pares en formas aladas, ausentes en formas ápteras.',
            'tipo' => 'Alas membranosas, las anteriores más grandes que las posteriores.',
            'vuelo' => 'Vuelo débil pero efectivo para dispersión a corta distancia.',
            'imagenes' => [
                [
                    'archivo' => 'Aphis_gossypii_alas.jpg',
                    'descripcion' => 'Forma alada mostrando las alas transparentes.',
                    'detalle_extendido' => 'Las formas aladas poseen dos pares de alas membranosas y transparentes. Las alas anteriores son más grandes y presentan una venación reducida característica. Las alas posteriores son más pequeñas. Las alas se mantienen en posición de tejado sobre el abdomen cuando están en reposo. La presencia de alas está influenciada por condiciones ambientales y densidad poblacional.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Hemimetábola (Partenogenética/Compleja)',
            'duracion_total' => 'Muy rápida (hasta 20 generaciones al año)',
            'habitos_alimenticios' => 'Polífago succionador de savia',
            'etapas' => [
                'huevo' => [
                    'duracion' => 'Meses (Diapausa invernal)',
                    'descripcion' => 'La fase de huevo ocurre solo en ciclo holocíclico (con reproducción sexual). En climas cálidos, se evita.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Plantas huéspedes primarias (a menudo leñosas)'
                ],
                'ninfa' => [
                    'duracion' => '4 a 10 días',
                    'descripcion' => 'Estadios juveniles que succionan savia. Pueden nacer vivas (viviparidad).',
                    'alimentacion' => 'Savias de tejidos vegetales',
                    'habitat' => 'Brotes y envés de hojas'
                ],
                'adulto' => [
                    'duracion' => '2 a 4 semanas',
                    'descripcion' => 'Puede ser alado (dispersión) o áptero (reproducción local). Produce mielada y es vector de virus.',
                    'alimentacion' => 'Savias de tejidos vegetales',
                    'habitat' => 'Campos agrícolas y jardines'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Rotación de cultivos y eliminación de malas hierbas huéspedes primarias.'
                ],
                'ninfa' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Control biológico (mariquitas, avispas parasitoides), jabón potásico y monitoreo constante.'
                ],
                'adulto' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Uso de trampas amarillas y aceites hortícolas para interrumpir el ciclo de reproducción y dispersión.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 3. Gerris lacustris (Chinche acuática común)
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Hemiptera',
        'slug' => 'Gerris_lacustris',
        'nombre_cientifico' => 'Gerris lacustris',
        'fecha' => '09-12-2021',
        'nombre_comun' => 'Chinche acuática común',
        'orden' => 'Hemiptera',
        'familia' => 'Gerridae',
        'descripcion' => 'El Zapatero o Chinche acuática común (Gerris lacustris) es un hemíptero de la familia Gerridae, famoso por su habilidad para "patinar" sobre la superficie del agua sin hundirse. Este fenómeno es posible gracias a una combinación de factores: su peso extremadamente ligero y, crucialmente, sus patas medias y traseras, que están cubiertas con miles de pelos microscópicos hidrófobos (repelentes al agua). Esta estructura aumenta la tensión superficial, permitiendo que el insecto se sostenga sobre el agua como si fuera una membrana elástica.

Morfología: Posee un cuerpo largo y delgado. Sus patas están especializadas: el par delantero es corto y fuerte, usado para capturar presas; el par medio y trasero son largos y delgados, utilizados para la propulsión y distribución del peso.

Dieta y Hábitat: Aunque es un Hemiptera, el Gerris lacustris es un depredador. Se alimenta de insectos caídos o muertos que quedan atrapados en la tensión superficial del agua. Habita lagos, estanques y arroyos de movimiento lento en toda Europa y Norteamérica. Su ciclo de vida es hemimetábolo, y pasa el invierno hibernando en tierra, cerca del agua.',
        'habitat' => 'Áreas acuáticas',
        'imagen' => 'Gerris lacustris.jpeg',
        'distribucion' => 'Europa y América del Norte',
        'dieta' => 'Insectos caídos o muertos', // Corregido de "Savias de plantas" a su dieta real (Depredador)
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Gerris',
        'especie' => 'G. lacustris',
        'galeria_imagenes' => [
            [
                'archivo' => 'Gerris lacustris.jpeg',
                'descripcion' => 'Vista de la chinche acuática común sobre la superficie del agua.',
                'categoria' => 'metamorfosis'
            ],
            [
                'archivo' => 'Gerris_lacustris_captura.jpg',
                'descripcion' => 'Ejemplar usando sus patas delanteras para capturar una presa.',
                'categoria' => 'adulto'
            ],
        ],
          'morfologia' => [
        'cabeza' => [
            'estructura' => 'Alargada, prognata (orientada hacia adelante).',
            'caracteristicas' => 'Ojos compuestos grandes y prominentes. Antenas largas de 4 segmentos, con el primer segmento especialmente largo.',
            'piezas_bucales' => 'Estilete corto y robusto (probóscide) adaptado para perforar y succionar presas.',
            'imagenes' => [
                [
                    'archivo' => 'Gerris_lacustris_cabeza.jpg',
                    'descripcion' => 'Vista frontal mostrando los grandes ojos y antenas.',
                    'detalle_extendido' => 'La cabeza es alargada con grandes ojos compuestos que proporcionan una visión excelente para detectar presas y depredadores. Las antenas son largas y sensibles, con el primer segmento particularmente elongado. La probóscide es corta pero fuerte, adaptada para perforar el exoesqueleto de insectos caídos al agua.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax bien diferenciados.',
            'protorax' => 'Alargado, formando un "cuello" distintivo.',
            'patas' => 'Patas anteriores cortas y prensiles para capturar presas. Patas medias y posteriores extremadamente largas y delgadas para desplazamiento sobre el agua.',
            'imagenes' => [
                [
                    'archivo' => 'Gerris_lacustris_torax.jpg',
                    'descripcion' => 'Estructura corporal mostrando las patas especializadas.',
                    'detalle_extendido' => 'El tórax presenta una adaptación única: el protórax es alargado formando un cuello distintivo. Las patas medias y posteriores son extraordinariamente largas y están cubiertas de microvellosidades hidrófobas que repelen el agua, permitiendo el desplazamiento sobre la tensión superficial. Las patas anteriores son cortas y fuertes, adaptadas para sujetar presas.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Ocho segmentos visibles.',
            'apendices' => 'Sin estructuras especializadas visibles externamente.',
            'imagenes' => [
                [
                    'archivo' => 'Gerris_lacustris_abdomen.jpg',
                    'descripcion' => 'Abdomen visto ventralmente.',
                    'detalle_extendido' => 'El abdomen es alargado y está parcialmente cubierto por las alas en reposo. La superficie ventral puede presentar estructuras hidrófugas adicionales. En los machos, los segmentos genitales están modificados para la cópula. El abdomen contiene el sistema digestivo y reproductor, y está protegido por una cutícula resistente al agua.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Dos pares de alas, presentes en formas macrópteras.',
            'tipo' => 'Alas anteriores hemiélitras (base coriácea, ápice membranoso). Alas posteriores completamente membranosas.',
            'vuelo' => 'Buenos voladores, utilizan el vuelo para dispersarse entre cuerpos de agua.',
            'imagenes' => [
                [
                    'archivo' => 'Gerris_lacustris_alas.jpg',
                    'descripcion' => 'Alas mostrando la estructura hemiélitra.',
                    'detalle_extendido' => 'Las alas anteriores son hemiélitras, con la base endurecida (corium) y el ápice membranoso (membrana). Las alas posteriores son completamente membranosas y se pliegan bajo las anteriores. Existen formas braquípteras (alas reducidas) y macrópteras (alas completas) dentro de la misma especie, dependiendo de condiciones ambientales.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Hemimetábola (Incompleta)',
            'duracion_total' => 'Anual (con diapausa invernal)',
            'habitos_alimenticios' => 'Depredador de superficie acuática',
            'etapas' => [
                'huevo' => [
                    'duracion' => 'Días o semanas',
                    'descripcion' => 'Huevos puestos en la vegetación acuática o cerca de la orilla.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Vegetación acuática o sustrato húmedo'
                ],
                'ninfa' => [
                    'duracion' => 'Semanas a meses (5 estadios)',
                    'descripcion' => 'Similar al adulto pero más pequeña y sin alas funcionales. Crece a través de sucesivas mudas.',
                    'alimentacion' => 'Insectos pequeños o restos flotantes',
                    'habitat' => 'Superficie del agua'
                ],
                'adulto' => [
                    'duracion' => 'Meses, incluye hibernación',
                    'descripcion' => 'Totalmente desarrollado, utiliza la tensión superficial para moverse. Inverna en tierra.',
                    'alimentacion' => 'Insectos caídos o muertos en el agua',
                    'habitat' => 'Superficie del agua (actividad), tierra cercana (hibernación)'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Mantenimiento de la vegetación de ribera.'
                ],
                'ninfa' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => '',
                    'descripcion' => 'No es una especie de plaga. Indicador de calidad del agua.'
                ],
                'adulto' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Protección del hábitat acuático y zonas de hibernación.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 4. Nezara viridula (Chinche verde)
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Hemiptera',
        'slug' => 'Nezara_viridula',
        'nombre_cientifico' => 'Nezara viridula',
        'fecha' => '08-10-2020',
        'nombre_comun' => 'Chinche verde',
        'orden' => 'Hemiptera',
        'familia' => 'Pentatomidae',
        'descripcion' => 'La Chinche verde (Nezara viridula) es una especie cosmopolita, considerada una plaga agrícola importante en regiones cálidas y templadas. Es un hemíptero de la familia Pentatomidae, fácilmente reconocible por su distintivo color verde brillante y forma de escudo (pentagonal). El adulto mide entre 12 y 17 milímetros y presenta tres o cuatro pequeñas manchas blancas o pálidas en el margen anterior del escutelo.

Este insecto es altamente polífago, alimentándose de una amplia variedad de cultivos como soja, algodón, maíz y diversas frutas. Utiliza su aparato bucal picador-succionador (probóscide) para perforar tallos, hojas y, crucialmente, las semillas y frutos inmaduros, causando daños económicos considerables.

Al igual que otras chinches, cuando se siente amenazada, emite un olor fuerte y desagradable como mecanismo de defensa, lo que le ha valido el nombre común de "chinche apestosa". Su ciclo de vida es hemimetábolo, con ninfas que pasan por varios estadios y que a menudo exhiben patrones de coloración que incluyen el negro, rojo y blanco antes de alcanzar la fase adulta de color verde sólido.',
        'habitat' => 'Campos agrícolas y jardines',
        'imagen' => 'Nezara viridula.jpg',
        'distribucion' => 'Cosmopolita, especialmente en regiones cálidas',
        'dieta' => 'Savias de plantas, semillas y frutos',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Nezara',
        'especie' => 'N. viridula',
        'galeria_imagenes' => [
            [
                'archivo' => 'Nezara viridula.jpg',
                'descripcion' => 'Adulto de la chinche verde en un cultivo.',
                'categoria' => 'metamorfosis'
            ],
            [
                'archivo' => 'Nezara_viridula_ninfa.jpg',
                'descripcion' => 'Ninfa de la chinche verde con patrón de coloración de advertencia.',
                'categoria' => 'ninfa'
            ],
            [
                'archivo' => 'Nezara_viridula_huevos.jpg',
                'descripcion' => 'Racimo de huevos depositados en el envés de una hoja.',
                'categoria' => 'huevo'
            ],
        ],
         'morfologia' => [
        'cabeza' => [
            'estructura' => 'Triangular, pequeña en relación al cuerpo.',
            'caracteristicas' => 'Ojos compuestos prominentes. Antenas de 5 segmentos, con el basal más corto. Frente con suturas marcadas.',
            'piezas_bucales' => 'Estilete robusto (probóscide) de 4 segmentos, plegado bajo la cabeza cuando no se usa.',
            'imagenes' => [
                [
                    'archivo' => 'Nezara_viridula_cabeza.jpg',
                    'descripcion' => 'Vista frontal de la cabeza mostrando las antenas y ojos.',
                    'detalle_extendido' => 'La cabeza es triangular y pequeña comparada con el escudo torácico. Las antenas son de cinco segmentos, con el primero corto. Los ojos compuestos son grandes y prominentes. La probóscide es robusta y está adaptada para perforar tejidos vegetales duros como semillas y frutos.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados.',
            'protorax' => 'Pronoto trapezoidal que forma el "escudo" característico, con puntuación densa.',
            'patas' => 'Tres pares de patas caminadoras, robustas y adaptadas para moverse sobre vegetación.',
            'imagenes' => [
                [
                    'archivo' => 'Nezara_viridula_torax.jpg',
                    'descripcion' => 'Escudo torácico mostrando la forma característica.',
                    'detalle_extendido' => 'El protórax forma un escudo trapezoidal (pronoto) que se extiende sobre la base de la cabeza. La superficie del pronoto está densamente punteada. El escutelo (mesotórax) es triangular y grande, alcanzando la mitad del abdomen. Las patas son robustas y caminadoras, sin adaptaciones especiales.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Siete segmentos visibles dorsalmente.',
            'apendices' => 'Glándulas odoríferas ventrales entre los segmentos torácico y abdominal para defensa química.',
            'imagenes' => [
                [
                    'archivo' => 'Nezara_viridula_abdomen.jpg',
                    'descripcion' => 'Vista ventral mostrando las glándulas odoríferas.',
                    'detalle_extendido' => 'El abdomen es ancho y aplanado. En la superficie ventral, entre el tórax y el abdomen, se localizan las glándulas odoríferas que producen el característico olor defensivo. Los márgenes abdominales (connexivum) son visibles dorsalmente y muestran bandas alternantes claras y oscuras.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Dos pares: alas anteriores hemiélitras y alas posteriores membranosas.',
            'tipo' => 'Hemiélitras con la parte basal coriácea (corium) y apical membranosa (membrana).',
            'vuelo' => 'Buenos voladores, utilizan el vuelo para dispersarse entre cultivos.',
            'imagenes' => [
                [
                    'archivo' => 'Nezara_viridula_alas.jpg',
                    'descripcion' => 'Alas mostrando la estructura hemiélitra.',
                    'detalle_extendido' => 'Las alas anteriores son hemiélitras, con la base endurecida (corium) de color verde y el ápice membranoso (membrana) transparente. Las alas posteriores son completamente membranosas y se pliegan bajo las hemiélitras. En reposo, las alas forman una X característica sobre el abdomen.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Hemimetábola (Incompleta)',
            'duracion_total' => 'Varias generaciones al año en climas cálidos',
            'habitos_alimenticios' => 'Polífago fitófago, perfora tejidos',
            'etapas' => [
                'huevo' => [
                    'duracion' => '5 a 10 días',
                    'descripcion' => 'Huevos puestos en grandes racimos sobre las hojas de la planta huésped.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Envés de hojas'
                ],
                'ninfa' => [
                    'duracion' => '30 a 60 días (5 estadios)',
                    'descripcion' => 'Pasa por varios estadios con coloración variable. Se alimenta succionando savia y dañando frutos.',
                    'alimentacion' => 'Savias, semillas y frutos inmaduros',
                    'habitat' => 'Plantas huéspedes (cultivos)'
                ],
                'adulto' => [
                    'duracion' => 'Meses',
                    'descripcion' => 'De color verde sólido, forma de escudo. Emite un olor fuerte como defensa. Dispersión y reproducción.',
                    'alimentacion' => 'Savias y semillas de una amplia gama de cultivos',
                    'habitat' => 'Cultivos y malezas'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Remoción manual de racimos de huevos. Uso de parasitoides de huevos.'
                ],
                'ninfa' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Monitoreo, control químico selectivo, uso de hongos entomopatógenos.'
                ],
                'adulto' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Control de malezas que sirven de refugio y trampas de feromonas.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 5. Graphosoma italicum (Chinche rayada)
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Hemiptera',
        'slug' => 'Graphosoma_italicum',
        'nombre_cientifico' => 'Graphosoma italicum',
        'fecha' => '06-20-2021',
        'nombre_comun' => 'Chinche rayada',
        'orden' => 'Hemiptera',
        'familia' => 'Pentatomidae',
        'descripcion' => 'La Chinche rayada (Graphosoma italicum) es un llamativo insecto hemíptero perteneciente a la familia Pentatomidae (chinches escudo). Es inconfundible gracias a su patrón de coloración, que consiste en rayas longitudinales de color rojo intenso y negro sobre su cuerpo robusto y abombado. Este diseño no es casual; se trata de una coloración aposemática (de advertencia), que indica a los posibles depredadores que el insecto es desagradable o tóxico, un mecanismo de defensa común en la naturaleza.

Esta chinche es común en el sur y centro de Europa. Como fitófaga, se alimenta principalmente de las semillas y savia de plantas de la familia Apiaceae (como el hinojo, el anís o la zanahoria silvestre), perforando los tejidos de la planta con su probóscide.

Al igual que otras chinches, pasa por una metamorfosis incompleta (hemimetábola), donde las ninfas se asemejan a los adultos, pero carecen de alas desarrolladas y poseen una coloración menos intensa. Se encuentra activa durante los meses cálidos, habitando praderas, áreas agrícolas y matorrales donde abundan sus plantas huésped.',
        'habitat' => 'Praderas y áreas agrícolas',
        'imagen' => 'Graphosoma italicum.jpeg',
        'distribucion' => 'Europa y el norte de África',
        'dieta' => 'Savias de plantas (principalmente Apiaceae)',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Graphosoma',
        'especie' => 'G. italicum',
        'galeria_imagenes' => [
            [
                'archivo' => 'Graphosoma italicum.jpeg',
                'descripcion' => 'Vista de la chinche rayada en su planta huésped (Apiaceae).',
                'categoria' => 'metamorfosis'
            ],
            [
                'archivo' => 'Graphosoma_italicum_ninfa.jpg',
                'descripcion' => 'Ninfa de la chinche rayada, con menor intensidad de coloración aposemática.',
                'categoria' => 'ninfa'
            ],
        ],
         'morfologia' => [
        'cabeza' => [
            'estructura' => 'Triangular, pequeña, con patrón de coloración aposemática.',
            'caracteristicas' => 'Ojos compuestos negros prominentes. Antenas negras de 5 segmentos. Cabeza con rayas rojas y negras.',
            'piezas_bucales' => 'Estilete robusto (probóscide) adaptado para perforar frutos y semillas de Apiaceae.',
            'imagenes' => [
                [
                    'archivo' => 'Graphosoma_italicum_cabeza.jpg',
                    'descripcion' => 'Cabeza mostrando el patrón aposemático característico.',
                    'detalle_extendido' => 'La cabeza presenta el mismo patrón de coloración aposemática que el cuerpo, con rayas longitudinales rojas y negras. Los ojos son negros y prominentes. Las antenas son completamente negras. La probóscide es robusta y está especializada para perforar los frutos y semillas de plantas de la familia Apiaceae.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados.',
            'protorax' => 'Pronoto con rayas rojas y negras continuas con el patrón de la cabeza.',
            'patas' => 'Tres pares de patas negras, robustas y adaptadas para caminar sobre inflorescencias.',
            'imagenes' => [
                [
                    'archivo' => 'Graphosoma_italicum_torax.jpg',
                    'descripcion' => 'Cuerpo completo mostrando el patrón de coloración.',
                    'detalle_extendido' => 'El pronoto presenta rayas longitudinales rojas y negras que se continúan desde la cabeza. El escutelo es grande y triangular, alcanzando la mitad del abdomen, con el mismo patrón de coloración. Las patas son completamente negras y robustas, adaptadas para moverse sobre las umbelas de las plantas huésped.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Siete segmentos visibles dorsalmente.',
            'apendices' => 'Glándulas odoríferas bien desarrolladas. Margen abdominal (connexivum) con patrón alternante rojo y negro.',
            'imagenes' => [
                [
                    'archivo' => 'Graphosoma_italicum_abdomen.jpg',
                    'descripcion' => 'Abdomen mostrando el patrón del connexivum.',
                    'detalle_extendido' => 'El abdomen mantiene el patrón de rayas rojas y negras en el dorso. Los márgenes abdominales (connexivum) muestran un patrón alternante de manchas rojas y negras que es visible dorsalmente. Las glándulas odoríferas están bien desarrolladas y producen compuestos defensivos que respaldan la coloración de advertencia.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Dos pares: alas anteriores hemiélitras y alas posteriores membranosas.',
            'tipo' => 'Hemiélitras con la parte basal coriácea roja con puntos negros y ápice membranoso.',
            'vuelo' => 'Voladores moderados, utilizan el vuelo principalmente para dispersión local.',
            'imagenes' => [
                [
                    'archivo' => 'Graphosoma_italicum_alas.jpg',
                    'descripcion' => 'Alas mostrando el patrón característico.',
                    'detalle_extendido' => 'Las hemiélitras presentan la base coriácea (corium) de color rojo con numerosas puntuaciones negras, continuando el patrón aposemático del cuerpo. El ápice membranoso (membrana) es transparente. Las alas posteriores son completamente membranosas. El patrón de las alas refuerza la señal de advertencia a posibles depredadores.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Hemimetábola (Incompleta)',
            'duracion_total' => 'Anual (con hibernación)',
            'habitos_alimenticios' => 'Fitófago de semillas y savia',
            'etapas' => [
                'huevo' => [
                    'duracion' => 'Días o semanas',
                    'descripcion' => 'Huevos puestos en racimos o individualmente en las plantas huésped.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Plantas Apiaceae'
                ],
                'ninfa' => [
                    'duracion' => 'Meses',
                    'descripcion' => 'Pasa por varios estadios. Se alimenta en la planta huésped. Coloración aposemática menos desarrollada.',
                    'alimentacion' => 'Savias de plantas Apiaceae',
                    'habitat' => 'Praderas donde abundan las Apiaceae'
                ],
                'adulto' => [
                    'duracion' => 'Meses (incluye hibernación)',
                    'descripcion' => 'Inconfundible por las rayas rojas y negras. Estadio reproductivo. Pasa el invierno hibernando.',
                    'alimentacion' => 'Semillas y savias de plantas Apiaceae',
                    'habitat' => 'Plantas, praderas y matorrales'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => '',
                    'descripcion' => 'Manejo cultural: fomento de diversidad vegetal en praderas.'
                ],
                'ninfa' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Monitoreo, control manual si es necesario. No se considera plaga principal.'
                ],
                'adulto' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Generalmente no se controla. Coloración de advertencia es su principal defensa.'
                ]
            ]
            ]
                ],
    // ... más especies de coleoptera
    // ----------------------------------------------------------------------
    // 1. Coccinella septempunctata (Mariquita de siete puntos)
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Coleoptera',
        'slug' => 'Coccinella_septempunctata',
        'nombre_cientifico' => 'Coccinella septempunctata',
        'fecha' => '06-15-2022',
        'nombre_comun' => 'Mariquita de siete puntos',
        'orden' => 'Coleoptera',
        'familia' => 'Coccinellidae',
        'descripcion' => 'La mariquita de siete puntos es uno de los coleópteros más reconocibles y benéficos en ecosistemas agrícolas y jardines. Este escarabajo presenta un característico color rojo brillante con siete puntos negros distribuidos simétricamente sobre sus élitros. Es un depredador voraz de pulgones, pudiendo consumir hasta 50 pulgones por día durante su etapa larvaria y adulta. Su ciclo de vida completo incluye huevo, larva, pupa y adulto, con generaciones que se suceden rápidamente durante la temporada cálida. Las mariquitas emplean un mecanismo de defensa llamado "sangrado reflejo", excretando un fluido tóxico y de mal sabor desde sus articulaciones cuando se sienten amenazadas. Durante el invierno, los adultos se agrupan en grandes congregaciones para hibernar bajo cortezas de árboles, hojarasca o grietas, emergiendo en primavera para comenzar el ciclo reproductivo.',
        'habitat' => 'Jardines, campos y áreas agrícolas',
        'imagen' => 'Coccinella septempunctata.jpeg',
        'distribucion' => 'Cosmopolita',
        'dieta' => 'Pulgones y otros pequeños insectos',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Coccinella',
        'especie' => 'C. septempunctata',
        'galeria_imagenes' => [
            [
                'archivo' => 'Coccinella septempunctata.jpeg',
                'descripcion' => 'Adulto de la mariquita de siete puntos.',
                'categoria' => 'adulto'
            ],
            [
                'archivo' => 'Coccinella_septempunctata_larva.jpg',
                'descripcion' => 'Larva de la mariquita, una depredadora voraz de pulgones.',
                'categoria' => 'larva'
            ],
            [
                'archivo' => 'Coccinella_septempunctata_pupa.jpg',
                'descripcion' => 'Pupa de mariquita adherida a una hoja.',
                'categoria' => 'pupa'
            ],
        ],
         'morfologia' => [
        'cabeza' => [
            'estructura' => 'Pequeña, retráctil bajo el pronoto, hipognata.',
            'caracteristicas' => 'Ojos compuestos negros prominentes. Antenas cortas y clavadas de 11 segmentos. Cabeza negra con dos manchas blancas anteriores.',
            'piezas_bucales' => 'Tipo masticador, con mandíbulas fuertes adaptadas para triturar pulgones.',
            'imagenes' => [
                [
                    'archivo' => 'Coccinella_septempunctata_cabeza.jpg',
                    'descripcion' => 'Vista frontal de la cabeza mostrando las antenas clavadas.',
                    'detalle_extendido' => 'La cabeza es pequeña y puede retraerse parcialmente bajo el pronoto para protección. Las antenas son cortas y terminan en una maza de tres segmentos. Los ojos compuestos son negros y bien desarrollados. Las mandíbulas son fuertes y aserradas, perfectamente adaptadas para capturar y triturar pulgones.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados.',
            'protorax' => 'Pronoto negro con manchas blancas en los ángulos anteriores, formando un escudo protector.',
            'patas' => 'Tres pares de patas cortas y robustas adaptadas para caminar sobre vegetación.',
            'imagenes' => [
                [
                    'archivo' => 'Coccinella_septempunctata_torax.jpg',
                    'descripcion' => 'Pronoto mostrando el patrón característico blanco y negro.',
                    'detalle_extendido' => 'El protórax forma un escudo protector que cubre la base de la cabeza. El pronoto es negro con manchas blancas características en los ángulos anteriores. Las patas son cortas, robustas y terminan en tarsos de 4 segmentos, adaptadas para caminar sobre superficies vegetales.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Ocho segmentos visibles ventralmente.',
            'apendices' => 'Glándulas defensivas que producen fluidos tóxicos (sangrado reflejo).',
            'imagenes' => [
                [
                    'archivo' => 'Coccinella_septempunctata_abdomen.jpg',
                    'descripcion' => 'Vista ventral mostrando los segmentos abdominales.',
                    'detalle_extendido' => 'El abdomen está protegido por los élitros y contiene glándulas defensivas en las articulaciones coxales que producen un fluido tóxico de color amarillo (sangrado reflejo). Esta defensa química es efectiva contra depredadores como aves y reptiles.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Dos pares: élitros anteriores y alas posteriores membranosas.',
            'tipo' => 'Élitros rojos con siete puntos negros. Alas posteriores membranosas para vuelo.',
            'vuelo' => 'Buenos voladores, utilizan el vuelo para dispersarse entre plantas.',
            'imagenes' => [
                [
                    'archivo' => 'Coccinella_septempunctata_alas.jpg',
                    'descripcion' => 'Élitros mostrando los siete puntos característicos.',
                    'detalle_extendido' => 'Los élitros son duros, convexos y de color rojo brillante con siete puntos negros distribuidos simétricamente (tres en cada élitro y uno en el escutelo). Las alas posteriores son membranosas, largas y se pliegan cuidadosamente bajo los élitros. Los élitros protegen las alas y el abdomen cuando no están volando.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa)',
            'duracion_total' => 'Rápida (3 a 7 semanas) con varias generaciones al año',
            'habitos_alimenticios' => 'Depredador (control biológico)',
            'etapas' => [
                'huevo' => [
                    'duracion' => '4 a 10 días',
                    'descripcion' => 'Huevos pequeños, amarillos o anaranjados, puestos en racimos cerca de colonias de pulgones.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Hojas y tallos cerca de la fuente de alimento'
                ],
                'larva' => [
                    'duracion' => '10 a 30 días (4 estadios)',
                    'descripcion' => 'Similar a un pequeño cocodrilo con patas. Es la fase más voraz, consume pulgones activamente.',
                    'alimentacion' => 'Pulgones, cochinillas y huevos de otros insectos',
                    'habitat' => 'Plantas infestadas de pulgones'
                ],
                'pupa' => [
                    'duracion' => '5 a 10 días',
                    'descripcion' => 'Etapa inmóvil, adherida a una hoja. La transformación de larva a adulto ocurre dentro de la pupa.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Hojas, tallos o estructuras cercanas'
                ],
                'adulto' => [
                    'duracion' => 'Meses (incluye diapausa invernal)',
                    'descripcion' => 'Escarabajo alado con élitros rojos y 7 puntos negros. Reproducción y dispersión. Hiberna en invierno.',
                    'alimentacion' => 'Pulgones, polen y néctar (algunas veces)',
                    'habitat' => 'Plantas y refugios para hibernación'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Conservación de las plantas donde se depositan los huevos. Evitar uso de insecticidas.'
                ],
                'larva' => [
                    'C' => '',
                    'Q' => '',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Fomentar la presencia de plantas con polen para los adultos. Introducción de larvas criadas.'
                ],
                'pupa' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Protección del área de pupación. Etapa inmóvil y vulnerable.'
                ],
                'adulto' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Proporcionar refugios para la hibernación y fuentes de néctar para el mantenimiento del adulto.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 2. Cetonia aurata (Escarabajo verde dorado)
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Coleoptera',
        'slug' => 'Cetonia_aurata',
        'nombre_cientifico' => 'Cetonia aurata',
        'fecha' => '07-22-2021',
        'nombre_comun' => 'Escarabajo verde dorado',
        'orden' => 'Coleoptera',
        'familia' => 'Scarabaeidae',
        'descripcion' => 'El escarabajo verde dorado es un coleóptero de notable belleza caracterizado por su intenso color verde metálico con reflejos dorados y cobrizos. Estos escarabajos son excelentes voladores que se desplazan con agilidad entre flores durante los días soleados. Los adultos se alimentan principalmente de néctar, polen y frutas maduras, siendo particularmente atraídos por las flores de rosas, espinos y plantas umbelíferas. Las larvas, conocidas como "gusanos blancos", se desarrollan en materia orgánica en descomposición, incluyendo compost, madera podrida y humus, contribuyendo al reciclaje de nutrientes en el suelo. A diferencia de muchos escarabajos, Cetonia aurata puede volar con los élitros cerrados gracias a unas escotillas laterales que permiten la extensión de sus alas membranosas. Su presencia indica suelos saludables y ricos en materia orgánica.',
        'habitat' => 'Jardines, bosques y áreas agrícolas',
        'imagen' => 'Cetonia aurata.jpg',
        'distribucion' => 'Europa y Asia',
        'dieta' => 'Néctar, polen y frutas',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Cetonia',
        'especie' => 'C. aurata',
        'galeria_imagenes' => [
            [
                'archivo' => 'Cetonia aurata.jpg',
                'descripcion' => 'Adulto del escarabajo verde dorado alimentándose de polen.',
                'categoria' => 'adulto'
            ],
            [
                'archivo' => 'Cetonia_aurata_larva.jpg',
                'descripcion' => 'Larva (gusano blanco) de Cetonia aurata en materia orgánica.',
                'categoria' => 'larva'
            ],
        ],
        'morfologia' => [
        'cabeza' => [
            'estructura' => 'Pequeña, parcialmente oculta por el pronoto.',
            'caracteristicas' => 'Ojos compuestos grandes. Antenas cortas con maza laminar de 3 segmentos. Cabeza con puntuación densa.',
            'piezas_bucales' => 'Tipo masticador-lamedor, adaptado para alimentarse de néctar y polen.',
            'imagenes' => [
                [
                    'archivo' => 'Cetonia_aurata_cabeza.jpg',
                    'descripcion' => 'Cabeza mostrando las antenas laminadas.',
                    'detalle_extendido' => 'La cabeza es pequeña y está parcialmente oculta bajo el pronoto. Las antenas son cortas y terminan en una maza laminar de tres segmentos que puede abrirse en abanico. Las piezas bucales están adaptadas para lamer néctar y recoger polen, con palpos maxilares bien desarrollados.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados.',
            'protorax' => 'Pronoto convexo de color verde metálico con reflejos dorados y cobrizos.',
            'patas' => 'Patas anteriores excavadoras, todas con espinas y adaptadas para agarrarse a flores.',
            'imagenes' => [
                [
                    'archivo' => 'Cetonia_aurata_torax.jpg',
                    'descripcion' => 'Torax mostrando el color metálico característico.',
                    'detalle_extendido' => 'El protórax es convexo y presenta el mismo color verde metálico con reflejos dorados que los élitros. La superficie está densamente punteada. Las patas anteriores tienen tibias dentadas adaptadas para excavar, mientras que todas las patas tienen espinas que les ayudan a agarrarse firmemente a las flores durante la alimentación.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Seis segmentos visibles ventralmente.',
            'apendices' => 'Sin estructuras especializadas visibles externamente.',
            'imagenes' => [
                [
                    'archivo' => 'Cetonia_aurata_abdomen.jpg',
                    'descripcion' => 'Vista ventral del abdomen.',
                    'detalle_extendido' => 'El abdomen está completamente cubierto por los élitros y el escutelo. Ventralmente, los segmentos abdominales son visibles y presentan la misma coloración metálica que el resto del cuerpo. La superficie ventral puede tener setas dispersas.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Dos pares: élitros anteriores y alas posteriores membranosas.',
            'tipo' => 'Élitros verdes metálicos con reflejos. Alas posteriores para vuelo, pueden volar con élitros cerrados.',
            'vuelo' => 'Excelentes voladores, vuelan con los élitros cerrados gracias a escotillas laterales.',
            'imagenes' => [
                [
                    'archivo' => 'Cetonia_aurata_alas.jpg',
                    'descripcion' => 'Alas mostrando la capacidad de vuelo con élitros cerrados.',
                    'detalle_extendido' => 'Los élitros son convexos, de color verde metálico con reflejos dorados y cobrizos, y presentan bandas transversales de puntuación blanca. Las alas posteriores son membranosas y pueden desplegarse a través de escotillas laterales en los élitros, permitiendo el vuelo sin necesidad de abrirlos completamente. Esta adaptación única les da gran maniobrabilidad en vuelo.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa)',
            'duracion_total' => '2 a 3 años (mayor parte del tiempo como larva)',
            'habitos_alimenticios' => 'Adulto: Fitófago (néctar, polen). Larva: Saprófaga (materia orgánica)',
            'etapas' => [
                'huevo' => [
                    'duracion' => 'Semanas',
                    'descripcion' => 'Huevos depositados en suelo rico en materia orgánica o compost.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Suelo húmedo y materia orgánica'
                ],
                'larva' => [
                    'duracion' => '1 a 2 años',
                    'descripcion' => 'Larva gruesa, curvada (gusano blanco), que se alimenta de madera en descomposición y compost.',
                    'alimentacion' => 'Materia vegetal y madera en descomposición (saprófaga)',
                    'habitat' => 'Compost, troncos podridos, humus'
                ],
                'pupa' => [
                    'duracion' => 'Meses (pasa el invierno)',
                    'descripcion' => 'La larva construye una cámara pupal a partir de material del suelo o madera predigerida.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Suelo o troncos podridos'
                ],
                'adulto' => [
                    'duracion' => 'Semanas a meses',
                    'descripcion' => 'Escarabajo volador de color verde metálico. Activo en primavera y verano. Vuela con élitros cerrados.',
                    'alimentacion' => 'Néctar, polen y savia de plantas',
                    'habitat' => 'Flores en jardines y bosques'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Fomentar la descomposición natural de materia orgánica en el suelo.'
                ],
                'larva' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'No requiere control, ya que son beneficiosas para el compost. Diferenciar de larvas de escarabajos plaga.'
                ],
                'pupa' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => '',
                    'descripcion' => 'Etapa subterránea, inofensiva.'
                ],
                'adulto' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Control manual en flores ornamentales si es necesario. Generalmente considerado inofensivo.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 3. Necrophorus vespillo (Escarabajo enterrador)
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Coleoptera',
        'slug' => 'Necrophorus_vespillo',
        'nombre_cientifico' => 'Necrophorus vespillo',
        'fecha' => '08-30-2020',
        'nombre_comun' => 'Escarabajo enterrador',
        'orden' => 'Coleoptera',
        'familia' => 'Silphidae',
        'descripcion' => 'El escarabajo enterrador exhibe uno de los comportamientos más fascinantes del reino insecto: la necroforesis o entierro de cadáveres. Cuando una pareja localiza el cadáver de un pequeño animal (ratón, pájaro, etc.), trabajan cooperativamente para enterrarlo excavando bajo el cuerpo hasta que éste se hunde en el suelo. Este proceso sirve para crear una cámara nidal donde la hembra deposita sus huevos. Una vez eclosionadas, las larvas son alimentadas por ambos padres mediante regurgitación de carne predigerida, un raro ejemplo de cuidado parental entre los insectos. Los escarabajos enterradores poseen antenas con mazas naranjas que utilizan para detectar químicos liberados por la descomposición a grandes distancias. Este comportamiento no solo provee alimento para su descendencia, sino que también ayuda en la limpieza del ecosistema y el reciclaje de nutrientes.',
        'habitat' => 'Bosques y áreas rurales',
        'imagen' => 'Necrophorus vespillo.jpeg',
        'distribucion' => 'Europa y América del Norte',
        'dieta' => 'Carroña',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Necrophorus',
        'especie' => 'N. vespillo',
        'galeria_imagenes' => [
            [
                'archivo' => 'Necrophorus vespillo.jpeg',
                'descripcion' => 'Adulto del escarabajo enterrador, con antenas anaranjadas.',
                'categoria' => 'adulto'
            ],
            [
                'archivo' => 'Necrophorus_vespillo_entierro.jpg',
                'descripcion' => 'Escarabajos enterrando un cadáver para crear una cámara nidal.',
                'categoria' => 'comportamiento'
            ],
        ],
          'morfologia' => [
        'cabeza' => [
            'estructura' => 'Grande, prognata (orientada hacia adelante).',
            'caracteristicas' => 'Ojos compuestos prominentes. Antenas con maza de 3 segmentos de color naranja. Mandíbulas fuertes.',
            'piezas_bucales' => 'Tipo masticador robusto, adaptado para procesar carroña.',
            'imagenes' => [
                [
                    'archivo' => 'Necrophorus_vespillo_cabeza.jpg',
                    'descripcion' => 'Cabeza mostrando las antenas naranjas características.',
                    'detalle_extendido' => 'La cabeza es grande y está orientada hacia adelante, con mandíbulas poderosas para cortar y procesar carroña. Las antenas terminan en una maza de tres segmentos de color naranja brillante, altamente sensible a los químicos de descomposición. Los ojos compuestos son grandes y prominentes, proporcionando buena visión para localizar cadáveres.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax bien diferenciados.',
            'protorax' => 'Pronoto negro con márgenes laterales anaranjados o rojizos.',
            'patas' => 'Patas anteriores fosoriales (excavadoras), medias y posteriores caminadoras.',
            'imagenes' => [
                [
                    'archivo' => 'Necrophorus_vespillo_torax.jpg',
                    'descripcion' => 'Torax mostrando las patas excavadoras.',
                    'detalle_extendido' => 'El protórax es negro con los márgenes laterales de color anaranjado o rojizo. Las patas anteriores están modificadas para excavar, con tibias anchas y dentadas. Las patas medias y posteriores son más delgadas y adaptadas para caminar. Esta combinación les permite tanto excavar bajo cadáveres como desplazarse largas distancias.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Siete segmentos visibles, los últimos expuestos.',
            'apendices' => 'Ápice del abdomen expuesto más allá de los élitros.',
            'imagenes' => [
                [
                    'archivo' => 'Necrophorus_vespillo_abdomen.jpg',
                    'descripcion' => 'Abdomen mostrando el ápice expuesto.',
                    'detalle_extendido' => 'El abdomen tiene los últimos segmentos expuestos más allá del extremo de los élitros, una característica distintiva de la familia Silphidae. Esta exposición abdominal puede estar relacionada con la termorregulación o la liberación de feromonas. Los segmentos abdominales son visibles y presentan una coloración negra con posibles marcas anaranjadas.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Dos pares: élitros anteriores y alas posteriores membranosas.',
            'tipo' => 'Élitros negros con bandas anaranjadas o rojizas. Textura aterciopelada.',
            'vuelo' => 'Buenos voladores, utilizan el vuelo para localizar cadáveres a distancia.',
            'imagenes' => [
                [
                    'archivo' => 'Necrophorus_vespillo_alas.jpg',
                    'descripcion' => 'Élitros mostrando el patrón de coloración y textura.',
                    'detalle_extendido' => 'Los élitros son negros con bandas transversales de color anaranjado o rojizo, y tienen una textura aterciopelada debido a una fina pubescencia. No cubren completamente el abdomen, dejando expuestos los últimos segmentos. Las alas posteriores son membranosas y bien desarrolladas, permitiendo vuelos largos para localizar cadáveres mediante quimiorrecepción.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa)',
            'duracion_total' => 'Meses (una generación al año)',
            'habitos_alimenticios' => 'Carroñero (Necrófago)',
            'etapas' => [
                'huevo' => [
                    'duracion' => 'Días',
                    'descripcion' => 'Huevos depositados en o cerca de la cámara nidal (cadáver enterrado).',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Cámara nidal subterránea'
                ],
                'larva' => [
                    'duracion' => '1 a 2 semanas',
                    'descripcion' => 'Larva alimentada por los padres con carne predigerida. Crece rápidamente dentro de la cámara nidal.',
                    'alimentacion' => 'Carne predigerida (carroña)',
                    'habitat' => 'Cámara nidal'
                ],
                'pupa' => [
                    'duracion' => 'Semanas a meses',
                    'descripcion' => 'Pupación en el suelo, lejos del nido original.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Suelo circundante'
                ],
                'adulto' => [
                    'duracion' => 'Meses (incluye hibernación)',
                    'descripcion' => 'Busca carroña para reproducirse. Exhibe cuidado parental.',
                    'alimentacion' => 'Carroña (limpieza del ecosistema)',
                    'habitat' => 'Suelo y hojarasca'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => '',
                    'descripcion' => 'Especie benéfica, no requiere control. Fomentar su presencia.'
                ],
                'larva' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => '',
                    'descripcion' => 'Importante en el reciclaje de nutrientes y limpieza del ecosistema.'
                ],
                'pupa' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => '',
                    'descripcion' => 'Inofensiva, forma parte del ciclo natural.'
                ],
                'adulto' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Conservación de hábitats naturales para mantener el equilibrio ecológico.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 4. Carabus violaceus (Escarabajo violáceo)
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Coleoptera',
        'slug' => 'Carabus_violaceus',
        'nombre_cientifico' => 'Carabus violaceus',
        'fecha' => '05-18-2023',
        'nombre_comun' => 'Escarabajo violáceo',
        'orden' => 'Coleoptera',
        'familia' => 'Carabidae',
        'descripcion' => 'El escarabajo violáceo es un carábido grande y robusto que presenta una espectacular coloración negra con reflejos metálicos violáceos, azules o verdosos según la incidencia de la luz. Como miembro de la familia Carabidae, es un depredador terrestre que caza activamente durante la noche, alimentándose de una variedad de invertebrados incluyendo babosas, caracoles, orugas y otros insectos. Sus mandíbulas poderosas le permiten capturar y consumir presas considerablemente grandes en relación a su tamaño. A diferencia de muchos escarabajos, no puede volar ya que sus élitros están fusionados, pero es un corredor excepcionalmente rápido. Durante el día se refugia bajo troncos, piedras o en la hojarasca, emergiendo al anochecer para cazar. Su presencia en un ecosistema indica buena salud del suelo y control natural de plagas, siendo considerado un aliado invaluable en jardinería y agricultura ecológica.',
        'habitat' => 'Jardines, bosques y áreas agrícolas',
        'imagen' => 'Carabus violaceus.jpeg',
        'distribucion' => 'Europa',
        'dieta' => 'Insectos y otros pequeños invertebrados',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Carabus',
        'especie' => 'C. violaceus',
        'galeria_imagenes' => [
            [
                'archivo' => 'Carabus violaceus.jpeg',
                'descripcion' => 'Adulto del escarabajo violáceo.',
                'categoria' => 'adulto'
            ],
            [
                'archivo' => 'Carabus_violaceus_cazando.jpg',
                'descripcion' => 'Escarabajo violáceo en la hojarasca (depredador nocturno).',
                'categoria' => 'comportamiento'
            ],
        ],
         'morfologia' => [
        'cabeza' => [
            'estructura' => 'Grande, prognata, más estrecha que el pronoto.',
            'caracteristicas' => 'Ojos compuestos prominentes. Antenas filiformes de 11 segmentos. Mandíbulas grandes y poderosas.',
            'piezas_bucales' => 'Tipo masticador extremadamente fuerte, adaptado para capturar y triturar presas.',
            'imagenes' => [
                [
                    'archivo' => 'Carabus_violaceus_cabeza.jpg',
                    'descripcion' => 'Cabeza mostrando las mandíbulas poderosas.',
                    'detalle_extendido' => 'La cabeza es grande y está orientada hacia adelante, con mandíbulas excepcionalmente fuertes y afiladas capaces de capturar y triturar presas como babosas y caracoles. Las antenas son largas y filiformes, utilizadas para explorar el entorno. Los ojos compuestos son prominentes y proporcionan buena visión nocturna.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados.',
            'protorax' => 'Pronoto cordiforme (en forma de corazón) con márgenes laterales reflexados.',
            'patas' => 'Tres pares de patas largas y delgadas adaptadas para correr rápidamente.',
            'imagenes' => [
                [
                    'archivo' => 'Carabus_violaceus_torax.jpg',
                    'descripcion' => 'Pronoto en forma de corazón característico.',
                    'detalle_extendido' => 'El protórax tiene forma de corazón (cordiforme) con los márgenes laterales levantados (reflexados). Esta forma característica ayuda en la identificación de la especie. Las patas son largas, delgadas y adaptadas para correr rápidamente sobre el suelo. Los fémures son robustos y las tibias tienen espinas para mejorar la tracción.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Ocho segmentos completamente cubiertos por los élitros.',
            'apendices' => 'Glándulas defensivas que producen ácidos orgánicos.',
            'imagenes' => [
                [
                    'archivo' => 'Carabus_violaceus_abdomen.jpg',
                    'descripcion' => 'Estructura corporal completa mostrando la cobertura elitral.',
                    'detalle_extendido' => 'El abdomen está completamente cubierto y protegido por los élitros fusionados. Posee glándulas defensivas en el extremo abdominal que pueden producir y expulsar ácidos orgánicos como mecanismo de defensa contra depredadores. Los segmentos abdominales están fuertemente esclerotizados.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Alas posteriores ausentes o reducidas (especie áptera).',
            'tipo' => 'Élitros fusionados, convexos, de color negro con reflejos violáceos metálicos.',
            'vuelo' => 'No voladores, élitros fusionados imposibilitan el vuelo.',
            'imagenes' => [
                [
                    'archivo' => 'Carabus_violaceus_alas.jpg',
                    'descripcion' => 'Élitros fusionados mostrando el color metálico.',
                    'detalle_extendido' => 'Los élitros están completamente fusionados a lo largo de la sutura, formando una cubierta rígida que protege el abdomen pero imposibilita el vuelo. Presentan un color negro base con intensos reflejos metálicos violáceos, azules o verdosos según la incidencia de la luz. La superficie elitral está finamente estriada con hileras de puntuaciones que siguen un patrón característico.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa)',
            'duracion_total' => '1 a 2 años',
            'habitos_alimenticios' => 'Depredador terrestre de hábitos nocturnos',
            'etapas' => [
                'huevo' => [
                    'duracion' => 'Semanas',
                    'descripcion' => 'Huevos depositados individualmente en el suelo.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Suelo húmedo'
                ],
                'larva' => [
                    'duracion' => 'Meses (3 estadios)',
                    'descripcion' => 'Larva elongada, con mandíbulas fuertes. Depredadora activa de otros insectos y babosas en el suelo.',
                    'alimentacion' => 'Pequeños invertebrados (depredadora)',
                    'habitat' => 'Suelo, hojarasca y refugios oscuros'
                ],
                'pupa' => [
                    'duracion' => 'Semanas',
                    'descripcion' => 'Pupación en una cámara en el suelo.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Suelo'
                ],
                'adulto' => [
                    'duracion' => 'Meses a años (puede invernar)',
                    'descripcion' => 'Adulto no volador, corredor rápido, activo en la noche. Valioso control biológico.',
                    'alimentacion' => 'Babosas, caracoles, orugas y otros insectos',
                    'habitat' => 'Hojarasca, bajo piedras y troncos'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Manejo del suelo para promover la deposición de huevos.'
                ],
                'larva' => [
                    'C' => '',
                    'Q' => '',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Evitar labranza profunda. Proporcionar cobertura vegetal y refugios.'
                ],
                'pupa' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Conservar la estructura del suelo.'
                ],
                'adulto' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Fomentar la presencia de carábidos como control biológico natural de plagas.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 5. Lucanus cervus (Ciervo volante)
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Coleoptera',
        'slug' => 'Lucanus_cervus',
        'nombre_cientifico' => 'Lucanus cervus',
        'fecha' => '07-08-2021',
        'nombre_comun' => 'Ciervo volante',
        'orden' => 'Coleoptera',
        'familia' => 'Lucanidae',
        'descripcion' => 'El ciervo volante es el escarabajo más grande de Europa, con machos que pueden alcanzar hasta 9 cm de longitud incluyendo sus impresionantes mandíbulas en forma de cuerna que recuerdan a las de un ciervo. Estas prominentes estructuras, aunque aparentemente formidables, son utilizadas principalmente en combates ritualizados entre machos durante la época de apareamiento, donde intentan voltear a sus oponentes sin causarles daño grave. Los adultos se alimentan de savia que fluye de heridas en árboles, especialmente robles, y de frutas muy maduras. Las larvas, que pueden tardar entre 3 y 5 años en desarrollarse, se alimentan de madera en descomposición en el interior de troncos y tocones, preferentemente de árboles caducifolios. Esta especie está protegida en muchos países europeos debido al declive de sus poblaciones, principalmente por la pérdida de hábitat y la remoción de madera muerta necesaria para el desarrollo larvario.',
        'habitat' => 'Bosques y áreas abiertas',
        'imagen' => 'Lucanus cervus.jpg',
        'distribucion' => 'Europa',
        'dieta' => 'Savias de árboles y frutas en descomposición',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Lucanus',
        'especie' => 'L. cervus',
        'galeria_imagenes' => [
            [
                'archivo' => 'Lucanus cervus.jpg',
                'descripcion' => 'Macho adulto del ciervo volante mostrando sus grandes mandíbulas.',
                'categoria' => 'adulto'
            ],
            [
                'archivo' => 'Lucanus_cervus_larva.jpg',
                'descripcion' => 'Larva del ciervo volante alimentándose de madera muerta.',
                'categoria' => 'larva'
            ],
            [
                'archivo' => 'Lucanus_cervus_pupa_camara.jpg',
                'descripcion' => 'Cámara pupal del ciervo volante en la madera.',
                'categoria' => 'pupa'
            ],
        ],
         'morfologia' => [
        'cabeza' => [
            'estructura' => 'Grande, ancha, con desarrollo alométrico marcado en machos.',
            'caracteristicas' => 'Ojos compuestos negros. Antenas geniculadas (en codo) con maza laminar. En machos, mandíbulas enormes en forma de cuerna.',
            'piezas_bucales' => 'Tipo masticador, mandíbulas desarrolladas para combate ritual (machos) y alimentación (ambos sexos).',
            'imagenes' => [
                [
                    'archivo' => 'Lucanus_cervus_cabeza.jpg',
                    'descripcion' => 'Cabeza del macho mostrando las grandes mandíbulas.',
                    'detalle_extendido' => 'La cabeza muestra un marcado dimorfismo sexual. En los machos, es muy ancha y porta mandíbulas enormes en forma de cuerna con dientes internos, utilizadas principalmente en combates rituales. En las hembras, las mandíbulas son mucho más pequeñas pero más fuertes, adaptadas para morder madera. Las antenas son geniculadas y terminan en una maza laminar de 4-6 segmentos.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax bien diferenciados.',
            'protorax' => 'Pronoto negro, trapezoidal, más ancho que largo.',
            'patas' => 'Patas largas y robustas con tarsos de 5 segmentos, adaptadas para caminar y agarrarse a árboles.',
            'imagenes' => [
                [
                    'archivo' => 'Lucanus_cervus_torax.jpg',
                    'descripcion' => 'Torax mostrando la estructura robusta.',
                    'detalle_extendido' => 'El protórax es negro y de forma trapezoidal, más ancho que largo. Las patas son largas, robustas y terminan en tarsos de cinco segmentos con uñas bien desarrolladas para agarrarse a la corteza de los árboles. Los fémures son particularmente fuertes en los machos para soportar el peso de las grandes mandíbulas durante los combates.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Ocho segmentos visibles ventralmente.',
            'apendices' => 'Sin estructuras especializadas visibles externamente.',
            'imagenes' => [
                [
                    'archivo' => 'Lucanus_cervus_abdomen.jpg',
                    'descripcion' => 'Abdomen visto desde abajo.',
                    'detalle_extendido' => 'El abdomen está completamente cubierto por los élitros y es de color negro. Ventralmente, los segmentos son visibles y presentan una fina pubescencia. En las hembras, el abdomen puede aparecer más abultado cuando contienen huevos desarrollados. La superficie ventral es lisa y brillante.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Dos pares: élitros anteriores y alas posteriores membranosas.',
            'tipo' => 'Élitros negros o marrón oscuro. Alas posteriores grandes y membranosas.',
            'vuelo' => 'Voladores pesados pero efectivos, el vuelo es ruidoso y poco ágil.',
            'imagenes' => [
                [
                    'archivo' => 'Lucanus_cervus_alas.jpg',
                    'descripcion' => 'Alas mostrando la estructura para vuelo pesado.',
                    'detalle_extendido' => 'Los élitros son de color negro o marrón oscuro, duros y que cubren completamente el abdomen. Tienen una textura ligeramente rugosa. Las alas posteriores son grandes, membranosas y de color marrón oscuro. El vuelo es pesado y característicamente ruidoso, con el cuerpo mantenido casi vertical durante el despegue. Los machos, debido al peso de sus mandíbulas, son voladores menos ágiles que las hembras.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa)',
            'duracion_total' => 'Larga (3 a 7 años)',
            'habitos_alimenticios' => 'Adulto: Saprófago (savia). Larva: Saproxilófaga (madera muerta)',
            'etapas' => [
                'huevo' => [
                    'duracion' => 'Semanas',
                    'descripcion' => 'Huevos puestos en el suelo cerca de madera en descomposición.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Suelo adyacente a troncos muertos'
                ],
                'larva' => [
                    'duracion' => '3 a 5 años',
                    'descripcion' => 'Larva grande, de color crema, que se alimenta exclusivamente de madera descompuesta (saproxilófaga).',
                    'alimentacion' => 'Madera podrida (detritívora)',
                    'habitat' => 'Troncos, tocones y raíces muertas'
                ],
                'pupa' => [
                    'duracion' => 'Meses',
                    'descripcion' => 'Pasa el invierno en una cámara pupal grande hecha con madera y tierra.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Madera en descomposición o suelo circundante'
                ],
                'adulto' => [
                    'duracion' => 'Semanas a meses',
                    'descripcion' => 'El macho usa sus "cuernas" en luchas rituales. Emergen en verano. Viven poco tiempo después de la reproducción.',
                    'alimentacion' => 'Savia de árboles y frutas maduras',
                    'habitat' => 'Bosques maduros, cerca de robles viejos'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Conservación de tocones y raíces muertas para proveer el sustrato para la larva.'
                ],
                'larva' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'No retirar la madera muerta del bosque. Especie protegida, no requiere control.'
                ],
                'pupa' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Conservación del hábitat de desarrollo.'
                ],
                'adulto' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Monitoreo de poblaciones. Instalación de cajas de madera podrida ("hot-spots") para la puesta.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 6. Coleoptera (Orden general)
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Coleoptera',
        'slug' => 'Coleoptera_orden',
        'nombre_cientifico' => 'Coleoptera',
        'fecha' => '04-12-2023',
        'nombre_comun' => 'Orden Coleoptera',
        'orden' => 'Coleoptera',
        'familia' => 'Varias familias (Coccinellidae, Scarabaeidae, Carabidae, etc.)',
        'descripcion' => 'Los coleópteros constituyen el orden más diverso del reino animal, con más de 400,000 especies descritas que representan aproximadamente el 40% de todos los insectos conocidos. Se caracterizan por sus alas anteriores modificadas en élitros endurecidos que protegen las alas membranosas posteriores y el abdomen. Presentan una extraordinaria variedad de formas, tamaños, colores y adaptaciones ecológicas, ocupando prácticamente todos los hábitats terrestres y de agua dulce. Su éxito evolutivo se atribuye a la protección que ofrecen los élitros, su diversidad alimentaria (fitófagos, depredadores, saprófagos, etc.) y su desarrollo holometábolo. Muchas especies son benéficas como polinizadores, controladores biológicos de plagas y recicladores de materia orgánica, mientras que otras pueden ser plagas agrícolas importantes. Su impacto en los ecosistemas y actividades humanas los convierte en uno de los grupos de insectos más estudiados y relevantes.',
        'habitat' => 'Diversos hábitats terrestres y de agua dulce en todo el mundo',
        'imagen' => 'Coleoptera.jpg',
        'distribucion' => 'Distribución mundial',
        'dieta' => 'Extremadamente variada según la especie: plantas, insectos, carroña, hongos, etc.',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Varios géneros',
        'especie' => 'Múltiples especies',
        'galeria_imagenes' => [
            [
                'archivo' => 'Coleoptera.jpg',
                'descripcion' => 'Ejemplares representativos del orden Coleoptera (escarabajos).',
                'categoria' => 'metamorfosis'
            ]
        ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa) - General',
            'duracion_total' => 'Extremadamente variable (desde semanas hasta años)',
            'habitos_alimenticios' => 'Gran diversidad: fitófagos, depredadores, saprófagos, parásitos',
            'etapas' => [
                'huevo' => [
                    'duracion' => 'Variable',
                    'descripcion' => 'Generalmente puestos en el sustrato de alimentación de la larva.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Suelo, plantas, madera o agua'
                ],
                'larva' => [
                    'duracion' => 'La fase más larga, variable',
                    'descripcion' => 'Muy diversa morfológicamente (eruciforme, elateriforme, escarabeiforme, etc.). Etapa de crecimiento.',
                    'alimentacion' => 'Variada (depende del nicho ecológico de la especie)',
                    'habitat' => 'Suelo, interior de plantas/madera, agua'
                ],
                'pupa' => [
                    'duracion' => 'Variable',
                    'descripcion' => 'Etapa de reorganización interna. Generalmente adéctica (apéndices libres) y exarata (apéndices no pegados al cuerpo).',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Suelo o dentro de cámaras construidas'
                ],
                'adulto' => [
                    'duracion' => 'Variable',
                    'descripcion' => 'Con élitros protectores, reproducción y dispersión. Ocupa el nicho aéreo/terrestre.',
                    'alimentacion' => 'A menudo diferente a la de la larva',
                    'habitat' => 'Superficie terrestre y plantas'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Manejo del suelo o sustrato para evitar/reducir la puesta.'
                ],
                'larva' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Control biológico (entomopatógenos), cultural y químico selectivo para especies plaga.'
                ],
                'pupa' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => '',
                    'descripcion' => 'Etapa de transición, difícil de controlar directamente.'
                ],
                'adulto' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Trampeo, vigilancia y control integrado para evitar daños y reproducción.'
                ]
            ]
        ]
                ],
    // ... más especies de lepidoptera
    'lepidoptera' => [
       // ----------------------------------------------------------------------
    // 1. Danaus plexippus (Mariposa monarca)
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Lepidoptera',
        'slug' => 'Danaus_plexippus',
        'nombre_cientifico' => 'Danaus plexippus',
        'fecha' => '09-25-2022',
        'nombre_comun' => 'Mariposa monarca',
        'orden' => 'Lepidoptera',
        'familia' => 'Nymphalidae',
        'descripcion' => 'La mariposa monarca es famosa por realizar una de las migraciones más espectaculares del reino animal, recorriendo hasta 4,000 kilómetros desde Canadá y Estados Unidos hasta los bosques de oyamel en México. Esta generación "Matusalén", que emerge a finales de verano, vive hasta 8 meses - mucho más que las 2-6 semanas de las generaciones anteriores - permitiéndoles completar el viaje de ida y vuelta. Sus alas naranjas intensas con venas negras y bordes blancos puntuados actúan como advertencia a los depredadores, ya que las orugas acumulan cardenólidos tóxicos de las plantas de algodoncillo que consumen. Durante la hibernación en México, millones de mariposas se agrupan en racimos que cubren completamente los árboles, creando uno de los espectáculos naturales más impresionantes del mundo. Su población enfrenta graves amenazas por la pérdida de algodoncillo, cambio climático y deforestación en sus sitios de hibernación.',
        'habitat' => 'Praderas, jardines y áreas abiertas',
        'imagen' => 'Danaus plexippus.jpeg',
        'distribucion' => 'América del Norte, Central y del Sur',
        'dieta' => 'Néctar de flores; las orugas se alimentan de algodoncillo (Asclepias)',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Danaus',
        'especie' => 'D. plexippus',
        'galeria_imagenes' => [
            [
                'archivo' => 'Danaus plexippus.jpeg',
                'descripcion' => 'Adulto de la mariposa monarca en vuelo.',
                'categoria' => 'adulto'
            ],
            [
                'archivo' => 'Danaus_plexippus_oruga.jpg',
                'descripcion' => 'Oruga de la monarca alimentándose de algodoncillo.',
                'categoria' => 'oruga'
            ],
            [
                'archivo' => 'Danaus_plexippus_crisalida.jpg',
                'descripcion' => 'Crisálida (pupa) de la mariposa monarca.',
                'categoria' => 'pupa'
            ],
        ],
          'morfologia' => [
        'cabeza' => [
            'estructura' => 'Pequeña, redondeada, con ojos compuestos prominentes.',
            'caracteristicas' => 'Ojos compuestos grandes. Antenas clavadas con maza alargada. Palpos labiales bien desarrollados.',
            'piezas_bucales' => 'Espiritrompa larga y enrollada para succionar néctar.',
            'imagenes' => [
                [
                    'archivo' => 'Danaus_plexippus_cabeza.jpg',
                    'descripcion' => 'Cabeza mostrando la espiritrompa enrollada.',
                    'detalle_extendido' => 'La cabeza es pequeña y redondeada con grandes ojos compuestos que proporcionan visión amplia. Las antenas son clavadas, terminando en una maza alargada característica de la familia Nymphalidae. La espiritrompa está especializada para acceder al néctar de flores profundas y puede extenderse considerablemente cuando está en uso.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados.',
            'protorax' => 'Robusto, con patas anteriores reducidas (característica de Nymphalidae).',
            'patas' => 'Seis patas, pero las anteriores están reducidas y no funcionales para caminar.',
            'imagenes' => [
                [
                    'archivo' => 'Danaus_plexippus_torax.jpg',
                    'descripcion' => 'Torax mostrando las patas reducidas características.',
                    'detalle_extendido' => 'El torax está fuertemente musculado para el vuelo. Las patas anteriores están notablemente reducidas en tamaño y no se usan para caminar, una adaptación común en la familia Nymphalidae. Las patas medias y posteriores son funcionales y terminan en garras tarsales para agarrarse a las superficies.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Diez segmentos, delgado y alargado.',
            'apendices' => 'Órganos reproductores en el extremo abdominal.',
            'imagenes' => [
                [
                    'archivo' => 'Danaus_plexippus_abdomen.jpg',
                    'descripcion' => 'Abdomen delgado visto ventralmente.',
                    'detalle_extendido' => 'El abdomen es delgado y alargado, conteniendo los sistemas digestivo, circulatorio y reproductor. En los machos, posee estructuras especializadas para la transferencia de espermatóforos. El abdomen está cubierto de escamas finas que complementan el patrón de coloración de las alas.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Dos pares de alas membranosas.',
            'tipo' => 'Alas anteriores triangulares, posteriores redondeadas. Venación conspicua.',
            'vuelo' => 'Excelentes voladores de larga distancia, vuelo planeado y batido.',
            'imagenes' => [
                [
                    'archivo' => 'Danaus_plexippus_alas.jpg',
                    'descripcion' => 'Alas mostrando el patrón naranja y negro característico.',
                    'detalle_extendido' => 'Las alas presentan el característico patrón naranja brillante con venas negras marcadas y bordes negros con puntos blancos. Este patrón aposemático advierte a los depredadores sobre su toxicidad adquirida de las plantas de algodoncillo. Las alas están cubiertas de escamas superpuestas que crean los colores y patrones. La venación es bien visible y sirve para identificar la especie.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa)',
            'duracion_total' => 'Variable: 4-8 semanas (generaciones de verano); 8 meses (generación migratoria)',
            'habitos_alimenticios' => 'Adulto: Nectarívoro. Oruga: Fitófago (especializado en Asclepias)',
            'etapas' => [
                'huevo' => [
                    'duracion' => '3 a 8 días',
                    'descripcion' => 'Huevos pequeños, cónicos, puestos individualmente en el envés de las hojas de algodoncillo.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Hojas de la planta hospedadora (Asclepias)'
                ],
                'oruga' => [
                    'duracion' => '2 a 4 semanas (5 estadios)',
                    'descripcion' => 'Oruga rayada de color negro, amarillo y blanco, que consume grandes cantidades de algodoncillo, acumulando toxinas.',
                    'alimentacion' => 'Hojas de algodoncillo (Asclepias spp.)',
                    'habitat' => 'Plantas de algodoncillo'
                ],
                'pupa' => [
                    'duracion' => '8 a 15 días',
                    'descripcion' => 'Crisálida verde pálida con puntos dorados, suspendida de una almohadilla de seda.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Tallos, ramas u objetos cercanos a la planta hospedadora'
                ],
                'adulto' => [
                    'duracion' => '2-6 semanas (generaciones estivales); hasta 8 meses (migratoria)',
                    'descripcion' => 'Mariposa migratoria. La generación migratoria ("Matusalén") no madura sexualmente hasta llegar a los sitios de hibernación.',
                    'alimentacion' => 'Néctar de una variedad de flores',
                    'habitat' => 'Praderas, campos y bosques (durante la migración)'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Conservación y plantación de algodoncillo (la única planta hospedadora).'
                ],
                'oruga' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Evitar el uso de pesticidas en algodoncillo y plantas cercanas. Monitoreo de depredadores.'
                ],
                'pupa' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Protección de los sitios de pupación y migración.'
                ],
                'adulto' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Plantación de flores ricas en néctar para proporcionar combustible para la migración.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 2. Papilio machaon (Mariposa macaón)
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Lepidoptera',
        'slug' => 'Papilio_machaon',
        'nombre_cientifico' => 'Papilio machaon',
        'fecha' => '07-18-2023',
        'nombre_comun' => 'Mariposa macaón',
        'orden' => 'Lepidoptera',
        'familia' => 'Papilionidae',
        'descripcion' => 'La mariposa macaón es una de las especies más emblemáticas y bellas de Europa, reconocible por su gran tamaño (hasta 8 cm de envergadura) y sus alas amarillas con marcadas venas negras y bandas azules. Presenta una distintiva cola en cada ala posterior, característica de la familia Papilionidae. Las orugas son igualmente llamativas, de color verde con bandas negras y puntos naranjas, y desarrollan un osmeterio naranja - un órgano bifurcado que despliegan cuando se sienten amenazadas, liberando un olor desagradable para ahuyentar depredadores. Esta especie completa dos o tres generaciones anuales, con los adultos volando desde primavera hasta otoño. Las orugas se alimentan exclusivamente de plantas umbelíferas como la zanahoria silvestre, el hinojo y la ruda. Su vuelo potente y elegante la convierte en una de las mariposas más apreciadas por observadores y fotógrafos.',
        'habitat' => 'Praderas, jardines y áreas montañosas',
        'imagen' => 'Papilio machaon.jpg',
        'distribucion' => 'Europa, Asia y América del Norte',
        'dieta' => 'Néctar de flores; las orugas se alimentan de plantas umbelíferas (Apiaceae)',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Papilio',
        'especie' => 'P. machaon',
        'galeria_imagenes' => [
            [
                'archivo' => 'Papilio machaon.jpg',
                'descripcion' => 'Adulto de la mariposa macaón con cola distintiva.',
                'categoria' => 'adulto'
            ],
            [
                'archivo' => 'Papilio_machaon_oruga.jpg',
                'descripcion' => 'Oruga de macaón mostrando sus colores aposemáticos.',
                'categoria' => 'oruga'
            ],
            [
                'archivo' => 'Papilio_machaon_crisalida.jpg',
                'descripcion' => 'Crisálida de macaón, a menudo de color verde o marrón para camuflarse.',
                'categoria' => 'pupa'
            ],
        ],
         'morfologia' => [
        'cabeza' => [
            'estructura' => 'Grande, con ojos prominentes y palpos desarrollados.',
            'caracteristicas' => 'Ojos compuestos grandes. Antenas clavadas. Palpos labiales prominentes.',
            'piezas_bucales' => 'Espiritrompa larga y funcional para néctar de flores profundas.',
            'imagenes' => [
                [
                    'archivo' => 'Papilio_machaon_cabeza.jpg',
                    'descripcion' => 'Cabeza mostrando los palpos labiales desarrollados.',
                    'detalle_extendido' => 'La cabeza es relativamente grande con ojos compuestos bien desarrollados. Los palpos labiales son prominentes y se proyectan hacia adelante. Las antenas son clavadas, terminando en una maza definida. La espiritrompa es larga y especializada para acceder al néctar de flores con corolas profundas como las de las plantas umbelíferas.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados.',
            'protorax' => 'Robusto, con todas las patas completamente desarrolladas.',
            'patas' => 'Seis patas completamente funcionales para caminar y posarse.',
            'imagenes' => [
                [
                    'archivo' => 'Papilio_machaon_torax.jpg',
                    'descripcion' => 'Torax mostrando las patas completamente desarrolladas.',
                    'detalle_extendido' => 'El torax es robusto y está fuertemente musculado para el vuelo potente característico de esta especie. A diferencia de las Nymphalidae, todas las patas están completamente desarrolladas y son funcionales para caminar. Las patas terminan en garras tarsales bien desarrolladas para agarrarse firmemente a las superficies.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Diez segmentos, esbelto y aerodinámico.',
            'apendices' => 'Colas en las alas posteriores (no abdominales).',
            'imagenes' => [
                [
                    'archivo' => 'Papilio_machaon_abdomen.jpg',
                    'descripcion' => 'Abdomen esbelto visto lateralmente.',
                    'detalle_extendido' => 'El abdomen es esbelto y aerodinámico, contribuyendo a la eficiencia del vuelo. Está segmentado y cubierto de escamas que complementan el color de las alas. En los machos, presenta estructuras especializadas para la cópula. El abdomen contiene los órganos vitales y es más delgado que en muchas otras mariposas de tamaño similar.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Dos pares de alas con extensiones caudales.',
            'tipo' => 'Alas anteriores triangulares, posteriores con colas características.',
            'vuelo' => 'Vuelo potente, rápido y ágil, con planeos intermitentes.',
            'imagenes' => [
                [
                    'archivo' => 'Papilio_machaon_alas.jpg',
                    'descripcion' => 'Alas mostrando las colas características y venación.',
                    'detalle_extendido' => 'Las alas presentan el característico patrón amarillo con venas negras marcadas y bandas azules en las alas posteriores. Las alas posteriores tienen extensiones caudales (colas) que son una adaptación para confundir a los depredadores. La venación es conspicua y las alas están cubiertas de escamas que crean los patrones de color. El diseño incluye ocelos en la base de las colas que imitan ojos para disuadir ataques.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa)',
            'duracion_total' => '2-3 generaciones al año. Hiberna como pupa.',
            'habitos_alimenticios' => 'Adulto: Nectarívoro. Oruga: Fitófago (Umbelliferae)',
            'etapas' => [
                'huevo' => [
                    'duracion' => '5 a 10 días',
                    'descripcion' => 'Huevos esféricos, de color amarillo pálido, puestos individualmente en las plantas hospedadoras.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Plantas umbelíferas (hinojo, zanahoria silvestre)'
                ],
                'oruga' => [
                    'duracion' => '3 a 6 semanas',
                    'descripcion' => 'Oruga verde y negra con puntos naranjas. Posee un osmeterio defensivo.',
                    'alimentacion' => 'Hojas de plantas umbelíferas',
                    'habitat' => 'Sobre las plantas hospedadoras'
                ],
                'pupa' => [
                    'duracion' => '2 semanas (verano); Varios meses (hibernación)',
                    'descripcion' => 'Crisálida unida a un tallo o roca por un cinturón de seda. La última generación hiberna en esta etapa.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Vegetación o estructuras circundantes'
                ],
                'adulto' => [
                    'duracion' => '2 a 3 semanas',
                    'descripcion' => 'Mariposa grande, vuela potentemente, polinizador.',
                    'alimentacion' => 'Néctar de flores',
                    'habitat' => 'Praderas soleadas y jardines'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Dejar crecer plantas umbelíferas silvestres en jardines y bordes de campo.'
                ],
                'oruga' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Tolerancia en cultivos donde se alimenta de plantas silvestres. Evitar pesticidas.'
                ],
                'pupa' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Conservar la vegetación seca y tallos donde se adhieren las crisálidas para hibernar.'
                ],
                'adulto' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Proporcionar una variedad de flores ricas en néctar.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 3. Bombyx mori (Gusano de seda)
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Lepidoptera',
        'slug' => 'Bombyx_mori',
        'nombre_cientifico' => 'Bombyx mori',
        'fecha' => '05-30-2021',
        'nombre_comun' => 'Gusano de seda',
        'orden' => 'Lepidoptera',
        'familia' => 'Bombycidae',
        'descripcion' => 'El gusano de seda es una polilla completamente domesticada que ha perdido la capacidad de volar y sobrevivir en la naturaleza después de más de 5,000 años de crianza selectiva para la producción de seda. Cada oruga produce un capullo de seda compuesto por un solo filamento continuo que puede alcanzar hasta 1,500 metros de longitud. El proceso de sericicultura implica criar las orugas en condiciones controladas, alimentándolas exclusivamente con hojas frescas de morera, que contienen los nutrientes necesarios para producir seda de alta calidad. Antes de que la polilla emerja y rompa el filamento, los capullos se sumergen en agua caliente para suavizar la sericina (proteína que cementa el filamento) y poder desenrollar la seda. Esta especie ha sido fundamental en el desarrollo de la Ruta de la Seda y continúa siendo económicamente importante, aunque enfrenta competencia de fibras sintéticas. Los adultos no se alimentan y viven solo para reproducirse.',
        'habitat' => 'Cultivos de morera y entornos controlados (sericicultura)',
        'imagen' => 'Bombyx mori.jpg',
        'distribucion' => 'Originario de China, ahora cultivado mundialmente',
        'dieta' => 'Hojas de morera',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Bombyx',
        'especie' => 'B. mori',
        'galeria_imagenes' => [
            [
                'archivo' => 'Bombyx mori.jpg',
                'descripcion' => 'Oruga (gusano de seda) alimentándose de hoja de morera.',
                'categoria' => 'oruga'
            ],
            [
                'archivo' => 'Bombyx_mori_capullo.jpg',
                'descripcion' => 'Capullos de seda antes de ser procesados.',
                'categoria' => 'pupa'
            ],
            [
                'archivo' => 'Bombyx_mori_adulto.jpg',
                'descripcion' => 'Polilla adulta (doméstica, no vuela).',
                'categoria' => 'adulto'
            ],
        ],
         'morfologia' => [
        'cabeza' => [
            'estructura' => 'Pequeña, con piezas bucales reducidas en adultos.',
            'caracteristicas' => 'Ojos compuestos pequeños. Antenas bipectinadas en machos, más simples en hembras.',
            'piezas_bucales' => 'Atrofiadas en adultos (no funcionales). Oruga con mandíbulas masticadoras.',
            'imagenes' => [
                [
                    'archivo' => 'Bombyx_mori_cabeza.jpg',
                    'descripcion' => 'Cabeza del adulto mostrando piezas bucales atrofiadas.',
                    'detalle_extendido' => 'En los adultos, las piezas bucales están completamente atrofiadas debido a la domesticación, ya que no se alimentan durante su corta vida adulta. Los machos tienen antenas notablemente bipectinadas (en forma de peine) para detectar feromonas, mientras que las hembras tienen antenas más simples. Los ojos compuestos son relativamente pequeños.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados.',
            'protorax' => 'Cubierto de densa pubescencia sedosa.',
            'patas' => 'Patas cortas y poco funcionales para caminar en adultos.',
            'imagenes' => [
                [
                    'archivo' => 'Bombyx_mori_torax.jpg',
                    'descripcion' => 'Torax cubierto de pubescencia sedosa.',
                    'detalle_extendido' => 'El torax está cubierto de una densa pubescencia de color blanco cremoso. Las alas son relativamente pequeñas en proporción al cuerpo y los adultos domesticados han perdido la capacidad de vuelo. Las patas son cortas y poco funcionales para la locomoción, reflejando su estilo de vida completamente domesticado.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Diez segmentos, grueso y pesado.',
            'apendices' => 'Glándulas sederas bien desarrolladas en orugas.',
            'imagenes' => [
                [
                    'archivo' => 'Bombyx_mori_abdomen.jpg',
                    'descripcion' => 'Abdomen grueso de la polilla adulta.',
                    'detalle_extendido' => 'El abdomen es grueso y pesado, especialmente en las hembras que pueden contener cientos de huevos. En las orugas, el abdomen contiene las glándulas sederas especializadas que producen la proteína de seda. Los adultos tienen el abdomen cubierto de escamas sedosas que les dan su apariencia aterciopelada característica.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Dos pares de alas, pero no funcionales para vuelo sostenido.',
            'tipo' => 'Alas triangulares, cubiertas de escamas sedosas.',
            'vuelo' => 'No voladores funcionales debido a la domesticación.',
            'imagenes' => [
                [
                    'archivo' => 'Bombyx_mori_alas.jpg',
                    'descripcion' => 'Alas de la polilla domesticada.',
                    'detalle_extendido' => 'Las alas son de color blanco cremoso con bandas tenues más oscuras. Están cubiertas de una densa capa de escamas sedosas que les dan una apariencia aterciopelada. Aunque anatómicamente presentes, las alas no son funcionales para el vuelo sostenido debido a miles de años de selección artificial. Los machos pueden realizar vuelos cortos y torpes, pero las hembras son esencialmente incapaces de volar.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa)',
            'duracion_total' => 'Aproximadamente 45-60 días en sericicultura',
            'habitos_alimenticios' => 'Adulto: No se alimenta. Oruga: Fitófago (especializado en Morus alba)',
            'etapas' => [
                'huevo' => [
                    'duracion' => '10 días',
                    'descripcion' => 'Pequeños huevos puestos en láminas, mantenidos en condiciones de incubación controlada.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Entornos de cría controlada'
                ],
                'oruga' => [
                    'duracion' => '25 a 30 días (5 estadios)',
                    'descripcion' => 'La fase de gusano de seda. Crece enormemente, muda varias veces y consume hojas de morera.',
                    'alimentacion' => 'Exclusivamente hojas frescas de morera (Morus alba)',
                    'habitat' => 'Mesas o bandejas de sericicultura'
                ],
                'pupa' => [
                    'duracion' => '10 a 15 días',
                    'descripcion' => 'La oruga se envuelve completamente en un capullo de seda. El objetivo de la sericicultura es evitar que el adulto rompa este capullo.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Dentro del capullo de seda'
                ],
                'adulto' => [
                    'duracion' => '5 a 10 días',
                    'descripcion' => 'Polilla doméstica que no vuela ni come. Su único propósito es la reproducción.',
                    'alimentacion' => 'No se alimenta (vestigial)',
                    'habitat' => 'Entornos de cría controlada'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Manejo de la humedad y temperatura para la eclosión sincronizada.'
                ],
                'oruga' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Suministro constante de hojas frescas y limpieza rigurosa para evitar enfermedades (Muscardina).'
                ],
                'pupa' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Cosecha de capullos a tiempo para el procesamiento de la seda.'
                ],
                'adulto' => [
                    'C' => '',
                    'Q' => 'X',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Uso de feromonas para garantizar la reproducción y obtención de nuevas puestas de huevos.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 4. Acherontia atropos (Esfinge de la calavera)
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Lepidoptera',
        'slug' => 'Acherontia_atropos',
        'nombre_cientifico' => 'Acherontia atropos',
        'fecha' => '08-12-2022',
        'nombre_comun' => 'Esfinge de la calavera',
        'orden' => 'Lepidoptera',
        'familia' => 'Sphingidae',
        'descripcion' => 'La esfinge de la calavera es una polilla nocturna que debe su nombre común a la marcada figura que recuerda una calavera humana en su tórax. Esta especie, la más grande de Europa con hasta 13 cm de envergadura, posee varias adaptaciones extraordinarias: puede emitir un chirrido agudo cuando se siente amenazada, producido por la expulsión de aire a través de su probóscide; y es una de las pocas polillas capaz de robar miel de colmenas, siendo inmune al veneno de las abejas. Las orugas, que pueden alcanzar 15 cm de longitud, presentan una variabilidad cromática notable (verde, amarillo o marrón) y un cuerno característico en el extremo abdominal. Su ciclo de vida incluye migraciones estacionales desde África hacia Europa, donde las polillas son atraídas por la luz artificial. A lo largo de la historia, ha sido asociada con supersticiones y malos augurios debido a su apariencia distintiva.',
        'habitat' => 'Bosques y áreas abiertas (Migratoria)',
        'imagen' => 'Acherontia atropos.jpg',
        'distribucion' => 'África, Europa y Asia',
        'dieta' => 'Néctar y miel; las orugas se alimentan de plantas solanáceas',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Acherontia',
        'especie' => 'A. atropos',
        'galeria_imagenes' => [
            [
                'archivo' => 'Acherontia atropos.jpg',
                'descripcion' => 'Polilla adulta mostrando la marca de la calavera en el tórax.',
                'categoria' => 'adulto'
            ],
            [
                'archivo' => 'Acherontia_atropos_oruga.jpg',
                'descripcion' => 'Oruga grande de la esfinge de la calavera.',
                'categoria' => 'oruga'
            ],
        ],
         'morfologia' => [
        'cabeza' => [
            'estructura' => 'Grande, con marcado patrón de "calavera" en el tórax.',
            'caracteristicas' => 'Ojos compuestos grandes. Antenas gradualmente engrosadas. Probóscide corta y robusta.',
            'piezas_bucales' => 'Espiritrompa corta y fuerte para perforar panales de miel.',
            'imagenes' => [
                [
                    'archivo' => 'Acherontia_atropos_cabeza.jpg',
                    'descripcion' => 'Cabeza mostrando la probóscide robusta.',
                    'detalle_extendido' => 'La cabeza es grande con ojos compuestos prominentes. La espiritrompa es notablemente corta y robusta comparada con otras esfinges, adaptada para perforar panales de miel en lugar de acceder a néctar de flores profundas. Las antenas son gradualmente engrosadas hacia el ápice. El tórax presenta el característico patrón que recuerda una calavera humana.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados.',
            'protorax' => 'Masivo, con el patrón de "calavera" distintivo.',
            'patas' => 'Patas robustas con espinas, adaptadas para agarrarse.',
            'imagenes' => [
                [
                    'archivo' => 'Acherontia_atropos_torax.jpg',
                    'descripcion' => 'Torax mostrando el patrón de calavera característico.',
                    'detalle_extendido' => 'El torax es masivo y poderosamente musculado para el vuelo rápido y sostenido. Presenta el famoso patrón que se asemeja a una calavera humana, con áreas oscuras que simulan los ojos y la nariz. Esta marca distintiva ha generado numerosas supersticiones a lo largo de la historia. Las patas son robustas y están armadas con espinas para agarrarse firmemente.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Diez segmentos, grueso y cónico.',
            'apendices' => 'Órganos sonoros para producir chirridos.',
            'imagenes' => [
                [
                    'archivo' => 'Acherontia_atropos_abdomen.jpg',
                    'descripcion' => 'Abdomen grueso con bandas características.',
                    'detalle_extendido' => 'El abdomen es grueso y de forma cónica, con bandas alternas de color amarillo y negro o marrón. Contiene órganos especializados que permiten a la polilla producir chirridos audibles cuando se siente amenazada, mediante la expulsión de aire a través de la espiritrompa. Esta defensa acústica es única entre las polillas europeas.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Dos pares de alas, las anteriores mucho más largas.',
            'tipo' => 'Alas anteriores triangulares y puntiagudas, posteriores más cortas.',
            'vuelo' => 'Vuelo rápido y potente, similar a un colibrí.',
            'imagenes' => [
                [
                    'archivo' => 'Acherontia_atropos_alas.jpg',
                    'descripcion' => 'Alas mostrando el patrón críptico.',
                    'detalle_extendido' => 'Las alas anteriores son largas, triangulares y puntiagudas, con un patrón complejo de marrones, grises y negros que proporciona excelente camuflaje cuando la polilla descansa en cortezas de árboles. Las alas posteriores son más cortas y de color amarillo brillante con bandas negras, solo visibles durante el vuelo. La venación es conspicua y las alas están adaptadas para vuelos rápidos y maniobrables.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa)',
            'duracion_total' => 'Rápida, con migraciones estacionales.',
            'habitos_alimenticios' => 'Adulto: Nectarívoro/Ladrón de miel. Oruga: Fitófago (Solanáceas)',
            'etapas' => [
                'huevo' => [
                    'duracion' => 'Pocos días',
                    'descripcion' => 'Huevos pequeños, verdes, puestos individualmente en el envés de las hojas de plantas hospedadoras.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Hojas de solanáceas (ej. patata, tomate)'
                ],
                'oruga' => [
                    'duracion' => '4 a 6 semanas',
                    'descripcion' => 'Oruga muy grande y robusta, con un "cuerno" anal. Se entierra para pupar.',
                    'alimentacion' => 'Hojas de Solanáceas (puede considerarse plaga en cultivos de patata)',
                    'habitat' => 'Plantas hospedadoras'
                ],
                'pupa' => [
                    'duracion' => 'Semanas (verano); meses (hibernación en áreas templadas)',
                    'descripcion' => 'Pupa subterránea de color marrón oscuro, dentro de una cámara hecha de tierra.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Enterrada a 15-40 cm de profundidad'
                ],
                'adulto' => [
                    'duracion' => 'Meses',
                    'descripcion' => 'Polilla nocturna, voladora fuerte, capaz de migrar grandes distancias. Emite chillidos.',
                    'alimentacion' => 'Néctar, savia de árboles y miel (entrando a colmenas)',
                    'habitat' => 'Activa de noche, atraída por la luz'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => '',
                    'Q' => 'X',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Inspección manual en cultivos susceptibles para identificar los huevos.'
                ],
                'oruga' => [
                    'C' => '',
                    'Q' => 'X',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Control manual o uso selectivo de Bacillus thuringiensis (Bt) si se convierte en plaga en cultivos.'
                ],
                'pupa' => [
                    'C' => '',
                    'Q' => 'X',
                    'B' => '',
                    'M' => '',
                    'descripcion' => 'Labranza superficial para exponer las pupas a depredadores y al clima.'
                ],
                'adulto' => [
                    'C' => '',
                    'Q' => 'X',
                    'B' => '',
                    'M' => '',
                    'descripcion' => 'Monitoreo con trampas de luz. Proteger colmenas del robo de miel.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 5. Vanessa atalanta (Mariposa atalanta)
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Lepidoptera',
        'slug' => 'Vanessa_atalanta',
        'nombre_cientifico' => 'Vanessa atalanta',
        'fecha' => '06-08-2023',
        'nombre_comun' => 'Mariposa atalanta',
        'orden' => 'Lepidoptera',
        'familia' => 'Nymphalidae',
        'descripcion' => 'La mariposa atalanta, también conocida como "almirante rojo", es una especie migratoria que combina una belleza llamativa con una notable resistencia. Sus alas aterciopeladas presentan un fondo negro intenso atravesado por una banda roja brillante en las alas anteriores y un borde rojo en las posteriores, con puntos blancos estratégicamente ubicados. Cada año, individuos procedentes del Mediterráneo migran hacia el norte de Europa en primavera, estableciendo poblaciones temporales que se reproducen durante el verano. Los adultos se alimentan vorazmente de néctar, mostrando preferencia por plantas como la buddleia, la hiedra y frutas muy maduras. Las orugas, que se desarrollan exclusivamente sobre ortigas, construyen refugios enrollando hojas con seda. Esta especie exhibe un comportamiento territorial, con machos que defienden perchas soleadas desde donde vigilan su territorio. Su capacidad para hibernar como adulto en regiones templadas le permite aparecer temprano en primavera.',
        'habitat' => 'Jardines, parques y áreas abiertas',
        'imagen' => 'Vanessa atalanta.jpeg',
        'distribucion' => 'Cosmopolita, especialmente en regiones templadas',
        'dieta' => 'Néctar de flores y frutas maduras; las orugas se alimentan de ortigas',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Vanessa',
        'especie' => 'V. atalanta',
        'galeria_imagenes' => [
            [
                'archivo' => 'Vanessa atalanta.jpeg',
                'descripcion' => 'Adulto de la mariposa atalanta con banda roja distintiva.',
                'categoria' => 'adulto'
            ],
            [
                'archivo' => 'Vanessa_atalanta_oruga.jpg',
                'descripcion' => 'Oruga de la atalanta en su planta hospedadora (ortiga).',
                'categoria' => 'oruga'
            ],
        ],
         'morfologia' => [
        'cabeza' => [
            'estructura' => 'Pequeña y compacta, con ojos prominentes.',
            'caracteristicas' => 'Ojos compuestos grandes. Antenas clavadas con maza definida. Palpos labiales cortos.',
            'piezas_bucales' => 'Espiritrompa funcional para néctar y jugos de frutas.',
            'imagenes' => [
                [
                    'archivo' => 'Vanessa_atalanta_cabeza.jpg',
                    'descripcion' => 'Cabeza mostrando las antenas clavadas.',
                    'detalle_extendido' => 'La cabeza es compacta con grandes ojos compuestos que proporcionan una visión amplia esencial para la detección de flores y la evasión de depredadores. Las antenas son claramente clavadas, terminando en una maza bien definida. La espiritrompa está adaptada para acceder tanto al néctar de flores como a los jugos de frutas en descomposición, mostrando versatilidad alimentaria.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados.',
            'protorax' => 'Robusto, con patas anteriores reducidas.',
            'patas' => 'Seis patas, con las anteriores reducidas y no funcionales para caminar.',
            'imagenes' => [
                [
                    'archivo' => 'Vanessa_atalanta_torax.jpg',
                    'descripcion' => 'Torax mostrando la estructura para vuelo rápido.',
                    'detalle_extendido' => 'El torax está robustamente construido y poderosamente musculado para el vuelo rápido y directo característico de esta especie. Como miembro de la familia Nymphalidae, las patas anteriores están reducidas y no se usan para la locomoción, una adaptación que puede reducir peso y mejorar la eficiencia del vuelo. Las patas medias y posteriores son completamente funcionales.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Diez segmentos, esbelto y aerodinámico.',
            'apendices' => 'Sin estructuras especializadas visibles externamente.',
            'imagenes' => [
                [
                    'archivo' => 'Vanessa_atalanta_abdomen.jpg',
                    'descripcion' => 'Abdomen esbelto visto lateralmente.',
                    'detalle_extendido' => 'El abdomen es esbelto y aerodinámico, contribuyendo a la eficiencia del vuelo durante sus migraciones estacionales. Está segmentado y cubierto de escamas que complementan el color oscuro de las alas. Contiene los sistemas digestivo y reproductor, y en los machos presenta estructuras especializadas para la transferencia de espermatóforos durante el apareamiento.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Dos pares de alas con diseño contrastante.',
            'tipo' => 'Alas anteriores alargadas, posteriores redondeadas.',
            'vuelo' => 'Vuelo rápido y directo, con aleteo potente.',
            'imagenes' => [
                [
                    'archivo' => 'Vanessa_atalanta_alas.jpg',
                    'descripcion' => 'Alas mostrando el contraste negro y rojo.',
                    'detalle_extendido' => 'Las alas presentan el característico diseño de fondo negro aterciopelado con una banda roja brillante que atraviesa las alas anteriores y un borde rojo en las posteriores, complementado con manchas blancas estratégicamente ubicadas. Este patrón de alto contraste es efectivo tanto para el reconocimiento intraespecífico como para la defensa. Las alas están cubiertas de escamas superpuestas que crean la textura aterciopelada. La venación es visible y característica de la familia Nymphalidae.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa)',
            'duracion_total' => 'Varias generaciones al año. Adultos pueden hibernar.',
            'habitos_alimenticios' => 'Adulto: Nectarívoro/Frugívoro. Oruga: Fitófago (Urtica dioica)',
            'etapas' => [
                'huevo' => [
                    'duracion' => 'Pocos días',
                    'descripcion' => 'Huevos pequeños, de color verde pálido, puestos individualmente en las hojas de ortiga.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Hojas de ortiga'
                ],
                'oruga' => [
                    'duracion' => '3 a 4 semanas',
                    'descripcion' => 'Oruga espinosa de color negro a gris, que vive en un refugio de hojas de ortiga enrolladas.',
                    'alimentacion' => 'Hojas de ortiga (Urtica dioica)',
                    'habitat' => 'Ortigales'
                ],
                'pupa' => [
                    'duracion' => '1 a 2 semanas',
                    'descripcion' => 'Crisálida de color marrón o gris con reflejos dorados, suspendida dentro de la hoja enrollada o cercana a ella.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Refugios de seda en ortigales'
                ],
                'adulto' => [
                    'duracion' => 'Meses (incluye diapausa invernal o migración)',
                    'descripcion' => 'Mariposa diurna migratoria, territorial en machos. Una de las primeras en aparecer en primavera.',
                    'alimentacion' => 'Néctar y frutas en descomposición',
                    'habitat' => 'Jardines, parques, y sitios de hibernación'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Conservación de parches de ortiga para la puesta de huevos.'
                ],
                'oruga' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'La ortiga es la única planta hospedadora; permitir su crecimiento en áreas no productivas.'
                ],
                'pupa' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Evitar la remoción de ortigas con pupas adheridas.'
                ],
                'adulto' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Ofrecer frutas maduras o en descomposición como fuente de energía para adultos.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 6. Lepidoptera (Orden general)
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Lepidoptera',
        'slug' => 'Lepidoptera_orden',
        'nombre_cientifico' => 'Lepidoptera',
        'fecha' => '03-15-2023',
        'nombre_comun' => 'Orden Lepidoptera',
        'orden' => 'Lepidoptera',
        'familia' => 'Varias familias (Nymphalidae, Papilionidae, Sphingidae, etc.)',
        'descripcion' => 'Los lepidópteros constituyen uno de los órdenes de insectos más diversos y carismáticos, con aproximadamente 180,000 especies descritas que incluyen mariposas diurnas y polillas nocturnas. Se caracterizan por sus alas cubiertas de escamas imbricadas que producen los patrones de color y diseño tan variados, y por su aparato bucal en forma de espiritrompa enrollable para libar néctar. Presentan una metamorfosis completa (holometábola) con cuatro fases: huevo, larva (oruga), pupa (crisálida o capullo) y adulto. Las orugas, con su cuerpo segmentado y falsas patas, son principalmente fitófagas y muchas son específicas de determinadas plantas hospedadoras. Los lepidópteros desempeñan roles ecológicos cruciales como polinizadores, fuente de alimento para otros animales y bioindicadores de salud ambiental. Su sensibilidad a cambios ambientales los convierte en importantes especies indicadoras en estudios de conservación y cambio climático.',
        'habitat' => 'Diversos hábitats terrestres en todo el mundo',
        'imagen' => 'Lepidoptera.jpg',
        'distribucion' => 'Distribución mundial',
        'dieta' => 'Los adultos: néctar; las orugas: tejidos vegetales (hojas, tallos, etc.)',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Varios géneros',
        'especie' => 'Múltiples especies',
        'galeria_imagenes' => [
            [
                'archivo' => 'Lepidoptera.jpg',
                'descripcion' => 'Ejemplares representativos del orden Lepidoptera (mariposas y polillas).',
                'categoria' => 'metamorfosis'
            ]
        ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa) - General',
            'duracion_total' => 'Extremadamente variable (desde semanas hasta años)',
            'habitos_alimenticios' => 'Adulto: Principalmente nectarívoro. Oruga: Principalmente fitófago.',
            'etapas' => [
                'huevo' => [
                    'duracion' => 'Variable',
                    'descripcion' => 'Puestos en o cerca de la planta hospedadora de la larva.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Plantas y follaje'
                ],
                'oruga' => [
                    'duracion' => 'La fase de crecimiento y alimentación principal.',
                    'descripcion' => 'Larva con aparato bucal masticador, cuerpo segmentado y falsas patas. Etapa de mayor daño potencial a cultivos.',
                    'alimentacion' => 'Tejidos vegetales (algunas son depredadoras o saprófagas)',
                    'habitat' => 'Plantas hospedadoras'
                ],
                'pupa' => [
                    'duracion' => 'Variable (a menudo la etapa de diapausa)',
                    'descripcion' => 'Crisálida (mariposa) o capullo (polilla). Etapa inmóvil de transformación.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Suelo, hojas, ramas, o dentro de un capullo'
                ],
                'adulto' => [
                    'duracion' => 'Variable',
                    'descripcion' => 'Alas cubiertas de escamas. Reproducción y dispersión. Polinizadores.',
                    'alimentacion' => 'Néctar y otros líquidos',
                    'habitat' => 'Aéreo y terrestre, según la especie'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Monitoreo de la puesta. Uso de trampas de feromonas para predecir la población adulta.'
                ],
                'oruga' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Control biológico (ej. Bacillus thuringiensis o depredadores). Manejo cultural (rotación de cultivos).'
                ],
                'pupa' => [
                    'C' => '',
                    'Q' => 'X',
                    'B' => '',
                    'M' => '',
                    'descripcion' => 'Control mecánico (remoción de pupas). Labranza para exponer pupas en el suelo.'
                ],
                'adulto' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Trampeo masivo o monitoreo. Conservación de especies polinizadoras (control biológico).'
                ]
            ]
        ]
    ]
    ],
    //.. mas especies de diptera
    'diptera' => [
       // ----------------------------------------------------------------------
    // 1. Musca domestica (Mosca doméstica) - Plaga/Vector
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Diptera',
        'slug' => 'Musca_domestica',
        'nombre_cientifico' => 'Musca domestica',
        'fecha' => '08-15-2023',
        'nombre_comun' => 'Mosca doméstica',
        'orden' => 'Diptera',
        'familia' => 'Muscidae',
        'descripcion' => 'La mosca doméstica es uno de los insectos más exitosos y cosmopolitas. Su ciclo de vida extremadamente rápido —de huevo a adulto en apenas 7-10 días en condiciones óptimas— le permite producir múltiples generaciones anuales. Las hembras depositan lotes de 100-150 huevos en materia orgánica en descomposición, donde las larvas (gusanos) se desarrollan. Los adultos son vectores mecánicos importantes de enfermedades como cólera, fiebre tifoidea y salmonelosis, debido a que transportan patógenos en las sedas de su cuerpo y a través de sus hábitos de alimentación y regurgitación.',
        'habitat' => 'Ambientes humanos, granjas, basureros',
        'imagen' => 'Musca domestica.jpeg',
        'distribucion' => 'Cosmopolita, en todo el mundo',
        'dieta' => 'Materia orgánica en descomposición, heces, alimentos humanos',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Musca',
        'especie' => 'M. domestica',
        'galeria_imagenes' => [
            [
                'archivo' => 'Musca domestica.jpeg',
                'descripcion' => 'Mosca doméstica adulta con piezas bucales esponjosas.',
                'categoria' => 'adulto'
            ],
            [
                'archivo' => 'Musca_domestica_larva.jpg',
                'descripcion' => 'Larvas de mosca (gusanos) en material de cría.',
                'categoria' => 'larva'
            ],
        ],
        'morfologia' => [
        'cabeza' => [
            'estructura' => 'Semiesférica, móvil, con grandes ojos compuestos.',
            'caracteristicas' => 'Ojos compuestos grandes de color rojo oscuro. Antenas aristadas cortas. Tres ocelos en el vértex.',
            'piezas_bucales' => 'Tipo esponjoso (labellum) para lamer líquidos, con canales pseudotraqueales.',
            'imagenes' => [
                [
                    'archivo' => 'Musca_domestica_cabeza.jpg',
                    'descripcion' => 'Cabeza mostrando el aparato bucal esponjoso.',
                    'detalle_extendido' => 'La cabeza es semiesférica con grandes ojos compuestos que cubren la mayor parte de la superficie. Las antenas son cortas y aristadas, con una arista plumosa. El aparato bucal está adaptado para lamer líquidos, con un labellum esponjoso que se expande durante la alimentación. Los tres ocelos están dispuestos en triángulo en el vértex.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados.',
            'protorax' => 'Pequeño, con espiráculos anteriores.',
            'patas' => 'Tres pares de patas con almohadillas adhesivas (pulvilli) y uñas tarsales.',
            'imagenes' => [
                [
                    'archivo' => 'Musca_domestica_torax.jpg',
                    'descripcion' => 'Torax mostrando las bandas longitudinales.',
                    'detalle_extendido' => 'El torax es grisáceo con cuatro bandas longitudinales oscuras características. El mesotórax está muy desarrollado para el vuelo. Las patas tienen almohadillas adhesivas (pulvilli) que les permiten caminar sobre superficies lisas y verticales. Cada pata termina en un par de uñas tarsales para agarrarse a superficies rugosas.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Cuatro segmentos visibles en machos, cinco en hembras.',
            'apendices' => 'Genitales externos en el extremo abdominal.',
            'imagenes' => [
                [
                    'archivo' => 'Musca_domestica_abdomen.jpg',
                    'descripcion' => 'Abdomen mostrando la segmentación característica.',
                    'detalle_extendido' => 'El abdomen es ovalado y aplanado, de color grisáceo con manchas oscuras. En los machos, los últimos segmentos están fusionados y son más redondeados, mientras que en las hembras el abdomen es más puntiagudo para facilitar la oviposición. Los segmentos abdominales son visibles y presentan una fina pubescencia.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Un par de alas funcionales, halterios en lugar del segundo par.',
            'tipo' => 'Alas membranosas transparentes con venación característica.',
            'vuelo' => 'Vuelo rápido y ágil, con capacidad de cambios bruscos de dirección.',
            'imagenes' => [
                [
                    'archivo' => 'Musca_domestica_alas.jpg',
                    'descripcion' => 'Ala mostrando la venación y la célula anal cerrada.',
                    'detalle_extendido' => 'Las alas son transparentes con venación característica que incluye una célula anal cerrada. La vena media (M1+2) presenta una curvatura suave hacia adelante. Los halterios (balancines) son estructuras modificadas del segundo par de alas que funcionan como giroscopios para la estabilidad durante el vuelo. Las alas se pliegan sobre el abdomen en reposo.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa)',
            'duracion_total' => '7 a 10 días (condiciones óptimas)',
            'habitos_alimenticios' => 'Adulto: Líquidos azucarados y digeridos. Larva: Microorganismos en materia orgánica.',
            'etapas' => [
                'huevo' => [
                    'duracion' => '8 a 24 horas',
                    'descripcion' => 'Pequeños, de color blanco, depositados en lotes sobre materia orgánica húmeda y caliente (sustrato de cría).',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Materia en descomposición (estiércol, basura)'
                ],
                'larva' => [
                    'duracion' => '4 a 7 días',
                    'descripcion' => 'Larva ápoda (sin patas), conocida como gusano (maggot). Crece rápidamente alimentándose de microorganismos en el sustrato.',
                    'alimentacion' => 'Microorganismos y materia orgánica en descomposición',
                    'habitat' => 'Dentro del sustrato de cría (ej. estiércol)'
                ],
                'pupa' => [
                    'duracion' => '2 a 5 días',
                    'descripcion' => 'La larva forma un pupario (cubierta endurecida de su última piel larvaria) y se transforma en pupa.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'En sustratos más secos, a menudo alejados de la zona de alimentación larvaria.'
                ],
                'adulto' => [
                    'duracion' => '15 a 25 días',
                    'descripcion' => 'Emergen del pupario. Se alimentan y reproducen activamente.',
                    'alimentacion' => 'Cualquier sustancia soluble o licuada, heces, comida humana.',
                    'habitat' => 'Ambientes interiores y exteriores, cerca de alimentos y fuentes de suciedad.'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Eliminación y secado rápido del sustrato de cría (basura, estiércol).'
                ],
                'larva' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Uso de larvicidas biológicos o químicos en el sustrato. Introducción de parasitoides (ej. avispas pteromálidas).'
                ],
                'pupa' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => 'X',
                    'M' => '',
                    'descripcion' => 'Aplicación de tierra de diatomeas o desecantes en zonas de pupación.'
                ],
                'adulto' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Uso de trampas, cebos y exclusión física (mallas, puertas). Control químico si es necesario.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 2. Culex pipiens (Mosquito común) - Vector
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Diptera',
        'slug' => 'Culex_pipiens',
        'nombre_cientifico' => 'Culex pipiens',
        'fecha' => '07-22-2023',
        'nombre_comun' => 'Mosquito común',
        'orden' => 'Diptera',
        'familia' => 'Culicidae',
        'descripcion' => 'El mosquito común es un insecto hematófago (solo las hembras) y un vector clave de enfermedades como el Virus del Nilo Occidental. Su ciclo de vida es acuático, desarrollándose en agua estancada. Las hembras ponen huevos en "balsas" flotantes. Las larvas se alimentan de microorganismos mediante filtración, mientras que los adultos se alimentan de néctar (ambos sexos) o sangre (hembras). Es una plaga urbana y un problema de salud pública por su capacidad de transmisión de patógenos.',
        'habitat' => 'Agua estancada, charcos, contenedores con agua',
        'imagen' => 'Culex pipiens.jpg',
        'distribucion' => 'Cosmopolita, especialmente en zonas templadas',
        'dieta' => 'Hembras: sangre y néctar; Machos: néctar de plantas',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Culex',
        'especie' => 'C. pipiens',
        'galeria_imagenes' => [
            [
                'archivo' => 'Culex pipiens.jpg',
                'descripcion' => 'Hembra de mosquito común alimentándose.',
                'categoria' => 'adulto'
            ],
            [
                'archivo' => 'Culex_pipiens_larva.jpg',
                'descripcion' => 'Larva de mosquito flotando en la superficie del agua.',
                'categoria' => 'larva'
            ],
        ],
          'morfologia' => [
        'cabeza' => [
            'estructura' => 'Prolongada, con piezas bucales especializadas.',
            'caracteristicas' => 'Ojos compuestos grandes. Antenas plumosas en machos, menos pilosas en hembras. Palpos largos.',
            'piezas_bucales' => 'Estilete para perforar piel y succionar sangre (hembras).',
            'imagenes' => [
                [
                    'archivo' => 'Culex_pipiens_cabeza.jpg',
                    'descripcion' => 'Cabeza mostrando el estilete perforador.',
                    'detalle_extendido' => 'La cabeza es elongada con piezas bucales formando un estilete largo en las hembras, compuesto por el labro, las mandíbulas, las maxilas y el hipofaringe. Los palpos son largos, especialmente en los machos. Las antenas son notablemente plumosas en los machos, lo que mejora su capacidad para detectar las feromonas de las hembras. Los ojos compuestos son grandes y cubren gran parte de la cabeza.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados.',
            'protorax' => 'Pequeño, con escudo pronotal desarrollado.',
            'patas' => 'Patas largas y delgadas adaptadas para posarse.',
            'imagenes' => [
                [
                    'archivo' => 'Culex_pipiens_torax.jpg',
                    'descripcion' => 'Torax mostrando la forma arqueada característica.',
                    'detalle_extendido' => 'El torax presenta una forma arqueada característica y está cubierto de escamas que le dan un color marrón oscuro. El escutelo es trilobulado. Las patas son largas, delgadas y están cubiertas de escamas oscuras, con bandas pálidas en las articulaciones. Las patas posteriores son particularmente largas y se mantienen levantadas cuando el mosquito está en reposo.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Ocho segmentos visibles, puntiagudo en hembras.',
            'apendices' => 'Cerco en el extremo abdominal.',
            'imagenes' => [
                [
                    'archivo' => 'Culex_pipiens_abdomen.jpg',
                    'descripcion' => 'Abdomen mostrando las bandas de escamas pálidas.',
                    'detalle_extendido' => 'El abdomen es largo y delgado, compuesto por ocho segmentos visibles. Está cubierto de escamas oscuras con bandas basales pálidas que forman un patrón característico. En las hembras, el abdomen termina en forma puntiaguda, mientras que en los machos es más romo. Los segmentos abdominales están separados por membranas intersegmentarias que permiten la expansión durante la alimentación.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Un par de alas funcionales con escamas, halterios.',
            'tipo' => 'Alas estrechas y alargadas con escamas en las venas.',
            'vuelo' => 'Vuelo silencioso y ágil, especialmente al anochecer.',
            'imagenes' => [
                [
                    'archivo' => 'Culex_pipiens_alas.jpg',
                    'descripcion' => 'Ala mostrando las escamas en las venas.',
                    'detalle_extendido' => 'Las alas son estrechas, alargadas y transparentes, con escamas oscuras distribuidas a lo largo de las venas. La venación es característica de la familia Culicidae, con venas longitudinales y transversales bien definidas. Los halterios son visibles como estructuras globulares en la base de las alas. El sonido del vuelo es producido por la alta frecuencia del batido de alas (300-500 Hz).'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa) - Acuática',
            'duracion_total' => '7 a 14 días (dependiendo de la temperatura)',
            'habitos_alimenticios' => 'Adulto (Hembra): Hematófago/Nectarívoro. Larva: Filtradora de microorganismos.',
            'etapas' => [
                'huevo' => [
                    'duracion' => '1 a 3 días',
                    'descripcion' => 'Puestos en grupos que forman una balsa flotante en la superficie del agua.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Agua estancada (recipientes, charcos, etc.)'
                ],
                'larva' => [
                    'duracion' => '4 a 10 días (4 estadios)',
                    'descripcion' => 'Larva acuática, se mueve mediante sacudidas (wiggler). Respira por un sifón en la superficie.',
                    'alimentacion' => 'Materia orgánica, algas y microorganismos suspendidos',
                    'habitat' => 'Bajo la superficie del agua estancada'
                ],
                'pupa' => [
                    'duracion' => '1 a 3 días',
                    'descripcion' => 'Pupa activa (tumbler) en forma de coma. No se alimenta, pero respira por tubos torácicos.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Superficie del agua'
                ],
                'adulto' => [
                    'duracion' => 'Semanas a meses (la hembra hiberna)',
                    'descripcion' => 'Emergen de la pupa. Los adultos se aparean. Las hembras buscan sangre para madurar los huevos.',
                    'alimentacion' => 'Néctar y jugos vegetales; la hembra consume sangre',
                    'habitat' => 'Ambientes terrestres, activos al anochecer y por la noche.'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Eliminación de fuentes de agua estancada (neumáticos, cubos, macetas) y monitoreo de la puesta.'
                ],
                'larva' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Uso de larvicidas biológicos (ej. Bacillus thuringiensis israelensis) o depredadores (peces).'
                ],
                'pupa' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => '',
                    'descripcion' => 'Aplicación de aceites para bloquear la respiración en la superficie del agua (solo en casos controlados).'
                ],
                'adulto' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Uso de repelentes, mallas, mosquiteros y tratamientos espaciales (fumigación) para control de brotes.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 3. Drosophila melanogaster (Mosca de la fruta) - Modelo/Plaga
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Diptera',
        'slug' => 'Drosophila_melanogaster',
        'nombre_cientifico' => 'Drosophila melanogaster',
        'fecha' => '06-10-2023',
        'nombre_comun' => 'Mosca de la fruta',
        'orden' => 'Diptera',
        'familia' => 'Drosophilidae',
        'descripcion' => 'Esta pequeña mosca es un organismo modelo fundamental en la biología. Su rápido ciclo de vida (10-12 días) y alta fecundidad la hacen ideal para la investigación genética, pero también la convierten en una plaga doméstica. Las larvas se desarrollan en frutas en fermentación, alimentándose de levaduras. Los adultos son atraídos por los compuestos volátiles de la fermentación. Es inofensiva para la salud humana, pero puede arruinar la fruta cosechada o almacenada.',
        'habitat' => 'Frutas en descomposición, cocinas, mercados',
        'imagen' => 'Drosophila melanogaster.jpg',
        'distribucion' => 'Cosmopolita',
        'dieta' => 'Frutas y vegetales en fermentación, levaduras',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Drosophila',
        'especie' => 'D. melanogaster',
        'galeria_imagenes' => [
            [
                'archivo' => 'Drosophila melanogaster.jpg',
                'descripcion' => 'Mosca de la fruta adulta sobre una superficie.',
                'categoria' => 'adulto'
            ],
            [
                'archivo' => 'Drosophila_melanogaster_larva.jpg',
                'descripcion' => 'Larva de mosca de la fruta alimentándose en medio de cultivo.',
                'categoria' => 'larva'
            ],
        ],
         'morfologia' => [
        'cabeza' => [
            'estructura' => 'Redondeada, con grandes ojos compuestos.',
            'caracteristicas' => 'Ojos compuestos rojos prominentes. Antenas aristadas. Tres ocelos.',
            'piezas_bucales' => 'Tipo esponjoso para lamer líquidos azucarados.',
            'imagenes' => [
                [
                    'archivo' => 'Drosophila_melanogaster_cabeza.jpg',
                    'descripcion' => 'Cabeza mostrando los ojos rojos característicos.',
                    'detalle_extendido' => 'La cabeza es redondeada con grandes ojos compuestos de color rojo brillante, una característica distintiva de esta especie. Las antenas son aristadas, con una arista ramificada. El aparato bucal está adaptado para lamer líquidos, con un labellum esponjoso. Los tres ocelos están dispuestos en triángulo en la parte superior de la cabeza. Los palpos son cortos y poco visibles.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados.',
            'protorax' => 'Pequeño, con setas específicas.',
            'patas' => 'Patas cortas con almohadillas adhesivas y uñas tarsales.',
            'imagenes' => [
                [
                    'archivo' => 'Drosophila_melanogaster_torax.jpg',
                    'descripcion' => 'Torax mostrando el patrón de coloración.',
                    'detalle_extendido' => 'El torax es de color marrón amarillento con un patrón característico que incluye bandas oscuras transversales. El mesotórax está bien desarrollado para el vuelo. Las patas son relativamente cortas y están equipadas con almohadillas adhesivas (pulvilli) que permiten caminar sobre superficies lisas. Las setas (pelos) del torax siguen un patrón específico usado en identificación taxonómica.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Cinco segmentos visibles en machos, seis en hembras.',
            'apendices' => 'Genitales complejos en machos, ovipositor en hembras.',
            'imagenes' => [
                [
                    'archivo' => 'Drosophila_melanogaster_abdomen.jpg',
                    'descripcion' => 'Abdomen mostrando la segmentación y patrón de bandas.',
                    'detalle_extendido' => 'El abdomen es ovalado y presenta bandas transversales oscuras sobre fondo claro. En los machos, el extremo abdominal es más oscuro y redondeado, con genitales externos complejos. En las hembras, el abdomen es más puntiagudo y presenta un ovipositor retráctil para depositar huevos en frutas. Los segmentos abdominales son claramente visibles y presentan una fina pubescencia.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Un par de alas funcionales, halterios.',
            'tipo' => 'Alas transparentes con venación simple y mancha costal oscura.',
            'vuelo' => 'Vuelo lento y errático, característico de la especie.',
            'imagenes' => [
                [
                    'archivo' => 'Drosophila_melanogaster_alas.jpg',
                    'descripcion' => 'Ala mostrando la mancha costal característica.',
                    'detalle_extendido' => 'Las alas son transparentes con una mancha oscura característica cerca del borde costal anterior. La venación es relativamente simple comparada con otros dípteros, con pocas venas transversales. Los halterios son visibles como pequeñas estructuras claviformes. Las alas se mantienen extendidas lateralmente cuando la mosca está en reposo. El patrón de venación y la mancha costal son importantes para la identificación de la especie.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa)',
            'duracion_total' => '10 a 12 días (a 25°C)',
            'habitos_alimenticios' => 'Adulto: Levaduras y jugos fermentados. Larva: Levaduras en el sustrato.',
            'etapas' => [
                'huevo' => [
                    'duracion' => '1 día',
                    'descripcion' => 'Pequeños huevos puestos en la superficie de la fruta en fermentación.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Frutas maduras o en descomposición'
                ],
                'larva' => [
                    'duracion' => '4 días (3 estadios)',
                    'descripcion' => 'Gusano blanco que se alimenta activamente. En el último estadio, sale de la fruta para pupar.',
                    'alimentacion' => 'Levaduras que crecen en la fruta',
                    'habitat' => 'Interior de frutas y vegetales en descomposición'
                ],
                'pupa' => [
                    'duracion' => '4 días',
                    'descripcion' => 'Pupario marrón inmóvil, generalmente adherido a una superficie seca cerca de la fuente de alimento.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Cámaras secas, cerca del sustrato de cría'
                ],
                'adulto' => [
                    'duracion' => '30 a 50 días',
                    'descripcion' => 'Vuelan y se reproducen. Son atraídos por el olor del alcohol y la fermentación.',
                    'alimentacion' => 'Azúcares, levaduras y jugos fermentados',
                    'habitat' => 'Cerca de fuentes de alimentos fermentados.'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Refrigeración inmediata de frutas y verduras maduras. Eliminación de sustratos de cría (desagües sucios).'
                ],
                'larva' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Destrucción de la fruta infestada. Control de la humedad en las áreas de almacenamiento.'
                ],
                'pupa' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => '',
                    'descripcion' => 'Limpieza exhaustiva para remover puparios adheridos a superficies.'
                ],
                'adulto' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Uso de trampas de vinagre de sidra de manzana o cebos azucarados. Exclusión física.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 4. Tipula oleracea (Mosca grúa) - Plaga (larva)
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Diptera',
        'slug' => 'Tipula_oleracea',
        'nombre_cientifico' => 'Tipula oleracea',
        'fecha' => '05-18-2023',
        'nombre_comun' => 'Mosca grúa',
        'orden' => 'Diptera',
        'familia' => 'Tipulidae',
        'descripcion' => 'La mosca grúa es inofensiva en su fase adulta, la cual es de corta duración y se dedica a la reproducción. Sin embargo, su larva, conocida como "gusano de cuero" (leatherjacket), puede ser una plaga significativa en céspedes y cultivos al alimentarse vorazmente de raíces y materia vegetal en el suelo húmedo. Su ciclo de vida suele durar un año o más, con la larva pasando el invierno enterrada. A pesar de su apariencia de mosquito gigante, el adulto no pica.',
        'habitat' => 'Prados húmedos, jardines, cerca de agua',
        'imagen' => 'Tipula oleracea.jpg',
        'distribucion' => 'Europa, Norteamérica y regiones templadas',
        'dieta' => 'Los adultos no se alimentan; las larvas comen raíces y materia vegetal',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Tipula',
        'especie' => 'T. oleracea',
        'galeria_imagenes' => [
            [
                'archivo' => 'Tipula oleracea.jpg',
                'descripcion' => 'Mosca grúa adulta con patas largas y frágiles.',
                'categoria' => 'adulto'
            ],
            [
                'archivo' => 'Tipula_oleracea_larva.jpg',
                'descripcion' => 'Larva (gusano de cuero) en el suelo.',
                'categoria' => 'larva'
            ],
        ],
           'morfologia' => [
        'cabeza' => [
            'estructura' => 'Prolongada, con piezas bucales vestigiales.',
            'caracteristicas' => 'Ojos compuestos grandes. Antenas filiformes de múltiples segmentos. Rostro alargado.',
            'piezas_bucales' => 'Vestigiales, no funcionales para alimentación.',
            'imagenes' => [
                [
                    'archivo' => 'Tipula_oleracea_cabeza.jpg',
                    'descripcion' => 'Cabeza mostrando el rostro alargado.',
                    'detalle_extendido' => 'La cabeza es elongada con un rostro prominente. Los ojos compuestos son grandes pero no se juntan en la parte superior de la cabeza. Las antenas son filiformes y consisten en 13 segmentos, siendo los segmentos basales más grandes que los distales. Las piezas bucales están reducidas y no son funcionales, ya que los adultos no se alimentan. El vértice tiene una depresión característica.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados.',
            'protorax' => 'Pequeño, con un collar pronotal distintivo.',
            'patas' => 'Patas extremadamente largas y frágiles, fácilmente autotomizables.',
            'imagenes' => [
                [
                    'archivo' => 'Tipula_oleracea_torax.jpg',
                    'descripcion' => 'Torax mostrando la forma alargada y patas largas.',
                    'detalle_extendido' => 'El torax es alargado y estrecho, de color marrón grisáceo. Presenta un surco en forma de V en el mesonoto. Las patas son extraordinariamente largas y delgadas, adaptadas para colgarse de la vegetación. Son frágiles y se desprenden fácilmente como mecanismo de defensa (autotomía). Los fémures y tibias están cubiertos de pequeñas setas. Las coxas son particularmente largas.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Nueve segmentos visibles, alargado y cilíndrico.',
            'apendices' => 'Cerco en el extremo abdominal, más largo en machos.',
            'imagenes' => [
                [
                    'archivo' => 'Tipula_oleracea_abdomen.jpg',
                    'descripcion' => 'Abdomen alargado con bandas segmentarias.',
                    'detalle_extendido' => 'El abdomen es largo, cilíndrico y segmentado, con bandas alternas de color más claro y oscuro. En los machos, el extremo abdominal está modificado en complejas estructuras genitales y presenta cerdas largas. En las hembras, el abdomen termina en un ovipositor puntiagudo usado para insertar huevos en el suelo. Los segmentos abdominales son claramente visibles y presentan una fina pubescencia.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Un par de alas funcionales, halterios largos.',
            'tipo' => 'Alas membranosas con mancha oscura en el ápice, venación compleja.',
            'vuelo' => 'Vuelo lento y débil, generalmente cerca del suelo.',
            'imagenes' => [
                [
                    'archivo' => 'Tipula_oleracea_alas.jpg',
                    'descripcion' => 'Ala mostrando la mancha apical y venación característica.',
                    'detalle_extendido' => 'Las alas son membranosas y presentan una mancha oscura característica en el ápice. La venación es compleja, con múltiples venas longitudinales y transversales que crean un patrón reticulado. La vena anal (A1) se extiende hasta el borde del ala. Los halterios son largos y claramente visibles. Cuando está en reposo, la mosca mantiene las alas extendidas lateralmente o ligeramente plegadas sobre el abdomen.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa)',
            'duracion_total' => '1 año o más',
            'habitos_alimenticios' => 'Adulto: No se alimenta. Larva: Fitófaga y detritívora (raíces, materia en descomposición).',
            'etapas' => [
                'huevo' => [
                    'duracion' => '1 a 2 semanas',
                    'descripcion' => 'Huevos pequeños, oscuros, puestos individualmente en la superficie del suelo húmedo (céspedes).',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Suelo húmedo o césped'
                ],
                'larva' => [
                    'duracion' => '7 a 10 meses (pasa el invierno)',
                    'descripcion' => 'Gusano cilíndrico, sin cabeza visible, de color gris o marrón (gusano de cuero). Causa daño al alimentarse de raíces.',
                    'alimentacion' => 'Raíces, tallos y materia vegetal en descomposición.',
                    'habitat' => 'Suelo, debajo del césped'
                ],
                'pupa' => [
                    'duracion' => '2 a 3 semanas',
                    'descripcion' => 'Pupario duro. Antes de emerger, la pupa se mueve hacia la superficie del suelo.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Cámaras en el suelo'
                ],
                'adulto' => [
                    'duracion' => '1 a 2 semanas',
                    'descripcion' => 'Emergen y se aparean rápidamente. Vuelo lento y torpe. Las hembras ponen huevos y mueren.',
                    'alimentacion' => 'No se alimenta (vive de las reservas larvarias)',
                    'habitat' => 'Vegetación y prados'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Monitoreo de la población adulta en verano/otoño para estimar el riesgo larvario.'
                ],
                'larva' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Control biológico con nematodos entomopatógenos (fase activa). Aplicación de insecticidas si hay daño económico.'
                ],
                'pupa' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Aumento del drenaje y reducción del riego para hacer el hábitat menos favorable.'
                ],
                'adulto' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Uso de luces trampa para monitoreo; no se recomienda control ya que son inofensivos.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 5. Tabanus bovinus (Tábano bovino) - Vector/Plaga de ganado
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Diptera',
        'slug' => 'Tabanus_bovinus',
        'nombre_cientifico' => 'Tabanus bovinus',
        'fecha' => '07-30-2023',
        'nombre_comun' => 'Tábano bovino',
        'orden' => 'Diptera',
        'familia' => 'Tabanidae',
        'descripcion' => 'El tábano bovino es un díptero grande conocido por su picadura dolorosa. Solo las hembras son hematófagas y utilizan piezas bucales cortantes para crear una herida de donde liban la sangre. Son vectores de varias enfermedades animales. Los machos se alimentan de néctar. Las larvas son depredadoras y se desarrollan en hábitats acuáticos o semiacuáticos, siendo su ciclo de vida largo y a menudo extendido por más de un año.',
        'habitat' => 'Prados, bosques, cerca de ganado',
        'imagen' => 'Tabanus bovinus.jpg',
        'distribucion' => 'Europa, Asia y Norte de África',
        'dieta' => 'Hembras: sangre de mamíferos; Machos: néctar y polen. Larvas: otros invertebrados.',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Tabanus',
        'especie' => 'T. bovinus',
        'galeria_imagenes' => [
            [
                'archivo' => 'Tabanus bovinus.jpg',
                'descripcion' => 'Tábano bovino adulto con ojos grandes y facetados.',
                'categoria' => 'adulto'
            ],
            [
                'archivo' => 'Tabanus_bovinus_larva.jpg',
                'descripcion' => 'Larva de tábano depredadora en el suelo húmedo.',
                'categoria' => 'larva'
            ],
        ],
        'morfologia' => [
        'cabeza' => [
            'estructura' => 'Grande, ancha, con enormes ojos compuestos.',
            'caracteristicas' => 'Ojos compuestos grandes con bandas de colores. Antenas cortas de tres segmentos. Ojos separados en hembras, contiguos en machos.',
            'piezas_bucales' => 'Tipo cortante-chupador con estiletes para perforar piel.',
            'imagenes' => [
                [
                    'archivo' => 'Tabanus_bovinus_cabeza.jpg',
                    'descripcion' => 'Cabeza mostrando los enormes ojos compuestos.',
                    'detalle_extendido' => 'La cabeza es grande y ancha, dominada por enormes ojos compuestos que en los machos son holópticos (se tocan en la línea media) y en las hembras son dicópticos (separados). Los ojos presentan bandas de colores verdes y morados característicos. Las antenas son cortas, de tres segmentos, con el tercer segmento anillado. Las piezas bucales de las hembras forman un estilete fuerte para perforar la piel de los mamíferos.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados.',
            'protorax' => 'Robusto, con callosidades humerales desarrolladas.',
            'patas' => 'Patas robustas con espinas y almohadillas adhesivas.',
            'imagenes' => [
                [
                    'archivo' => 'Tabanus_bovinus_torax.jpg',
                    'descripcion' => 'Torax mostrando la robustez y coloración.',
                    'detalle_extendido' => 'El torax es masivo y robusto, de color marrón oscuro con bandas longitudinales más pálidas. Está poderosamente musculado para el vuelo rápido y sostenido. Las patas son robustas y están armadas con fuertes espinas que les ayudan a agarrarse al pelaje de los animales durante la alimentación. Los fémures son particularmente fuertes y las tibias tienen espinas bien desarrolladas.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Siete segmentos visibles, ancho y aplanado.',
            'apendices' => 'Genitales complejos en el extremo abdominal.',
            'imagenes' => [
                [
                    'archivo' => 'Tabanus_bovinus_abdomen.jpg',
                    'descripcion' => 'Abdomen mostrando el patrón de coloración triangular.',
                    'detalle_extendido' => 'El abdomen es ancho, aplanado y de forma triangular, con un patrón característico de triángulos claros sobre fondo oscuro. Los segmentos son claramente visibles y presentan bandas de pubescencia. En los machos, el extremo abdominal está modificado en complejas estructuras genitales. En las hembras, el abdomen es más redondeado y puede expandirse considerablemente después de la alimentación sanguínea.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Un par de alas funcionales, halterios.',
            'tipo' => 'Alas con mancha oscura en el ápice, venación característica.',
            'vuelo' => 'Vuelo rápido y potente, con sonido zumbante audible.',
            'imagenes' => [
                [
                    'archivo' => 'Tabanus_bovinus_alas.jpg',
                    'descripcion' => 'Ala mostrando la mancha oscura y venación.',
                    'detalle_extendido' => 'Las alas son transparentes con una mancha oscura característica en el ápice. La venación es compleja y diagnóstica, con la célula R5 cerrada y estrellada. La vena media (M3) presenta una curvatura característica. Los halterios son claramente visibles. El sonido del vuelo es un zumbido profundo y audible producido por la baja frecuencia del batido de alas. Las alas se mantienen en forma de tejado sobre el abdomen cuando el tábano está en reposo.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa)',
            'duracion_total' => '1 a 2 años',
            'habitos_alimenticios' => 'Adulto (Hembra): Hematófago. Larva: Predadora de otros invertebrados en el suelo.',
            'etapas' => [
                'huevo' => [
                    'duracion' => '5 a 7 días',
                    'descripcion' => 'Puestos en masas oscuras sobre vegetación o piedras cerca de cuerpos de agua.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Vegetación cerca del agua/hábitat larvario'
                ],
                'larva' => [
                    'duracion' => '10 a 14 meses (pasa el invierno)',
                    'descripcion' => 'Larva cilíndrica, de color claro. Es una depredadora activa de gusanos, caracoles e insectos en el barro.',
                    'alimentacion' => 'Otros pequeños invertebrados',
                    'habitat' => 'Barro, suelos húmedos o pantanosos'
                ],
                'pupa' => [
                    'duracion' => '1 a 3 semanas',
                    'descripcion' => 'Pupa de tipo obtecta que se forma en el suelo. Se mueve hacia la superficie antes de la emergencia del adulto.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Cámaras secas cerca del suelo húmedo.'
                ],
                'adulto' => [
                    'duracion' => '3 a 4 semanas',
                    'descripcion' => 'Emergen en verano. Las hembras buscan hospedadores (mamíferos grandes) para alimentarse de sangre antes de la puesta.',
                    'alimentacion' => 'Néctar y rocío; la hembra requiere sangre',
                    'habitat' => 'Prados y zonas soleadas cerca de cuerpos de agua.'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Remoción o manejo de la vegetación donde se depositan las masas de huevos cerca de áreas de pastoreo.'
                ],
                'larva' => [
                    'C' => '',
                    'Q' => '',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'La larva es depredadora, por lo que se prioriza la conservación de su hábitat natural (suelos húmedos).'
                ],
                'pupa' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Monitoreo de áreas de emergencia en pastos para la aplicación localizada de control si es necesario.'
                ],
                'adulto' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Uso de trampas específicas para tábanos (trampas negras/piramidales). Repelentes en el ganado.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 6. Diptera (Orden general)
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Diptera',
        'slug' => 'Diptera_orden',
        'nombre_cientifico' => 'Diptera',
        'fecha' => '04-20-2023',
        'nombre_comun' => 'Orden Diptera',
        'orden' => 'Diptera',
        'familia' => 'Varias familias (Muscidae, Culicidae, Tabanidae, etc.)',
        'descripcion' => 'Los dípteros se definen por la posesión de un solo par de alas funcionales, habiendo transformado el segundo par en **halterios** (órganos de equilibrio giroscópicos). Presentan una metamorfosis **holometábola** (huevo, larva, pupa, adulto) y son cruciales en roles ecológicos como polinizadores, descomponedores, depredadores, parasitoides y vectores de enfermedades. Este orden incluye especies benéficas y perjudiciales, ocupando casi todos los hábitats terrestres y acuáticos.',
        'habitat' => 'Diversos hábitats terrestres y acuáticos en todo el mundo',
        'imagen' => 'Diptera.jpg',
        'distribucion' => 'Distribución mundial',
        'dieta' => 'Extremadamente variada según la especie: sangre, néctar, materia en descomposición, tejidos vivos, etc.',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Varios géneros',
        'especie' => 'Múltiples especies',
        'galeria_imagenes' => [
            [
                'archivo' => 'Diptera.jpg',
                'descripcion' => 'Ejemplares representativos del orden Diptera (mosca, mosquito).',
                'categoria' => 'metamorfosis'
            ]
        ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa) - General',
            'duracion_total' => 'Extremadamente variable, desde 7 días hasta varios años.',
            'habitos_alimenticios' => 'Adulto: Líquidos (néctar, sangre, jugos). Larva: Muy variable (detritívora, predadora, fitófaga, parásita).',
            'etapas' => [
                'huevo' => [
                    'duracion' => 'Variable',
                    'descripcion' => 'Puesto en el medio ideal para el desarrollo de la larva (ej. agua, materia en descomposición, tejidos vegetales).',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Específico de la familia/especie.'
                ],
                'larva' => [
                    'duracion' => 'Fase de crecimiento principal.',
                    'descripcion' => 'Gusano o larva acuática, generalmente ápoda (sin patas), con un aparato bucal adaptado al tipo de alimento (filtrador, masticador, etc.).',
                    'alimentacion' => 'Muy variable, el objetivo es acumular reservas.',
                    'habitat' => 'Agua, suelo, materia orgánica, o dentro de otros organismos.'
                ],
                'pupa' => [
                    'duracion' => 'Variable',
                    'descripcion' => 'Puede ser un pupario (cubierta endurecida) o una pupa libre. Etapa de transformación inmóvil.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Suelo, debajo del agua o en el sustrato de cría.'
                ],
                'adulto' => [
                    'duracion' => 'Variable',
                    'descripcion' => 'Fase reproductiva. Poseen un solo par de alas y halterios.',
                    'alimentacion' => 'Líquidos (azúcares, sangre, etc.).',
                    'habitat' => 'Diversos, dependiendo de la necesidad de alimento y reproducción.'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Manejo ambiental para eliminar sitios de oviposición (ej. drenaje, saneamiento).'
                ],
                'larva' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Control larvario en el sustrato o agua (larvicidas, control biológico, desecación).'
                ],
                'pupa' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Manejo físico y saneamiento del área de pupación.'
                ],
                'adulto' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Exclusión (mallas), trampas y uso de insecticidas de contacto o residuales para control de vectores.'
                ]
            ]
        ]
    ]
    ],
    // ... más especies de hymenoptera
    'hymenoptera' => [
         // ----------------------------------------------------------------------
    // 1. Apis mellifera (Abeja doméstica o europea) - Social
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Hymenoptera',
        'slug' => 'Apis_mellifera',
        'nombre_cientifico' => 'Apis mellifera',
        'fecha' => '06-12-2022',
        'nombre_comun' => 'Abeja doméstica o europea',
        'orden' => 'Hymenoptera',
        'familia' => 'Apidae',
        'descripcion' => 'La abeja melífera europea es un insecto social fundamental para los ecosistemas y la agricultura mundial. Vive en colonias altamente organizadas que pueden contener hasta 60,000 individuos, con una estricta división del trabajo entre la reina (única reproductora), los zánganos (machos reproductores) y las obreras (hembras estériles que realizan todas las tareas de la colmena). Las obreras pasan por diferentes roles a lo largo de su vida: nodrizas, constructoras, guardianas y finalmente pecoreadoras que recolectan néctar, polen, propóleos y agua. Su complejo sistema de comunicación incluye la "danza de la abeja" para indicar la ubicación de fuentes de alimento. Son polinizadores esenciales para numerosos cultivos y plantas silvestres, contribuyendo significativamente a la biodiversidad y seguridad alimentaria humana.',
        'habitat' => 'Colmenas en diversos ecosistemas',
        'imagen' => 'apis mellifera.jpeg',
        'distribucion' => 'Cosmopolita',
        'dieta' => 'Néctar y polen',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Apis',
        'especie' => 'A. mellifera',
        'galeria_imagenes' => [
            [
                'archivo' => 'apis mellifera.jpeg',
                'descripcion' => 'Abejas obreras recolectando polen.',
                'categoria' => 'adulto'
            ],
            [
                'archivo' => 'apis_mellifera_colonia.jpg',
                'descripcion' => 'Panal de abeja con celdas de cría (larvas y pupas).',
                'categoria' => 'larva/pupa'
            ],
        ],
         'morfologia' => [
        'cabeza' => [
            'estructura' => 'Triangular, con ojos compuestos grandes.',
            'caracteristicas' => 'Ojos compuestos grandes y pelosos. Antenas geniculadas de 12 segmentos en hembras, 13 en machos. Tres ocelos en el vértex.',
            'piezas_bucales' => 'Tipo masticador-lamedor, con mandíbulas para trabajar cera y probóscide para libar néctar.',
            'imagenes' => [
                [
                    'archivo' => 'Apis_mellifera_cabeza.jpg',
                    'descripcion' => 'Cabeza mostrando las antenas geniculadas y aparato bucal.',
                    'detalle_extendido' => 'La cabeza es triangular con grandes ojos compuestos cubiertos de pelos finos. Las antenas son geniculadas (en ángulo) y altamente sensibles. El aparato bucal combina mandíbulas fuertes para manipular cera y propóleos con una probóscide larga (glosa) para succionar néctar. Los tres ocelos detectan cambios de intensidad lumínica.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados.',
            'protorax' => 'Pequeño, con espiráculos anteriores.',
            'patas' => 'Patas especializadas con corbículas (canastas de polen) en tibias posteriores.',
            'imagenes' => [
                [
                    'archivo' => 'Apis_mellifera_torax.jpg',
                    'descripcion' => 'Torax mostrando las patas especializadas.',
                    'detalle_extendido' => 'El torax está poderosamente musculado para el vuelo. Las patas presentan adaptaciones específicas: las anteriores tienen peines antenales para limpiar las antenas, las medias tienen espuelas para manipular las bolitas de polen, y las posteriores tienen corbículas (canastas de polen) formadas por pelos curvados en las tibias. El propódeo está modificado para alojar el aguijón.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Seis segmentos visibles en hembras, siete en machos.',
            'apendices' => 'Aguijón barbado en obreras (ovipositor modificado), sin aguijón en zánganos.',
            'imagenes' => [
                [
                    'archivo' => 'Apis_mellifera_abdomen.jpg',
                    'descripcion' => 'Abdomen mostrando los segmentos y glándulas de cera.',
                    'detalle_extendido' => 'El abdomen presenta bandas alternas claras y oscuras. En las obreras, contiene glándulas de cera en los segmentos 4-7 ventrales. El aguijón es un ovipositor modificado conectado a glándulas de veneno. En los zánganos, el abdomen es más redondeado y carece de aguijón. Los segmentos abdominales están conectados por membranas intersegmentarias flexibles.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Dos pares de alas membranosas acopladas en vuelo.',
            'tipo' => 'Alas anteriores más grandes que las posteriores, con venación característica.',
            'vuelo' => 'Vuelo rápido y preciso, batido de alas a 230 Hz.',
            'imagenes' => [
                [
                    'archivo' => 'Apis_mellifera_alas.jpg',
                    'descripcion' => 'Alas mostrando la venación y acoplamiento.',
                    'detalle_extendido' => 'Las alas anteriores son más grandes que las posteriores y presentan ganillos (hamuli) en el borde posterior que se engranan con el borde anterior de las alas posteriores durante el vuelo, funcionando como una sola superficie. La venación es diagnóstica, con celdas cerradas características. Las alas se pliegan longitudinalmente sobre el abdomen cuando la abeja está en reposo.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa)',
            'duracion_total' => 'Reina: 1-5 años. Obrera: 3-6 semanas (verano); 5 meses (invierno). Zángano: 3-4 semanas.',
            'habitos_alimenticios' => 'Adulto: Nectarívoro/Polinívoro. Larva: Jalea real y pan de abeja.',
            'etapas' => [
                'huevo' => [
                    'duracion' => '3 días',
                    'descripcion' => 'Puesto por la reina en una celda hexagonal. El huevo se fija en el fondo.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Celdas del panal'
                ],
                'larva' => [
                    'duracion' => '6 días (obrera)',
                    'descripcion' => 'Larva blanca y sin patas que crece rápidamente, alimentada por las obreras nodrizas. Muda varias veces.',
                    'alimentacion' => 'Jalea real inicialmente, luego miel y polen (pan de abeja)',
                    'habitat' => 'Celdas abiertas del panal'
                ],
                'pupa' => [
                    'duracion' => '12 días (obrera)',
                    'descripcion' => 'La larva teje un capullo dentro de la celda sellada (opérculo) y se transforma en pupa.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Celdas selladas (opérculo)'
                ],
                'adulto' => [
                    'duracion' => 'Variable según la casta',
                    'descripcion' => 'Emergen las tres castas (reina, zángano, obrera). Los adultos inician sus roles dentro y fuera de la colmena.',
                    'alimentacion' => 'Néctar, miel y polen',
                    'habitat' => 'Dentro y fuera de la colmena'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => '',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Monitoreo de la postura de la reina para evaluar la salud de la colonia.'
                ],
                'larva' => [
                    'C' => '',
                    'Q' => 'X',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Uso de antibióticos o control biológico para enfermedades de cría (ej. Loque). Inspección de la calidad del alimento.'
                ],
                'pupa' => [
                    'C' => '',
                    'Q' => 'X',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Control de Varroa destructor, que se reproduce bajo el opérculo de las celdas de pupa.'
                ],
                'adulto' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Manejo de enjambres, control de parásitos (ej. Acarapis woodi) y suministro de floración rica.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 2. Vespa crabro (Avispón europeo) - Social (Anual)
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Hymenoptera',
        'slug' => 'Vespa_crabro',
        'nombre_cientifico' => 'Vespa crabro',
        'fecha' => '08-25-2021',
        'nombre_comun' => 'Avispón europeo',
        'orden' => 'Hymenoptera',
        'familia' => 'Vespidae',
        'descripcion' => 'El avispón europeo es el véspido más grande de Europa. Es un insecto social con colonias anuales que pueden alcanzar varios cientos de individuos. La colonia es fundada por una reina fecundada que hiberna, y pasa por fases de obreras, zánganos y nuevas reinas. Es un depredador importante de otros insectos (control biológico) y también consume frutas maduras y savia de árboles. A pesar de su tamaño, es generalmente menos agresivo que otras avispas, aunque es defensivo cerca de su nido.',
        'habitat' => 'Bosques y zonas rurales',
        'imagen' => 'vespa crabro.jpg',
        'distribucion' => 'Europa y Asia',
        'dieta' => 'Insectos (larvas) y frutas maduras/savia (adultos)',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Vespa',
        'especie' => 'V. crabro',
        'galeria_imagenes' => [
            [
                'archivo' => 'vespa crabro.jpg',
                'descripcion' => 'Adulto del avispón europeo.',
                'categoria' => 'adulto'
            ],
            [
                'archivo' => 'vespa_crabro_nido.jpg',
                'descripcion' => 'Nido de avispón europeo construido en un tronco hueco.',
                'categoria' => 'nido/pupa'
            ],
        ],
         'morfologia' => [
        'cabeza' => [
            'estructura' => 'Grande, ancha, de color naranja-rojizo.',
            'caracteristicas' => 'Ojos compuestos grandes en forma de C. Antenas geniculadas de 12 segmentos. Mandíbulas potentes.',
            'piezas_bucales' => 'Tipo masticador, con mandíbulas fuertes para cortar y manipular presas.',
            'imagenes' => [
                [
                    'archivo' => 'Vespa_crabro_cabeza.jpg',
                    'descripcion' => 'Cabeza mostrando las mandíbulas potentes.',
                    'detalle_extendido' => 'La cabeza es grande y ancha, de color naranja-rojizo característico. Los ojos compuestos tienen forma de C y están profundamente escotados. Las antenas son geniculadas y robustas. Las mandíbulas son extremadamente fuertes, capaces de cortar otros insectos y masticar fibras vegetales para la construcción del nido. Los palpos maxilares y labiales están bien desarrollados.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados.',
            'protorax' => 'Robusto, con espiráculos prominentes.',
            'patas' => 'Patas robustas con espinas para agarrar y manipular presas.',
            'imagenes' => [
                [
                    'archivo' => 'Vespa_crabro_torax.jpg',
                    'descripcion' => 'Torax mostrando la robustez y coloración.',
                    'detalle_extendido' => 'El torax es masivo y poderosamente musculado para el vuelo sostenido. Es de color marrón rojizo con marcas negras. Las patas son robustas y están armadas con fuertes espinas que ayudan a agarrar y manipular presas. Los fémures y tibias son particularmente fuertes. El propódeo está modificado para la conexión con el abdomen.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Seis segmentos visibles, con patrón de bandas amarillas y negras.',
            'apendices' => 'Aguijón liso en hembras (puede picar múltiples veces).',
            'imagenes' => [
                [
                    'archivo' => 'Vespa_crabro_abdomen.jpg',
                    'descripcion' => 'Abdomen mostrando el patrón de bandas característico.',
                    'detalle_extendido' => 'El abdomen presenta el característico patrón de bandas amarillas y negras. Es más ancho en su parte media y se afila hacia el extremo. El aguijón de las hembras es liso (no barbado), lo que les permite picar múltiples veces. Los segmentos abdominales están bien definidos y presentan una fina pubescencia. El abdomen puede expandirse considerablemente después de alimentarse.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Dos pares de alas de color amarillo-anaranjado.',
            'tipo' => 'Alas plegadas longitudinalmente en reposo, de color ámbar.',
            'vuelo' => 'Vuelo potente y ruidoso, con aleteo audible.',
            'imagenes' => [
                [
                    'archivo' => 'Vespa_crabro_alas.jpg',
                    'descripcion' => 'Alas mostrando el color ámbar característico.',
                    'detalle_extendido' => 'Las alas son de color ámbar amarillento característico de la especie. Cuando están en reposo, se pliegan longitudinalmente sobre el dorso del abdomen. La venación es conspicua y diagnóstica. Las alas anteriores son significativamente más grandes que las posteriores. El vuelo produce un zumbido profundo y audible debido al tamaño y frecuencia del batido de alas.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa)',
            'duracion_total' => 'Anual. Solo las nuevas reinas sobreviven el invierno (Diapausa).',
            'habitos_alimenticios' => 'Adulto: Azúcares (néctar, savia). Larva: Proteínas (insectos masticados).',
            'etapas' => [
                'huevo' => [
                    'duracion' => '5 a 8 días',
                    'descripcion' => 'Puesto por la reina en celdas de papel dentro del nido.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Celdas del nido'
                ],
                'larva' => [
                    'duracion' => '10 a 14 días',
                    'descripcion' => 'Larva sin patas que se alimenta de insectos cazados y masticados por las obreras.',
                    'alimentacion' => 'Proteínas de insectos',
                    'habitat' => 'Celdas abiertas del nido'
                ],
                'pupa' => [
                    'duracion' => '10 a 14 días',
                    'descripcion' => 'Se sella la celda con un tapón de seda; la larva se transforma en pupa.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Celdas selladas (capullo)'
                ],
                'adulto' => [
                    'duracion' => 'Obreras: 3-5 semanas. Reina: 1 año (hibernación)',
                    'descripcion' => 'Emergen obreras, zánganos y nuevas reinas. La colonia se desintegra en otoño.',
                    'alimentacion' => 'Savia, frutas maduras y néctar',
                    'habitat' => 'Bosques y áreas rurales'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Monitoreo de nidos para prevenir el crecimiento en zonas de riesgo (solo si es necesario).'
                ],
                'larva' => [
                    'C' => '',
                    'Q' => 'X',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Control de nidos por profesionales si se encuentra en zonas habitadas, ya que son depredadores benéficos.'
                ],
                'pupa' => [
                    'C' => '',
                    'Q' => 'X',
                    'B' => '',
                    'M' => '',
                    'descripcion' => 'Remoción controlada y cuidadosa de nidos en otoño o invierno (cuando solo está la reina hibernando).'
                ],
                'adulto' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Fomentar su presencia por su rol como depredador de plagas de jardín (control biológico).'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 3. Bombus terrestris (Abejorro común) - Social (Anual)
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Hymenoptera',
        'slug' => 'Bombus_terrestris',
        'nombre_cientifico' => 'Bombus terrestris',
        'fecha' => '05-18-2023',
        'nombre_comun' => 'Abejorro común',
        'orden' => 'Hymenoptera',
        'familia' => 'Apidae',
        'descripcion' => 'El abejorro común es un polinizador esencial reconocido por su cuerpo robusto y peludo. Forma colonias anuales pequeñas (hasta 400 individuos) iniciadas por una reina que hiberna. Es crucial en la polinización por "zumbido" (buzz pollination), lo que lo hace muy eficiente para cultivos como el tomate y pimiento. Su actividad se extiende desde la primavera temprana hasta el otoño tardío gracias a su capacidad de termorregulación.',
        'habitat' => 'Praderas, jardines y áreas agrícolas',
        'imagen' => 'bombus terrestris.jpg',
        'distribucion' => 'Europa',
        'dieta' => 'Néctar y polen',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Bombus',
        'especie' => 'B. terrestris',
        'galeria_imagenes' => [
            [
                'archivo' => 'bombus terrestris.jpg',
                'descripcion' => 'Adulto de abejorro común recolectando polen.',
                'categoria' => 'adulto'
            ],
            [
                'archivo' => 'bombus_terrestris_nido.jpg',
                'descripcion' => 'Nido de abejorro con celdas de cera irregulares.',
                'categoria' => 'nido/larva'
            ],
        ],
          'morfologia' => [
        'cabeza' => [
            'estructura' => 'Redondeada, con densa pilosidad.',
            'caracteristicas' => 'Ojos compuestos grandes. Antenas geniculadas de 12 segmentos. Densa pilosidad en cabeza y cuerpo.',
            'piezas_bucales' => 'Tipo masticador-lamedor, con probóscide larga para flores profundas.',
            'imagenes' => [
                [
                    'archivo' => 'Bombus_terrestris_cabeza.jpg',
                    'descripcion' => 'Cabeza mostrando la densa pilosidad característica.',
                    'detalle_extendido' => 'La cabeza es redondeada y está cubierta de densa pilosidad que ayuda en la termorregulación y la recolección de polen. Los ojos compuestos son grandes y están rodeados de pelos. Las antenas son geniculadas y sensibles. La probóscide es relativamente larga, adaptada para acceder al néctar de flores con corolas profundas. Las mandíbulas son fuertes para manipular flores.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados.',
            'protorax' => 'Robusto, cubierto de pilosidad densa.',
            'patas' => 'Patas con corbículas (canastas de polen) en tibias posteriores.',
            'imagenes' => [
                [
                    'archivo' => 'Bombus_terrestris_torax.jpg',
                    'descripcion' => 'Torax mostrando la pilosidad y patas adaptadas.',
                    'detalle_extendido' => 'El torax es robusto y está cubierto de densa pilosidad que retiene el calor, permitiendo la actividad en climas fríos. Las patas posteriores tienen corbículas (canastas de polen) formadas por pelos rígidos curvados en las tibias, rodeadas de pelos largos que retienen el polen. Las patas anteriores y medias tienen peines y cepillos para recolectar y transferir polen.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Seis segmentos visibles, redondeado y peludo.',
            'apendices' => 'Aguijón en hembras (ovipositor modificado).',
            'imagenes' => [
                [
                    'archivo' => 'Bombus_terrestris_abdomen.jpg',
                    'descripcion' => 'Abdomen mostrando el patrón de coloración.',
                    'detalle_extendido' => 'El abdomen es redondeado y está cubierto de densa pilosidad con el característico patrón de bandas amarillas y negras (o anaranjadas en algunas subespecies). El extremo abdominal es blanco en esta especie. El aguijón de las hembras es liso y puede usarse repetidamente. Los segmentos abdominales son flexibles y permiten la expansión durante la alimentación.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Dos pares de alas membranosas acopladas.',
            'tipo' => 'Alas oscuras con venación característica.',
            'vuelo' => 'Vuelo potente con capacidad de termorregulación, batido a 130-240 Hz.',
            'imagenes' => [
                [
                    'archivo' => 'Bombus_terrestris_alas.jpg',
                    'descripcion' => 'Alas mostrando la venación oscura.',
                    'detalle_extendido' => 'Las alas son de color oscuro (fumadas) con venación conspicua. Presentan la célula radial característica de los ápidos. Las alas se acoplan durante el vuelo mediante ganillos (hamuli) creando una superficie aerodinámica única. La frecuencia de batido es variable y puede ser controlada para la termorregulación. Las alas se pliegan sobre el abdomen cuando el abejorro está en reposo.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa)',
            'duracion_total' => 'Anual. Solo la reina fecundada hiberna.',
            'habitos_alimenticios' => 'Adulto: Nectarívoro/Polinívoro. Larva: Néctar y polen transportado por obreras.',
            'etapas' => [
                'huevo' => [
                    'duracion' => '4 días',
                    'descripcion' => 'Puestos por la reina en pequeños grupos en celdas de cera.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Celdas dentro del nido subterráneo o en cavidades'
                ],
                'larva' => [
                    'duracion' => '1 semana',
                    'descripcion' => 'Larvas blancas que crecen juntas y son alimentadas directamente por las obreras (o la reina inicialmente).',
                    'alimentacion' => 'Mezcla de polen y néctar',
                    'habitat' => 'Celdas compartidas'
                ],
                'pupa' => [
                    'duracion' => '10 a 14 días',
                    'descripcion' => 'La larva teje un capullo de seda y se transforma en pupa.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Capullos de seda dentro del nido'
                ],
                'adulto' => [
                    'duracion' => 'Obreras: 2-6 semanas. Reina: 1 año (incluyendo hibernación)',
                    'descripcion' => 'Emergen obreras, zánganos y nuevas reinas. Excelentes polinizadores.',
                    'alimentacion' => 'Néctar y polen de una amplia variedad de flores',
                    'habitat' => 'Praderas y flores (adulto); bajo tierra (nido)'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Conservación del hábitat y zonas de anidación (madrigueras abandonadas).'
                ],
                'larva' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Evitar la labranza profunda que destruya los nidos subterráneos. Proporcionar refugios.'
                ],
                'pupa' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Proteger las celdas de pupa en los nidos durante las operaciones agrícolas.'
                ],
                'adulto' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Plantación de flores diversas durante todo el ciclo (primavera a otoño). Reducción drástica de pesticidas.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 4. Formica rufa (Hormiga roja de bosque) - Social (Perenne)
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Hymenoptera',
        'slug' => 'Formica_rufa',
        'nombre_cientifico' => 'Formica rufa',
        'fecha' => '07-30-2020',
        'nombre_comun' => 'Hormiga roja de bosque',
        'orden' => 'Hymenoptera',
        'familia' => 'Formicidae',
        'descripcion' => 'La hormiga roja de bosque es una especie social que construye grandes nidos en forma de montículos. Sus colonias son perennes y pueden albergar cientos de miles de individuos, con varias reinas. Son importantes depredadoras de plagas forestales (control biológico) y mantienen relaciones de mutualismo con pulgones por la melaza. Utilizan ácido fórmico como mecanismo de defensa. Son cruciales para la aireación del suelo y la dispersión de semillas (mirmecocoria).',
        'habitat' => 'Bosques y áreas abiertas',
        'imagen' => 'formica rufa.jpg',
        'distribucion' => 'Europa y Asia',
        'dieta' => 'Insectos, melaza de pulgones, néctar y hongos',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Formica',
        'especie' => 'F. rufa',
        'galeria_imagenes' => [
            [
                'archivo' => 'formica rufa.jpg',
                'descripcion' => 'Obreras de la hormiga roja sobre su montículo.',
                'categoria' => 'adulto'
            ],
            [
                'archivo' => 'formica_rufa_nido.jpg',
                'descripcion' => 'Gran montículo (hormiguero) de Formica rufa.',
                'categoria' => 'nido'
            ],
        ],
         'morfologia' => [
        'cabeza' => [
            'estructura' => 'Grande, cuadrangular, con mandíbulas prominentes.',
            'caracteristicas' => 'Ojos compuestos bien desarrollados. Antenas geniculadas de 11 segmentos. Ocelos presentes.',
            'piezas_bucales' => 'Tipo masticador, con mandíbulas fuertes para manipular alimento y construir.',
            'imagenes' => [
                [
                    'archivo' => 'Formica_rufa_cabeza.jpg',
                    'descripcion' => 'Cabeza mostrando las mandíbulas prominentes.',
                    'detalle_extendido' => 'La cabeza es grande y cuadrangular, de color rojo oscuro característico. Los ojos compuestos son bien desarrollados pero no muy grandes. Las antenas son geniculadas y muy móviles, importantes para la comunicación química. Las mandíbulas son fuertes y dentadas, utilizadas para transportar materiales, manipular alimento y defenderse. Los ocelos están presentes pero reducidos en las obreras.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados.',
            'protorax' => 'Robusto, con espinas propodeales.',
            'patas' => 'Patas largas y delgadas adaptadas para correr rápidamente.',
            'imagenes' => [
                [
                    'archivo' => 'Formica_rufa_torax.jpg',
                    'descripcion' => 'Torax mostrando las espinas propodeales.',
                    'detalle_extendido' => 'El torax es robusto y de color rojizo con el propódeo más oscuro. Presenta espinas propodeales bien desarrolladas, una característica del género Formica. Las patas son largas, delgadas y adaptadas para la carrera rápida. Los fémures y tibias están armados con espinas que ayudan en la locomoción y defensa. Las patas anteriores tienen peines para limpiar las antenas.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Siete segmentos visibles, unido al torax por peciolo.',
            'apendices' => 'Glándulas de ácido fórmico en el extremo abdominal.',
            'imagenes' => [
                [
                    'archivo' => 'Formica_rufa_abdomen.jpg',
                    'descripcion' => 'Abdomen mostrando el peciolo característico.',
                    'detalle_extendido' => 'El abdomen está unido al torax por un peciolo de un solo segmento (nodo) que le da gran movilidad. Es de color oscuro con algunos segmentos rojizos. Contiene glándulas que producen ácido fórmico, que puede ser expulsado como defensa. El abdomen es flexible y puede expandirse para almacenar líquidos alimenticios. En las reinas, el abdomen es más grande para alojar los ovarios.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Solo presentes en formas reproductivas (reinas y machos).',
            'tipo' => 'Alas membranosas, las anteriores más grandes.',
            'vuelo' => 'Vuelo nupcial, solo en formas reproductivas durante la dispersión.',
            'imagenes' => [
                [
                    'archivo' => 'Formica_rufa_alas.jpg',
                    'descripcion' => 'Alas de reina durante el vuelo nupcial.',
                    'detalle_extendido' => 'Las alas solo están presentes en las reinas vírgenes y machos durante el vuelo nupcial. Son membranosas, con las anteriores significativamente más grandes que las posteriores. La venación es característica de Formicidae. Después del apareamiento, las reinas pierden sus alas y los machos mueren. Las obreras son ápteras (sin alas) durante toda su vida.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa)',
            'duracion_total' => 'Colonia: Décadas (perenne). Obrera: Días a 1 año. Reina: Décadas.',
            'habitos_alimenticios' => 'Adulto: Omnívoro/Depredador. Larva: Insectos masticados y líquidos ricos en proteínas de las obreras.',
            'etapas' => [
                'huevo' => [
                    'duracion' => 'Pocos días',
                    'descripcion' => 'Puesto por la reina. Las larvas de casta son determinadas por la alimentación.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Cámaras de cría dentro del hormiguero'
                ],
                'larva' => [
                    'duracion' => '2 a 3 semanas',
                    'descripcion' => 'Larva blanca y sin patas. Alimentada directamente por las obreras (trofalaxis).',
                    'alimentacion' => 'Alimentos sólidos y líquidos procesados por las obreras',
                    'habitat' => 'Cámaras de cría (movidas según la temperatura)'
                ],
                'pupa' => [
                    'duracion' => '1 a 2 semanas',
                    'descripcion' => 'Encerrada en un capullo de seda (generalmente) o desnuda (menos común).',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Cámaras de cría (a menudo las pupas son llevadas a cámaras más cálidas).'
                ],
                'adulto' => [
                    'duracion' => 'Variable según la casta',
                    'descripcion' => 'Reinas, machos alados y obreras (sin alas) que realizan las tareas de la colonia.',
                    'alimentacion' => 'Azúcares (melaza, néctar) y proteínas (insectos cazados)',
                    'habitat' => 'Bosques (hormiguero y áreas de forrajeo)'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Protección del nido para asegurar la reproducción de la reina. Fomento como control biológico.'
                ],
                'larva' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Uso y dispersión de hormigas en programas de control de plagas forestales (depredación).'
                ],
                'pupa' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Manejo forestal que evite la destrucción accidental de los nidos-montículos.'
                ],
                'adulto' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Monitoreo de su actividad depredadora. Conservación de su hábitat forestal.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 5. Megascolia maculata (Avispa escólida gigante) - Solitaria/Parasitoide
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Hymenoptera',
        'slug' => 'Megascolia_maculata',
        'nombre_cientifico' => 'Megascolia maculata',
        'fecha' => '09-08-2022',
        'nombre_comun' => 'Avispa escólida gigante',
        'orden' => 'Hymenoptera',
        'familia' => 'Scoliidae',
        'descripcion' => 'La avispa escólida gigante es una especie solitaria y parasitoide. La hembra adulta busca larvas de escarabajos rinocerontes (Dynastinae) en troncos en descomposición, las paraliza con su veneno y deposita un huevo sobre ellas. La larva de la avispa se alimenta externamente del huésped. Los adultos son nectarívoros y no son agresivos hacia los humanos. Su ciclo biológico es importante para el control natural de escarabajos plaga.',
        'habitat' => 'Bosques y áreas abiertas',
        'imagen' => 'megascolia maculata.jpg',
        'distribucion' => 'Regiones cálidas de Europa y Asia',
        'dieta' => 'Adultos: Néctar. Larvas: Larvas de escarabajo rinoceronte.',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Megascolia',
        'especie' => 'M. maculata',
        'galeria_imagenes' => [
            [
                'archivo' => 'megascolia maculata.jpg',
                'descripcion' => 'Hembra adulta de la avispa escólida gigante.',
                'categoria' => 'adulto'
            ],
            [
                'archivo' => 'megascolia_maculata_caza.jpg',
                'descripcion' => 'Larva de escarabajo rinoceronte, huésped de la avispa escólida.',
                'categoria' => 'huésped'
            ],
        ],
         'morfologia' => [
        'cabeza' => [
            'estructura' => 'Grande, ancha, con fuertes mandíbulas.',
            'caracteristicas' => 'Ojos compuestos grandes. Antenas geniculadas cortas. Cabeza principalmente negra con marcas amarillas.',
            'piezas_bucales' => 'Tipo masticador, adaptado para manipular larvas de escarabajo.',
            'imagenes' => [
                [
                    'archivo' => 'Megascolia_maculata_cabeza.jpg',
                    'descripcion' => 'Cabeza mostrando las marcas amarillas características.',
                    'detalle_extendido' => 'La cabeza es grande y ancha, de color negro con marcas amarillas características en la frente y mandíbulas. Los ojos compuestos son grandes y negros. Las antenas son relativamente cortas y geniculadas. Las mandíbulas son fuertes y dentadas, utilizadas para excavar en busca de larvas de escarabajo y manipularlas. Los palpos están bien desarrollados para la exploración táctil.'
                ]
            ]
        ],
        'torax' => [
            'divisiones' => 'Protórax, Mesotórax y Metatórax fusionados.',
            'protorax' => 'Robusto, con densa pilosidad.',
            'patas' => 'Patas fuertes con espinas para excavar.',
            'imagenes' => [
                [
                    'archivo' => 'Megascolia_maculata_torax.jpg',
                    'descripcion' => 'Torax mostrando la pilosidad y patas excavadoras.',
                    'detalle_extendido' => 'El torax es robusto y está cubierto de densa pilosidad negra con algunas marcas amarillas. Las patas son fuertes y están armadas con espinas robustas adaptadas para excavar en suelo y madera podrida en busca de larvas de escarabajo. Los fémures son particularmente fuertes. Las tibias tienen espinas bien desarrolladas para el desplazamiento en sustratos irregulares.'
                ]
            ]
        ],
        'abdomen' => [
            'segmentos' => 'Seis segmentos visibles, con patrón de manchas amarillas.',
            'apendices' => 'Ovipositor largo y delgado para parasitar larvas.',
            'imagenes' => [
                [
                    'archivo' => 'Megascolia_maculata_abdomen.jpg',
                    'descripcion' => 'Abdomen mostrando el patrón de manchas amarillas.',
                    'detalle_extendido' => 'El abdomen es alargado y presenta el característico patrón de manchas amarillas sobre fondo negro. Es más delgado en las hembras para facilitar la inserción del ovipositor en galerías de escarabajos. El ovipositor es largo y delgado, adaptado para perforar y depositar huevos sobre larvas de escarabajo. Los segmentos abdominales son claramente visibles y presentan una fina pubescencia.'
                ]
            ]
        ],
        'alas' => [
            'pares' => 'Dos pares de alas de color naranja oscuro.',
            'tipo' => 'Alas de color naranja oscuro con venación conspicua.',
            'vuelo' => 'Vuelo pesado pero directo, con sonido zumbante audible.',
            'imagenes' => [
                [
                    'archivo' => 'Megascolia_maculata_alas.jpg',
                    'descripcion' => 'Alas mostrando el color naranja oscuro característico.',
                    'detalle_extendido' => 'Las alas son de color naranja oscuro o ámbar intenso, una característica distintiva de la especie. La venación es conspicua y las alas presentan celdas cerradas características de Scoliidae. Cuando están en reposo, las alas se pliegan longitudinalmente sobre el abdomen. El vuelo produce un zumbido profundo y audible debido al gran tamaño del insecto y la frecuencia del batido de alas.'
                ]
            ]
        ]
                ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa) - Parasitoide',
            'duracion_total' => '1 año o más (la larva pasa el invierno)',
            'habitos_alimenticios' => 'Adulto: Nectarívoro. Larva: Ectoparásita de larvas de escarabajos.',
            'etapas' => [
                'huevo' => [
                    'duracion' => 'Pocos días',
                    'descripcion' => 'Puesto individualmente sobre la larva paralizada de escarabajo rinoceronte.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Sobre el huésped, bajo tierra o en madera en descomposición'
                ],
                'larva' => [
                    'duracion' => 'Varios meses (incluye diapausa invernal)',
                    'descripcion' => 'Se alimenta del huésped paralizado. Gran crecimiento. Pasa el invierno.',
                    'alimentacion' => 'Larva de escarabajo rinoceronte (huésped)',
                    'habitat' => 'Dentro de la cámara del huésped'
                ],
                'pupa' => [
                    'duracion' => 'Semanas a meses (primavera/verano)',
                    'descripcion' => 'La larva forma un capullo y se transforma en pupa.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Dentro del capullo/cámara de cría'
                ],
                'adulto' => [
                    'duracion' => 'Semanas',
                    'descripcion' => 'Vuela en verano. Hembras buscan huéspedes. Machos buscan hembras.',
                    'alimentacion' => 'Néctar de flores, especialmente umbelíferas',
                    'habitat' => 'Áreas con flores y troncos en descomposición (búsqueda de huéspedes)'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Fomentar la presencia de adultos para el control de plagas de escarabajos (control biológico).'
                ],
                'larva' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Manejo forestal que mantenga troncos y madera en descomposición para el huésped (larva de escarabajo).'
                ],
                'pupa' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Evitar la alteración del suelo y la madera descompuesta donde pupan.'
                ],
                'adulto' => [
                    'C' => 'X',
                    'Q' => '',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Plantación de flores ricas en néctar para asegurar el alimento del adulto.'
                ]
            ]
        ]
    ],
    // ----------------------------------------------------------------------
    // 6. Hymenoptera (Orden general)
    // ----------------------------------------------------------------------
    [
        'nombre' => 'Hymenoptera',
        'slug' => 'Hymenoptera_orden',
        'nombre_cientifico' => 'Hymenoptera',
        'fecha' => '03-22-2023',
        'nombre_comun' => 'Orden Hymenoptera',
        'orden' => 'Hymenoptera',
        'familia' => 'Varias familias (Apidae, Vespidae, Formicidae, etc.)',
        'descripcion' => 'Los himenópteros constituyen uno de los órdenes de insectos más diversos y ecológicamente importantes, incluyendo avispas, abejas, abejorros y hormigas. Se caracterizan por poseer dos pares de alas membranosas unidas durante el vuelo, aparato bucal masticador o lamedor, y en las hembras, un ovipositor que puede estar modificado para la puesta de huevos, picadura o perforación. Presentan diversos sistemas sociales, desde especies solitarias hasta sociedades complejas con división de castas. Muchas especies son **parasitoides**, controlando poblaciones de otros insectos, mientras que las **abejas** son polinizadores esenciales para ecosistemas y agricultura. Su desarrollo es **holometábolo** (huevo, larva, pupa, adulto) y muchas muestran cuidado parental avanzado.',
        'habitat' => 'Diversos hábitats terrestres en todo el mundo',
        'imagen' => 'Hymenoptera.jpg',
        'distribucion' => 'Distribución mundial',
        'dieta' => 'Variada: néctar, polen, insectos, hongos, según la especie',
        'dominio' => 'Eukarya',
        'reino' => 'Animalia',
        'filo' => 'Arthropoda',
        'clase' => 'Insecta',
        'genero' => 'Varios géneros',
        'especie' => 'Múltiples especies',
        'galeria_imagenes' => [
            [
                'archivo' => 'Hymenoptera.jpg',
                'descripcion' => 'Ejemplares representativos del orden Hymenoptera (avispa, abeja, hormiga).',
                'categoria' => 'metamorfosis'
            ]
        ],
        'ciclo_vida' => [
            'tipo_metamorfosis' => 'Holometábola (Completa) - General',
            'duracion_total' => 'Extremadamente variable, desde semanas hasta años (en especies sociales)',
            'habitos_alimenticios' => 'Adulto: Generalmente nectarívoro o depredador. Larva: Predadora, fitófaga o alimentada por adultos.',
            'etapas' => [
                'huevo' => [
                    'duracion' => 'Variable',
                    'descripcion' => 'Puesto individualmente o en grupos, a menudo en el sitio de alimentación de la larva.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Específico de la especie: celdas, tejidos vegetales, o sobre un huésped.'
                ],
                'larva' => [
                    'duracion' => 'Fase de alimentación y crecimiento principal.',
                    'descripcion' => 'Generalmente ápoda (sin patas) y de color blanco, alimentada por adultos (sociales) o por el huésped/reserva (solitarias).',
                    'alimentacion' => 'Muy variable, según la especie y casta.',
                    'habitat' => 'Nidos, celdas o dentro/sobre el huésped.'
                ],
                'pupa' => [
                    'duracion' => 'Variable (a menudo la etapa de diapausa)',
                    'descripcion' => 'Pupa envuelta en un capullo o desnuda. Etapa inmóvil de transformación.',
                    'alimentacion' => 'No se alimenta',
                    'habitat' => 'Nidos, celdas o cámara de cría en el suelo/madera.'
                ],
                'adulto' => [
                    'duracion' => 'Variable',
                    'descripcion' => 'Alas membranosas, aparato bucal masticador o lamedor. Rol de reproducción, forrajeo y/o defensa.',
                    'alimentacion' => 'Azúcares (néctar, melaza) y/o proteínas (insectos)',
                    'habitat' => 'Diversos, dependiendo de la ecología de la especie.'
                ]
            ],
            'tabla_ciclo' => [
                'huevo' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Monitoreo de nidos tempranos y queens (reinas) fundadoras.'
                ],
                'larva' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Uso de himenópteros (avispas parasitoides) como agentes de control biológico contra otras plagas.'
                ],
                'pupa' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => '',
                    'M' => 'X',
                    'descripcion' => 'Protección del suelo y lugares de anidación donde se encuentran las pupas.'
                ],
                'adulto' => [
                    'C' => 'X',
                    'Q' => 'X',
                    'B' => 'X',
                    'M' => 'X',
                    'descripcion' => 'Conservación de hábitat, suministro de alimento (flores, agua) y reducción de insecticidas de amplio espectro.'
                ]
            ]
        ]
                ],
            ],
];
