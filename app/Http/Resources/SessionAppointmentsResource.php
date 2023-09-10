<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SessionAppointmentsResource extends JsonResource
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
            'date' => $this->date,
            'month' => $this->month,
            'time' =>  date('h:i:s a', strtotime($this->date)) ,
            'available' => $this->booking ? false : (($this->date > date('Y-m-d H:i')) ? true : false),

        ];
    }

}
