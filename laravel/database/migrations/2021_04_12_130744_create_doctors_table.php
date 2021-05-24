<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //MIGRATION TABELLA PROFILO MEDICO   
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('customer_id')->nullable();
            $table->string('user_name');
            $table->string('specialization');
            $table->string('photo');
            $table->string('phone_num', 20);
            $table->string('office_address', 100);
            $table->string('city', 20);
            $table->string('cv');
            $table->string('promos')->nullable();
            $table->string('end')->nullable();
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
        Schema::dropIfExists('doctors');
    }
}



// TABELLA DA CREARE SUCCESSIVAMENTE IN UN'ALTRA MIGRATE PER TUTTE LE
// SOTTOSCRIZIONI DEI DOTTORI
// Schema::create('subscriptions', function (Blueprint $table) {
//     $table->increments('id');
//     $table->unsignedInteger('user_id');
//     $table->string('name');
//     $table->string('braintree_id');
//     $table->string('braintree_plan');
//     $table->integer('quantity');
//     $table->timestamp('trial_ends_at')->nullable();
//     $table->timestamp('ends_at')->nullable();
//     $table->timestamps();
// });
