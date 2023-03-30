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
        Schema::create('entity_fields', function (Blueprint $table) {
            $table->id();        
            $table->string('name');
            $table->string('type');
            $table->string('comment')->nullable();
            $table->boolean('nullable')->default(false);
            $table->boolean('unique')->default(false);
            $table->boolean('primary')->default(false);
            $table->boolean('auto_increment')->default(false);
            $table->foreignId('entity_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entity_fields');
    }
};
