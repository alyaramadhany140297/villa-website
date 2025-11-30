<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            // PERUBAHAN KRITIS: Mengubah 'name' menjadi 'guest_name' agar sesuai dengan error database Anda
            $table->string('guest_name', 100); // Nama pemberi ulasan
            $table->text('comment');     // Isi ulasan
            $table->unsignedTinyInteger('rating')->default(5); // Rating (1-5)
            $table->boolean('is_approved')->default(false); // Status persetujuan Admin
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
}