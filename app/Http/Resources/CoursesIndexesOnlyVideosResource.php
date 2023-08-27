<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CoursesIndexesOnlyVideosResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
             'videos'=>CoursesIndexesVideosResource::collection($this->videos),


        ];
    }
}
