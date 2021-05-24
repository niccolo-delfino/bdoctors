<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsPromosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // MIGRATION TABELLA DOCTOR PROMOS
    public function up()
    {
        Schema::create('doctors_promos', function (Blueprint $table) {
            $table->id();
            $table->foreignId("doctor_id")->constrained();
            $table->foreignId("promo_id")->constrained();
            $table->dateTime('end');
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
        Schema::dropIfExists('doctors_promos');
    }
}
