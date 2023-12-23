<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReviewResource;
use App\Models\Review;
use App\Models\ReviewChecklistRating;
use App\Models\ReviewComment;
use App\Models\User;
use App\Models\UserReviewReaction;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function searchReview(Request $request)
    {
        $search = $request->get('search');
        $sort = $request->get('sort');
        $reviews = Review::query();
        if (isset($search) && count($search)) {
            $reviewIds = Review::pluck('id')->toArray();
            foreach ($search as $term) {
                $reviewIds = Review::whereIn('id', $reviewIds)->where(function($query) use ($term){
                    $query->where('title', 'like', "%{$term}%")->orWhere('review_text', 'like', "%{$term}%");
                })->pluck('id')->toArray();
            }
            $reviews = $reviews->whereIn('id', $reviewIds);
        }
        $results = $reviews->get();
        $review_check_substring_ids = [];
        if(isset($search) && count($search)) {
            $review_check_substring_ids = $results->filter(function($review) use ($search) {
                $num_total = 0;
                foreach ($search as $item) {
                    if($this->isSubstring($review->title, $item) || $this->isSubstring($review->review_text, $item)){
                        $num_total++;
                    };
                }
                return $num_total === count($search);
            })->pluck('id')->toArray();
        }
        if(isset($search) && count($search)) {
            $results = Review::whereIn('id', $review_check_substring_ids)->get();
        }

        if (count($results)) {
            foreach ($results as $review) {
                $review['reviewer_name'] = User::where('id', $review->reviewer_id)->first()->username;
                $review['dislike_count'] = UserReviewReaction::where('review_id', $review->id)->where('reaction_type', 'dislike')->count();
                $review['like_count'] = UserReviewReaction::where('review_id', $review->id)->where('reaction_type', 'like')->count();
                $review['comment_count'] = ReviewComment::where('review_id', $review->id)->count();
            }
        }
        if ($sort === 'date') {
            $results = ReviewResource::collection($results)->sortByDesc('created_at')->values()->all();
        } else {
            $results = ReviewResource::collection($results)->sortByDesc('like_count')->values()->all();
        }
        return $results;
    }
    public function getReviewById($id)
    {
        $review_id = $id;
        $review = Review::where('id', $review_id)->first();
        $user = User::where('id', $review->reviewer_id)->first();
        $review->user_name = $user->username;
        $review->avatar = $user->avatar;
        $stars = ReviewChecklistRating::where('review_id', $review_id)->get();
        $review->review_check_list_ratings = $stars;
        $review_comments = ReviewComment::where('review_id', $review_id)->orderBy('created_at', 'desc')->get();
        foreach ($review_comments as $review_comment) {
            $user = User::where('id', $review_comment->user_id)->first();
            $review_comment->user_name = $user->username;
            $review_comment->avatar = $user->avatar;
        }
        $review->review_comments = $review_comments;
        return $review;
    }
}
