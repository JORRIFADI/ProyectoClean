<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mnosotros;
use App\Models\mcliente;

class dashcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //retorno del index de incio 
    public function index()
    {
        return view('dash.index');
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
        //
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


        $nosotros = mnosotros::all();
        return view('dash.index', compact('nosotros'));
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
