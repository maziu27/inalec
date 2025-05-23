@extends('layouts.app')

@section('content')

<section >

    <!-- Sección para el h1 -->
    <div class="w-full min-h-screen overflow-y-auto flex flex-col items-center justify-start bg-cover bg-center text-white font-bold px-4 py-10 space-y-16"
            style="background-image: url('{{ asset('images/imagenesInalec/Inalec 2012 1920x1080.jpg') }}'); background-attachment: fixed; background-size: cover;">

        <div class="flex flex-col items-center justify-center min-h-screen space-y-5">
            <h1 class="text-center text-4xl sm:text-5xl md:text-6xl lg:text-7xl mb-4" data-aos="zoom-in">
                Bienvenidos a Inalec S.L
            </h1>
            <h2 class="text-center text-2xl" data-aos="zoom-in">
                Fiabilidad, Compromiso y Seguridad
            </h2>
        </div>

        <div class="max-w-4xl text-xl text-justify mx-auto space-y-10">
            <p class="mb-10" data-aos="fade-up">
                Con más de 25 años de experiencia, en INALEC nos dedicamos a la realización de instalaciones de
                instrumentación y electricidad industrial, con un enfoque especial en el sector petroquímico, donde la
                seguridad, la especialización y la calidad son factores clave para el correcto funcionamiento de las plantas.
            </p>

            <h1 class="text-center mb-15 text-4xl" data-aos="fade-up" data-aos-delay="100">¿Qué hacemos?</h1>

            <!-- Bloques de imagen + texto -->
            <div class="flex flex-col md:flex-row items-center gap-6 mb-20" data-aos="fade-right" data-aos-delay="100">
                <img class="w-full md:w-1/2 h-48 object-cover rounded shadow-lg"
                     src="{{ asset('images/imagenesproyectos/refineria-cepsa-puerto-algeciras.jpg') }}" alt="Refinería Cepsa">
                <p class="text-white text-justify text-base md:text-lg max-w-lg px-2">
                    hola hola hola
                </p>
            </div>

            <div class="flex flex-col md:flex-row-reverse items-center gap-6 mb-20" data-aos="fade-left" data-aos-delay="200">
                <img class="w-full md:w-1/2 h-48 object-cover rounded shadow-lg"
                     src="{{ asset('images/imagenesproyectos/revamping-planta-cepsa.jpg') }}" alt="Revamp planta cepsa">
                <p class="text-white text-justify text-base md:text-lg max-w-lg px-2">
                    holaa holaa holaa
                </p>
            </div>

            <div class="flex flex-col md:flex-row items-center gap-6 mb-20" data-aos="fade-right" data-aos-delay="100">
                <img class="w-full md:w-1/2 h-48 object-cover rounded shadow-lg"
                     src="{{ asset('images/imagenesproyectos/refineria-cepsa-puerto-algeciras.jpg') }}" alt="Refinería Cepsa">
                <p class="text-white text-justify text-base md:text-lg max-w-lg px-2">
                    hola hola hola
                </p>
            </div>

            <div class="flex flex-col md:flex-row-reverse items-center gap-6 mb-20" data-aos="fade-left" data-aos-delay="200">
                <img class="w-full md:w-1/2 h-48 object-cover rounded shadow-lg"
                     src="{{ asset('images/imagenesproyectos/revamping-planta-cepsa.jpg') }}" alt="Revamp planta cepsa">
                <p class="text-white text-justify text-base md:text-lg max-w-lg px-2">
                    holaa holaa holaa
                </p>
            </div>

            <h1 class="text-center text-4xl mb-3" data-aos="fade-up" data-aos-delay="100"><a href="{{ route('proyectos') }}">Nuestros proyectos</a></h1>
            <p class="text-center text-2xl mb-15" data-aos="fade-up" data-aos-delay="100"><a href="{{ route('proyectos') }}">Clic aquí</a></p>

            <!-- Bloques de imagen + texto -->
            <div class="flex flex-col md:flex-row items-center gap-6 mb-20" data-aos="fade-right" data-aos-delay="100">
            
                <img class="w-full md:w-1/2 h-48 object-cover rounded shadow-lg"
                     src="{{ asset('images/imagenesproyectos/cepsa-quimica.jpg') }}" alt="Refinería Cepsa">
                <p class="text-white text-justify text-base md:text-lg max-w-lg px-2">
                    Ingeniería eléctrica
                </p>
            </div>

            <div class="flex flex-col md:flex-row-reverse items-center gap-6 mb-20" data-aos="fade-left" data-aos-delay="200">
                <img class="w-full md:w-1/2 h-48 object-cover rounded shadow-lg"
                     src="{{ asset('images/imagenesproyectos/revamping-planta-cepsa.jpg') }}" alt="Revamp planta cepsa">
                <p class="text-white text-justify text-base md:text-lg max-w-lg px-2">
                    Llave en mano
                </p>
            </div>

            <div class="flex flex-col md:flex-row items-center gap-6 mb-20" data-aos="fade-right" data-aos-delay="100">
                <img class="w-full md:w-1/2 h-48 object-cover rounded shadow-lg"
                     src="{{ asset('images/imagenesproyectos/refineria-cepsa-puerto-algeciras.jpg') }}" alt="Refinería Cepsa">
                <p class="text-white text-justify text-base md:text-lg max-w-lg px-2">
                    Instrumentación
                </p>
            </div>

            <div class="flex flex-col md:flex-row-reverse items-center gap-6 mb-20" data-aos="fade-left" data-aos-delay="200">
                <img class="w-full md:w-1/2 h-48 object-cover rounded shadow-lg"
                     src="{{ asset('images/imagenesproyectos/revamping-planta-cepsa.jpg') }}" alt="Revamp planta cepsa">
                <p class="text-white text-justify text-base md:text-lg max-w-lg px-2">
                    Electricidad
                </p>
            </div>

            <div class="flex flex-col md:flex-row items-center gap-6 mb-20" data-aos="fade-right" data-aos-delay="100">
                <img class="w-full md:w-1/2 h-48 object-cover rounded shadow-lg"
                     src="{{ asset('images/imagenesproyectos/refineria-cepsa-puerto-algeciras.jpg') }}" alt="Refinería Cepsa">
                <p class="text-white text-justify text-base md:text-lg max-w-lg px-2">
                    Otras áreas
                </p>
            </div>

        </div>
    </div>
</section>

@endsection