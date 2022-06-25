<?php

namespace App\Http\Controllers;

use App\Models\Cahier;
use Illuminate\Http\Request;

class CahierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cahiers = Cahier::latest()->paginate(4);
    
        return view('Cahiers.index',compact('Cahiers'))
            ->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cahiers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'npro' => 'required',
            'libelle' => 'required',
            'prix' => 'required',
            'qstock' => 'required',
            'description' => 'required',
        ]);
    
        Cahier::create($request->all());
     
        return redirect()->route('Cahiers.index')
                        ->with('success','Séance créée avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cahier  $Cahier
     * @return \Illuminate\Http\Response
     */
    public function show(Cahier $Cahier)
    {
        return view('Cahiers.show',compact('Cahier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cahier  $Cahier
     * @return \Illuminate\Http\Response
     */
    public function edit(Cahier $Cahier)
    {
        return view('Cahiers.edit',compact('Cahier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cahier  $Cahier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cahier $Cahier)
    {
        $request->validate([
            'npro' => 'required',
            'libelle' => 'required',
            'prix' => 'required',
            'qstock' => 'required',
            'description' => 'required',
        ]);
    
        $Cahier->update($request->all());
    
        return redirect()->route('Cahiers.index')
                        ->with('success','Séance mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cahier  $Cahier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cahier $Cahier)
    {
        $Cahier->delete();
    
        return redirect()->route('Cahiers.index')
                        ->with('success','Séance supprimée avec succès');
    }
}