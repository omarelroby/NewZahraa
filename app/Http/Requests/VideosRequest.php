<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideosRequest extends FormRequest
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
            'preview_video'=>'nullable|mimes:mp4',
            'complete_video'=>'nullable|mimes:mp4',
            'price'=>'required',
            'instructor_id'=>'required',

            ];
        foreach(config('translatable.locales') as $locale) {
            $rules["{$locale}.title"]='required';
            $rules["{$locale}.description"]='required';

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
