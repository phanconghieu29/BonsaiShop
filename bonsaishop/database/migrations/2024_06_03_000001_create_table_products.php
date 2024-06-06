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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('pro_name');
            $table->unsignedInteger('price');
            $table->string('image');
            $table->string('describe');
            $table->unsignedInteger('quantity');
            $table->string('pro_slug');
            $table->timestamps();
            $table->foreignId('category_id')->constrained('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_products');
    }
};
