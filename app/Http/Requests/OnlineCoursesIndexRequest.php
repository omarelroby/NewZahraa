<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OnlineCoursesIndexRequest extends FormRequest
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
            'title' => 'nullable',
            'title.*' => 'nullable',
            'repeater' => 'array',
            'repeater.*' => 'required',
            'online_course_id' => 'nullable',
            'online_course_indexes_id' => 'nullable',

            ];
        foreach(config('translatable.locales') as $locale) {
            $rules["title.{$locale}"]='string';

        }
           return $rules;
    }
    public function messages(): array
    {
        return [
            'preview_video.mimes' => 'A file should be mp4',
         ];
    }

}
