<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'phone',
        'avatar',
        'sexe',
        'email',
        'password',
        'is_active',
    ];
    


    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function demandes()
    {
        return $this->hasMany(Demande::class);
    }

    public function mouvements()
    {
        return $this->hasMany(Mouvement::class, 'created_by');
    }

    public function inventaires()
    {
        return $this->hasMany(Inventaire::class, 'responsable_id');
    }
}
