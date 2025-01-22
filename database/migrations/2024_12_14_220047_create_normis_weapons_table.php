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
        Schema::create('normis_weapons', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('normis_id')->nullable();
            $table->unsignedBigInteger('weapon_id')->nullable();

            $table->index('normis_id', 'normis_weapon_normis_idx');
            $table->index('weapon_id', 'normis_weapon_weapon_idx');

            $table->foreign('normis_id', 'normis_weapon_normis_fk')->references('id')->on('normis');
            $table->foreign('weapon_id', 'normis_weapon_weapon_fk')->references('id')->on('weapons');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('normis_weapons');
    }
};
