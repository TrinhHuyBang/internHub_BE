<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'reviewer_id',
        'title',
        'review_text',
        'is_anonymous'
    ];

    protected $attributes = [
        'is_anonymous' => 0,
    ];
}
