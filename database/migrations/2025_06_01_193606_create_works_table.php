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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('title_1')->nullable();
            $table->text('description_1')->nullable();
            $table->string('title_2')->nullable();
            $table->text('description_2')->nullable();
            $table->string('title_3')->nullable();
            $table->text('description_3')->nullable();
            $table->string('title_4')->nullable();
            $table->text('description_4')->nullable();
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
