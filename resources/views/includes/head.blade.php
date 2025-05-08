<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Meta para el envío del formulario de cookies -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="{{ 'js/cookies.js' }}"></script>

@vite('resources/css/app.css')   
<link rel="icon" type="image/ico" href="{{ asset('images/favicon.ico') }}">

<!-- AOS animate on scroll CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<title>INALEC - Instrumentación y aplicaciones electrónicas</title>
