<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndexOfVideosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

        $rules=[

            'title' => 'array',
            'title.*' => 'required',
            'indexes_video_id' => 'required',
            'time_to' => 'nullable',
            'time_from' => 'nullable',


            ];

           return $rules;
    }


}
