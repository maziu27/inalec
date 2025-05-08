@extends('layouts.app')

@section('content')
    <h1 class="text-4xl md:text-6xl font-bold text-center text-[rgb(0,176,243)] mb-10">Electricidad</h1>

    <!-- Contenedor para centrar los botones -->
    <div class="flex justify-center space-x-2 mb-70">
        <a href="{{ route('instrumentacion') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
            Prev
        </a>
        <a href="{{ route('otrasareas') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
            Siguiente
        </a>
    </div>
@endsection