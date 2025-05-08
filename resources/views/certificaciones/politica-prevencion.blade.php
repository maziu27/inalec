@extends('layouts.app') 

@section('content')
<h1 class="text-4xl font-bold text-center m-4 text-[rgb(0,176,243)]">Política de Prevención</h1>

<div class="flex items-center justify-center min-h-screen ">
    <div class="w-full max-w-6xl shadow-lg rounded-lg overflow-hidden bg-white">
        <object 
            data="{{ asset('pdf/politica-prevencion.pdf') }}" 
            type="application/pdf" 
            class="w-full h-[900px]">
            <p class="p-4">
                No se puede visualizar el PDF
                <a href="{{ asset('pdf/politica-prevencion.pdf') }}" 
                class="text-blue-500 underline hover:text-blue-700">
                Descárgalo
                </a>
            </p>
        </object>
    </div>
</div>
@endsection