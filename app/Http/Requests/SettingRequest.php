<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'title.*' => 'nullable',
            'description' => 'array',
            'description.*' => 'nullable',
            'Keywords'=>'nullable',
            'phone'=>'nullable',
            'whatsapp'=>'nullable',
            'email'=>'nullable',
            'address'=>'nullable',
            'google_map'=>'nullable',
            'facebook_url'=>'nullable',
            'twitter_url'=>'nullable',
            'youtube_url'=>'nullable',
            'tiktok_url'=>'nullable',
            'session_price'=>'nullable',

            ];
        foreach(config('translatable.locales') as $locale) {
            $rules["{$locale}.title"]='required';

        }
           return $rules;
    }

}
