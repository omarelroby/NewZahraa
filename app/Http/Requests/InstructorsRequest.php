<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstructorsRequest extends FormRequest
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
        return request()->isMethod('put') || request()->isMethod('patch') ? $this->onUpdate() : $this->onStore();
}
public function onStore()
{
    return [
        'name' => 'required',
        'email'=> 'required',
        'phone'=> 'required',
        'brief'=> 'required',
        'image'=> 'required',
        'category_id'=> 'required',
        'country_id'=> 'required',

    ];
}


public function onUpdate()
{
    return [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'brief' => 'required',
        'category_id' => 'required',
        'country_id' => 'required',
    ];
}

}
