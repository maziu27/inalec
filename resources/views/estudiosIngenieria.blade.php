@extends('layouts.app')
@section('content')
    <h1 class="text-6xl font-bold text-center mb-10 mt-10 text-[rgb(0,176,243)]">Estudios de ingeniería eléctrica</h1>

    <!-- Contenedor para los proyectos en fila -->
    <div class="flex justify-center gap-8 flex-wrap">
        {{-- proyecto 1 --}}
        <div
            class="max-w-sm w-80 text-center mb-10 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow border border-gray-200 overflow-hidden">
            <img src="{{ asset('images/imagenesproyectos/cepsa-quimica.jpg') }}" alt="revamping planta cepsa"
                class="w-full h-60 object-cover mb-4 rounded-t-2xl">

            <div class="px-6 pb-6">
                <h3 class="text-lg font-bold text-sky-700 mb-1 hover:underline transition ">
                    <a href="{{ route('protocolo-seguridad-cepsa') }}">Protocolos de actuación en prevención de riesgos y de seguridad industrial en CEPSA Química
                    </a>
                </h3>
                <p class="text-sm text-gray-600 mb-4 pb-4">
                    En INALEC, garantizamos la seguridad de los procesos industriales a través de la redacción de protocolos de
                    actuación para las plantas de CEPSA Química Puente Mayorga.
                </p>
                <a href="{{ route('protocolo-seguridad-cepsa') }}"
                    class="inline-block bg-[rgb(0,176,243)] hover:bg-sky-600 text-white text-sm font-semibold py-2 px-5 rounded-full transition">
                    Ver más
                </a>
            </div>
        </div>

        {{-- proyecto 2 --}}
        <div
            class="max-w-sm w-80 text-center mb-10 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow border border-gray-200 overflow-hidden">
            <img src="{{ asset('images/imagenesproyectos/indorama-san-roque.webp') }}" alt="estudio fotovoltaico indorama"
                class="w-full h-60 object-cover mb-4 rounded-t-2xl">

            <div class="px-6 pb-6">
                <h3 class="text-lg font-bold text-sky-700 mb-1 hover:underline transition">
                    <a href="{{ route('estudio-fotovoltaico')}}">Estudio fotovoltaico para el volcado de energía a diferentes subestaciones en las plantas de Indorama
                    </a>
                </h3>
                <p class="text-sm text-gray-600 mb-4">
                    En INALEC, nos comprometemos con impulsar la transición energética en el sector industrial, ofreciendo soluciones que combinan eficiencia, sostenibilidad y fiabilidad. 
                </p>
                <a href="{{ route('estudio-fotovoltaico')}}"
                    class="inline-block bg-[rgb(0,176,243)] hover:bg-sky-600 text-white text-sm font-semibold py-2 px-5 rounded-full transition">
                    Ver más
                </a>
            </div>
        </div>

        {{-- proyecto 3 --}}
        <div
            class="max-w-sm w-80 text-center mb-10 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow   overflow-hidden">
            <img src="{{ asset('images/imagenesproyectos/esferas-gas.jpg') }}" alt="revamping planta cepsa"
                class="w-full h-60 object-cover mb-4 rounded-t-2xl">

            <div class="px-6 pb-6">
                <h3 class="text-lg font-bold text-sky-700 mb-8 hover:underline transition">
                    <a href="{{ route('logica-control-esfera') }}">Lógica de Control para la Operación de Compresores de Almacenamiento en Esferas de Gas
                    </a>
                </h3>
                <p class="text-sm text-gray-600 mb-4 pb-5">
                    Lógica de actuación independiente para cinco compresores, gobernados por las señales de tres transmisores de nivel de alta, garantizando una operación segura y eficiente.
                </p>
                <a href="{{ route('logica-control-esfera') }}"
                    class="inline-block bg-[rgb(0,176,243)] hover:bg-sky-600 text-white text-sm font-semibold py-2 px-5 rounded-full transition">
                    Ver más
                </a>
            </div>
        </div>

        {{-- proyecto 4 --}}
        <div class="max-w-sm w-80 text-center mb-10 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow overflow-hidden">
            <img src="{{ asset('images/imagenesproyectos/bioenergia-san-roque.jpg') }}" alt="revamping planta cepsa"
                class="w-full h-60 object-cover mb-4 rounded-t-2xl">
        
            <div class="px-6 pb-6">
                <h3 class="text-lg font-bold text-sky-700 mb-1 hover:underline transition">
                    <a href="{{ route('logica-control-esfera') }}">
                        Requisición de montaje para mejoras en el alumbrado en Bioenergía San Roque, Atlas Ceuta y CEPSA Alcalá de Henares
                    </a>
                </h3>
                <p class="text-sm text-gray-600 mb-4 pb-5">
                    Abordamos las requisiciones de montaje para las mejoras de alumbrado en las plantas de Bioenergía San Roque, Atlas Ceuta y CEPSA Alcalá de Henares.
                </p>
                <a href="{{ route('logica-control-esfera') }}"
                    class="inline-block bg-[rgb(0,176,243)] hover:bg-sky-600 text-white text-sm font-semibold py-2 px-5 rounded-full transition">
                    Ver más
                </a>
            </div>
        </div>
        
    </div>

    <!-- Contenedor para los botones de navegación -->
    <div class="flex justify-center space-x-2 mb-10">
        <a href="{{ route('otrasareas') }}"
            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
            Prev
        </a>
        <a href="{{ route('llaveEnMano') }}"
            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
            Siguiente
        </a>
    </div>
@endsection
