@extends('layouts.app') 

@section('content')
<h1 class="text-6xl md:text-4xl l:text-3xl font-bold text-center m-4 text-[rgb(0,176,243)]">
    Nuestro pólitica de prevención
</h1>

<div class="flex items-center justify-center min-h-screen px-4">
    <div class="w-full max-w-6xl shadow-lg rounded-lg overflow-hidden bg-white mb-10">
        <object 
            data="{{ asset('pdf/politica-prevencion.pdf') }}" 
            type="application/pdf" 
            class=" w-full min-h-screen sm:h-[600px] md:h-[700px] lg:h-[800px] xl:h-[90vh] 2xl:h-[95vh]">
            
            <p class="p-4">
                No se puede visualizar el PDF.
                <a href="{{ asset('pdf/politica-prevencion.pdf')}}" 
                   class="text-blue-500 underline hover:text-blue-700">
                    Descárgalo
                </a>
            </p>
        </object>
    </div>
</div>
@endsection