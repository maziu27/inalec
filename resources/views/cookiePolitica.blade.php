@extends('layouts.app')
@section('content')
<div class="max-w-6xl mx-auto px-4 py-8 text-gray-800">
    <h1 class="text-4xl font-bold text-center text-blue-600 mb-8">Política de Cookies</h1>

    <section class="mb-8">
        <h2 class="text-2xl font-semibold mb-2">Definición de Cookies</h2>
        <p class="mb-4">
            Una cookie es un fichero que se descarga en su ordenador al acceder a determinadas páginas web. Las cookies permiten a una página web, entre otras cosas, almacenar y recuperar información sobre los hábitos de navegación de un usuario o de su equipo y, dependiendo de la información que contengan y de la forma en que utilice su equipo, pueden utilizarse para reconocer al usuario.
        </p>
        <p>
            La web de INSTRUMENTACIÓN Y APLICACIONES ELECTRÓNICAS, S.L.U. utiliza cookies propias y de terceros, todas en el dominio <strong>“inalecsl.com”</strong>.
        </p>
    </section>

    <section class="mb-8">
        <h2 class="text-2xl font-semibold mb-2">A. Tipos de Cookies</h2>

        <h3 class="text-xl font-semibold mb-1 mt-4">1. Según la entidad que las gestione:</h3>
        <ul class="list-disc list-inside mb-4">
            <li><strong>Cookies propias:</strong> Son aquellas que se envían al equipo terminal del usuario desde un equipo o dominio gestionado por el propio editor y desde el que se presta el servicio solicitado por el usuario.</li>
            <li><strong>Cookies de terceros:</strong> Son aquellas que se envían al equipo terminal del usuario desde un equipo o dominio que no es gestionado por el editor, sino por otra entidad que trata los datos obtenidos a través de las cookies.</li>
        </ul>

        <h3 class="text-xl font-semibold mb-1">2. Según su finalidad:</h3>
        <ul class="list-disc list-inside mb-4">
            <li><strong>Cookies técnicas:</strong> Permiten al usuario la navegación y utilización de diferentes opciones o servicios de la web.</li>
            <li><strong>Cookies de análisis:</strong> Permiten el seguimiento y análisis del comportamiento de los usuarios.</li>
            <li><strong>Cookies de personalización:</strong> Almacenan información sobre hábitos de navegación para desarrollar perfiles y ofrecer contenidos personalizados.</li>
            <li><strong>Cookies de publicidad comportamental:</strong> Observan de forma continuada los hábitos de navegación del usuario para mostrarle publicidad relacionada con su perfil.</li>
        </ul>

        <h3 class="text-xl font-semibold mb-1">3. Según el plazo de tiempo que permanecen activadas:</h3>
        <ul class="list-disc list-inside mb-4">
            <li><strong>Cookies de sesión:</strong> Diseñadas para recabar y almacenar datos mientras el usuario accede a una página web.</li>
            <li><strong>Cookies persistentes:</strong> Los datos permanecen almacenados durante un periodo definido por el responsable de la cookie.</li>
        </ul>
    </section>

    <section class="mb-8">
        <h2 class="text-2xl font-semibold mb-2">Cookies empleadas en www.inalecsl.com</h2>
        <div class="overflow-x-auto">
            <table class="w-full table-auto border border-gray-300 text-left text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-4 border border-gray-300">Nombre</th>
                        <th class="p-4 border border-gray-300">Tipo</th>
                        <th class="p-4 border border-gray-300">Caducidad</th>
                        <th class="p-4 border border-gray-300">Descripción</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-300">
                    <tr>
                        <td class="p-4 border border-gray-300">XSRF-TOKEN</td>
                        <td class="p-4 border border-gray-300">Técnica</td>
                        <td class="p-4 border border-gray-300">Sesión</td>
                        <td class="p-4 border border-gray-300">Cookie generada por Laravel para proteger los formularios web contra ataques de tipo Cross-Site Request Forgery (CSRF).</td>
                    </tr>
                    <tr>
                        <td class="p-4 border border-gray-300">laravel_session</td>
                        <td class="p-4 border border-gray-300">Técnica</td>
                        <td class="p-4 border border-gray-300">Sesión</td>
                        <td class="p-4 border border-gray-300">Identifica una sesión de usuario para permitir su persistencia en la navegación dentro de la aplicación.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="mb-8">
        <h2 class="text-2xl font-semibold mb-2">B. Gestión de Cookies</h2>

        <h3 class="text-xl font-semibold mb-1 mt-4">1. ¿Por qué debo permitir las cookies?</h3>
        <p class="mb-4">
            Al permitir las cookies, podrás obtener una mejor experiencia en nuestro sitio web. Algunas funcionalidades básicas requieren cookies para poder operar correctamente.
        </p>

        <h3 class="text-xl font-semibold mb-1">2. ¿Qué pasa si bloqueo las cookies?</h3>
        <p class="mb-4">
            Si decides bloquear las cookies, es posible que algunas secciones del sitio web no funcionen correctamente, lo que restringirá tu experiencia de navegación.
        </p>

        <h3 class="text-xl font-semibold mb-1">3. ¿Cómo puedo bloquear o permitir las cookies?</h3>
        <p class="mb-2">Puedes configurar tu navegador para permitir, bloquear o eliminar las cookies. A continuación te proporcionamos los enlaces según el navegador que utilices:</p>
        <ul class="list-disc list-inside text-blue-600 mb-4">
            <li><a href="http://support.google.com/chrome/bin/answer.py?hl=es&answer=95647" target="_blank" class="underline hover:text-blue-800">Chrome</a></li>
            <li><a href="http://windows.microsoft.com/es-es/windows7/how-to-manage-cookies-in-internet-explorer-9" target="_blank" class="underline hover:text-blue-800">Internet Explorer</a></li>
            <li><a href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-sitios-web-rastrear-preferencias" target="_blank" class="underline hover:text-blue-800">Firefox</a></li>
            <li><a href="http://support.apple.com/kb/ph5042" target="_blank" class="underline hover:text-blue-800">Safari</a></li>
            <li><a href="http://www.opera.com/help/tutorials/security/privacy/" target="_blank" class="underline hover:text-blue-800">Opera</a></li>
        </ul>
    </section>

    <section class="mb-8">
        <h2 class="text-2xl font-semibold mb-2">Privacidad y Tratamiento de Datos</h2>
        <p class="mb-4">
            La EMPRESA trata sus datos de carácter personal según lo establecido en el Reglamento (UE) 2016/679 del Parlamento Europeo y del Consejo, de 27 de abril de 2016 (RGPD), y la Ley Orgánica 3/2018. 
            La información sobre sus datos personales, conforme al artículo 13 del RGPD y la LO 3/2018, puede consultarla en nuestra 
            <a href="#" class="text-blue-600 underline hover:text-blue-800">Política de Privacidad</a>.
        </p>
    </section>

    <section>
        <h2 class="text-2xl font-semibold mb-2">Acceso a Datos</h2>
        <p class="mb-2">
            Las cookies de nuestro sitio web son utilizadas por:
        </p>
        <ul class="list-disc list-inside mb-4">
            <li>INSTRUMENTACIÓN Y APLICACIONES ELECTRÓNICAS, S.L.U., con CIF B11461787, con domicilio en Avda. Granada Núm. 3 – 11314 Ciudad San Roque (Cádiz).</li>
            <li>GOOGLE INC., 1600 Amphitheatre Parkway, Mountain View (California), CA 94043, Estados Unidos.</li>
        </ul>
    </section>
</div>
@endsection