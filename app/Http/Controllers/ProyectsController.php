<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mdatosempresa;
use App\Models\mproyecto;

class ProyectsController extends Controller
{

    public function proyects()
    {
        $proyectos = mproyecto::paginate();
        $datos = mproyecto::find(1);
        $datos2 = mproyecto::find(2);
        $datos3 = mproyecto::find(3);
        $datos4 = mproyecto::find(4);
        $datos5 = mproyecto::find(5);
        $datos6 = mproyecto::find(6);
        $datos7 = mproyecto::find(7);
        $datos8 = mproyecto::find(8);
        return view('proyects', compact(
            'datos',
            'datos2',
            'datos3',
            'datos4',
            'datos5',
            'datos6',
            'datos7',
            'datos8',
            'proyectos'
        ));
    }
}
