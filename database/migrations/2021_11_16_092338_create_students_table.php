<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();

          $table->string ('nom')->comment('je suis nouveau dans laravel')->default('sinda');
            $table->string('prenom')->nullable();
            $table->date('dateNaissance')->comment('la datede naissance');
            $table->enum('state',['CMR','CA','CD'])->default('CMR');
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
        Schema::dropIfExists('students');
    }
}
