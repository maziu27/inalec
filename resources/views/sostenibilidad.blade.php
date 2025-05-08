@extends('layouts.app')

@section('content')
    <h1 class="text-6xl font-bold text-center mt-10 text-[rgb(0,176,243)]">Sostenibilidad</h1>
    <h2 class="text-2xl text-center mb-20 mt-10">En Inalec nos comprometemos a ser ultra mega super duper sostenibles</h2>

    <!-- Contenedor de proyectos con estilo tipo tarjetas -->
    <div class="max-w-sm mx-auto text-center mb-10 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow border border-gray-200 overflow-hidden">
    <img src="{{ asset('images/imagenesproyectos/Panoramica-navalacruz.jpg') }}" alt="Panorámica de Navalacruz" class="w-full h-60 object-cover mb-4 rounded-t-2xl">
    
    <div class="px-6 pb-6">
        <h3 class="text-lg font-bold text-sky-700 mb-1 hover:underline transition">
            <a href="{{ route('compensacion-Navalacruz') }}">Compensación voluntaria en la Navalacruz</a>
        </h3>
        <p class="text-sm text-gray-600 mb-4">
            Inalec colabora con Bosques Sostenibles en proyectos de reforestación.
        </p>
        <a href="{{ route('compensacion-Navalacruz') }}" class="inline-block bg-[rgb(0,176,243)] hover:bg-sky-600 text-white text-sm font-semibold py-2 px-5 rounded-full transition">
            Ver más
        </a>
    </div>
</div>

{{--     
        <!-- Proyecto 2 -->
        <div class="max-w-sm mx-auto text-center mb-10">
            <img src="{{ asset('images/imagenesproyectos/Panoramica-navalacruz.jpg') }}" alt="Panoramica de navalcruz" class="w-full h-40 object-contain mx-auto mb-4">
            <h3 class="text-base font-bold text-sky-600">
                <a href="#">Proyecto de reforestación 2</a>
            </h3>
            <p class="text-sm text-gray-700 mt-1">
                Inalec continúa promoviendo proyectos ambientales en nuevas zonas.
            </p>
            <div class="mt-3">
                <a href="#" class="inline-block bg-gray-300 hover:bg-gray-400 text-gray-800 text-sm font-semibold py-1.5 px-4 rounded-full transition">
                    Ver más
                </a>
            </div>
        </div>

        <!-- Proyecto 3 -->
        <div class="max-w-sm mx-auto text-center mb-10">
            <img src="{{ asset('images/imagenesproyectos/Panoramica-navalacruz.jpg') }}" alt="Panoramica de navalcruz" class="w-full h-40 object-contain mx-auto mb-4">
            <h3 class="text-base font-bold text-sky-600">
                <a href="#">Compensación medioambiental 3</a>
            </h3>
            <p class="text-sm text-gray-700 mt-1">
                Otro paso adelante hacia una huella de carbono neutral.
            </p>
            <div class="mt-3">
                <a href="#" class="inline-block bg-gray-300 hover:bg-gray-400 text-gray-800 text-sm font-semibold py-1.5 px-4 rounded-full transition">
                    Ver más
                </a>
            </div>
        </div>

        <!-- Proyecto 4 -->
        <div class="max-w-sm mx-auto text-center mb-10">
            <img src="{{ asset('images/imagenesproyectos/Panoramica-navalacruz.jpg') }}" alt="Panoramica de navalcruz" class="w-full h-40 object-contain mx-auto mb-4">
            <h3 class="text-base font-bold text-sky-600">
                <a href="#">Iniciativa sostenible 4</a>
            </h3>
            <p class="text-sm text-gray-700 mt-1">
                Apoyando el desarrollo sostenible en comunidades rurales.
            </p>
            <div class="mt-3">
                <a href="#" class="inline-block bg-gray-300 hover:bg-gray-400 text-gray-800 text-sm font-semibold py-1.5 px-4 rounded-full transition">
                    Ver más
                </a>
            </div>
        </div>
--}}
    </div> 

    <!-- Botones de navegación -->
    <div class="flex justify-center space-x-2 mb-10">
        <a href="{{ route('electricidad') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
            Prev
        </a>
        <a href="{{ route('otrasareas') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
            Siguiente
        </a>
    </div>
@endsection
