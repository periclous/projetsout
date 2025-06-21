<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reformes extends Model
{
    //
    use HasFactory;

    protected $fillable = ['mouvement_id', 'immobilisation_id', 'motif', 'etat_final'];

    public function mouvement()
    {
        return $this->belongsTo(Mouvement::class);
    }

    public function immobilisation()
    {
        return $this->belongsTo(Immobilisation::class);
    }
}
