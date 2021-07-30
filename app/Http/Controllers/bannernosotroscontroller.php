<?php

namespace App\Http\Controllers;

use App\Models\mbannernosotros;
use Illuminate\Http\Request;

class bannernosotroscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosbanner['banner'] = mbannernosotros::paginate(20);
        return view('bannercrud.index', $datosbanner);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bannercrud.create');
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
        $datosbanner = mbannernosotros::findOrFail($id);
        return view('bannercrud.edit', compact('datosbanner'));
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
        $datosbanner = request()->except(['_token', '_method']);
        mbannernosotros::where('id', '=', $id)->update($datosbanner);
        $datosbanner = mbannernosotros::findOrFail($id);

        //condicional para modificar imagen, si es que hay 
        if ($request->hasFile('url_img')) {
            $datosbanner['url_img'] = $request->file('url_img')->store('images', 'public');
            $datosbanner->update();
        }

        return view('bannercrud.edit', compact('datosbanner'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        mbannernosotros::destroy($id);
        return redirect('dashboard/datosbanner');
    }
}
