<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class types_matieres extends Model
{
    //
    use HasFactory;

    protected $fillable = ['libelle', 'description'];

    public function matieres()
    {
        return $this->hasMany(Matiere::class);
    }
}
