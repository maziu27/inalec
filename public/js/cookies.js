//se carga solo cuando la pagina entera se ha cargado
document.addEventListener("DOMContentLoaded", function() {
    //muestra el banner de cookies por fuerza
    //document.getElementById("cookie-banner").style.display = "block";

    // verifica si hay preferencias, si no, muestra banner
    fetch('/cookies/get')
        .then(response => response.json())
        .then(data => {
            if (!data.cookie_consent) {
                // si no hay preferencias, muestra el banner
                document.getElementById("cookie-banner").style.display = "block";
            }
        })
        .catch(error => console.error("Error en la solicitud de cookies:", error));
});

// funcion que guarda las preferencias cuando se llama
function acceptCookies() {
    let analiticas = document.getElementById("analiticas").checked;
    let personalizacion = document.getElementById("personalizacion").checked;
    let publicitarias = document.getElementById("publicitarias").checked;

    saveCookiesPreferences(analiticas, personalizacion, publicitarias);

}

function saveCookiesPreferences() {
    fetch('/cookies/set', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            analiticas,
            personalizacion,
            publicitarias
        })
    }).then(() => {
        document.getElementById("cookie-banner").style.display = "none"; // Ocultar el banner
        location.reload(); // Recargar la página para que las preferencias surtan efecto
    });
}