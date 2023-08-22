<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VideosResource extends JsonResource
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
            'preview_video'=>$this->preview_video,
            'complete_video'=>$this->complete_video,
            'price'=>$this->price,
            'indexes'=> VideoIndexesResource::collection($this->indexes),

        ];
    }
}
