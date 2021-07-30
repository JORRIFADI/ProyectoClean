<?php

namespace App\Http\Controllers;

use App\Models\mdatosempresa;
use App\Models\mservicios;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services()
    {
        $servicios = mservicios::paginate();
        $datos = mservicios::find(1);

        return view('services', compact('datos', 'servicios'));
    }
}
