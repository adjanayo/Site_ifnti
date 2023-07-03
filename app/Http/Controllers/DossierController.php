<?php

namespace App\Http\Controllers;

use App\Http\Requests\DossierUPRequest;
use App\Http\Requests\NoteRequest;
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
        return view('admin.dossiers.index')->with(['dossiers' => Dossier::paginate(10)]);
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
        $dossier = Dossier::findorFail($id);
        return view('admin.dossiers.show', compact('dossier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }


    public function updateNote(NoteRequest $request,  $id)
    {
        $math = $request->math;
        $ang = $request->ang;
        $fr = $request->fr;
        // dd($dossier);
        $note = Note::where('dossier_id', $id)->get()->first();
        $note->math = $math;
        $note->ang = $ang;
        $note->fr = $fr;
        $note->save();
        return redirect(route("dossier.show", $id));
    }
    public function updateAppreciation(DossierUpRequest $request,  $id)
    {
        $dossier = Dossier::findOrFail($id);
        $dossier->appreciation = $request->appreciation;
        $dossier->save();
        return redirect(route("dossier.show", $id));
    }
    public function updateDossierStatus(Request $request,  $id)
    {
        $dossier = Dossier::findOrFail($id);
        // dump($dossier->etat);
        $dossier->etat = $request->etat;
        // dd($dossier->etat);
        $dossier->save();
        return redirect(route("dossier.show", $id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
