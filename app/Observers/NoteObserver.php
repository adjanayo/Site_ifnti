<?php

namespace App\Observers;

use App\Models\Dossier;

class NoteObserver
{
    //
    public function saved($note)
    {
        $moyenne = ($note->math + $note->ang + $note->fr) / 3;
        $note->dossier->moyenne_concours = $moyenne;
        $note->save();
    }
}
