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
        Schema::create('entity_relationships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entity_field_id')->constrained('entity_fields')->onDelete('cascade');
            $table->foreignId('related_entity_field_id')->constrained('entity_fields')->onDelete('cascade');
            $table->string('type');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entity_relationships');
    }
};
