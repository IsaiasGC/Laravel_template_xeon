<?php

namespace App\Http\Controllers;

use App\Portafolio;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portafolio=Portafolio::all();
        return view('admin/portafolio',['portafolio' => $portafolio]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/portafolio_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portafolio=new Portafolio();
        $portafolio->client_name=$request->get('client_name');
        $portafolio->description=$request->get('description');
        $portafolio->foto=$request->get('foto');
        $portafolio->made_date=$request->get('made_date');
        $portafolio->type=$request->get('type');
        $portafolio->save();
        return redirect('/admin/portafolio')->with('success', 'Registro guardado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portafolio $portafolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item=Portafolio::find($id);
        return view('admin/portafolio_edit', ['item'=>$item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item=Portafolio::find($id);
        $item->client_name=$request->get('client_name');
        $item->description=$request->get('description');
        $item->foto=$request->get('foto');
        $item->made_date=$request->get('made_date');
        $item->type=$request->get('type');
        $item->save();
        return redirect('/admin/portafolio')->with('success', 'Registro Editado Correctamente');
    }

    public function delete($id)
    {
        $item=Portafolio::find($id);
        return view('admin/portafolio_delete', ['item'=>$item]);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Portafolio::find($id);
        $item->delete();
        return redirect('/admin/portafolio')->with('success', 'Registro Borrado Exitosamente');
    }
}
