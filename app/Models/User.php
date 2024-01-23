<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use  App\Models\Notification; 

class User extends Authenticatable
{
    const ROLE_ETUDIANT = 'Etudiant';
    const ROLE_PROFESSEUR = 'Professeur';
    const ROLE_RESPONSABLE_FILIERE = 'Responsable de Filiere';
    const ROLE_CHEF_DEPARTEMENT = 'Chef de Departement';
    const ROLE_RESPONSABLE_PEDAGOGIQUE = 'Responsable Service Pédagogique';

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
}
