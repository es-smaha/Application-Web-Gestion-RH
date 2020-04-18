<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandedocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandedocuments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('etat')->default(false);
            $table->date('datecreation');
            $table->date('datetraitement')->nullable();
            $table->integer('user_id');
            $table->integer('typedocument_id');
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
        Schema::dropIfExists('demandedocuments');
    }
}
