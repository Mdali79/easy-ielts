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
        Schema::create('mock_users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mock_id');
            $table->bigInteger('user_id');
            $table->integer('reading_band_score')->default(0);
            $table->integer('writing_band_score')->default(0);
            $table->integer('listening_band_score')->default(0);
            $table->integer('speaking_band_score')->default(0);
            $table->integer('overall_band_score')->default(0);
            $table->timestamp('submission_time')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mock_users');
    }
};
