<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modeles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('matricule')->nullable();
            $table->string('service')->nullable();
            $table->string('lundi')->nullable();
            $table->string('mardi')->nullable();
            $table->string('mercredi')->nullable();
            $table->string('jeudi')->nullable();
            $table->string('vendredi')->nullable();
            $table->string('samedi')->nullable();
            $table->string('dimanche')->nullable();
            $table->timestamps ();
        });
          
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modeles');
    }
}
