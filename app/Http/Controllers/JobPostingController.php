<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Image;
use App\Models\JobPosting;
use Illuminate\Http\Request;

class JobPostingController extends Controller
{
    public function getDetail($id) {
        $jobPosting = JobPosting::where('id', $id)->first();
        $business = Business::where('id', $jobPosting->business_id)->first();
        $images = Image::where('job_posting_id', $jobPosting->id);
        $image_urls = [];
        foreach ($images as $image) {
            array_push($image_urls, $image);
        }
        $jobPosting['business'] = $business;
        $jobPosting['images'] = $image_urls;
        return $jobPosting;
    }
}
