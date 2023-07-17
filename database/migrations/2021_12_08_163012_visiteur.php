<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Visiteur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('visiteur', function (Blueprint $table) {
        $table->id();
        $table-> string("nom_prenom",50)->nullable();
        $table-> string("telephone",10)->nullable();
        $table-> string("residence",100)->nullable();
        $table-> string("piece",100)->nullable();
        $table-> time("heure_arrive")->nullable();
        $table-> time("heure_depart")->nullable();
        $table-> string("sexe",1)->nullable();
        $table-> string("objet_visite",100)->nullable();
        $table-> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

        Schema::dropIfExists('visiteur');
    }
}
