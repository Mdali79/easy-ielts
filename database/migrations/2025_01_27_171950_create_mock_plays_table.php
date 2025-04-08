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
        Schema::create('mock_plays', function (Blueprint $table) {
            $table->id();
            $table->integer('mock_id');
            $table->bigInteger('user_id');
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->integer('reading_right_answer')->default(0);
            $table->integer('reading_wrong_answer')->default(0);
            $table->integer('reading_score')->default(0);
            $table->integer('listening_right_answer')->default(0);
            $table->integer('listening_wrong_answer')->default(0);
            $table->integer('listening_score')->default(0);
            $table->integer('writing_first_question_score')->default(0);
            $table->integer('writing_second_question_score')->default(0);
            $table->integer('writing_score')->default(0);
            $table->integer('speaking_score')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mock_plays');
    }
};
