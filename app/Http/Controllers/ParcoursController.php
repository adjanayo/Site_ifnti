<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Niveau;
use App\Models\Decoupage;
use App\Models\Matiere;
use App\Models\Bullettin;

class ParcoursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $dossier = app()->call('App\Http\Controllers\DossierControleur@store');
        //les cinq niveaux

        /*****************************Seconde*************************/
        $seconde = Niveau::create([
            $request['nom'] => 'seconde',
            $request['serie'] => $request->input('serie_seconde'),
            $request['systeme'] => $request->input('systeme_seconde'),
            $request['annee'] => $request->input('annee_seconde'),
            $request['id_dossier'] => $dossier->id,
        ]);

        if($seconde->systeme == 'semestriel'){
            //les bullettins sem1 et sem2
            $bullettin_seconde_semestre1 = Bullettin::create([
                $request['fichier'] => $request->input('bullettin_seconde_semestre1'),
            ]);
            $bullettin_seconde_semestre2 = Bullettin::create([
                $request['fichier'] => $request->input('bullettin_seconde_semestre2'),
            ]);

            $seconde_semestre1 = Decoupage::create([
                $request['nom'] => 'semestre1',
                $request['id_niveau'] => $seconde->id,
                $request['id_bulletin'] => $bullettin_seconde_semestre1->id,
            ]);
            //les notes
            $math = Matiere::create([
                $request['nom'] => 'math',
                $request['note'] => $request->input('note_math_seconde_s1'),
                $request['id_decoupage'] => $seconde_semestre1->id,

            ]);
            $fr = Matiere::create([
                $request['nom'] => 'fr',
                $request['note'] => $request->input('note_fr_seconde_s1'),
                $request['id_decoupage'] => $seconde_semestre1->id,

            ]);
            $ang = Matiere::create([
                $request['nom'] => 'ang',
                $request['note'] => $request->input('note_ang_seconde_s1'),
                $request['id_decoupage'] => $seconde_semestre1->id,

            ]);

            $seconde_semestre2 = Decoupage::create([
                $request['nom'] => 'semestre2',
                $request['id_niveau'] => $seconde->id,
                $request['id_bulletin'] => $bullettin_seconde_semestre2->id,
            ]);
            //les notes
            $math = Matiere::create([
                $request['nom'] => 'math',
                $request['note'] => $request->input('note_math_seconde_s2'),
                $request['id_decoupage'] => $seconde_semestre2->id,

            ]);
            $fr = Matiere::create([
                $request['nom'] => 'fr',
                $request['note'] => $request->input('note_fr_seconde_s2'),
                $request['id_decoupage'] => $seconde_semestre2->id,

            ]);
            $ang = Matiere::create([
                $request['nom'] => 'ang',
                $request['note'] => $request->input('note_ang_seconde_s2'),
                $request['id_decoupage'] => $seconde_semestre2->id,

            ]);
        }else{
            $bullettin_seconde_trimestre1 = Bullettin::create([
                $request['fichier'] => $request->input('bullettin_seconde_trimestre1'),
            ]);
            $bullettin_seconde_trimestre2 = Bullettin::create([
                $request['fichier'] => $request->input('bullettin_seconde_trimestre2'),
            ]);
            $bullettin_seconde_trimestre3 = Bullettin::create([
                $request['fichier'] => $request->input('bullettin_seconde_trimestre3'),
            ]);

            $seconde_trimestre1 = Decoupage::create([
                $request['nom'] => 'trimestre1',
                $request['id_niveau'] => $seconde->id,
                $request['id_bulletin'] => $bullettin_seconde_trimestre1->id,
            ]);
            //les notes
            $math = Matiere::create([
                $request['nom'] => 'math',
                $request['note'] => $request->input('note_math_seconde_trim1'),
                $request['id_decoupage'] => $seconde_trimestre1->id,

            ]);
            $fr = Matiere::create([
                $request['nom'] => 'fr',
                $request['note'] => $request->input('note_fr_seconde_trim1'),
                $request['id_decoupage'] => $seconde_trimestre1->id,

            ]);
            $ang = Matiere::create([
                $request['nom'] => 'ang',
                $request['note'] => $request->input('note_ang_seconde_trim1'),
                $request['id_decoupage'] => $seconde_trimestre1->id,

            ]);

            $seconde_trimestre2 = Decoupage::create([
                $request['nom'] => 'trimestre2',
                $request['id_niveau'] => $seconde->id,
                $request['id_bulletin'] => $bullettin_seconde_trimestre2->id,
            ]);
            //les notes
            $math = Matiere::create([
                $request['nom'] => 'math',
                $request['note'] => $request->input('note_math_seconde_trim2'),
                $request['id_decoupage'] => $seconde_trimestre2->id,

            ]);
            $fr = Matiere::create([
                $request['nom'] => 'fr',
                $request['note'] => $request->input('note_fr_seconde_trim2'),
                $request['id_decoupage'] => $seconde_trimestre2->id,

            ]);
            $ang = Matiere::create([
                $request['nom'] => 'ang',
                $request['note'] => $request->input('note_ang_seconde_trim2'),
                $request['id_decoupage'] => $seconde_trimestre2->id,

            ]);

            $trimestre3 = Decoupage::create([
                $request['nom'] => 'trimestre3',
                $request['id_niveau'] => $seconde->id,
                $request['id_bulletin'] => $bullettin_seconde_trimestre3->id,
            ]);
            //les notes
            $math = Matiere::create([
                $request['nom'] => 'math',
                $request['note'] => $request->input('note_math_seconde_trim3'),
                $request['id_decoupage'] => $seconde_trimestre3->id,

            ]);
            $fr = Matiere::create([
                $request['nom'] => 'fr',
                $request['note'] => $request->input('note_fr_seconde_trim3'),
                $request['id_decoupage'] => $seconde_trimestre3->id,

            ]);
            $ang = Matiere::create([
                $request['nom'] => 'ang',
                $request['note'] => $request->input('note_ang_seconde_trim3'),
                $request['id_decoupage'] => $seconde_trimestre3->id,

            ]);

        }

        /*****************************Premiere*************************/
        $premiere = Niveau::create([
            $request['nom'] => 'premiere',
            $request['serie'] => $request->input('serie_premiere'),
            $request['systeme'] => $request->input('systeme_premiere'),
            $request['annee'] => $request->input('annee_premiere'),
            $request['id_dossier'] => $dossier->id,
        ]);

        if($premiere->systeme == 'semestriel'){
            //les bullettins sem1 et sem2
            $bullettin_premiere_semestre1 = Bullettin::create([
                $request['fichier'] => $request->input('bullettin_premiere_semestre1'),
            ]);
            $bullettin_premiere_semestre2 = Bullettin::create([
                $request['fichier'] => $request->input('bullettin_premiere_semestre2'),
            ]);

            $premiere_semestre1 = Decoupage::create([
                $request['nom'] => 'semestre1',
                $request['id_niveau'] => $premiere->id,
                $request['id_bulletin'] => $bullettin_premiere_semestre1->id,
            ]);
            //les notes
            $math = Matiere::create([
                $request['nom'] => 'math',
                $request['note'] => $request->input('note_math_premiere_s1'),
                $request['id_decoupage'] => $premiere_semestre1->id,

            ]);
            $fr = Matiere::create([
                $request['nom'] => 'fr',
                $request['note'] => $request->input('note_fr_premiere_s1'),
                $request['id_decoupage'] => $premiere_semestre1->id,

            ]);
            $ang = Matiere::create([
                $request['nom'] => 'ang',
                $request['note'] => $request->input('note_ang_premiere_s1'),
                $request['id_decoupage'] => $premiere_semestre1->id,

            ]);

            $premiere_semestre2 = Decoupage::create([
                $request['nom'] => 'semestre2',
                $request['id_niveau'] => $premiere->id,
                $request['id_bulletin'] => $bullettin_premiere_semestre2->id,
            ]);
            //les notes
            $math = Matiere::create([
                $request['nom'] => 'math',
                $request['note'] => $request->input('note_math_premiere_s2'),
                $request['id_decoupage'] => $premiere_semestre2->id,

            ]);
            $fr = Matiere::create([
                $request['nom'] => 'fr',
                $request['note'] => $request->input('note_fr_premiere_s2'),
                $request['id_decoupage'] => $premiere_semestre2->id,

            ]);
            $ang = Matiere::create([
                $request['nom'] => 'ang',
                $request['note'] => $request->input('note_ang_premiere_s2'),
                $request['id_decoupage'] => $premiere_semestre2->id,

            ]);
        }else{
            $bullettin_premiere_trimestre1 = Bullettin::create([
                $request['fichier'] => $request->input('bullettin_premiere_trimestre1'),
            ]);
            $bullettin_premiere_trimestre2 = Bullettin::create([
                $request['fichier'] => $request->input('bullettin_premiere_trimestre2'),
            ]);
            $bullettin_premiere_trimestre3 = Bullettin::create([
                $request['fichier'] => $request->input('bullettin_premiere_trimestre3'),
            ]);

            $premiere_trimestre1 = Decoupage::create([
                $request['nom'] => 'trimestre1',
                $request['id_niveau'] => $premiere->id,
                $request['id_bulletin'] => $bullettin_premiere_trimestre1->id,
            ]);
            //les notes
            $math = Matiere::create([
                $request['nom'] => 'math',
                $request['note'] => $request->input('note_math_premiere_trim1'),
                $request['id_decoupage'] => $premiere_trimestre1->id,

            ]);
            $fr = Matiere::create([
                $request['nom'] => 'fr',
                $request['note'] => $request->input('note_fr_premiere_trim1'),
                $request['id_decoupage'] => $premiere_trimestre1->id,

            ]);
            $ang = Matiere::create([
                $request['nom'] => 'ang',
                $request['note'] => $request->input('note_ang_premiere_trim1'),
                $request['id_decoupage'] => $premiere_trimestre1->id,

            ]);

            $premiere_trimestre2 = Decoupage::create([
                $request['nom'] => 'trimestre2',
                $request['id_niveau'] => $premiere->id,
                $request['id_bulletin'] => $bullettin_premiere_trimestre2->id,
            ]);
            //les notes
            $math = Matiere::create([
                $request['nom'] => 'math',
                $request['note'] => $request->input('note_math_premiere_trim2'),
                $request['id_decoupage'] => $premiere_trimestre2->id,

            ]);
            $fr = Matiere::create([
                $request['nom'] => 'fr',
                $request['note'] => $request->input('note_fr_premiere_trim2'),
                $request['id_decoupage'] => $premiere_trimestre2->id,

            ]);
            $ang = Matiere::create([
                $request['nom'] => 'ang',
                $request['note'] => $request->input('note_ang_premiere_trim2'),
                $request['id_decoupage'] => $premiere_trimestre2->id,

            ]);

            $trimestre3 = Decoupage::create([
                $request['nom'] => 'trimestre3',
                $request['id_niveau'] => $premiere->id,
                $request['id_bulletin'] => $bullettin_premiere_trimestre3->id,
            ]);
            //les notes
            $math = Matiere::create([
                $request['nom'] => 'math',
                $request['note'] => $request->input('note_math_premiere_trim3'),
                $request['id_decoupage'] => $premiere_trimestre3->id,

            ]);
            $fr = Matiere::create([
                $request['nom'] => 'fr',
                $request['note'] => $request->input('note_fr_premiere_trim3'),
                $request['id_decoupage'] => $premiere_trimestre3->id,

            ]);
            $ang = Matiere::create([
                $request['nom'] => 'ang',
                $request['note'] => $request->input('note_ang_premiere_trim3'),
                $request['id_decoupage'] => $premiere_trimestre3->id,

            ]);

        }

        /*****************************Terminale*************************/
        $terminale = Niveau::create([
            $request['nom'] => 'terminale',
            $request['serie'] => $request->input('serie_terminale'),
            $request['systeme'] => $request->input('systeme_terminale'),
            $request['annee'] => $request->input('annee_terminale'),
            $request['id_dossier'] => $dossier->id,
        ]);

        if($terminale->systeme == 'semestriel'){
            //les bullettins sem1 et sem2
            $bullettin_terminale_semestre1 = Bullettin::create([
                $request['fichier'] => $request->input('bullettin_terminale_semestre1'),
            ]);
            $bullettin_terminale_semestre2 = Bullettin::create([
                $request['fichier'] => $request->input('bullettin_terminale_semestre2'),
            ]);

            $terminale_semestre1 = Decoupage::create([
                $request['nom'] => 'semestre1',
                $request['id_niveau'] => $terminale->id,
                $request['id_bulletin'] => $bullettin_terminale_semestre1->id,
            ]);
            //les notes
            $math = Matiere::create([
                $request['nom'] => 'math',
                $request['note'] => $request->input('note_math_terminale_s1'),
                $request['id_decoupage'] => $terminale_semestre1->id,

            ]);
            $fr = Matiere::create([
                $request['nom'] => 'fr',
                $request['note'] => $request->input('note_fr_terminale_s1'),
                $request['id_decoupage'] => $terminale_semestre1->id,

            ]);
            $ang = Matiere::create([
                $request['nom'] => 'ang',
                $request['note'] => $request->input('note_ang_terminale_s1'),
                $request['id_decoupage'] => $terminale_semestre1->id,

            ]);

            $terminale_semestre2 = Decoupage::create([
                $request['nom'] => 'semestre2',
                $request['id_niveau'] => $terminale->id,
                $request['id_bulletin'] => $bullettin_terminale_semestre2->id,
            ]);
            //les notes
            $math = Matiere::create([
                $request['nom'] => 'math',
                $request['note'] => $request->input('note_math_terminale_s2'),
                $request['id_decoupage'] => $terminale_semestre2->id,

            ]);
            $fr = Matiere::create([
                $request['nom'] => 'fr',
                $request['note'] => $request->input('note_fr_terminale_s2'),
                $request['id_decoupage'] => $terminale_semestre2->id,

            ]);
            $ang = Matiere::create([
                $request['nom'] => 'ang',
                $request['note'] => $request->input('note_ang_terminale_s2'),
                $request['id_decoupage'] => $terminale_semestre2->id,

            ]);
        }else{
            $bullettin_terminale_trimestre1 = Bullettin::create([
                $request['fichier'] => $request->input('bullettin_terminale_trimestre1'),
            ]);
            $bullettin_terminale_trimestre2 = Bullettin::create([
                $request['fichier'] => $request->input('bullettin_terminale_trimestre2'),
            ]);
            $bullettin_terminale_trimestre3 = Bullettin::create([
                $request['fichier'] => $request->input('bullettin_terminale_trimestre3'),
            ]);

            $terminale_trimestre1 = Decoupage::create([
                $request['nom'] => 'trimestre1',
                $request['id_niveau'] => $terminale->id,
                $request['id_bulletin'] => $bullettin_terminale_trimestre1->id,
            ]);
            //les notes
            $math = Matiere::create([
                $request['nom'] => 'math',
                $request['note'] => $request->input('note_math_terminale_trim1'),
                $request['id_decoupage'] => $terminale_trimestre1->id,

            ]);
            $fr = Matiere::create([
                $request['nom'] => 'fr',
                $request['note'] => $request->input('note_fr_terminale_trim1'),
                $request['id_decoupage'] => $terminale_trimestre1->id,

            ]);
            $ang = Matiere::create([
                $request['nom'] => 'ang',
                $request['note'] => $request->input('note_ang_terminale_trim1'),
                $request['id_decoupage'] => $terminale_trimestre1->id,

            ]);

            $terminale_trimestre2 = Decoupage::create([
                $request['nom'] => 'trimestre2',
                $request['id_niveau'] => $terminale->id,
                $request['id_bulletin'] => $bullettin_terminale_trimestre2->id,
            ]);
            //les notes
            $math = Matiere::create([
                $request['nom'] => 'math',
                $request['note'] => $request->input('note_math_terminale_trim2'),
                $request['id_decoupage'] => $terminale_trimestre2->id,

            ]);
            $fr = Matiere::create([
                $request['nom'] => 'fr',
                $request['note'] => $request->input('note_fr_terminale_trim2'),
                $request['id_decoupage'] => $terminale_trimestre2->id,

            ]);
            $ang = Matiere::create([
                $request['nom'] => 'ang',
                $request['note'] => $request->input('note_ang_terminale_trim2'),
                $request['id_decoupage'] => $terminale_trimestre2->id,

            ]);

            $trimestre3 = Decoupage::create([
                $request['nom'] => 'trimestre3',
                $request['id_niveau'] => $terminale->id,
                $request['id_bulletin'] => $bullettin_terminale_trimestre3->id,
            ]);
            //les notes
            $math = Matiere::create([
                $request['nom'] => 'math',
                $request['note'] => $request->input('note_math_terminale_trim3'),
                $request['id_decoupage'] => $terminale_trimestre3->id,

            ]);
            $fr = Matiere::create([
                $request['nom'] => 'fr',
                $request['note'] => $request->input('note_fr_terminale_trim3'),
                $request['id_decoupage'] => $terminale_trimestre3->id,

            ]);
            $ang = Matiere::create([
                $request['nom'] => 'ang',
                $request['note'] => $request->input('note_ang_terminale_trim3'),
                $request['id_decoupage'] => $terminale_trimestre3->id,

            ]);

        }



        

        /*****************************bac1*************************/
        $bac1 = Niveau::create([
            $request['nom'] => 'bac1',
            $request['serie'] => $request->input('serie_bac1'),
            $request['systeme'] => '1',
            $request['annee'] => $request->input('annee_bac1'),
            $request['id_dossier'] => $dossier->id,
        ]);

        $releve_bac1= Bullettin::create([
            $request['fichier'] => $request->input('releve_bac1'),
        ]);
        

        $bac1_decoupage = Decoupage::create([
            $request['nom'] => 'bac1',
            $request['id_niveau'] => $bac1->id,
            $request['id_bulletin'] => $releve_bac1->id,
        ]);
        //les notes
        $math = Matiere::create([
            $request['nom'] => 'math',
            $request['note'] => $request->input('note_math_bac1'),
            $request['id_decoupage'] => $bac1_decoupage->id,

        ]);
        $fr = Matiere::create([
            $request['nom'] => 'fr',
            $request['note'] => $request->input('note_fr_bac1'),
            $request['id_decoupage'] => $bac1_decoupage->id,

        ]);
        $ang = Matiere::create([
            $request['nom'] => 'ang',
            $request['note'] => $request->input('note_ang_bac1'),
            $request['id_decoupage'] => $bac1_decoupage->id,

        ]);



        /*****************************bac2*************************/
        $bac2 = Niveau::create([
            $request['nom'] => 'bac2',
            $request['serie'] => $request->input('serie_bac2'),
            $request['systeme'] => '1',
            $request['annee'] => $request->input('annee_bac2'),
            $request['id_dossier'] => $dossier->id,
        ]);

        $releve_bac2= Bullettin::create([
            $request['fichier'] => $request->input('releve_bac2'),
        ]);
        

        $bac2_decoupage = Decoupage::create([
            $request['nom'] => 'bac2',
            $request['id_niveau'] => $bac2->id,
            $request['id_bulletin'] => $releve_bac2->id,
        ]);
        //les notes
        $math = Matiere::create([
            $request['nom'] => 'math',
            $request['note'] => $request->input('note_math_bac2'),
            $request['id_decoupage'] => $bac2_decoupage->id,

        ]);
        $fr = Matiere::create([
            $request['nom'] => 'fr',
            $request['note'] => $request->input('note_fr_bac2'),
            $request['id_decoupage'] => $bac2_decoupage->id,

        ]);
        $ang = Matiere::create([
            $request['nom'] => 'ang',
            $request['note'] => $request->input('note_ang_bac2'),
            $request['id_decoupage'] => $bac2_decoupage->id,

        ]);

         

         
        }



    











    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
