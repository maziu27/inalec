@extends('layouts.app')

@section('content')
    <section class="max-w-6xl mx-auto px-4 py-12">
        <h1 class="text-4xl md:text-6xl font-bold text-center text-[rgb(0,176,243)] mb-10">
            Estudio fotovoltaico para el volcado de energía a diferentes subestaciones en las plantas de Indorama
        </h1>

        <div class="bg-white rounded-2xl shadow-lg p-6 md:p-10 flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/2 w-full">
                <img 
                    src="{{ asset('images/imagenesproyectos/indorama-san-roque.webp') }}" 
                    alt="Indorama ventures san roque" 
                    class="w-full h-auto rounded-xl object-cover">
            </div>

            <div class="md:w-1/2 w-full">
                <p class="text-lg leading-relaxed text-gray-700">
                    <section class="max-w-4xl mx-auto px-4 py-12">

                        <p class="text-gray-700 text-base md:text-lg mb-6">
                            En INALEC, estamos preparados para afrontar desafíos que exigen no solo conocimientos técnicos avanzados,
                            sino también capacidad de análisis en situaciones de baja documentación y puesta en valor de soluciones
                            tradicionales de control.
                        </p>
                
                        <p class="text-gray-700 text-base md:text-lg mb-6">
                            Un claro ejemplo fue la redacción y diseño de la lógica de control para la gestión de compresores asociados a
                            esferas de almacenamiento de gas. El proyecto consistió en desarrollar una lógica de actuación independiente
                            para cinco compresores, gobernados por las señales de tres transmisores de nivel alto, garantizando una
                            operación segura y eficiente.
                        </p>
                
                        <div class="bg-gray-100 rounded-xl p-6 mb-6">
                            <h2 class="text-xl font-semibold text-sky-700 mb-4">Particularidades del proyecto</h2>
                            <ul class="list-disc list-inside text-gray-700 space-y-2">
                                <li>
                                    Lógica de control física, realizada íntegramente mediante relés y contactos, sin PLC.
                                </li>
                                <li>
                                    Documentación in situ limitada o nula: nuestros técnicos realizaron un análisis completo de las conexiones antiguas y funcionamiento del sistema.
                                </li>
                            </ul>
                        </div>
                
                        <div class="bg-gray-100 rounded-xl p-6 mb-6">
                            <h2 class="text-xl font-semibold text-sky-700 mb-4">Fases del trabajo</h2>
                            <ul class="list-disc list-inside text-gray-700 space-y-2">
                                <li>Rediseño completo de las lógicas de arranque, paro y fallos para cada compresor.</li>
                                <li>Definición de circuitos de seguridad: fallos de transmisores, sobrellenado, enclavamientos.</li>
                                <li>Elaboración de documentación técnica: planos, esquemas y manuales de funcionamiento.</li>
                                <li>Optimización de cableado y agrupación de señales sin alterar la lógica física original.</li>
                            </ul>
                        </div>
                
                        <p class="text-gray-700 text-base md:text-lg mb-6">
                            Gracias a la intervención de INALEC, se logró implementar una lógica de control fiable, robusta y bien
                            documentada. Cada compresor actúa de forma autónoma según el nivel de gas, protegiendo la instalación y
                            garantizando la continuidad del servicio.
                        </p>
                
                        <p class="text-gray-700 text-base md:text-lg">
                            Este proyecto refleja una de nuestras señas de identidad: adaptabilidad técnica, desde sistemas tradicionales
                            hasta entornos automatizados, ofreciendo siempre resultados de alta calidad y fiabilidad.
                        </p>
                    </section>
                </p>
            </div>
        </div>

            <a href="{{ route('estudiosIngenieria') }}" class="mt-10 inline-block bg-[rgb(0,176,243)] hover:bg-sky-600 text-white text-sm font-semibold py-2 px-5 rounded-full transition">
                Volver a estudios de ingeniería eléctrica
            </a>
    </section>
@endsection