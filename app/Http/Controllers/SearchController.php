<?php

namespace App\Http\Controllers;

use App\Models\Business;
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
        // $status = $request->get('status'); // trang thái tuyển
        $filter = $request->get('filter'); // trang thái sắp xếp theo thứ tự 1 2 3 4
        $jobs = JobPosting::query();
        if ($salary !== 'all') {
            switch ($salary) {
                case '1':
                    $jobs = $jobs->where('salary', '<', 2000000.0);
                    break;
                case '2':
                    $jobs = $jobs->whereBetween('salary', [2000000.0, 4000000.0]);
                    break;
                case '3':
                    $jobs = $jobs->whereBetween('salary', [4000000.0, 6000000.0]);
                    break;
                case '4':
                    $jobs = $jobs->whereBetween('salary', [6000000.0, 8000000.0]);
                    break;
                default:
                    break;
            }
        }

        if ($industry !== 'all') {
            $jobs = $jobs->where('industry', 'like', $industry);
        }
        if ($field !== 'all') {
            $jobs = $jobs->where('field', 'like', $field);
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
                    $jobs = $jobs->whereBetween('internship_duration', '>', 6);
                    break;
            }
        }
        if ($internship_method !== 'all') {
            $jobs = $jobs->where('internship_method', $internship_method);
        }
        if ($internship_type !== 'all') {
            $jobs = $jobs->where('internship_type', $internship_type);
        }
        // if ($status !== 'all') {
        //     if ($status === '1') {
        //         $jobs = $jobs->where('is_closed', 1);
        //     } else {
        //         $jobs = $jobs->where('is_closed', 0);
        //     }
        // }
        if ($business_name !== 'all') {
            $business_ids = Business::where('name', 'LIKE', '%' . $business_name . '%')->pluck('id');
            $jobs = $jobs->whereIn('business_id', $business_ids);
        }
        if ($province !== 'all') {
            $business_ids = Business::where('province', $province)->pluck('id');
            $jobs = $jobs->whereIn('business_id', $business_ids);
        }
        switch ($filter) {
            case '1':
                $jobs = $jobs->orderBy('created_at', 'desc');
                break;
            case '2':
                $jobs = $jobs->orderBy('updated_at', 'desc');
                break;
            case '3':
                $jobs = $jobs->orderBy('salary', 'desc');
                break;
            case '4':
                $jobs = $jobs->orderBy('recruitment_number', 'desc');
                break;
            default:

                break;
        }

        $jobs = $jobs->get();
        foreach ($jobs as $job) {
            $business_id = $job->business_id;
            $job->business_name = Business::where('id', $business_id)->first()->name;
            $job->province = Business::where('id', $business_id)->first()->province;
            $job->location = Business::where('id', $business_id)->first()->location;
        }
        return $jobs;
    }
}
