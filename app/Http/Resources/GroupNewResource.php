<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GroupNewResource extends JsonResource
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
            'start_date'=>date('d-m-Y', strtotime($this->start_date)),
            'end_date'=>date('d-m-Y', strtotime($this->end_date)),
            'time' =>  date('h:i:s a', strtotime($this->start_date)) ,
            'zoom_link'=>$this->next_appointment->start_url??'',
            'online_courses'=>new OnlineCourseInstructorResource($this->online_courses),
            'number_of_students'=>$this->orders->count()??'',


        ];
    }

}
