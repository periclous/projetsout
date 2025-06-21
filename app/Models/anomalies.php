<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class anomalies extends Model
{
    //
    use HasFactory;

    protected $fillable = ['consommable_id', 'description', 'date_detection', 'gravite', 'traitement'];

    public function consommable()
    {
        return $this->belongsTo(Consommable::class);
    }
}
