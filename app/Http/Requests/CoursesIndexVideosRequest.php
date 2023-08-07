<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoursesIndexVideosRequest extends FormRequest
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
            'video' => 'array',
            'video.*' => 'nullable',
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
