@extends('layouts.app')
@section('content')
<section class="max-w-6xl mx-auto px-4 py-12">
    <h1 class="text-4xl md:text-6xl font-bold text-center text-[rgb(0,176,243)] mb-10">
        Estudio fotovoltaico para el volcado de energía a diferentes plantas de Indorama
    </h1>

    <div class="bg-white rounded-2xl shadow-lg p-6 md:p-10 flex flex-col gap-8">
        <div class="w-full">
            <img 
                src="{{ asset('images/imagenesproyectos/indorama-san-roque.webp') }}" 
                alt="Estudio fotovoltaico Indorama" 
                class="w-full h-full max-h-[500px] object-cover rounded-xl"
            >
        </div>

        <div class="w-full">
            <div class="text-lg leading-relaxed text-gray-700 space-y-6">
                <p>
                    En INALEC, estamos comprometidos con impulsar la transición energética en el sector industrial, ofreciendo soluciones innovadoras que combinan eficiencia, sostenibilidad y fiabilidad. Un claro ejemplo de ello es el proyecto desarrollado para Indorama, donde llevamos a cabo la redacción de un estudio fotovoltaico para el volcado de energía renovable a diferentes subestaciones de sus plantas industriales.
                </p>

                <p>
                    El objetivo de este estudio fue analizar y definir la viabilidad técnica y económica de integrar energía solar fotovoltaica en las operaciones de Indorama, optimizando el aprovechamiento de sus infraestructuras eléctricas existentes. Nuestro trabajo abarcó todas las fases del diseño conceptual, prestando especial atención a los aspectos críticos de la conexión a red, la calidad de la energía y la gestión de la generación distribuida.
                </p>

                <div class="bg-gray-100 rounded-xl p-6">
                    <h2 class="text-xl font-semibold text-sky-700 mb-4">Entre los principales trabajos realizados destacan:</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>
                            Análisis de la capacidad de las subestaciones receptoras, evaluando su margen disponible para la absorción de energía renovable sin comprometer la estabilidad de la red interna.
                        </li>
                        <li>
                            Diseño preliminar de campos solares, incluyendo selección de ubicación, orientación de módulos, dimensionado de inversores y propuesta de sistemas de monitorización avanzados.
                        </li>
                        <li>
                            Estudio de protecciones eléctricas, adaptando los esquemas de protección existentes para incorporar la generación fotovoltaica de forma segura.
                        </li>
                        <li>
                            Evaluación de impacto en la calidad de red (tensiones, armónicos, factor de potencia), proponiendo soluciones correctoras en caso necesario.
                        </li>
                        <li>
                            Análisis económico preliminar de la inversión, retorno estimado y beneficios medioambientales, fundamentales para la toma de decisiones estratégicas de la empresa.
                        </li>
                    </ul>
                </div>

                <p>
                    Desde INALEC aportamos no solo nuestra sólida experiencia en ingeniería eléctrica e instrumentación industrial, sino también un enfoque proactivo y orientado a resultados. Nuestro estudio no se limitó a un mero planteamiento técnico, sino que ofreció a Indorama una visión completa de cómo incorporar energía limpia de manera rentable y segura, ayudando a avanzar hacia sus objetivos de sostenibilidad.
                </p>

                <p>
                    El trabajo se realizó en coordinación directa con los departamentos de ingeniería, operación y mantenimiento de las plantas, asegurando que todas las soluciones propuestas fueran integrables de forma realista en la operación diaria de la industria, minimizando tiempos de implantación y costes adicionales.
                </p>

                <p>
                    Gracias a proyectos como este, en INALEC consolidamos nuestro papel como socio de referencia para las grandes compañías industriales que buscan evolucionar hacia un modelo energético más eficiente, sostenible y competitivo.
                </p>
            </div>
        </div>
    </div>

    <div class="mt-10 text-center">
        <a href="{{ route('estudiosIngenieria') }}" class="inline-block bg-[rgb(0,176,243)] hover:bg-sky-600 text-white text-sm font-semibold py-2 px-5 rounded-full transition">
            Volver a estudios de ingeniería eléctrica
        </a>
    </div>
</section>
@endsection