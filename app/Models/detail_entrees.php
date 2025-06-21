<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detail_entrees extends Model
{
    //
    use HasFactory;

    protected $fillable = ['entree_id', 'matiere_id', 'quantite', 'prix'];

    public function entree()
    {
        return $this->belongsTo(Entree::class);
    }

    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }
}
