<?php

namespace App\Http\Controllers\Admin;

use App\Models\Acteur;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acteurs = Acteur::orderBy('id', 'desc')->paginate(15);
        return view('admin.acteur.index',compact('acteurs'));
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
    public function edit(Acteur $acteur)
    {
        return view('admin.acteur.edit',compact('acteur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $acteur = Acteur::find($id);
         $acteur->nom = $request->input('name');
         $acteur->image= $request->input('image');
         $acteur->save();

         return redirect('/acteur')->withStatus('Acteur successfully created.');

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
