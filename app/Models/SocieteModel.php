<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocieteModel extends Model
{
    use HasFactory;

    /**
       * The attributes that are mass assignable.
       *
       * @var string[]
       *
       */
      protected $table="deblocage";
      protected $fillable = [
          'nom_prenom',
          'telephone',
          'heure_arrive',
          'heure_depart',
          'date',
          'nom_agent',
          'objet',
          'societe',
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
}
