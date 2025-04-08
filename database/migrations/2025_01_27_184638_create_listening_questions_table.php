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
        Schema::create('listening_questions', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['academic','general']);
            $table->integer('book_no')->nullable();
            $table->integer('test_no')->nullable();
            $table->string('question_type');
            $table->text('title');
            $table->string('image')->nullable();
            $table->json('options');
            $table->json('answer_ids')->nullable();
            $table->json('answers')->nullable();
            $table->integer('marks')->default(1);
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listening_questions');
    }
};
