<?php

namespace App\Http\Controllers;

use App\Models\mnosotros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DatosAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {  //Recolectar todos los datos de la tabla mediante el modelo mnosotros
        //Retornar vista con la variable que contiene los datos de la table
        $nosotros = mnosotros::all();
        return view('aboutcrud.index', compact('nosotros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        if ($request->hasFile('imgslaider1')) {

            $datosnosotros['imgslaider1'] = $request->file('imgslaider1')->store('uploads', 'public');

            mnosotros::insert($datosnosotros);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datosnosotros = mnosotros::findOrFail($id);
        return view('aboutcrud.edit', compact('datosnosotros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {
        //metodos update para nosotros 
        $datosnosotros = request()->except(['_token', '_method']);
        mnosotros::where('id', '=', $id)->update($datosnosotros);
        $datosnosotros = mnosotros::findOrFail($id);

        //condicional para modificar imagen, si es que hay 
        if ($request->hasFile('urlbanner')) {
            $datosnosotros['urlbanner'] = $request->file('urlbanner')->store('images', 'public');
            $datosnosotros->update();
        }

        return view('aboutcrud.edit', compact('datosnosotros'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
