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
        Schema::create('mocks', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['academic','general']);
            $table->enum('section',['reading','writing','listening','speaking','full']);
            $table->enum('mock_type',['book','live','practice']);
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('banner')->nullable();
            $table->integer('book_no')->nullable();
            $table->integer('test_no')->nullable();
            $table->integer('duration')->default(60); //in minutes
            $table->string('audio')->nullable();//only for listening
            $table->string('cue_card')->nullable();//only for listening
            $table->json('reading_question_ids')->nullable();
            $table->json('writing_question_ids')->nullable();
            $table->json('listening_question_ids')->nullable();
            $table->json('speaking_question_ids')->nullable();
            $table->string('status')->default('published');
            $table->timestamp('start_time')->nullable();
            $table->timestamp('end_time')->nullable();
            $table->integer('fee')->default(0);
            $table->string('currency')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mocks');
    }
};
