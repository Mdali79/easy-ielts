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
        Schema::create('preparation_guide_lists', function (Blueprint $table) {
            $table->id();
            $table->integer('preparation_guide_id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('status')->default('published');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preparation_guide_lists');
    }
};
