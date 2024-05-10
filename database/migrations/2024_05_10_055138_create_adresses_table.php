<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->id();
            $table->string('pais');
            $table->string('ciudad');
            $table->string('comuna');
            $table->string('calle');
            $table->string('numero');

            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users'); //Restricción de clave foránea

            $table->foreignId('user_id')->constrained()->onDelete('cascade'); //Restricción de clave foránea

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adresses');
    }
};
