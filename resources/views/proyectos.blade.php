@extends('layouts.app')

@section('content')
    <h1 class="text-6xl font-bold text-center mb-8 mt-10 text-[rgb(0,176,243)]">Nuestros proyectos</h1>

    <div id="text" class="text-lg text-center flex justify-center mb-16 px-4">
        <p class="max-w-4xl leading-relaxed">
            Realizamos todo tipo de instalaciones eléctricas y de instrumentación industrial, realizando proyectos,
            canalizaciones, CCM´s cuadros de distribución, instalaciones neumáticas, instalaciones de procesos, etc.
            Nos especializamos en industria petroquímica, y estamos muy concienciados con la prevención de accidentes laborales,
            la calidad y fiabilidad de nuestro trabajo.
        </p>
    </div>

    <!-- Responsive grid layout -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 justify-items-center px-4 mb-16 max-w-screen-xl mx-auto">

        <a href="{{ route('estudiosIngenieria') }}" class="group w-full max-w-sm hover:scale-105 transition-transform text-center">
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="{{ asset('images/imagenesproyectos/ingenieria-electrica.png') }}" alt="Ingeniería eléctrica" class="w-full h-36 object-contain mx-auto mb-4">
                <p class="font-semibold text-gray-700 group-hover:text-yellow-400 transition">Ingeniería eléctrica</p>
            </div>
        </a>

        <a href="{{ route('llaveEnMano') }}" class="group w-full max-w-sm hover:scale-105 transition-transform text-center">
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="{{ asset('images/imagenesproyectos/refineria-cepsa-puerto-algeciras.jpg') }}" alt="Llave en mano" class="w-full h-36 object-contain mx-auto mb-4">
                <p class="font-semibold text-gray-700 group-hover:text-blue-600 transition">Llave en mano</p>
            </div>
        </a>

        <a href="{{ route('instrumentacion') }}" class="group w-full max-w-sm hover:scale-105 transition-transform text-center">
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="{{ asset('images/imagenesproyectos/revamping-planta-cepsa.jpg') }}" alt="Instrumentación" class="w-full h-36 object-contain mx-auto mb-4">
                <p class="font-semibold text-gray-700 group-hover:text-green-600 transition">Instrumentación</p>
            </div>
        </a>

        <a href="{{ route('electricidad') }}" class="group w-full max-w-sm hover:scale-105 transition-transform text-center">
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="{{ asset('images/imagenesproyectos/electricidad.jpg') }}" alt="Electricidad" class="w-full h-36 object-contain mx-auto mb-4">
                <p class="font-semibold text-gray-700 group-hover:text-yellow-600 transition">Electricidad</p>
            </div>
        </a>

        <a href="{{ route('otrasareas') }}" class="group w-full max-w-sm hover:scale-105 transition-transform text-center">
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="{{ asset('images/imagenesproyectos/san-roque-refineria.jpg') }}" alt="Otras áreas" class="w-full h-36 object-contain mx-auto mb-4">
                <p class="font-semibold text-gray-700 group-hover:text-purple-600 transition">Otras áreas</p>
            </div>
        </a>
    </div>
@endsection