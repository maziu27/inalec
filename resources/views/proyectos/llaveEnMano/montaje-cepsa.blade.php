@extends('layouts.app')
@section('content')
<section class="max-w-6xl mx-auto px-4 py-12">
    <h1 class="text-4xl md:text-6xl font-bold text-center text-[rgb(0,176,243)] mb-10">
        Montaje para nueva unidad de Stripper de Benceno en CEPSA Química Puente Mayorga
    </h1>

    <div class="bg-white rounded-2xl shadow-lg p-6 md:p-10 flex flex-col gap-8">
        <div class="w-full">
            <img 
                src="{{ asset('images/imagenesproyectos/cepsa_elegancia.jpg') }}" 
                alt="Montaje CEPSA Puente Mayorga" 
                class="w-full h-full max-h-[500px] object-cover rounded-xl"
            >
        </div>

        <div class="w-full">
            <div class="text-lg leading-relaxed text-gray-700 space-y-6">
                <p>
                    En INALEC, nuestra capacidad para abordar proyectos complejos de ejecución industrial llave en mano nos convierte en un aliado estratégico para las principales compañías del sector Oil & Gas y químico. Un claro ejemplo de ello es nuestra participación en el montaje eléctrico e instrumentación de la nueva unidad de Stripper de Benceno en CEPSA Química Puente Mayorga, un proyecto exigente que realizamos en colaboración estrecha con otros contratistas especializados.
                </p>

                <p>
                    Nuestro alcance incluyó desde la suministración parcial hasta el montaje completo de instalaciones eléctricas e instrumentación, abarcando:
                </p>

                <div class="bg-gray-100 rounded-xl p-6">
                    <h2 class="text-xl font-semibold text-sky-700 mb-4">Alcance de los trabajos realizados:</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Instalación de nuevas estaciones de maniobra para motores de bombas y aéreos.</li>
                        <li>Suministro, tendido y conexionado de cableado de fuerza, control y señalización, incluyendo variadores de frecuencia y actuadores motorizados.</li>
                        <li>Montaje de cajas de agrupamiento de señales y de armarios eléctricos, siguiendo los estándares de calidad y seguridad de CEPSA.</li>
                        <li>Iluminación completa de las nuevas zonas de trabajo con luminarias industriales de alta eficiencia.</li>
                        <li>Ejecución del sistema de puesta a tierra para equipos, estructuras y bandejas eléctricas.</li>
                        <li>Conexionado de instrumentación de proceso, incluyendo válvulas de control, transmisores de presión, temperatura, nivel, caudal y detectores de gases.</li>
                        <li>Trazado y montaje de líneas de aire de instrumentación, en coordinación con el montaje mecánico.</li>
                        <li>Asistencia técnica durante la puesta en marcha y realización de pruebas SAT (Site Acceptance Test).</li>
                    </ul>
                </div>

                <p>
                    Uno de los aspectos más destacables de este proyecto fue la coordinación fluida con otros contratistas. Desde INALEC demostramos nuestra capacidad para trabajar en equipos multidisciplinares, cumpliendo estrictamente con los plazos de obra, las restricciones de seguridad en planta y la adaptación continua a los cambios en el proyecto.
                </p>

                <p>
                    Todo el montaje se ejecutó respetando los estándares internacionales y las especificaciones técnicas de CEPSA, asegurando no solo la correcta instalación, sino también la máxima fiabilidad y facilidad de mantenimiento futuro. Además, nuestro enfoque estuvo orientado a minimizar las interferencias sobre las operaciones normales de planta, garantizando en todo momento la seguridad del personal y de las instalaciones.
                </p>

                <p>
                    Este proyecto refuerza la posición de INALEC como empresa de referencia en el sector industrial, capaz de asumir proyectos llave en mano en entornos exigentes, ofreciendo a nuestros clientes la tranquilidad de contar con un socio comprometido con la calidad, la seguridad y el cumplimiento de plazos.
                </p>
            </div>
        </div>
    </div>

    <div class="mt-10 text-center">
        <a href="{{ route('llaveEnMano') }}" class="inline-block bg-[rgb(0,176,243)] hover:bg-sky-600 text-white text-sm font-semibold py-2 px-5 rounded-full transition">
            Volver a llave en mano
        </a>
    </div>
</section>
@endsection