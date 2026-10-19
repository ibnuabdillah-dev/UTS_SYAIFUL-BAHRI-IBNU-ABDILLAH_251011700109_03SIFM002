<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('snacks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('flavor');
            $table->unsignedInteger('price');   // rupiah
            $table->unsignedInteger('weight');  // gram
            $table->string('image');            // nama file di public/assets/images/
            $table->text('description');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('snacks');
    }
};
