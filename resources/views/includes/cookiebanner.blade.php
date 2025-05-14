 <!-- Banner de cookies -->
<div id="cookie-banner" class="fixed bottom-0 left-0 right-0 bg-[rgb(0,176,243)] text-white text-center py-4 px-6 hidden z-50">
    <p class="mb-4">En www.inalecsl.com utilizamos cookies y otros archivos de funcionalidad similar. Una cookie es una pequeña pieza
        de información que queda almacenada en tu navegador cuando visitas nuestra página. Con estas cookies aseguramos su correcta funcionalidad y recordamos tus
        preferencias para que, cuando nos visites de nuevo, obtengas una mejor experiencia online.</p>
    <a href="{{ route('cookiePolitica')}} " class="mb-5">Consulte aquí nuestra política de cookies</a>
    <div class="mb-4">
        <input type="checkbox" id="analiticas" class="mr-2">
        <label for="analiticas" class="mr-4">Cookies analíticas</label>

        <input type="checkbox" id="personalizacion" class="mr-2">
        <label for="personalizacion" class="mr-4">Cookies de personalización</label>

        <input type="checkbox" id="publicitarias" class="mr-2">
        <label for="publicitarias">Cookies publicitarias de terceros</label>
    </div>

    <div>
        <button onclick="acceptCookies()" class="bg-blue-500 text-white px-4 py-2 rounded mr-2 hover:bg-blue-600">ACEPTAR</button>
        <button onclick="rejectCookies()" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">RECHAZAR</button>
    </div>
</div> 