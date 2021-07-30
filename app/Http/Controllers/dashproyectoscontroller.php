<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mproyecto;

class dashproyectoscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosproyectos['proyectos'] = mproyecto::paginate(20);
        return view('proyectoscrud.index', $datosproyectos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyectoscrud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosproyectos = request()->except('_token');

        if ($request->hasFile('url_img')) {
            $datosproyectos['url_img'] = $request->file('url_img')->store('images', 'public');
        }
        mproyecto::insert($datosproyectos);
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
        $datosproyectos = mproyecto::findOrFail($id);
        return view('proyectoscrud.edit', compact('datosproyectos'));
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
        $datosproyectos = request()->except(['_token', '_method']);
        mproyecto::where('id', '=', $id)->update($datosproyectos);
        $datosproyectos = mproyecto::findOrFail($id);

        //condicional para modificar imagen, si es que hay 
        if ($request->hasFile('url_img')) {
            $datosproyectos['url_img'] = $request->file('url_img')->store('images', 'public');
            $datosproyectos->update();
        }

        return view('proyectoscrud.edit', compact('datosproyectos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        mproyecto::destroy($id);
        return redirect('dashboard/datosproyectos');
    }
}
