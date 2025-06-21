<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detail_inventaires extends Model
{
    //
    use HasFactory;

    protected $fillable = ['inventaire_id', 'matiere_id', 'stock_theorique', 'stock_physique', 'ecart', 'observation'];

    public function inventaire()
    {
        return $this->belongsTo(Inventaire::class);
    }

    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }
}
