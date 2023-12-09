<?php

namespace App\Http\Controllers;

use App\Models\JobPosting;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchJob(Request $request)
    {
        $province = $request->get('province'); // tỉnh
        $salary = $request->get('salary'); //lương
        $industry = $request->get('industry'); //ngành
        $field = $request->get('field'); //lĩnh vực
        $internship_duration = $request->get('internship_duration'); //thời gian thực tập
        $internship_method = $request->get('internship_method'); // phương thức thực tập(on/off)
        $business_name = $request->get('business_name'); // tên công ty
        $internship_type = $request->get('internship_type'); // hình thức part/fulltime
        $status = $request->get('status'); // trang thái tuyển

        // $jobs = JobPosting::all();
        // foreach($jobs as $job) {
        //     $business_id = $job->business_id;
        //     $job->business_name = Business::where('id', $business_id)->first()->name;
        // }
        if ($province !== 'all') {
            $jobs = JobPosting::where('province', 'LIKE', '%' . $province . '%');
        }
        if ($salary !== 'all') {
            switch ($salary) {
                case '1':
                    $jobs = $jobs->where('salary', '<', 2000000);
                    break;
                case '2':
                    $jobs = $jobs->whereBetween('salary', [2000000, 4000000]);
                    break;
                case '3':
                    $jobs = $jobs->whereBetween('salary', [4000000, 6000000]);
                    break;
                case '4':
                    $jobs = $jobs->whereBetween('salary', [6000000, 8000000]);
                    break;
                default:
                    break;
            }
        }
        if ($industry !== 'all') {
            $jobs = $jobs->where('industry', $industry);
        }
        if ($field !== 'all') {
            $jobs = $jobs->where('field', $field);
        }
        if ($internship_duration !== 'all') {
            switch ($internship_duration) {
                case '1':
                    $jobs = $jobs->where('internship_duration', '<', 1);
                    break;
                case '2':
                    $jobs = $jobs->whereBetween('internship_duration', [1, 2]);
                    break;
                case '3':
                    $jobs = $jobs->whereBetween('internship_duration', [2, 4]);
                    break;
                case '4':
                    $jobs = $jobs->whereBetween('internship_duration', [4, 6]);
                    break;
                default:
                    break;
            }
        }
        if ($internship_method !== 'all') {
            $jobs = $jobs->where('internship_method', $internship_method);
        }
        if ($internship_type !== 'all') {
            $jobs = $jobs->where('internship_type', $internship_type);
        }
        if ($status !== 'all') {
            if ($status === '1') {
                $jobs = $jobs->where('is_closed', true);
            } else {
                $jobs = $jobs->where('is_closed', false);
            }
        }
        if ($business_name !== 'all') {
            $jobs->join('business', 'job_postings.business_id', '=', 'business.id')
                ->where('business.name', 'LIKE', '%' . $business_name . '%');
        }

        $jobs = $jobs->get();
        return $jobs;
    }
}
