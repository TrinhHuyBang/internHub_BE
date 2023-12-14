<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $fields = [
            "id" => $this->id,
            "reviewer_id" => $this->reviewer_id,
            "title" => $this->title,
            "review_text" => $this->review_text,
            "is_anonymous" => $this->is_anonymous,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "like_count" => $this->like_count,
            "reviewer_name" => $this->reviewer_name,
            "dislike_count" => $this->dislike_count,
            "comment_count" => $this->comment_count
        ];
        return $fields;
    }
}
