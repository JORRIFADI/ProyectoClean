<?php

namespace App\Http\Controllers;

use App\Models\mservicios;
use Illuminate\Http\Request;

class dashservicioscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosservicios['servicios'] = mservicios::paginate(20);
        return view('servicescrud.index', $datosservicios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicescrud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosservicios = request()->except('_token');

        if ($request->hasFile('url_icon')) {
            $datosservicios['url_icon'] = $request->file('url_icon')->store('iconos', 'public');
        }

        if ($request->hasFile('url_img')) {
            $datosservicios['url_img'] = $request->file('url_img')->store('images', 'public');
        }

        mservicios::insert($datosservicios);
        return response()->json($datosservicios);
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
        $datosservicios = mservicios::findOrFail($id);
        return view('servicescrud.edit', compact('datosservicios'));
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
        $datosservicios = request()->except(['_token', '_method']);
        mservicios::where('id', '=', $id)->update($datosservicios);
        $datosservicios = mservicios::findOrFail($id);

        //condicional para modificar imagen, si es que hay 
        if ($request->hasFile('url_icon')) {
            $datosservicios['url_icon'] = $request->file('url_icon')->store('images', 'public');
            $datosservicios->update();
        }

        if ($request->hasFile('url_img')) {
            $datosservicios['url_img'] = $request->file('url_img')->store('images', 'public');
            $datosservicios->update();
        }

        return view('servicescrud.edit', compact('datosservicios'));
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
