<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisiteurSocieteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visiteur_societe', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table-> string("nom_prenom",50);
            $table-> string("telephone",10);
            $table-> string("nom_agent",100);
            $table-> string("objet",100);
            $table-> string("societe",100);
            $table-> time("heure_arrive");
            $table-> time("heure_depart");
            $table-> date("date");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visiteur_societe');
    }
}
