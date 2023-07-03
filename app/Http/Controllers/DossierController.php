<?php

namespace App\Http\Controllers;

use App\Http\Requests\dossiers\SearchFormRequest;
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
    public function index(SearchFormRequest $request)
    {
        $query = Dossier::query();

        if ($request->validated('etat')) {
            $query = $query->where('etat', '=', $request->validated('etat'));
        }

        if ($request->validated('date_entretien')) {
            $query = $query->where('date_entretien', '=', $request->validated('date_entretien'));
        }

        if ($request->validated('session_id')) {
            $query = $query->where('sessionconcour_id', '=', $request->validated('session_id'));
        }


        return view('admin.dossiers.index', [
            'dossiers' => $query->get(),
            'input' => $request->validated()
        ]);
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
