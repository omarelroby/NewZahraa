<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseOrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'payment_method' => $this->payment_method,
            'discount' => $this->discount,
            'price' => $this->price,
            'status' => $this->status,
            'total' => $this->total,
            'course' => new CoursesResource($this->course),

        ];
    }
}
