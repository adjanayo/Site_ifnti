<?php

namespace App\Http\Controllers;

use App\Models\Dossier;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\SessionConcour;

class SessionConcourController extends Controller {
    /**
    * Display a listing of the resource.
    */

    public function index(): View {
        //
        $sessionConcours = SessionConcour::paginate(1);
        $dossiers = [];

        foreach ( $sessionConcours as $sessionConcour ) {
            $dossiers[ $sessionConcour->id ] = Dossier::orderBy("moyenne_concours", 'desc')->get()->where( 'sessionconcour_id', $sessionConcour->id );
            $lesDossiers = $dossiers[$sessionConcour->id];
            // dd($lesDossiers);
        }
        // dd($dossiers);

        return view( 'admin.sessions.index', compact( 'sessionConcours', 'dossiers' ) );
    }

    /**
    * Show the form for creating a new resource.
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    */

    public function store( Request $request ) {
        //
    }

    /**
    * Display the specified resource.
    */

    public function show( string $id ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( string $id ) {
        //
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( Request $request, string $id ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( string $id ) {
        //
    }
}
