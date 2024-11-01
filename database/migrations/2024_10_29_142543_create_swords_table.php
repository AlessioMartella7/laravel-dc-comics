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
        Schema::create('swords', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('weight')->unsigned();
            $table->string('image');
            $table->tinyInteger('length')->unsigned();
            $table->string('material');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('swords');
    }
};
