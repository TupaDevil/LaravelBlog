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
        Schema::create('friends', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('nick_name');
            $table->integer('age')->unsigned();
            $table->boolean('alive')->default(1);
            $table->string('prefered_weapon')->nullable();
            
            /* variant 1 */
            $table->unsignedBigInteger('weapon_id')->nullable();
            $table->index('weapon_id', 'friend_weapon_idx'); // Эта хуйня походу ничего не решает в этой жизни
            $table->foreign('weapon_id', 'friend_weapon_fk' )->references('id')->on('weapons');

            $table->unsignedBigInteger('sex_id')->nullable();
            $table->index('sex_id', 'friend_sex_idx');
            $table->foreign('sex_id', 'friend_sex_fk')->references('id')->on('sexes');

            $table->timestamps();
            $table -> softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('friends');
    }
};
