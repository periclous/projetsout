<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class matieres extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'designation', 'code', 'type_matiere_id', 'unite',
        'valeur_unitaire', 'duree_vie', 'localisation', 'photo'
    ];

    public function typeMatiere()
    {
        return $this->belongsTo(TypeMatiere::class);
    }

    public function detailDemandes()
    {
        return $this->hasMany(DetailDemande::class);
    }

    public function detailEntrees()
    {
        return $this->hasMany(DetailEntree::class);
    }

    public function detailSorties()
    {
        return $this->hasMany(DetailSortie::class);
    }

    public function detailInventaires()
    {
        return $this->hasMany(DetailInventaire::class);
    }

    public function consommable()
    {
        return $this->hasOne(Consommable::class);
    }
}
