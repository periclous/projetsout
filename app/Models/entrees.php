<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class entrees extends Model
{
    //
    use HasFactory;

    protected $fillable = ['mouvement_id', 'fournisseur_id', 'reference', 'motif'];

    public function mouvement()
    {
        return $this->belongsTo(Mouvement::class);
    }

    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class);
    }

    public function detailEntrees()
    {
        return $this->hasMany(DetailEntree::class);
    }

    public function immobilisation()
    {
        return $this->hasOne(Immobilisation::class);
    }
}
