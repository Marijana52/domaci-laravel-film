<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('filmovi', function (Blueprint $table) {
            $table->id();
            $table->string('naziv',20);
            $table->string('zanr');
            $table->integer('brojSale');
            $table->string('nacinPrevodjenja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filmovi');
    }
};
