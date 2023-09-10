<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuizResource extends JsonResource
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
            'quiz_name' => $this->quiz_name,
            'degree' => $this->degree,
            'discount' => $this->degree,
            'discount_score' => $this->degree,
            'Questions' => QuizQuestionResource::collection($this->questions),
            'answered' => auth('api')->user() && (($this->answer ? true : false)),
            'my_degree' => auth('api')->user()?($this->answer?$this->answer->total_degree:null):null,



        ];
    }
}
