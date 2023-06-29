<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidat;
use App\Models\SessionConcour;
use App\Models\Dossier;

class DossierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dossiers = Dossier::all();
        return view('dossiers.index',compact('dossiers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admission.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $candidat = Candidat::create($request->all());
        $session_concour = SessionConcour::create([
            'date_debut' => '2000-02-02',
            'date_fin' => '2000-02-02',
        ]);
        $dossier = Dossier::create([
            'candidat_id' => $candidat->id,
            'session_concour_id' => $session_concour->id,
        ]);

        return $dossier;
    }

    /**
     * Display the specified resource.
     */
    public function show(Dossier $dossier)
    {
        return view('dossiers.show',compact('dossier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dossier $dossier)
    {
        return view('dossiers.edit',compact('dossier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dossier $dossier)
    {
       
        $dossier->candidat->update($request->all());
        $dossier->session_concour->update($request->all());
        $dossier->update($request->all());
        
        return redirect()->route('dossier.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dossier $dossier)
    {
        $dossier->delete();
        return redirect()->route('dossier.idex');
    }
}
