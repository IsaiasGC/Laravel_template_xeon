<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::all();
        return view('admin/service',['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/service_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service=new Service();
        $service->name=$request->get('name');
        $service->description=$request->get('description');
        $service->icon=$request->get('icon');
        $service->save();
        return redirect('/admin/service')->with('success', 'Registro guardado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=Service::find($id);
        return view('admin/service_edit', ['service'=>$service]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service=Service::find($id);
        $service->name=$request->get('name');
        $service->description=$request->get('description');
        $service->icon=$request->get('icon');
        $service->save();
        return redirect('/admin/service')->with('success', 'Registro Editado Correctamente');
    }

    public function delete($id)
    {
        $service=Service::find($id);
        return view('admin/service_delete', ['service'=>$service]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service=Service::find($id);
        $service->delete();
        return redirect('/admin/service')->with('success', 'Registro Borrado Exitosamente');
    }
}
