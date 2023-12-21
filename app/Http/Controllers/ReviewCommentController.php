<?php

namespace App\Http\Controllers;

use App\Models\ReviewComment;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReviewCommentController extends Controller
{
    public function create (Request $request) {
        try {
            $user_id = $request->get('user_id');
            $review_id = $request->get('review_id');
            $comment_text = $request->get('comment_text');
            $comment = ReviewComment::create(['user_id' => $user_id, 'review_id' => $review_id, 'comment_text' => $comment_text]);
            return $comment;
        } catch (Exception $e) {
            Log::info($e);
        }
    }
}
