<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeblocageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deblocage', function (Blueprint $table) {
            $table->id();
            $table-> string("nom_prenom",50);
            $table-> string("telephone",10);
            $table-> string("mail",100);
            $table-> time("heure_arrive");
            $table-> time("heure_depart");
            $table-> string("sexe",1);
            $table-> string("agence_regionale",100);
            $table-> string("num_aej",10);
            $table-> date("date");
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
        Schema::dropIfExists('deblocage');
    }
}
