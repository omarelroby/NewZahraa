<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OnlineCourses extends JsonResource
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
            'title' => $this->translate(app()->getLocale())->title,
            'description' => $this->translate(app()->getLocale())->description,
            'image'=>asset($this->image),
            'price'=>$this->price,
            'hours'=>$this->hours,
            'date'=>$this->date,
            'lessons_number'=>$this->lessons_number,


        ];
    }
}