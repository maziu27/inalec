@extends('layouts.app')
@section('content')
    <h1 class="text-4xl md:text-6xl font-bold text-center text-[rgb(0,176,243)] mt-10">Error 419: Sesión expirada </h1>
    <a href="{{ route('home') }}" class="mt-10 text-center text-[rgb(0,176,243)]">
            Volver a la página principal
        </a>
@endsection