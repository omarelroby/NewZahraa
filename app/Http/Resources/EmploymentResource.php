<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmploymentResource extends JsonResource
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
            'qualifications' => strip_tags($this->translate(app()->getLocale())->qualifications),
            'experience' => $this->experience,
            'image' => $this->image,
            'salary' => $this->salary,
            'Gender' => $this->Gender,
            'job_type' => $this->job_type,
            'expiration_date' => $this->expiration_date,
            'posted_date' => $this->posted_date,
            'status' => $this->status,

        ];
    }

}
