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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['MOBILE','TABLET','LAPTOP'])->default('LAPTOP');
            $table->string('name')->nullable();
            $table->string('company')->nullable();
            $table->integer('capacity')->nullable();
            $table->integer('ram')->nullable();
            $table->string('color')->nullable();
            $table->double('price')->nullable();
            $table->string('accessories')->nullable();
            $table->string('hard_disk')->nullable();
            $table->string('graphics_card')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobiles');
    }
};
