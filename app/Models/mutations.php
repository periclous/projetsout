<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mutations extends Model
{
    //
    use HasFactory;

    protected $fillable = ['mouvement_id', 'immobilisation_id', 'ancienne_affectation', 'nouvelle_affectation'];

    public function mouvement()
    {
        return $this->belongsTo(Mouvement::class);
    }

    public function immobilisation()
    {
        return $this->belongsTo(Immobilisation::class);
    }
}
