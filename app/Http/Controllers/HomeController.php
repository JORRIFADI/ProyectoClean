<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mcliente;
use App\Models\mcualidad;
use App\Models\mdatosempresa;
use App\Models\mservicios;

class HomeController extends Controller
{
    public function __invoke()
    {
        $datos = mdatosempresa::all();
        $datos1 = mdatosempresa::find(1);
        $datoscliente = mcliente::all();
        $bannercliente = mcliente::all();
        $cualidades = mcualidad::get();

        //Acceder a 5 clientes en barra

        $datoscliente1 = mcliente::find(1);
        $datoscliente2 = mcliente::find(2);
        $datoscliente3 = mcliente::find(3);
        $datoscliente4 = mcliente::find(4);
        $datoscliente5 = mcliente::find(5);
        //Acceder a 6 servicios home
        $dservicios = mservicios::all();
        $iconservicios1 = mservicios::find(1);
        $iconservicios2 = mservicios::find(2);
        $iconservicios3 = mservicios::find(3);
        $iconservicios4 = mservicios::find(4);
        $iconservicios5 = mservicios::find(5);
        $iconservicios6 = mservicios::find(6);

        //Accder a cualidades

        $cualidades1 = mcualidad::find(1);
        $cualidades2 = mcualidad::find(2);
        $cualidades3 = mcualidad::find(3);
        $cualidades4 = mcualidad::find(4);

        return view('home', compact(
            'datos',
            'datoscliente',
            'cualidades',
            'datoscliente2',
            'datoscliente3',
            'datoscliente4',
            'datoscliente1',
            'datoscliente5',
            'dservicios',
            'iconservicios1',
            'iconservicios2',
            'iconservicios3',
            'iconservicios4',
            'iconservicios5',
            'iconservicios6',
            'datos1',
            'cualidades1',
            'cualidades2',
            'cualidades3',
            'cualidades4',
            'bannercliente'
        ));
    }
}
