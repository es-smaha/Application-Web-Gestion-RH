<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandecongesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandeconges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('datedebut');
            $table->date('datefin');
            $table->integer('jour');
            $table->longtext('raison');
            $table->longtext('motifs')->nullable();
            $table->string('recu')->nullable();
            $table->integer('user_id');
            $table->integer('solde')->nullable();
            $table->integer('typeconge_id');
            $table->integer('avis')->default(0);
            $table->boolean('decision')->default(false);
            $table->boolean('motif')->default(false);
            $table->boolean('pdf')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandeconges');
    }
}
