<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FreeVideoRequest extends FormRequest
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
            'youtube_url'=>'required',
            'image'=>'nullable',

            ];
        foreach(config('translatable.locales') as $locale) {
            $rules["{$locale}.title"]='required';
            $rules["{$locale}.description"]='required';

        }
           return $rules;
    }

}
