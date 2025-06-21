<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class fournisseurs extends Model
{
    //
    use HasFactory;

    protected $fillable = ['nom', 'adresse', 'telephone', 'email'];

    public function entrees()
    {
        return $this->hasMany(Entree::class);
    }

}
