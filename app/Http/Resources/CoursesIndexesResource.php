<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CoursesIndexesResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
             'name' => $this->translate(app()->getLocale())->name,
            'video-index'=>CoursesIndexesVideosResource::collection($this->videos),


        ];
    }
}