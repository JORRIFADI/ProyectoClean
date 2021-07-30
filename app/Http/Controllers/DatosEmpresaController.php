<?php

namespace App\Http\Controllers;

use App\Models\mcliente;
use Illuminate\Http\Request;
use  App\Models\mdatosempresa;
use Illuminate\Support\Facades\Storage;
use PharIo\Manifest\Url;
use Symfony\Component\HttpKernel\HttpCache\Store;

use function PHPUnit\Framework\returnValue;

class DatosEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datosempresa = mdatosempresa::all();
        return view('homecrud.index', compact('datosempresa'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datosempresa = mdatosempresa::findOrFail($id);
        return view('homecrud.edit', compact('datosempresa'));
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
        $datosempresa = request()->except(['_token', '_method']);
        mdatosempresa::where('id', '=', $id)->update($datosempresa);
        $datosempresa = mdatosempresa::findOrFail($id);

        if ($request->hasFile('imagenbanner')) {
            $datosempresa['imagenbanner'] = $request->file('imagenbanner')->store('images', 'public');
            $datosempresa->update();
        }

        if ($request->hasFile('url_curriculum')) {
            $datosempresa['url_curriculum'] = $request->file('url_curriculum')->store('docs', 'public');
            $datosempresa->update();
        }



        return view('homecrud.edit', compact('datosempresa'));
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
