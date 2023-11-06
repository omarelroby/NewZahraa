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
            'is_free' => $this->is_free,
            'video' => $this->video,
            'Indexes_videos'=>$this->IndexesVideos,
            'watched'=>$this->user_video?1:0,

        ];
    }
}
