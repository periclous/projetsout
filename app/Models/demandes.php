<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class demandes extends Model
{
    //
    use HasFactory;

    protected $fillable = ['user_id', 'date_demande', 'statut', 'commentaire'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function detailDemandes()
    {
        return $this->hasMany(DetailDemande::class);
    }

    public function sortie()
    {
        return $this->hasOne(Sortie::class);
    }

}
