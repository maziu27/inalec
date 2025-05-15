@extends('layouts.app')
@section('content')
<section class="max-w-6xl mx-auto px-4 py-12">
    <h1 class="text-4xl md:text-6xl font-bold text-center text-[rgb(0,176,243)] mb-10">
        Requisición de montaje para mejorar el alumbrado en Bioenergía San Roque, Atlas Ceuta y CEPSA Alcalá de Henares
    </h1>

    <div class="bg-white rounded-2xl shadow-lg p-6 md:p-10 flex flex-col gap-8">
        <div class="w-full">
            <img 
                src="{{ asset('images/imagenesproyectos/bioenergia-san-roque.jpg') }}" 
                alt="Requisición de montaje de alumbrado industrial" 
                class="w-full h-full max-h-[500px] object-cover rounded-xl"
            >
        </div>

        <div class="w-full">
            <div class="text-lg leading-relaxed text-gray-700 space-y-6">
                <p>
                    En INALEC, trabajamos cada proyecto de forma personalizada, asegurando que las soluciones técnicas no solo cumplan con los objetivos de eficiencia y seguridad, sino que también respeten las especificaciones, normativas y estándares propios de cada cliente y ubicación.
                </p>

                <p>
                    Con esta filosofía abordamos la redacción de las requisiciones de montaje para las mejoras de alumbrado en las plantas de Bioenergía San Roque, Atlas Ceuta y CEPSA Alcalá de Henares.
                </p>

                <p>
                    El punto de partida fue la realización de estudios lumínicos detallados, que permitieron identificar las necesidades específicas de cada instalación: niveles mínimos de iluminación, zonas críticas, áreas de difícil acceso y requisitos particulares de seguridad industrial. A partir de esos estudios, nuestro equipo técnico trabajó en la elaboración de documentos de requisición de montaje totalmente adaptados, garantizando que la ejecución de los trabajos eléctricos respondiera de forma precisa a las necesidades detectadas.
                </p>

                <div class="bg-gray-100 rounded-xl p-6">
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>
                            Interpretación técnica de los estudios lumínicos, transformándolos en instrucciones claras para la instalación y conexión de nuevos sistemas de alumbrado.
                        </li>
                        <li>
                            Selección de materiales y equipos conforme a las normativas vigentes (Reglamento Electrotécnico de Baja Tensión, ATEX en zonas clasificadas, entre otros), y a las especificaciones internas de cada cliente.
                        </li>
                        <li>
                            Elaboración de planos de montaje y esquemas eléctricos, detallando cableados, protecciones, cuadros de control y sistemas de emergencia.
                        </li>
                        <li>
                            Adaptación a entornos industriales complejos, donde las condiciones de espacio, interferencias electromagnéticas o atmósferas explosivas requieren soluciones técnicas especializadas.
                        </li>
                        <li>
                            Coordinación con los responsables de mantenimiento y obra civil de cada planta, asegurando la viabilidad y eficacia de las soluciones propuestas.
                        </li>
                    </ul>
                </div>

                <p>
                    En INALEC, nos esforzamos para que cada proyecto de ingeniería no se limite a cumplir los mínimos requeridos, sino que añada valor real a las operaciones de nuestros clientes. En este caso, proporcionamos documentos de montaje que no solo aseguraban la correcta ejecución de las mejoras de alumbrado, sino que también optimizaban los recursos, minimizaban tiempos de parada y mejoraban la seguridad de los entornos de trabajo.
                </p>

                <p>
                    Nuestra experiencia en electricidad industrial e instrumentación, junto con nuestro profundo conocimiento de la normativa técnica y las exigencias de compañías líderes del sector, nos permite actuar como un socio de confianza para proyectos de cualquier tamaño y complejidad.
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