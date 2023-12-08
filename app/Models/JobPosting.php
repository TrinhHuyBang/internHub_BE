<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosting extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_id',
        'title',
        'description',
        'salary',
        'recruitment_number',
        'industry',
        'field',
        'internship_duration',
        'internship_method',
        'internship_type',
        'is_closed',
    ];

    protected $attributes = [
        'is_closed' => 0,
    ];
}
