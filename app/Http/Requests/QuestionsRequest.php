<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionsRequest extends FormRequest
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
            'question' => 'array',
            'question.*' => 'required',
            'answer' => 'array',
            'answer.*' => 'required',

            ];

           return $rules;
    }
//    public function messages(): array
//    {
//        return [
//            'preview_video.mimes' => 'A file should be mp4',
//         ];
//    }

}
