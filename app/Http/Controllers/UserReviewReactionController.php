<?php

namespace App\Http\Controllers;

use App\Models\UserReviewReaction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserReviewReactionController extends Controller
{
    public function reaction (Request $request) {
        try {
            $user_id = $request->get('user_id');
            $review_id = $request->get('review_id');
            $reaction = $request->get('reaction');
            $result = [];
            if(isset($reaction) && $reaction) {
                $reacted = UserReviewReaction::where('user_id', $user_id)->where('review_id', $review_id)->first();
                if (!$reacted) {
                    UserReviewReaction::create(['user_id' => $user_id, 'review_id' => $review_id, 'reaction_type' => $reaction]);
                } else {
                    UserReviewReaction::where('user_id', $user_id) -> where('review_id', $review_id) -> update(['reaction_type' => $reaction]);
                }
            }
            $reacted = UserReviewReaction::where('user_id', $user_id)->where('review_id', $review_id)->first();
            if($reacted) {
                $result['reaction_type'] = $reacted->reaction_type;
            } else {
                $result['reaction_type'] = 'none';
            }
            $dislike_count = UserReviewReaction::where('review_id', $review_id)->where('reaction_type', 'dislike')->count();
            $like_count = UserReviewReaction::where('review_id', $review_id)->where('reaction_type', 'like')->count();
            $result['count'] = $like_count - $dislike_count;
            $result['like_count'] = $like_count;
            $result['dislike_count'] = $dislike_count;
            return $result;
        } catch (Exception $e) {
            Log::info($e);
        }
    }
}
