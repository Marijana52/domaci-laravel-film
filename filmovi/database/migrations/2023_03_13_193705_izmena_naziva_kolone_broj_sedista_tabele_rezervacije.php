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
        Schema::table('rezervacije', function (Blueprint $table) {
            $table->renameColumn('brojSedista', 'sediste');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rezervacije', function (Blueprint $table) {
            $table->renameColumn('sediste', 'brojSedista');
        }); 
    }
};
