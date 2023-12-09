<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function list() {
        $business = Business::all('name');
        return $business;
    }
}
