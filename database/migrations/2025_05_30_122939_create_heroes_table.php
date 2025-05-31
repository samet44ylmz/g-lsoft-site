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
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('btn_text')->nullable();
            $table->text('btn_url')->nullable();
            $table->text('image')->nullable();
            $table->text('sub_title_1')->nullable();
            $table->text('sub_title_2')->nullable();
            $table->text('sub_title_3')->nullable();
            $table->text('description_1')->nullable();
            $table->text('description_2')->nullable();
            $table->text('description_3')->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};
