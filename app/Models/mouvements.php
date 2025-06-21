<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mouvements extends Model
{
    //
    use HasFactory;

    protected $fillable = ['date_mouvement', 'type', 'created_by'];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function entree()
    {
        return $this->hasOne(Entree::class);
    }

    public function sortie()
    {
        return $this->hasOne(Sortie::class);
    }

    public function mutation()
    {
        return $this->hasOne(Mutation::class);
    }

    public function reforme()
    {
        return $this->hasOne(Reforme::class);
    }
}
