<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPostings extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_id',
        'title',
        'description',
        'location',
        'salary',
        'recruitment_number',
        'industry',
        'field',
        'internship_duration',
        'internship_method',
        'internship_type',
        'positions_available',
        'is_closed',
        'posting_date',
    ];

    protected $attributes = [
        'is_closed' => 0,
    ];
}
