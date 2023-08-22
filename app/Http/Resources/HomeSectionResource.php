<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HomeSectionResource extends JsonResource
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
            'title' => $this->translate(app()->getLocale())->title,
            'description' => strip_tags($this->translate(app()->getLocale())->description),
            'button' => $this->translate(app()->getLocale())->button,
            'url'=>$this->url,
            'image'=>$this->image,



        ];
    }
}
