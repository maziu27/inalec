@extends('layouts.app') 

@section('content')
<h1 class="text-4xl font-bold text-center m-4 text-[rgb(0,176,243)]">Certificación ISO-45001:2018</h1>

<div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-6xl shadow-lg rounded-lg overflow-hidden bg-white">
        <object 
            data="{{ asset('pdf/ISO 45001 hasta 28-07-2026_español.pdf') }}" 
            type="application/pdf" 
            class="w-full h-[900px]">
            <p class="p-4">
                No se puede visualizar el PDF
                <a href="{{ asset('pdf/ISO 45001 hasta 28-07-2026_español.pdf') }}" 
                class="text-blue-500 underline hover:text-blue-700">
                Descárgalo
                </a>
            </p>
        </object>
    </div>
</div>
@endsection