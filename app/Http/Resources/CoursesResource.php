<?php

namespace App\Http\Resources;

use App\Models\CourseIndexes;
use Illuminate\Http\Resources\Json\JsonResource;

class CoursesResource extends JsonResource
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
            'description' => $this->translate(app()->getLocale())->description,
            'preview_video'=>asset($this->preview_video),
            'price'=>$this->price,
            'amazon_url'=>$this->amazon_url,
            'indexes'=> CoursesIndexesResource::collection($this->indexes),


        ];
    }
}
