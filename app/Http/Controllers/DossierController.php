<?php

namespace App\Http\Controllers;

use App\Http\Requests\DossierUPRequest;
use App\Models\Dossier;
use App\Models\Note;
use Illuminate\Http\Request;

class DossierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        return view('admin.dossiers.index')->with(['dossiers'=>Dossier::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dossier = Dossier::find($id);
        return view('admin.dossiers.show', compact('dossier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }


    // public function update(DossierUPRequest $request, Dossier $dossier)
    // {
    //     $math = $request->math;
    //     $ang = $request->ang;
    //     $fr = $request->fr;
    //     $note = Note::find($dossier->note);
    //     $note->$math
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
