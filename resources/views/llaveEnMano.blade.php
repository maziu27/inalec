@extends('layouts.app')
@section('content')
    <h1 class="text-6xl font-bold text-center mb-10 mt-10 text-[rgb(0,176,243)]">Llave en mano</h1>

    <!-- Contenedor para los proyectos en fila -->
    <div class="flex justify-center gap-8 flex-wrap">
        {{-- proyecto 1 --}}
        <div
            class="max-w-sm w-80 text-center mb-10 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow border border-gray-200 overflow-hidden">
            <a href="{{ route('montaje-cepsa') }}">
                <img src="{{ asset('images/imagenesproyectos/cepsa_elegancia.jpg') }}" alt="Montaje eléctrico para CEPSA"
                    class="w-full h-60 object-cover mb-4 rounded-t-2xl">

                <div class="px-6 pb-6">
                    <h3 class="text-lg font-bold text-sky-700 mb-3 hover:underline transition ">
                        <a href="{{ route('montaje-cepsa') }}">Montaje para nueva unidad de Stripper de Benceno en CEPSA Química Puente Mayorga
                        </a>
                    </h3>
                    <p class="text-sm text-gray-600 mb-4 pb-4">
                        Montaje eléctrico e instrumentación de la nueva unidad de Stripper de Benceno en CEPSA Química
                        Puente Mayorga.
                    </p>
                    <a href="{{ route('montaje-cepsa') }}"
                        class="inline-block bg-[rgb(0,176,243)] hover:bg-sky-600 text-white text-sm font-semibold py-2 px-5 mt-3 rounded-full transition">
                        Ver más
                    </a>
                </div>
            </a>
        </div>

        {{-- proyecto 2 --}}
        <div
            class="max-w-sm w-80 text-center mb-10 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow border border-gray-200 overflow-hidden">
            <a href="{{ route('estudio-fotovoltaico')}}">
                <img src="{{ asset('images/imagenesproyectos/indorama-1.jpg') }}"
                    alt="Montaje eléctrico para la planta de reciclaje PET de Indorama"
                    class="w-full h-60 object-cover mb-4 rounded-t-2xl">

                <div class="px-6 pb-6">
                    <h3 class="text-lg font-bold text-sky-700 mb-1 hover:underline transition">
                        <a href="{{ route('estudio-fotovoltaico')}}">Montaje eléctrico e instrumentación en la planta de
                            reciclaje de PET de Indorama
                        </a>
                    </h3>
                    <p class="text-sm text-gray-600 mb-4">
                        Nuestra participación en el montaje eléctrico e instrumentación de la planta de reciclaje de PET de
                        Indorama Ventures Química, ubicada en Guadarranque (Cádiz).

                    </p>
                    <a href="{{ route('estudio-fotovoltaico')}}"
                        class="inline-block bg-[rgb(0,176,243)] hover:bg-sky-600 text-white text-sm font-semibold py-2 px-5 rounded-full transition">
                        Ver más
                    </a>
                </div>
            </a>
        </div>

        {{-- proyecto 3 --}}
        <div
            class="max-w-sm w-80 text-center mb-10 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow   overflow-hidden">
            <a href="{{ route('logica-control-esfera') }}">
                <img src="{{ asset('images/imagenesproyectos/cepsa-agua.jpg') }}"
                    alt="Lógica de control para cinco compresores" class="w-full h-60 object-cover mb-4 rounded-t-2xl">

                <div class="px-6 pb-6">
                    <h3 class="text-lg font-bold text-sky-700 mb-8 hover:underline transition">
                        <a href="{{ route('logica-control-esfera') }}">Transformación del horno H-1 a gas en CEPSA Refinería
                            San Roque
                        </a>
                    </h3>
                    <p class="text-sm text-gray-600 mb-4 pb-5">
                        Lógica de actuación independiente para cinco compresores, gobernados por las señales de tres
                        transmisores de nivel de alta, garantizando una operación segura y eficiente.
                    </p>
                    <a href="{{ route('logica-control-esfera') }}"
                        class="inline-block bg-[rgb(0,176,243)] hover:bg-sky-600 text-white text-sm font-semibold py-2 px-5 rounded-full transition">
                        Ver más
                    </a>
                </div>
            </a>
        </div>
    </div>

    <!-- Contenedor para los botones de navegación -->
    <div class="flex justify-center space-x-2 mb-10">
        <a href="{{ route('estudiosIngenieria') }}"
            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
            Prev
        </a>
        <a href="{{ route('instrumentacion') }}"
            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
            Siguiente
        </a>
    </div>
@endsection