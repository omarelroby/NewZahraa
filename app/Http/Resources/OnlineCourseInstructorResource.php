<?php

namespace App\Http\Resources;

use App\Models\OnlineCourseOrders;
use Illuminate\Http\Resources\Json\JsonResource;

class OnlineCourseInstructorResource extends JsonResource
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
            'slug' => $this->slug,
            'title' => $this->translate(app()->getLocale())->title,
            'description' => strip_tags($this->translate(app()->getLocale())->description),
            'image'=>$this->image,
            'price'=>$this->price,
            'balance_after_commission'=>$this->instructor_orders->sum('instructor_commision'),
            'hours'=>$this->hours,
            'date'=>$this->date,
            'lessons_number'=>$this->lessons_number,
            'quizes_number'=>$this->quizes->count(),
            'introduction_image'=>$this->introduction_image,
            'number_of_students'=>$this->orders->count()??'',



        ];
    }


}
