<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('guest_name', 100);
            $table->unsignedTinyInteger('rating')->check('rating >= 1 AND rating <= 5'); // Rating 1-5
            $table->text('comment');
            $table->boolean('is_approved')->default(false); // Untuk moderasi
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};