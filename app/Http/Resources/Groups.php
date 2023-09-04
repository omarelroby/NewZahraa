<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Groups extends JsonResource
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
            'name'=>$this->name,
            'zoom_link'=>$this->zoom_link,
            'start_date'=>$this->start_date,
            'end_date'=>$this->end_date,
            'Group_appointments'=>AppointmentsResource::collection($this->appointments),
            'instructors'=>InstructorResource::collection($this->instructors),
            'online_courses'=>OnlineCourseResource::collection($this->online_courses),


        ];
    }

}
