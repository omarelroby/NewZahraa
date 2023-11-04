<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->translate(app()->getLocale())->title,
            'description' => $this->translate(app()->getLocale())->description,
             'Keywords'=>$this->Keywords,
             'phone'=>$this->phone,
             'whatsapp'=>$this->whatsapp,
             'email'=>$this->email,
             'address'=>$this->address,
             'google_map'=>$this->google_map,
             'facebook_url'=>$this->facebook_url,
             'twitter_url'=>$this->twitter_url,
             'youtube_url'=>$this->youtube_url,
             'tiktok_url'=>$this->tiktok_url,



        ];
    }
}
