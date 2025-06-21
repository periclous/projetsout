<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sorties extends Model
{
    //
    use HasFactory;

    protected $fillable = ['mouvement_id', 'demande_id', 'motif', 'service'];

    public function mouvement()
    {
        return $this->belongsTo(Mouvement::class);
    }

    public function demande()
    {
        return $this->belongsTo(Demande::class);
    }

    public function detailSorties()
    {
        return $this->hasMany(DetailSortie::class);
    }

}
