<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detail_sorties extends Model
{
    //
    use HasFactory;

    protected $fillable = ['sortie_id', 'matiere_id', 'quantite', 'observation'];

    public function sortie()
    {
        return $this->belongsTo(Sortie::class);
    }

    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }
}
