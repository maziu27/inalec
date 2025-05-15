@extends('layouts.app')

@section('content')
    <h1 class="text-6xl font-bold text-center mb-8 mt-10 text-[rgb(0,176,243)]">Documentos</h1>
    <h2 class="text-2xl text-center mb-15 mt-10 text-[rgb(0,176,243)]">En esta sección podrás encontrar documentos de interés y las certificaciones que tiene nuestra empresa.</h2>


    <div class="flex justify-center gap-10 mb-16 flex-wrap">
        <a href="{{ route('9001') }}" class="group w-56 hover:scale-105 transition-transform text-center">
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="{{ asset('images/imagenCertificadoThumbs/ISO-9001-RGB.png') }}" alt="Bureau Veritas ISO-9001" class="w-full h-36 object-contain mx-auto mb-4">
                <p class="font-semibold text-gray-700 group-hover:text-[rgb(0,176,243)] transition">Bureau Veritas ISO-9001</p>
            </div>
        </a>
        <a href="{{ route('14001') }}" class="group w-56 hover:scale-105 transition-transform text-center">
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="{{ asset('images/imagenCertificadoThumbs/ISO-14001-RGB.png') }}" alt="Bureau Veritas ISO-14001" class="w-full h-36 object-contain mx-auto mb-4">
                <p class="font-semibold text-gray-700 group-hover:text-[rgb(0,176,243)] transition">Bureau Veritas ISO-14001</p>
            </div>
        </a>
        <a href="{{ route('45001') }}" class="group w-56 hover:scale-105 transition-transform text-center">
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="{{ asset('images/imagenCertificadoThumbs/ISO-45001-RGB.png') }}" alt="Bureau Veritas ISO-45001" class="w-full h-36 object-contain mx-auto mb-4">
                <p class="font-semibold text-gray-700 group-hover:text-[rgb(0,176,243)] transition">Bureau Veritas ISO-45001</p>
            </div>
        </a>

        <a href="{{ route('bosques-sostenibles') }}" class="group w-56 hover:scale-105 transition-transform text-center">
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="{{ asset('images/imagenCertificadoThumbs/Logo_verde_horizontal_slogan.png') }}" alt="Bureau Veritas ISO-45001" class="w-full h-36 object-contain mx-auto mb-4">
                <p class="font-semibold text-gray-700 group-hover:text-[rgb(0,176,243)] transition">Reforestación Bosques Sostenibles</p>
            </div>
        </a>

        <a href="{{ route('politica-prevencion') }}" class="group w-56 hover:scale-105 transition-transform text-center">
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="{{ asset('images/imagenesInalec/Logo Vertical.png') }}" alt="Politica de prevencion" class="w-full h-36 object-contain mx-auto mb-4">
                <p class="font-semibold text-gray-700 group-hover:text-[rgb(0,176,243)] transition">Nuestra política de Prevención</p>
            </div>
        </a>

        <a href="{{ route('codigo-etico') }}" class="group w-56 hover:scale-105 transition-transform text-center">
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="{{ asset('images/imagenesInalec/Logo Vertical.png') }}" alt="Politica de prevencion" class="w-full h-36 object-contain mx-auto mb-4">
                <p class="font-semibold text-gray-700 group-hover:text-[rgb(0,176,243)] transition">Nuestro Código ético<br><br></p>
            </div>
        </a>
    </div>
@endsection