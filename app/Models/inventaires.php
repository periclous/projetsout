<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inventaires extends Model
{
    //
    use HasFactory;

    protected $fillable = ['date', 'service', 'responsable_id', 'statut'];

    public function responsable()
    {
        return $this->belongsTo(User::class, 'responsable_id');
    }

    public function detailInventaires()
    {
        return $this->hasMany(DetailInventaire::class);
    }
}
