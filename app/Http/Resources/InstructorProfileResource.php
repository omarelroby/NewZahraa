<?php

namespace App\Http\Resources;

use App\Models\CountryTranslation;
use Illuminate\Http\Resources\Json\JsonResource;

class InstructorProfileResource extends JsonResource
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
            'slug'=>$this->slug,
            'name'=>$this->name,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'brief'=>$this->brief,
            'image'=>$this->image,
            'category'=>new CategoryResource($this->category),
            'country'=>new CountryResource($this->country),
            'commission_instructor'=>$this->commission_instructor,
            'balance'=>$this->balance,
            'total_commision'=>$this->OnlineCourses->orders->sum('instructor_commision'),
            'number_of_student'=>$this->OnlineCourses->orders->count(),
            'number_of_courses'=>$this->OnlineCourses->count(),



        ];
    }
}
