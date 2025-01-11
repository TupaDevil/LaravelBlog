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
        Schema::create('friend_perks', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('friend_id');
            $table->unsignedBigInteger('perk_id');

            $table->index('friend_id', 'friend_perk_friend_idx');
            $table->index('perk_id', 'friend_perk_perk_idx');

            $table->foreign('friend_id','friend_perk_friend_fk')->references('id')->on('friends');
            $table->foreign('perk_id','friend_perk_perk_fk')->references('id')->on('perks');

            /* пример */
            // $table->index('sex_id', 'friend_sex_idx');
            // $table->foreign('sex_id', 'friend_sex_fk')->references('id')->on('sexes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('friend_perks');
    }
};
