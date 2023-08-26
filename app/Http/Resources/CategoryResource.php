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
            'Courses-Number'=>$this->courses->count()??'',
            'Online-Courses-Number'=>$this->onlineCourses->count()??'',
            'Ebooks-Number'=>$this->Ebooks->count()??'',
            'free-Videos-Number'=>$this->FreeVideos->count()??'',



        ];
    }
}
