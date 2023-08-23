<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EbookResource extends JsonResource
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
            'title' => $this->translate(app()->getLocale())->title ?? ' ',
            'summary' => strip_tags($this->translate(app()->getLocale())->summary) ?? '',
            'image'=>$this->image,
            'sample_file'=>$this->sample_file,
            'complete_file'=>$this->complete_file,
            'type'=>$this->type,
            'amazon_url'=>$this->amazon_url,
            'writer'=>$this->writer,
            'pages_number'=>$this->pages_number??'',
            'price'=>$this->price,
            'category'=>new CategoryResource($this->category),
        ];
    }
}
