@extends('layouts.app')

@section('content')

    <section>
        <div class="w-full min-h-screen overflow-y-auto flex flex-col items-center justify-start bg-cover bg-center text-white font-bold px-4 py-10 space-y-16"
            style="background-image: url('{{ asset('images/imagenesInalec/Inalec 2012 1920x1080.jpg') }}'); background-attachment: fixed; background-size: cover;">

            <h1 class=" text-center sm:text-4xl text-7xl mt-90 mb-20" data-aos="zoom-in">Bienvenidos a Inalec S.L</h1>
            <h2 class="text-center text-2xl" data-aos="zoom-in">Fiabilidad, Compromiso y Seguridad</h2>

            <div class="max-w-4xl text-xl text-justify mt-60 space-y-10">
                <p class="mb-30" data-aos="fade-up">
                    Con más de 25 años de experiencia, en INALEC nos dedicamos a la realización de instalaciones de
                    instrumentación y electricidad industrial, con un enfoque especial en el sector petroquímico, donde la
                    seguridad, la especialización y la calidad son factores clave para el correcto funcionamiento de las
                    plantas.
                </p>

                <h1 class="text-center mb-20" data-aos="fade-up" data-aos-delay="100">¿Qué hacemos?</h1>
                <!-- Primera imagen con texto a la derecha -->
                <div class="flex flex-col md:flex-row items-center gap-6 mb-30" data-aos="fade-right" data-aos-delay="100">
                    <img class="w-full md:w-1/2 h-48 object-cover rounded shadow-lg"
                        src="{{ asset('images/imagenesproyectos/refineria-cepsa-puerto-algeciras.jpg') }}"
                        alt="Panoramica de Navalacruz">

                    <p class="text-white text-justify text-base md:text-lg max-w-lg px-2">
                        hola hola hola
                    </p>
                </div>

                <!-- Texto izquierda + imagen derecha -->
                <div class="flex flex-col md:flex-row-reverse items-center gap-6 mb-30" data-aos="fade-left"
                    data-aos-delay="200">
                    <img class="w-full md:w-1/2 h-48 object-cover rounded shadow-lg"
                        src="{{ asset('images/imagenesproyectos/revamping-planta-cepsa.jpg') }}" alt="Revamp planta cepsa">

                    <p class="text-white text-justify text-base md:text-lg max-w-lg px-2">
                        holaa holaa holaa
                    </p>
                </div>

                <!--  imagen con texto a la derecha -->
                <div class="flex flex-col md:flex-row items-center gap-6 mb-30" data-aos="fade-right" data-aos-delay="100">
                    <img class="w-full md:w-1/2 h-48 object-cover rounded shadow-lg"
                        src="{{ asset('images/imagenesproyectos/refineria-cepsa-puerto-algeciras.jpg') }}"
                        alt="Panoramica de Navalacruz">

                    <p class="text-white text-justify text-base md:text-lg max-w-lg px-2">
                        hola hola hola
                    </p>
                </div>

                <!-- Texto izquierda + imagen derecha -->
                <div class="flex flex-col md:flex-row-reverse items-center gap-6 mb-30" data-aos="fade-left"
                    data-aos-delay="200">
                    <img class="w-full md:w-1/2 h-48 object-cover rounded shadow-lg"
                        src="{{ asset('images/imagenesproyectos/revamping-planta-cepsa.jpg') }}" alt="Revamp planta cepsa">

                    <p class="text-white text-justify text-base md:text-lg max-w-lg px-2">
                        holaa holaa holaa
                    </p>
                </div>

            </div>

        </div>
    </section>

@endsection