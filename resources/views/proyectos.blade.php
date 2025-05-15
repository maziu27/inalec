@extends('layouts.app')

@section('content')
<h1 class="text-6xl font-bold text-center mb-8 mt-10 text-[rgb(0,176,243)]">Nuestros proyectos</h1>

<h2 class="text-xl lg:text-xl md:text-l font-medium text-center max-w-4xl mx-auto mb-10 mt-4 text-[rgb(0,176,243)]">
    Realizamos todo tipo de instalaciones eléctricas y de instrumentación industrial, realizando proyectos,
    canalizaciones, CCM´s cuadros de distribución, instalaciones neumáticas e instalaciones de procesos.
    Nos especializamos en industria petroquímica, y estamos muy concienciados con la prevención de accidentes laborales,
    la calidad y fiabilidad de nuestro trabajo.
</h2>


    <div class="flex justify-center gap-10 mb-16 flex-wrap">
        <a href="{{ route('estudiosIngenieria') }}" class="group w-56 hover:scale-105 transition-transform text-center">
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="{{ asset('images/imagenesproyectos/ingenieria-electrica.png') }}" alt="Bureau Veritas ISO-9001"
                    class="w-full h-36 object-contain mx-auto mb-4">
                <p class="font-semibold text-gray-700 group-hover:text-[rgb(0,176,243)] transition">Ingeniería eléctrica
                </p>
            </div>
        </a>
        <a href="{{ route('llaveEnMano') }}" class="group w-56 hover:scale-105 transition-transform text-center">
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="{{ asset('images/imagenesproyectos/refineria-cepsa-puerto-algeciras.jpg') }}" alt="Bureau Veritas ISO-14001"
                    class="w-full h-36 object-contain mx-auto mb-4">
                <p class="font-semibold text-gray-700 group-hover:text-[rgb(0,176,243)] transition">LLave en mano
                </p>
            </div>
        </a>
        <a href="{{ route('instrumentacion') }}" class="group w-56 hover:scale-105 transition-transform text-center">
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="{{ asset('images/imagenesproyectos/revamping-planta-cepsa.jpg') }}" alt="Bureau Veritas ISO-45001"
                    class="w-full h-36 object-contain mx-auto mb-4">
                <p class="font-semibold text-gray-700 group-hover:text-[rgb(0,176,243)] transition">Instrumentación
                </p>
            </div>
        </a>

        <a href="{{ route('electricidad') }}" class="group w-56 hover:scale-105 transition-transform text-center">
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="{{ asset('images/imagenesproyectos/electricidad.jpg') }}"
                    alt="Bureau Veritas ISO-45001" class="w-full h-36 object-contain mx-auto mb-4">
                <p class="font-semibold text-gray-700 group-hover:text-[rgb(0,176,243)] transition">Electricidad</p>
            </div>
        </a>

        <a href="{{ route('otrasareas') }}" class="group w-56 hover:scale-105 transition-transform text-center">
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="{{ asset('images/imagenesproyectos/san-roque-refineria.jpg') }}" alt="Politica de prevencion"
                    class="w-full h-36 object-contain mx-auto mb-4">
                <p class="font-semibold text-gray-700 group-hover:text-[rgb(0,176,243)] transition">Otras áreas</p>
            </div>
        </a>

        
    </div>
@endsection