<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class immobilisations extends Model
{
    //
    use HasFactory;

    protected $fillable = ['entree_id', 'immatriculation', 'duree_vie', 'localisation'];

    public function entree()
    {
        return $this->belongsTo(Entree::class);
    }

    public function mutations()
    {
        return $this->hasMany(Mutation::class);
    }

    public function reformes()
    {
        return $this->hasMany(Reforme::class);
    }

}
