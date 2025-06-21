<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class consommables extends Model
{
    //
    use HasFactory;

    protected $fillable = ['matiere_id', 'description', 'seuil_alerte'];

    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }

    public function anomalies()
    {
        return $this->hasMany(Anomalie::class);
    }
    
}
