<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mcliente;

class dashclientecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datoscliente['clientes'] = mcliente::paginate(20);
        return view('crudclientes.index', $datoscliente);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crudclientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


       /*  $datoscliente = request()->except('_token');

        if ($request->hasFile('url_imagen')) {
            $datoscliente['url_imagen'] = $request->file('url_imagen')->store('iconos', 'public');
        }

        mcliente::insert($datoscliente);
         */
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
        $datoscliente = mcliente::findOrFail($id);
        return view('crudclientes.edit', compact('datoscliente'));
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
        $datoscliente = request()->except(['_token', '_method']);
        mcliente::where('id', '=', $id)->update($datoscliente);
        $datoscliente = mcliente::findOrFail($id);

        if ($request->hasFile('url_imagen')) {
            $datoscliente['url_imagen'] = $request->file('url_imagen')->store('iconos', 'public');
        }

        $datoscliente->update();

        return view('crudclientes.edit', compact('datoscliente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        mcliente::destroy($id);
        return redirect('dashboard/datoscliente');
    }
}
