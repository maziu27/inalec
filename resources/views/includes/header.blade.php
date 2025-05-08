<header class="bg-white shadow-md py-4 px-6 flex justify-between items-center">
    <!--<h1 class="text-xl font-bold text-gray-800">INALEC</h1>-->
    <a href="{{ route('home') }}">
        <img src="{{ asset('images/imagenesInalec/Logo Horizontal.png') }}" alt="logo INALEC" class="flex relative h-12 md:h-16 w-auto">
    </a>
    <!-- Botón hamburguesa en móviles -->
    <button id="menu-toggle" class="md:hidden text-gray-600 focus:outline-none">
        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
        </svg>
    </button>

    <nav id="menu" class="hidden md:flex space-x-4">
        <ul class="flex space-x-4 ">
            <li><a href="{{ route('home') }}" class="text-[rgb(0,176,243)] hover:text-[#0095d9] font-bold text-xl">Inicio</a></li>
            <li><a href="{{ route('proyectos') }}" class="text-[rgb(0,176,243)] hover:text-[#0095d9] font-bold text-xl">Proyectos</a></li>
            <li><a href="{{ route('documentos') }}" class="text-[rgb(0,176,243)] hover:text-[#0095d9] font-bold text-xl">Documentos</a></li>
            <li><a href="{{ route('nosotros') }}" class="text-[rgb(0,176,243)] hover:text-[#0095d9] font-bold text-xl">Nosotros</a></li>
            <li><a href="{{ route('contacto') }}" class="text-[rgb(0,176,243)] hover:text-[#0095d9] font-bold text-xl">Contacto</a></li>
        </ul>
    </nav>

    <!-- Lista dropdown en móviles -->
    <div id="dropdown-menu" class="hidden absolute top-16 right-6 bg-white shadow-lg rounded-lg w-48 md:hidden">
        <ul class="text-center">
            <li><a href="{{ route('home') }}" class="block text-[rgb(0,176,243)] hover:text-[#0095d9] py-2">Inicio</a></li>
            <li><a href="{{ route('proyectos') }}" class="block text-[rgb(0,176,243)] hover:text-[#0095d9] py-2">Proyectos</a></li>
            <li><a href="{{ route('documentos') }}" class="block text-[rgb(0,176,243)] hover:text-[#0095d9] py-2">Documentos</a></li>
            <li><a href="{{ route('nosotros') }}" class="block text-[rgb(0,176,243)] hover:text-[#0095d9] py-2">Nosotros</a></li>
            <li><a href="{{ route('contacto') }}" class="block text-[rgb(0,176,243)] hover:text-[#0095d9] py-2">Contacto</a></li>
        </ul>
    </div>

    {{--
       _                        
       \`*-.                    
        )  _`-.                 
       .  : `. .                
       : _   '  \               
       ; *` _.   `*-._          
       `-.-'          `-.       
         ;       `       `.     
         :.       .        \    
         . \  .   :   .-'   .   
         '  `+.;  ;  '      :   
         :  '  |    ;       ;-. 
         ; '   : :`-:     _.`* ;
     .*' /  .*' ; .*`- +'  `*' 
      `*-*   `*-*  `*-*' --}}
</header>