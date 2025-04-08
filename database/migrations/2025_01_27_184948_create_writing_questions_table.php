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
        Schema::create('writing_questions', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['academic','general']);
            $table->integer('book_no')->nullable();
            $table->integer('test_no')->nullable();
            $table->string('question_type');//type should be first or second
            $table->string('title');
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
        Schema::dropIfExists('writing_questions');
    }
};
