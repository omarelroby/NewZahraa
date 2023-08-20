<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OnlineCoursesRequest extends FormRequest
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
            'description' => 'array',
            'description.*' => 'required',
            'price'=>'nullable',
            'image'=>'nullable',
            'hours'=>'nullable',
            'date'=>'nullable',
            'lessons_number'=>'nullable',
            'instructor_id'=>'array',
            'instructor_id.*'=>'required',
            'category_id'=>'required',

            ];
        foreach(config('translatable.locales') as $locale) {
            $rules["title.{$locale}"]='string';

        }
           return $rules;
    }
//    public function messages(): array
//    {
//        return [
//            'preview_video.mimes' => 'A file should be mp4',
//         ];
//    }

}
