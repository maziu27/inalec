document.addEventListener("DOMContentLoaded", () => {
    const banner = document.getElementById("cookie-banner");

    if (!getCookie("cookie_preferences")) {
        banner.classList.remove("hidden");
    } else {
        loadOptionalScripts();
    }
});

function acceptCookies() {
    const preferences = {
        analytics: document.getElementById("analiticas").checked,
        personalization: document.getElementById("personalizacion").checked,
        advertising: document.getElementById("publicitarias").checked
    };

    sendPreferences(preferences);
}

function rejectCookies() {
    const preferences = {
        analytics: false,
        personalization: false,
        advertising: false
    };

    sendPreferences(preferences);
}

function sendPreferences(preferences) {
    fetch("/cookie-consent", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify(preferences)
    })
    .then(res => res.json())
    .then(response => {
        if (response.status === 'ok') {
            document.getElementById("cookie-banner").classList.add("hidden");
            loadOptionalScripts();
        }
    })
    .catch(error => {
        console.error("Error al enviar las preferencias:", error);
    });
}

function getCookie(name) {
    const cookies = document.cookie.split("; ");
    for (let cookie of cookies) {
        const [key, value] = cookie.split("=");
        if (key === name) return value;
    }
    return null;
}

// Mejora de seguridad al establecer cookies desde JavaScript
function setCookie(name, value, days = 365) {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = `${name}=${value}; ${expires}; path=/; SameSite=Lax; Secure`;
}

function loadOptionalScripts() {
    const cookie = getCookie("cookie_preferences");
    if (!cookie) return;

    const preferences = JSON.parse(decodeURIComponent(cookie));

    if (preferences.analytics) {
        console.log("Cookies analíticas activadas");
        // Aquí podrías cargar scripts analíticos personalizados
    }

    if (preferences.personalization) {
        console.log("Cookies de personalización activadas");
        // Aquí podrías cargar scripts de personalización
    }

    if (preferences.advertising) {
        console.log("Cookies publicitarias activadas");
        // Aquí podrías cargar scripts de anuncios
    }
}
