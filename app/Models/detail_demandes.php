<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detail_demandes extends Model
{
    //
    use HasFactory;

    protected $fillable = ['demande_id', 'matiere_id', 'quantite', 'prix_estime'];

    public function demande()
    {
        return $this->belongsTo(Demande::class);
    }

    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }

}
