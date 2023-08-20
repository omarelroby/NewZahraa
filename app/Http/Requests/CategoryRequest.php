<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'en.name'=>'required',
            'type'=>'required',
        ];
        foreach(config('translatable.locales') as $locale) {
            $rules["{$locale}.name"]='required';
        }

        return $rules;
    }
}
