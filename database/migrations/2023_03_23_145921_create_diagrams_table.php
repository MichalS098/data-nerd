<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('diagrams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();        
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            $table->integer('width')->default(0);
            $table->integer('height')->default(0);
            $table->integer('zoom')->default(100);
            $table->integer('x')->default(0);
            $table->integer('y')->default(0);
            $table->boolean('show_grid')->default(true);            

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('diagrams');
    }
};
