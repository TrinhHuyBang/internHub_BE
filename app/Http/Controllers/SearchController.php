<?php

namespace App\Http\Controllers;

use App\Http\Resources\JobResource;
use App\Models\Business;
use App\Models\JobPosting;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchJob(Request $request)
    {
        $province = $request->get('province'); // tỉnh
        // $salary = $request->get('salary'); //lương
        $salary_start = $request->get('salary_start'); //lương
        $salary_end = $request->get('salary_end'); //lương
        $industry = $request->get('industry'); //ngành
        $field = $request->get('field'); //lĩnh vực
        $internship_duration_start = $request->get('internship_duration_start'); //thời gian thực tập
        $internship_duration_end = $request->get('internship_duration_end'); //thời gian thực tập
        $internship_method = $request->get('internship_method'); // phương thức thực tập(on/off)
        $business_name = $request->get('business_name'); // tên công ty
        $internship_type = $request->get('internship_type'); // hình thức part/fulltime
        // $status = $request->get('status'); // trang thái tuyển
        $filter = $request->get('filter'); // trang thái sắp xếp theo thứ tự 1 2 3 4
        $jobs = JobPosting::query();
        if ($salary_start === 'all' && $salary_end === 'all') {
        } else {
            if ($salary_start === -1 && $salary_end === -1) {
                $jobs = $jobs->where('salary', null);
            } else {
                if ($salary_start === 10 && $salary_end === 'all') {
                    $jobs = $jobs->where('salary', '>=', 10000000);
                } else {
                    $jobs = $jobs->where('salary', '>=', $salary_start * 1000000)->where('salary', '<', $salary_end * 1000000);
                }
            }
        }

        if ($industry !== 'all') {
            $jobs = $jobs->where('industry', 'like', $industry);
        }
        if ($field !== 'all') {
            $jobs = $jobs->where('field', 'like', $field);
        }

        if ($internship_duration_start === 'all' && $internship_duration_end === 'all') {
        } else {
            if ($internship_duration_start === 6 && $internship_duration_end === 'all') {
                $jobs = $jobs->where('internship_duration', '>=', 6);
            } else {
                $jobs = $jobs->where('internship_duration', '>=', $internship_duration_start)
                    ->where('internship_duration', '<', $internship_duration_end);
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

        $title = $request->get('title');
        if ($title) {
            $jobsObject = $jobs->get();
            $jobsObjectMatchIds = $jobsObject->filter(function($job) use ($title) {
                return $this->isSubstring($job->title, $title);
            })->pluck('id')->toArray();
            $jobs = $jobs->whereIn('id', $jobsObjectMatchIds);
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
        $jobs = $jobs->where('is_closed', 0);
        $jobs = $jobs->get();
        foreach ($jobs as $job) {
            $business_id = $job->business_id;
            $business = Business::where('id', $business_id)->first();
            $job->business_name = $business->name;
            $job->province = $business->province;
            $job->location = $business->location;
            $job->business_logo = $business->business_logo;
        }
        return $jobs;
    }

    public function getSimilarJob(Request $request) {
        $job_id = $request->get('id');
        $job = JobPosting::where('id', $job_id)->first();
        $province = Business::where('id', $job->business_id)->first()->province;
        $listJobs = JobPosting::where('id', '!=', $job_id)->where('is_closed', 0)->get();
        foreach ($listJobs as $job_posting) {
            $point = 0;
            if($job_posting->industry == $job->industry) {
                $point += 1;
            }
            if($job_posting->field == $job->field) {
                $point += 1;
            }
            $business_id = $job_posting->business_id;
            $business = Business::where('id', $business_id)->first();
            $job_posting->business_name = $business->name;
            $job_posting->province = $business->province;
            $job_posting->location = $business->location;
            $job_posting->business_logo = $business->business_logo;
            if($job_posting->province == $province) {
                $point += 0.5;
            }
            $job_posting->point = $point;
        }
        $listJobs = JobResource::collection($listJobs)->sortBy([
            ['point', 'desc'],
            ['created_at', 'desc']
        ])->values()->all();
        return $listJobs;
    }
}
