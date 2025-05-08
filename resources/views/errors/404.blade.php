@extends('layouts.app')
@section('content')
    <h1 class="text-4xl md:text-6xl font-bold text-center text-[rgb(0,176,243)] mt-10">Error 404: página no encontrada</h1>
    <p class="text-center text-lg mt-4">Lo sentimos, la página que buscas no existe o ha sido movida.</p>
    <a href="{{ route('home') }}" class="mt-10 text-center text-[rgb(0,176,243)]">
            Volver a la página principal
        </a>
@endsection