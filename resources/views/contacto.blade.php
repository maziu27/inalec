@extends('layouts.app')

@section('content')

<!-- Sección de contacto -->
<section class="py-12 px-4 bg-white">
    <div class="max-w-6xl mx-auto ">
        <h2 class="text-6xl font-bold text-center mb-8 text-[rgb(0,176,243)]">Contacta con INALEC</h2>

        <p class="text-center text-xl text-gray-600 mb-12">
            Puede contactar con Inalec S.L. a través de los datos de contacto que ponemos a su disposición.
        </p>

        <!-- Contenedor de las 5 secciones -->
        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-8 text-gray-700 text-center">
            <!-- Teléfono -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/icons2/chat-phone.png') }}" alt="Teléfono" class="w-10 h-10 mb-3">
                <h3 class="font-semibold text-lg">Teléfono</h3>
                <p>(+34) 956 698 667</p>
            </div>

            <!-- Correo -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/icons2/email-blue-bg-rm.png') }}" alt="Correo" class="w-10 h-10 mb-3">
                <h3 class="font-semibold text-lg">Correo</h3>
                <p>inalec@inalecsl.com</p>
            </div>

            <!-- LinkedIn -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/icons2/linkedin.png') }}" alt="Linkedin" class="w-10 h-10 mb-3">
                <h3 class="font-semibold text-lg">LinkedIn</h3>
                <a href="https://www.linkedin.com/company/inalec/posts/?feedView=all"
                   class="text-blue-700 hover:underline" target="_blank">
                    Nuestro perfil
                </a>
            </div>

            <!-- Google maps -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/icons2/google-maps-icon.png') }}" alt="Google maps" class="w-10 h-10 mb-3">
                <h3 class="font-semibold text-lg">Google Maps</h3>
                <a href="https://maps.app.goo.gl/WDuMDViemLtmmWmE9"
                   class="text-blue-700 hover:underline" target="_blank">
                    Como llegar a nosotros
                </a>
            </div>

            <!-- Dirección -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/icons2/pin-blue-bg-rm.png') }}" alt="Dirección" class="w-6 h-10 mb-3">
                <h3 class="font-semibold text-lg">Dirección</h3>
                <p>Avenida Granada nº3</p>
                <p>Polígono Industrial Campamento</p>
                <p>11314 Campamento (Cádiz)</p>
            </div>

            <!-- Horario -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/icons2/clock-blue.png') }}" alt="Horario" class="w-8 h-8 mb-3">
                <h3 class="font-semibold text-lg">Horario</h3>
                <p>Lunes a Viernes:</p>
                <p>08:00 - 15:00</p>
            </div>
        </div>

            <!-- Mapa -->
        <div class="mt-16">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3220.5430086141055!2d-5.376308823622093!3d36.17767370254277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0cc04bdedce4e9%3A0x9a90d80b2203f38d!2sINALEC%20(Instrumentaci%C3%B3n%20y%20aplicaciones%20electr%C3%B3nicas%20S.L.)!5e0!3m2!1ses!2ses!4v1743766039515!5m2!1ses!2ses"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

@endsection
