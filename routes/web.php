<?php
use App\Http\Controllers\CookieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Páginas principales
|--------------------------------------------------------------------------
*/

Route::view('/home', 'index')->name('home');
Route::view('/proyectos', 'proyectos')->name('proyectos');
Route::view('/documentos', 'documentos')->name('documentos');
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/contacto', 'contacto')->name('contacto');
Route::view('/aviso-legal', 'avisoLegal')->name('avisoLegal');
Route::view('/politica-cookies','cookiePolitica')->name('cookiePolitica');

/*
|--------------------------------------------------------------------------
| Áreas de trabajo
|--------------------------------------------------------------------------
*/

Route::view('/estudiosIngenieria', 'estudiosIngenieria')->name('estudiosIngenieria');
Route::view('/llave-en-mano', 'llaveEnMano')->name('llaveEnMano');
Route::view('/instrumentacion', 'instrumentacion')->name('instrumentacion');
Route::view('/electricidad', 'electricidad')->name('electricidad');
Route::view('/sostenibilidad', 'sostenibilidad')->name('sostenibilidad');
Route::view('/otras-areas', 'otrasareas')->name('otrasareas');

/*
|--------------------------------------------------------------------------
| Proyectos específicos
|--------------------------------------------------------------------------
*/


Route::prefix('estudiosIngenieria')->group(function () {
    // proyecto 1 de estudios de ingenieria
    Route::view('/protocolo-seguridad-cepsa', 'proyectos.estudioIngenieria.protocolo-cepsa-quimica')
        ->name('protocolo-seguridad-cepsa');

    //proyecto 2 de estudios de ingenieria
    Route::view('/estudio-fotovoltaico','proyectos.estudioIngenieria.estudio-fotovoltaico')
        ->name('estudio-fotovoltaico');

    // proyecto 3 de estudios de ingenieria
    Route::view('/logica-control-esfera', 'proyectos.estudioIngenieria.logica-control-esfera')
        ->name('logica-control-esfera');
    
    // proyecto 4 de estudios de ingenieria
    Route::view('/mejoras-alumbrado-bio', 'proyectos.estudioIngenieria.mejoras-alumbrado-bio')
        ->name('mejoras-alumbrado-bio');
    
});

Route::prefix('llave-en-mano')->group(function () {
    // proyecto 1 de llave en mano
    Route::view('/montaje-cepsa', 'proyectos.llaveEnMano.montaje-cepsa')
        ->name('montaje-cepsa');

    // proyecto 2 de llave en mano
    Route::view('/proyecto-llave-en-mano-2', 'proyectos.llaveEnMano.proyecto-llave-en-mano-2')
        ->name('proyecto-llave-en-mano-2');
});



Route::prefix('instrumentacion')->group(function () {
  Route::view('/revamp-cepsa', '#')
      ->name('revamp-cepsa');
});

/*
|--------------------------------------------------------------------------
| Certificaciones
|--------------------------------------------------------------------------
*/

Route::view('/documentos/9001', 'certificaciones.9001')->name('9001');
Route::view('/documentos/14001', 'certificaciones.14001')->name('14001');
Route::view('/documentos/45001', 'certificaciones.45001')->name('45001');
Route::view('/documentos/bosques-sostenibles', 'certificaciones.bosques-sostenibles')->name('bosques-sostenibles');
Route::view('/documentos/politica-prevencion', 'certificaciones.politica-prevencion')->name('politica-prevencion');
Route::view('/documentos/ccodigo-etico', 'certificaciones.codigo-etico')->name('codigo-etico');

/*
|--------------------------------------------------------------------------
| Cookies
|--------------------------------------------------------------------------
*/


Route::post('/cookie-consent', [CookieController::class, 'store']);

Route::get('/cookie-consent', function () {
  return response()->json(['message' => 'GET request received for cookie consent']);
});

Route::get('/cookie-test', function () {
  return 'Cookie controller está funcionando';
});

/*
        Squidward was here
        .--'''''''''--.
     .'      .---.      '.
    /    .-----------.    \
   /        .-----.        \
   |       .-.   .-.       |
   |      /   \ /   \      |
    \    | .-. | .-. |    /
     '-._| | | | | | |_.-'
         | '-' | '-' |
          \___/ \___/
       _.-'  /   \  `-._
     .' _.--|     |--._ '.
     ' _...-|     |-..._ '
            |     |
            '.___.'
              | |
             _| |_
            /\( )/\
           /  ` '  \
          | |     | |
          '-'     '-'
          | |     | |
          | |     | |
          | |-----| |
       .`/  |     | |/`.
       |    |     |    |
       '._.'| .-. |'._.'
             \ | /
             | | |
             | | |
             | | |
            /| | |\
          .'_| | |_`.
          `. | | | .'
       .    /  |  \    .
      /o`.-'  / \  `-.`o\
     /o  o\ .'   `. /o  o\
     `.___.'       `.___.' 
*/