<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReviewResource;
use App\Models\Review;
use App\Models\ReviewComment;
use App\Models\User;
use App\Models\UserReviewReaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function searchReview(Request $request) {
        $search = $request->get('search');
        $sort = $request->get('sort');
        $reviews = Review::where(function ($query) use ($search) {
            if(count($search)) {
                foreach ($search as $term) {
                    $query->orWhere('title', 'like', "%{$term}%")
                        ->orWhere('review_text', 'like', "%{$term}%");
                }
            }
        });
        $results = $reviews->get();
        if(count($results)) {
            foreach ($results as $review) {
                $review['reviewer_name'] = User::where('id', $review->reviewer_id)->first()->username;
                $review['dislike_count'] = UserReviewReaction::where('review_id', $review->id)->where('reaction_type', 'dislike')->count();
                $review['like_count'] = UserReviewReaction::where('review_id', $review->id)->where('reaction_type', 'like')->count();
                $review['comment_count'] = ReviewComment::where('review_id', $review->id)->count();
            }
        }
        if($sort === 'date') {
            $results = ReviewResource::collection($results)->sortByDesc('created_at')->values()->all();
        } else {
            $results = ReviewResource::collection($results)->sortByDesc('like_count')->values()->all();
        }
        return $results;
    }
}
