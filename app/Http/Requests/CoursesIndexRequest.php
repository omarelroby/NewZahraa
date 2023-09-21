<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoursesIndexRequest extends FormRequest
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
            'name' => 'array',
            'name.*' => 'required',
            'repeater' => 'array',
            'repeater.*' => 'required',
            'title' => 'nullable',
            'title.*' => 'nullable',
            'video' => 'array',
            'video.*' => 'nullable',
            'course_id' => 'nullable',
            'course_indexes_id' => 'nullable',

            ];
        foreach(config('translatable.locales') as $locale) {
            $rules["title.{$locale}"]='string';
            $rules["video.{$locale}"]='required';

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
