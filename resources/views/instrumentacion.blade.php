@extends('layouts.app')

@section('content')
    <h1 class="text-6xl font-bold text-center mb-10 mt-10 text-[rgb(0,176,243)]">Instrumentación</h1>

    <!-- Contenedor de proyectos con estilo tipo tarjetas -->
    <!--<div class="max-w-sm mx-auto text-center mb-10 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow border border-gray-200 overflow-hidden">
        <img src="#" alt="revamping planta cepsa"
            class="w-full h-60 object-cover mb-4 rounded-t-2xl">

        <div class="px-6 pb-6">
            <h3 class="text-lg font-bold text-sky-700 mb-1 hover:underline transition">
                <a href="#">Mejora planta HDA-I en Cepsa Química</a>
            </h3>
            <p class="text-sm text-gray-600 mb-4">
                Se mejora la planta de fabricación de disolventes HDA-I en CEPSA Química Puente Mayorga
            </p>
            <a href="#"
                class="inline-block bg-[rgb(0,176,243)] hover:bg-sky-600 text-white text-sm font-semibold py-2 px-5 rounded-full transition">
                Ver más
            </a>
        </div>
    </div> -->
    

    <!-- Contenedor para centrar los botones -->
    <div class="flex justify-center space-x-2 mb-10 ">
        <a href="{{ route('llaveEnMano') }}"
            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
            Prev
        </a>
        <a href="{{ route('electricidad') }}"
            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
            Siguiente
        </a>
    </div>
@endsection