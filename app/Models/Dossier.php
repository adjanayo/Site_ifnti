<?php

namespace App\Models;

use App\Models\Candidat;
use App\Models\Note;
use App\Models\Session_concour;
use App\Models\Admi;
use App\Models\Niveau;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;

    protected $fillable = ['moyenne_bac', 'appreciation', 'estValide', 'moyenne_concours','serie', 'date_soumission','etat','date_entretien'];

    protected $table = 'dossiers';

    public function candidat():BelongsTo{
        return $this->belongsTo(Candidat::class);
    }

    public function note():HasOne{
        return $this->hasOne(Note::class);
    }

    public function session_concour():BelongsTo{
        return $this->belongsTo(session_concour::class);
    }

    public function admi():BelongsTo{
        return $this->belongsTo(Admi::class);
    }

    public function niveaus():HasMany{
        return $this->hasMany(Niveau::class);
    }

    
}
