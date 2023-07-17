<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeblocageModel extends Model
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
          'agence_regionale',
          'heure_arrive',
          'heure_depart',
          'date',
          'mail',
          'num_aej',
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
}
