<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiteurModel extends Model
{
    use HasFactory;
  /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     *
     */
    protected $table="visiteur";
    protected $fillable = [
        'nom_prenom',
        'telephone',
        'residence',
        'heure_arrive',
        'heure_depart',
        'piece',
        'objet_visit',
        'service_visit',
        'sexe',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast.
    //  *
    //  * @var array
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
    public $timestamps = false;


}
