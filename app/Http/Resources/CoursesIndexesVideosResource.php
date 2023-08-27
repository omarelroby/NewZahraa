<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CoursesIndexesVideosResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->translate(app()->getLocale())->title,
            'video'=>$this->video,
            'is_free'=>$this->is_free,
//            'index'=>$this->IndexesVideos??'',

        ];
    }
}
