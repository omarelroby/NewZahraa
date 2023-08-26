<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'type' => $this->type,
            'name' => $this->translate(app()->getLocale())->name,
            'Courses_Number'=>$this->courses->count()??'',
            'Online_Courses_Number'=>$this->onlineCourses->count()??'',
            'Ebooks_Number'=>$this->Ebooks->count()??'',
            'Free_Videos_Number'=>$this->FreeVideos->count()??'',



        ];
    }
}
