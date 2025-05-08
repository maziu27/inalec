@extends('layouts.app')

@section('content')
    <section class="max-w-6xl mx-auto px-4 py-12">
        <h1 class="text-4xl md:text-6xl font-bold text-center text-[rgb(0,176,243)] mb-10">
            Compensación voluntaria en Navalacruz
        </h1>

        <div class="bg-white rounded-2xl shadow-lg p-6 md:p-10 flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/2 w-full">
                <img 
                    src="{{ asset('images/imagenesproyectos/Panoramica-navalacruz.jpg') }}" 
                    alt="Panorámica de Navalacruz" 
                    class="w-full h-auto rounded-xl object-cover"
                >
            </div>

            <div class="md:w-1/2 w-full">
                <p class="text-lg leading-relaxed text-gray-700">
                    Con esta iniciativa y las toneladas de CO₂ que hemos aportado, además de crear empleo local y fomentar la inserción 
                    laboral de personas en riesgo de exclusión social, el objetivo principal de este proyecto es restaurar mediante la 
                    plantación, conservación y mantenimiento, terrenos degradados, incluidos en el incendio que afectó a más de 22.000 hectáreas 
                    en agosto de 2021 en el entorno de la Sierra de la Paramera.

                    <a href="https://www.bosquessostenibles.com/proyectos-de-reforestacion-para-empresas/inalec/" target="_blank" class="text-blue-500 underline">Haz clic aquí para ver el proyecto completo</a>.
                </p>
            </div>
        </div>

            <a href="{{ route('sostenibilidad') }}" class="mt-10 inline-block bg-[rgb(0,176,243)] hover:bg-sky-600 text-white text-sm font-semibold py-2 px-5 rounded-full transition">
                Volver a Sostenibilidad
            </a>
    </section>
@endsection
