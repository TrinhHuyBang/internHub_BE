<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'industry',
        'location',
        'country',
        'business_logo',
        'employees_number',
        'website',
        'contact_email',
    ];

    
}
