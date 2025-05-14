@extends('layouts.app')
@section('content')
<section class="max-w-6xl mx-auto px-4 py-12">
    <h1 class="text-4xl md:text-6xl font-bold text-center text-[rgb(0,176,243)] mb-10">
        Redacción de lógica de control de compresores en esferas de gas
    </h1>

    <div class="bg-white rounded-2xl shadow-lg p-6 md:p-10 flex flex-col gap-8">
        <div class="w-full">
            <img 
            src="{{ asset('images/imagenesproyectos/esferasgas-2.jpg') }}" 
                alt="Lógica de control en compresores de esferas de gas" 
                class="w-full h-full max-h-[500px] object-cover rounded-xl"
            >
        </div>

        <div class="w-full">
            <div class="text-lg leading-relaxed text-gray-700 space-y-6">
                <p>
                    En INALEC, estamos preparados para afrontar desafíos que exigen no solo conocimientos técnicos avanzados, sino también capacidad de análisis en situaciones de baja documentación y puesta en valor de soluciones tradicionales de control. Un claro ejemplo de esta experiencia fue la redacción y diseño de la lógica de control para la gestión de compresores asociados a esferas de almacenamiento de gas.
                </p>

                <p>
                    El proyecto consistió en desarrollar una lógica de actuación independiente para cinco compresores, gobernados por las señales de tres transmisores de nivel de alta, garantizando la operación segura y eficiente del sistema de almacenamiento. La particularidad y complejidad añadida de este trabajo residió en que:
                </p>

                <div class="bg-gray-100 rounded-xl p-6">
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>
                            La lógica de control era física, realizada íntegramente mediante relés y contactos, sin la intervención de autómatas programables (PLC).
                        </li>
                        <li>
                            La documentación existente en terreno era extremadamente limitada o nula, lo que obligó a nuestros técnicos a investigar in situ, analizar conexiones antiguas, verificar señales y deducir el funcionamiento de los sistemas existentes desde cero.
                        </li>
                    </ul>
                </div>

                <p>
                    Tras esta fase de diagnóstico detallado, procedimos a:
                </p>

                <div class="bg-gray-100 rounded-xl p-6">
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Rediseñar completamente las lógicas de arranque, paro y actuación en fallo para cada compresor de manera independiente.</li>
                        <li>Definir circuitos de seguridad, incluyendo fallos de transmisores, protecciones contra sobrellenado y fallos de enclavamiento de relés.</li>
                        <li>Elaborar nueva documentación técnica, planos de cableado, esquemas de control y manuales de funcionamiento para dejar una base sólida y accesible de cara al mantenimiento futuro.</li>
                        <li>Optimizar el cableado y agrupamiento de señales, mejorando la robustez operativa del sistema sin alterar el principio físico de control basado en relés.</li>
                    </ul>
                </div>

                <p>
                    Gracias a la intervención de INALEC, se logró dotar a la planta de una lógica de control fiable, robusta y perfectamente documentada, asegurando que cada compresor reaccionara de forma autónoma en función del nivel de gas en cada esfera, protegiendo la instalación y garantizando la continuidad de servicio.
                </p>

                <p>
                    Este proyecto pone de manifiesto una de las señas de identidad de INALEC: la capacidad de adaptarnos a cualquier entorno técnico, desde sistemas tradicionales de control físico hasta los más avanzados entornos automatizados, siempre ofreciendo un resultado de alta calidad y fiabilidad.
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