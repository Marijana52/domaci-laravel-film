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
        Schema::table('gledaoci', function (Blueprint $table) {
            $table->after('imePrezime', function ($table) {
                $table->string('brojTelefona');
            });
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gledaoci', function (Blueprint $table) {
            $table->dropColumn('brojTelefona');
        });
    }
};
