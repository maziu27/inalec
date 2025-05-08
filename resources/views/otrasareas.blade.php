@extends('layouts.app')

@section('content')
    <h1 class="text-6xl font-bold text-center mt-10 text-[rgb(0,176,243)]">Otras areas</h1>

    <!-- Contenedor para centrar los botones -->
    <div class="flex justify-center space-x-2 mb-70">
        <a href="{{ route('electricidad') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
            Prev
        </a>
        <a href="{{ route('estudiosIngenieria') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
            Siguiente
        </a>
    </div>
@endsection