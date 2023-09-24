<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AppointmentsResource extends JsonResource
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
            'appointment_date' => $this->appointment_date,
            'start_url' => $this->start_url,
            'time' =>  date('h:i:s a', strtotime($this->appointment_date)) ,
            'group_name' => $this->groups->name??'',
            'course_name' => $this->groups->online_courses->name??'',
            'number_of_students'=>$this->groups->orders->count()??'',


        ];
    }

}
