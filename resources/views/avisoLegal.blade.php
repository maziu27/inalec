@extends('layouts.app')
@section('content')
    <!--METER LINKS EN APARTADOS 3 Y 8 -->
    <h1 class="text-6xl font-bold text-center mt-10 text-[rgb(0,176,243)]">Aviso Legal</h1>

    <div class="container mx-auto px-4 py-8">
        <p class="mb-4">
            El sitio web <a href="https://www.inalecsl.com" class="text-blue-500">www.inalecsl.com</a> (en adelante, el
            “Sitio Web”) es propiedad de INSTRUMENTACIÓN Y APLICACIONES ELECTRÓNICAS, S.L.U. (en adelante, la “EMPRESA”),
            con domicilio social en Avda. Granada Núm. 3, Poligono Industrial Campamento, 11314 San Roque (Cádiz) y CIF B11461787. Inscrita en el
            Registro Mercantil de Cádiz, Tomo 1310, Folio 33, Hoja CA-16772.
        </p>
        <p class="mb-4">
            La EMPRESA le da la bienvenida y le invita a leer atentamente las Condiciones Generales de Uso de este Sitio Web
            (en adelante, las “Condiciones Generales de Uso”) que describen los términos y condiciones que serán aplicables
            a su navegación por el mismo, de conformidad con lo establecido en la normativa española de aplicación. Dado que
            la EMPRESA podría modificar en el futuro estas Condiciones de Uso, le recomendamos que las visite periódicamente
            para estar debidamente informado de los cambios realizados.
        </p>

        <h2 class="text-xl font-semibold mb-2">1. Objeto</h2>
        <p class="mb-4">
            La EMPRESA suministra el contenido y los servicios que están disponibles en el Sitio Web, con sujeción a las
            presentes Condiciones Generales de Uso así como a la política sobre tratamiento de datos personales (en
            adelante, la “Política de Protección de Datos”). El acceso a este Sitio Web o su utilización en cualquier forma
            le otorga la calificación de “Usuario” e implica la aceptación sin reservas de todas y cada una de las presentes
            Condiciones Generales de Uso, reservándose la EMPRESA el derecho a modificarlos en cualquier momento.
        </p>

        <h2 class="text-xl font-semibold mb-2">2. Servicios</h2>
        <p class="mb-4">
            A través del Sitio Web, la EMPRESA ofrece a los Usuarios la posibilidad de acceder a: Información sobre la
            empresa, sus datos de contacto, sus productos y servicios, sus tarifas, sus ofertas comerciales, su ubicación –
            Un apartado de contacto para realizar consultas facilitando sus datos de carácter personal – Links para acceder
            a redes sociales (en adelante los “Servicios”).
        </p>

        <h2 class="text-xl font-semibold mb-2">3. Privacidad y Tratamiento de Datos</h2>
        <p class="mb-4">
            La EMPRESA trata sus datos de carácter personal según lo establecido en el Reglamento (UE) 2016/679 del
            Parlamento Europeo y del Consejo, de 27 de abril de 2016, relativo a la protección de las personas físicas en lo
            que respecta al tratamiento de datos personales y a la libre circulación de estos datos y por el que se deroga
            la Directiva 95/46/CE (Reglamento general de protección de datos) y la LO 3/2018. La información sobre sus datos
            de carácter personal, según el artículo 13 de la sección 2 del citado reglamento y la LO 3/2018, puede
            consultarla en este 
            <a href="{{ route('cookiePolitica') }}" class="text-blue-600 underline hover:text-blue-800">
                LINK
            </a>.
        </p>

        <h2 class="text-xl font-semibold mb-2">4. Propiedad Industrial e Intelectual</h2>
        <p class="mb-4">
            El Usuario reconoce y acepta que todos los contenidos que se muestran en el Sitio Web y en especial, diseños,
            textos, imágenes, logos, iconos, botones, software, nombres comerciales, marcas, o cualesquiera otros signos
            susceptibles de utilización industrial y/o comercial están sujetos a derechos de Propiedad Intelectual y todas
            las marcas, nombres comerciales o signos distintivos, todos los derechos de propiedad industrial e intelectual,
            sobre los contenidos y/o cualesquiera otros elementos insertados en la página, que son propiedad exclusiva de la
            EMPRESA y/o de terceros, quienes tienen el derecho exclusivo de utilizarlos en el tráfico económico.
        </p>

        <h2 class="text-xl font-semibold mb-2">5. Obligaciones y Responsabilidades del Usuario del Sitio Web</h2>
        <p class="mb-4">
            El Usuario se compromete a hacer un uso adecuado y lícito del Sitio Web así como de los contenidos y servicios,
            de conformidad con: (i) la legislación aplicable en cada momento; (ii) las Condiciones Generales de Uso del
            Sitio Web; (iii) la moral y buenas costumbres generalmente aceptadas y (iv) el orden público.
        </p>

        <h2 class="text-xl font-semibold mb-2">6. Responsabilidades</h2>
        <p class="mb-4">
            La EMPRESA no garantiza el acceso continuado, ni la correcta visualización, descarga o utilidad de los elementos
            e informaciones contenidas en las páginas del sitio Web, que pueden verse impedidos, dificultados o
            interrumpidos por factores o circunstancias que están fuera de su control.
        </p>

        <h2 class="text-xl font-semibold mb-2">7. Hipervínculos</h2>
        <p class="mb-4">
            El Usuario se obliga a no reproducir de ningún modo, ni siquiera mediante un hiperenlace o hipervínculo, el
            Sitio Web de la EMPRESA, así como ninguno de sus contenidos, salvo autorización expresa y por escrito de la
            EMPRESA.
        </p>

        <h2 class="text-xl font-semibold mb-2">8. Cookies</h2>
        <p class="mb-4">
            Puede usted consultar la información sobre cookies accediendo a este 
            <a href="{{ route('cookiePolitica') }}" class="text-blue-600 underline hover:text-blue-800">
                LINK
            </a>.
        </p>

        <h2 class="text-xl font-semibold mb-2">9. Duración y terminación</h2>
        <p class="mb-4">
            La prestación del servicio del presente Sitio Web y los demás servicios tienen en principio una duración
            indefinida. No obstante, la EMPRESA podrá dar por terminada o suspender cualquiera de los servicios del portal.
        </p>

        <h2 class="text-xl font-semibold mb-2">10. Declaraciones y Garantías</h2>
        <p class="mb-4">
            En general, los contenidos y servicios ofrecidos en el Sitio Web tienen carácter meramente informativo.
        </p>

        <h2 class="text-xl font-semibold mb-2">11. Fuerza mayor</h2>
        <p class="mb-4">
            La EMPRESA no será responsable en todo caso de imposibilidad de prestar servicio, si ésta se debe a
            interrupciones prolongadas del suministro eléctrico, líneas de telecomunicaciones, conflictos sociales, huelgas,
            rebelión, explosiones, inundaciones, actos y omisiones del Gobierno, y en general todos los supuestos de fuerza
            mayor o de caso fortuito.
        </p>

        <h2 class="text-xl font-semibold mb-2">12. Resolución de controversias. Ley aplicable y jurisdicción</h2>
        <p class="mb-4">
            Las presentes Condiciones Generales de Uso, así como el uso del Sitio Web, se regirán por la legislación
            española. En caso de litigio, las partes contratantes acuerdan someterse a los Jueces y Tribunales de domicilio
            del consumidor, siempre que el mismo esté situado en territorio español.
        </p>
    </div>
@endsection