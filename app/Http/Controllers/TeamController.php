<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team=Team::all();
        return view('admin/team',['team' => $team]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/team_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member=new Team();
        $member->name=$request->get('name');
        $member->jop=$request->get('jop');
        $member->foto=$request->get('foto');
        $member->save();
        return redirect('/admin/team')->with('success', 'Registro guardado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member=Team::find($id);
        return view('admin/team_edit', ['member'=>$member]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $member=Team::find($id);
        $member->name=$request->get('name');
        $member->jop=$request->get('jop');
        $member->foto=$request->get('foto');
        $member->save();
        return redirect('/admin/team')->with('success', 'Registro Editado Correctamente');
    }

    public function delete($id)
    {
        $member=Team::find($id);
        return view('admin/team_delete', ['member'=>$member]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member=Team::find($id);
        $member->delete();
        return redirect('/admin/team')->with('success', 'Registro Eliminado Exitosamente');
    }
}
