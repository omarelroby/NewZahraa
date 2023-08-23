<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EbookRequest extends FormRequest
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
            'summary' => 'array',
            'summary.*' => 'required',
            'image'=>'nullable',
            'sample_file'=>'nullable',
            'complete_file'=>'nullable',
            'type'=>'required',
            'amazon_url'=>'nullable',
            'writer'=>'nullable',
            'pages_number'=>'nullable',
            ];
        foreach(config('translatable.locales') as $locale) {
            $rules["{$locale}.title"]='required';
            $rules["{$locale}.summary"]='required';

        }
           return $rules;
    }

}
