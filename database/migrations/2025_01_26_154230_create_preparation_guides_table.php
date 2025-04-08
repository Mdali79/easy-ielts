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
        Schema::create('preparation_guides', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('sub_type');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('sub_description')->nullable();
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
        Schema::dropIfExists('preparation_guides');
    }
};
