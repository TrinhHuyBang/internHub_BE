<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewChecklistRating extends Model
{
    use HasFactory;
    protected $fillable = [
        'review_id',
        'criteria_name',
        'rating',
    ];
}
