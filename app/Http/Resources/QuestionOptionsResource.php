<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionOptionsResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'answer' => $this->answer,
            'answer_number' =>  $this->answer_number,
        ];
    }
}
