<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body class="flex flex-col min-h-screen">

@include('includes.cookiebanner')
@include('includes.header')
@yield('content')
@include('includes.footer')

{{-- boton de menu hamburguesa de header --}}
<script src="{{ asset('js/menu-toggle.js') }}"></script>

<!-- AOS animation on scroll JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000, // duración en milisegundos
    once: false,    // si es true, solo se anima una vez
  });
</script>
</body>
</html>