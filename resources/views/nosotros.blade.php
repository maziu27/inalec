@extends('layouts.app')

@section('content')
    <section class="max-w-6xl mx-auto px-4 py-10 text-center">
        <h1 class="text-6xl font-bold text-center mb-8 text-[rgb(0,176,243)]">Sobre Nosotros</h1>

        <div class="max-w-4xl mx-auto p-6">
            <p class="text-lg mb-4">
                Contamos con un equipo altamente cualificado y comprometido con los valores de nuestra empresa, enfocados en
                ofrecer un servicio de <strong>excelencia</strong> y garantizar la plena satisfacción de nuestros clientes.
            </p>
            <p class="text-lg mb-4">
                Nuestros principales colaboradores incluyen <strong>MOEVE</strong> e <strong>INDORAMA</strong>, con quienes
                desarrollamos la mayor parte de nuestros proyectos, trabajando de manera coordinada con ellos y las
                ingenierías responsables de implementar mejoras en sus instalaciones.
            </p>
            <p class="text-lg mb-4">
                También hemos prestado nuestros servicios a compañías como <strong>REPSOL</strong>,
                <strong>NATURGY</strong>, <strong>INERCO</strong>, <strong>HONEYWELL</strong>, <strong>CT
                    INGENIEROS</strong>, <strong>YOKOGAWA</strong>, <strong>ROTORK</strong>, <strong>AITESA</strong>,
                <strong>SGS</strong>, <strong>JOHN CRANE</strong> y otras entidades más pequeñas, a quienes atendemos con la
                misma dedicación, adaptándonos a sus necesidades y priorizando siempre la <strong>seguridad</strong> y la
                <strong>calidad</strong> en cada uno de nuestros trabajos.
            </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-8 items-center justify-center">
            <a href="https://www.moeveglobal.com/en" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('images/imagenesempresas/moeve_logo.svg') }}" alt="Moeve"
                    class="mx-auto h-20 object-contain">
            </a>
            <a href="https://www.indorama.com/" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('images/imagenesempresas/indorama.png') }}" alt="Indorama"
                    class="mx-auto h-20 object-contain">
            </a>
            <a href="https://www.repsol.com/" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('images/imagenesempresas/repsol.png') }}" alt="Repsol"
                    class="mx-auto h-20 object-contain">
            </a>
            <a href="https://www.naturgy.com/" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('images/imagenesempresas/naturgy.png') }}" alt="Naturgy"
                    class="mx-auto h-20 object-contain">
            </a>

            <a href="https://www.inerco.com/" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('images/imagenesempresas/inerco.png') }}" alt="Inerco"
                    class="mx-auto h-20 object-contain">
            </a>
            <a href="https://buildings.honeywell.com/es/es" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('images/imagenesempresas/honeywell-logo.png') }}" alt="Honeywell"
                    class="mx-auto h-20 object-contain">
            </a>
            <a href="https://www.ctingenieros.es/" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('images/imagenesempresas/CT-ingenieros-logo.png') }}" alt="CT ingenieros"
                    class="mx-auto h-20 object-contain">
            </a>
            <a href="https://www.yokogawa.com//" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('images/imagenesempresas/yokogawa-seeklogo.png') }}" alt="Yokogawa"
                    class="mx-auto h-20 object-contain">
            </a>
            <a href="https://www.rotork.com/" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('images/imagenesempresas/rotork-logo.png') }}" alt="Rotork"
                    class="mx-auto h-20 object-contain">
            </a>
            <a href="https://www.aitesa.com/" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('images/imagenesempresas/aitesa.png') }}" alt="Aitesa"
                    class="mx-auto h-20 object-contain">
            </a>
            <a href="https://www.sgs.com/" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('images/imagenesempresas/SGS.png') }}" alt="SGS" class="mx-auto h-20 object-contain">
            </a>
            <a href="https://www.johncrane.com/" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('images/imagenesempresas/john-crane-logo.svg') }}" alt="John Crane"
                    class="mx-auto h-20 object-contain">
            </a>

        </div>
    </section>
@endsection