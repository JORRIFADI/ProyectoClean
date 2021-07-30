<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mnosotros;

class dashboardcontroller extends Controller
{
    // Retorno de la vista homecrud
    public function index()
    {

        return view('homecrud.index');
    }
    public function nosotros()
    {

        // Retorno de la vista nosotros

        $nosotros = mnosotros::all();
        return view('aboutcrud.index', compact('nosotros'));
    }

    /* // Retorno de la vista servicios 
     public function servicios(){

        return view('dash.index');

    }

     // Retorno de la vista proyectos
     public function proyectos(){

        return view('dash.index');

    }     */
}
