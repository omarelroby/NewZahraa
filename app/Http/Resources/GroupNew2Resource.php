<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GroupNew2Resource extends JsonResource
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
            'days' => array_unique(array_map(function ($date) {
                return date('D', strtotime($date));
            }, $this->appointments->pluck('appointment_date')->toArray()) ) ,
            'quizes_number'=>$this->quiz->count(),
            'number_of_students'=>$this->orders->count()??'',
            'students'=>Customer2Resource::collection($this->students),


        ];
    }

}
