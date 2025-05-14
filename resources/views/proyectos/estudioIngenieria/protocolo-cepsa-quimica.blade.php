@extends('layouts.app')
@section('content')
<section class="max-w-6xl mx-auto px-4 py-12">
    <h1 class="text-4xl md:text-6xl font-bold text-center text-[rgb(0,176,243)] mb-10">
        Protocolos de actuación de seguridad en CEPSA Química
    </h1>

    <div class="bg-white rounded-2xl shadow-lg p-6 md:p-10 flex flex-col gap-8">
        <div class="w-full">
            <img 
                src="{{ asset('images/imagenesproyectos/cepsa-quimica.jpg') }}" 
                alt="Protocolos de seguridad CEPSA Química" 
                class="w-full h-full max-h-[500px] object-cover rounded-xl"
            >
        </div>
    
        <div class="w-full">
            <div class="text-lg leading-relaxed text-gray-700 space-y-6">
                <p>
                    En INALEC, la seguridad de los procesos industriales es uno de los pilares fundamentales de nuestro trabajo. Por ello, asumimos con gran responsabilidad la redacción de los protocolos de actuación de seguridad para las plantas de <b>CEPSA Química Puente Mayorga</b>.<br> Este proyecto supuso un reto técnico de primer nivel que abordamos combinando nuestra experiencia en ingeniería eléctrica, instrumentación y automatización de procesos.
                </p>

                <p>
                    Nuestra labor consistió en la elaboración de documentos detallados que describen las actuaciones de emergencia de todos los elementos críticos de la planta, incluyendo válvulas de control, válvulas de bloqueo, motores eléctricos, bombas, compresores y demás consumidores eléctricos. Estos protocolos definen de manera precisa cómo debe reaccionar cada dispositivo para garantizar la transición segura de la instalación ante situaciones imprevistas, ya sea una parada de emergencia, un fallo de energía o una evacuación.
                </p>

                <p>
                    Para lograrlo, realizamos un análisis exhaustivo de las instalaciones existentes, evaluando tanto los sistemas de control como los de potencia. Posteriormente, trabajamos en estrecha colaboración con los responsables de operación y mantenimiento de planta, entendiendo los riesgos particulares de cada unidad y proponiendo estrategias de actuación basadas en las mejores prácticas del sector.
                </p>

                <div class="bg-gray-100 rounded-xl p-6">
                    <h2 class="text-xl font-semibold text-sky-700 mb-4">El proyecto incluyó:</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Revisión de las lógicas de parada segura de sistemas de instrumentación y control (SIS).</li>
                        <li>Validación de las acciones de seguridad de acuerdo con normativas internacionales (IEC 61511, API RP 556).</li>
                        <li>Redacción de informes técnicos claros y concisos, aptos tanto para operadores como para personal técnico de mantenimiento.</li>
                        <li>Propuesta de mejoras en los sistemas de actuación de emergencia para aumentar la robustez operativa.</li>
                    </ul>
                </div>

                <p>
                    Además, desde INALEC aportamos una visión práctica, proponiendo soluciones fáciles de implementar que optimizan el tiempo de respuesta en situaciones críticas, minimizando riesgos para el personal, las instalaciones y el medio ambiente.
                </p>

                <p>
                    Este proyecto refleja el compromiso de INALEC no solo con la excelencia técnica, sino también con la seguridad industrial, ayudando a grandes compañías como CEPSA a cumplir con los más exigentes estándares de operación segura. Gracias a nuestro enfoque de ingeniería integrada y personalizada, logramos entregar protocolos de seguridad que no son solo documentos, sino herramientas vivas que mejoran el día a día de las plantas industriales.
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
