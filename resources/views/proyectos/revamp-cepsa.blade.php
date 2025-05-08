@extends('layouts.app')



@section('content')
    <section class="max-w-6xl mx-auto px-4 py-12">
        <h1 class="text-4xl md:text-6xl font-bold text-center text-[rgb(0,176,243)] mb-10">
            Mejora planta HDA-I en Cepsa Química
        </h1>

        <div class="bg-white rounded-2xl shadow-lg p-6 md:p-10 flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/2 w-full">
                <img 
                    src="{{ asset('images/imagenesproyectos/revamping-planta-cepsa.jpg') }}" 
                    alt="Revamp planta Moeve" 
                    class="w-full h-auto rounded-xl object-cover"
                >
            </div>

            <div class="md:w-1/2 w-full">
                <p class="text-lg leading-relaxed text-gray-700">
                    Se instalan 5000m de cable de instrumentación, una decena de cajas de agrupamiento y multitud de instrumentos, 
                    para mejorar la planta de HDA-I. Este proyecto se hizo coordinado con otras contratas encargadas de la obra civil y el montaje mecánico, 
                    y en tiempo record, ya que debido a una planificación ajustada y un retraso en los cables que suministraba el cliente, se redujo el tiempo previsto para el montaje de 8 semanas a la mitad, 
                    a pesar de ello, INALEC cumplió los plazos y la planta entró en funcionamiento en la fecha prevista.

                    <a href="https://www.moeveglobal.com/es/innovacion/proyectos/proyecto-quimica-puente-mayorga" target="_blank" class="text-blue-500 underline">Haz clic aquí para ver el proyecto completo</a>.
                </p>
            </div>
        </div>

            <a href="{{ route('instrumentacion') }}" class="mt-10 inline-block bg-[rgb(0,176,243)] hover:bg-sky-600 text-white text-sm font-semibold py-2 px-5 rounded-full transition">
                Volver a Instrumentación
            </a>
    </section>
@endsection