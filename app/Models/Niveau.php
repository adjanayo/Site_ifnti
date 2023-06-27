<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Dossier;
use App\Models\Decoupage;

class Niveau extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'annee','systeme','serie'];

    protected $table = 'niveaus';

    public function dossier():BelongsTo{
        return belongsTo(Dossier::class);
    }

    public function decoupages():HasMany{
        return $this->hasMany(Decoupage::class);
    }
}
