<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // Pastikan fillable di sini
    protected $fillable = [
        'guest_name',
        'rating',
        'comment',
        'is_approved',
    ];
}