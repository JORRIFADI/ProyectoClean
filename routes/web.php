<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProyectsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\DatosEmpresaController;
use App\Http\Controllers\dashclientecontroller;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\dashservicioscontroller;
use App\Http\Controllers\dashproyectoscontroller;

use App\Http\Controllers\bannernosotroscontroller;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('dash.index');
});

Route::get('/dashboard', function () {
    return view('dash.index');
});




// Ruta del controlador para los cruds de las vistas 
Route::get('dashboard/index', [dashboardcontroller::class, 'index'])->name('dash.index');
Route::get('dashboard/nosotros', [dashboardcontroller::class, 'nosotros'])->name('nosotrosroute');
Route::get('dashboard/servicios', [dashboardcontroller::class, 'servicios'])->name('serviciosroute');
Route::get('dashboard/proyectos', [dashboardcontroller::class, 'proyectos'])->name('nosotrosroute');

Route::resource('carrusel', 'App\Http\Controllers\HomeController');

Route::resource('dashboard/datosnosotros', 'App\Http\Controllers\DatosAboutController');

Route::resource('dashboard/datosempresa', 'App\Http\Controllers\DatosEmpresaController');
Route::resource('dashboard/datoscliente', 'App\Http\Controllers\dashclientecontroller');
Route::resource('dashboard/datosservicios', 'App\Http\Controllers\dashservicioscontroller');
Route::resource('dashboard/datosproyectos', 'App\Http\Controllers\dashproyectoscontroller');
Route::resource('dashboard/datosbanner', 'App\Http\Controllers\bannernosotroscontroller');

// Ruta de conteoladores de las vitas de la pagina 

Route::get('/', HomeController::class)->name('index');

Route::get('/servicios', [ServicesController::class, 'services'])->name('servicios');

Route::get('/proyectos', [ProyectsController::class, 'proyects'])->name('proyectos');

Route::get('/contactanos', [ContactController::class, 'contact'])->name('contactanos');

Route::post('/contactanos', [ContactController::class, 'store'])->name('contactanos.store');

Route::get('/nosotros', [AboutController::class, 'about'])->name('nosotros');
