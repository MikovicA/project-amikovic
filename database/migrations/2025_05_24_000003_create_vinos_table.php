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
        Schema::create('vinos', function (Blueprint $table) {
            $table->id();
            $table->string("naziv",100);
            $table->text("opis");
            $table->decimal('cijena', 8, 2);
            $table->string('slika')->nullable();
            $table->boolean('featured')->default(false);
            $table->foreignId('kategorija_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vinos');
    }
};
