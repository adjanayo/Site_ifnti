<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Niveau;
use App\Models\Bullettin;
use App\Models\Matiere;

class Decoupage extends Model
{
    use HasFactory;

    protected $fillable = ['nom','id_niveau','id_bulletin'];

    protected $table = 'decoupages';

    public function niveau():BelongsTo{
        return belongsTo(Niveau::class);
    }

    public function bullettin():HasOne{
        return hasOne(Bullettin::class);
    }

    public function matieres():HasMany{
        return $this->hasMany(Matiere::class);
    }
}
